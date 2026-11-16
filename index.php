<?php
$conn = mysqli_connect("localhost", "root", "", "portfolio_db");
mysqli_set_charset($conn, "utf8mb4");

if (!$conn) {
    die("فشل الاتصال بقاعدة البيانات");
}

$sql = "SELECT * FROM portfolio_info";
$result = mysqli_query($conn, $sql);
$data = [];

while ($row = mysqli_fetch_assoc($result)) {
    $data[$row['section_key']] = [
        'title' => $row['title'],
        'content' => $row['content']
    ];
}
?>
<!DOCTYPE HTML>
<html lang="ar" dir="rtl">
    <head>
        <meta charset="utf-8" />
        <title><?php echo isset($data['home']) ? $data['home']['title'] : 'السيرة الذاتية'; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="custom.css" />
    </head>
    <body class="is-preload">

            <section id="header">
                <header class="major">
                    <h1><?php echo isset($data['home']) ? $data['home']['title'] : ''; ?></h1>
                    <p><?php echo isset($data['home']) ? $data['home']['content'] : ''; ?></p>
                </header>
                <div class="container">
                    <ul class="actions special">
                        <li><a href="#one" class="button primary scrolly">استعرض سيرتي الذاتية</a></li>
                    </ul>
                </div>
            </section>

            <section id="one" class="main special">
                <div class="container">
                    <span class="image fit primary"><img src="images/pic01.jpg" alt="" /></span>
                    <div class="content">
                        <header class="major">
                            <h2><?php echo isset($data['about']) ? $data['about']['title'] : 'نبذة تعريفية'; ?></h2>
                        </header>
                        <p><?php echo isset($data['about']) ? $data['about']['content'] : ''; ?></p>
                        <br>
                        <header class="major">
                            <h2><?php echo isset($data['education']) ? $data['education']['title'] : 'المؤهل العلمي'; ?></h2>
                        </header>
                        <p><?php echo isset($data['education']) ? $data['education']['content'] : ''; ?></p>
                    </div>
                    <a href="#two" class="goto-next scrolly">التالي</a>
                </div>
            </section>

            <section id="two" class="main special">
                <div class="container">
                    <span class="image fit primary"><img src="images/pic02.jpg" alt="" /></span>
                    <div class="content">
                        <header class="major">
                            <h2><?php echo isset($data['experience']) ? $data['experience']['title'] : 'الخبرات العملية'; ?></h2>
                        </header>
                        <p><?php echo isset($data['experience']) ? $data['experience']['content'] : ''; ?></p>
                        <br>
                        <header class="major">
                            <h2><?php echo isset($data['skills']) ? $data['skills']['title'] : 'المهارات'; ?></h2>
                        </header>
                        <p><?php echo isset($data['skills']) ? $data['skills']['content'] : ''; ?></p>
                    </div>
                    <a href="#three" class="goto-next scrolly">التالي</a>
                </div>
            </section>

            <section id="three" class="main special">
                <div class="container">
                    <span class="image fit primary"><img src="images/pic03.jpg" alt="" /></span>
                    <div class="content">
                        <header class="major">
                            <h2><?php echo isset($data['goal']) ? $data['goal']['title'] : 'الهدف المهني'; ?></h2>
                        </header>
                        <p><?php echo isset($data['goal']) ? $data['goal']['content'] : ''; ?></p>
                    </div>
                    <a href="#footer" class="goto-next scrolly">النهاية</a>
                </div>
            </section>

            <section id="footer">
                <footer>
                    <ul class="copyright">
                        <li>&copy; أيوب حماد صنت صنهات الخياري</li><li>هندسة البرمجيات - جامعة حائل</li>
                    </ul>
                </footer>
            </section>

            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrollex.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/browser.min.js"></script>
            <script src="assets/js/breakpoints.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>
            <script src="script.js"></script>

    </body>
</html>