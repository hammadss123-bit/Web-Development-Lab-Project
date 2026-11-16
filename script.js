document.addEventListener("DOMContentLoaded", function() {
    const panels = document.querySelectorAll(".panel, section");
    panels.forEach(panel => {
        panel.addEventListener("click", function() {
            this.style.borderColor = "#48929B";
        });
    });
});