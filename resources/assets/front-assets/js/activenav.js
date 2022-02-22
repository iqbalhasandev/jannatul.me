// $(window).on("load", function () {
$(document).ready(function () {
    const sections = $("section");
    // const navLi = $(".vertical-menu li a");
    window.onscroll = () => {
        var current = "";

        sections.each(function () {
            const sectionTop = this.offsetTop;
            if (pageYOffset >= sectionTop - 60) {
                current = this.getAttribute("id");
            }
        });

        $(".vertical-menu li a")
            .removeClass("active")
            .each(function () {
                if ($(this).attr("data-scroll") == "#" + current) {
                    $(this).addClass("active");
                }
            });
    };
});
