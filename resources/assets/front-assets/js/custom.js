// $(window).on("load", function () {
$(document).ready(function () {
    // "use strict";
    /*=========================================================================
        Preloader
    =========================================================================*/
    $("#preloader").delay(350).fadeOut("slow");

    /*=========================================================================
        Custom Scrollbar
    =========================================================================*/
    $(".header-inner").mCustomScrollbar();

    /*=========================================================================
     Isotope
     =========================================================================*/
    $(".portfolio-filter").on("click", "li", function () {
        var filterValue = $(this).attr("data-filter");
        $container.isotope({ filter: filterValue });
    });

    // change is-checked class on buttons
    $(".portfolio-filter").each(function (i, buttonGroup) {
        var $buttonGroup = $(buttonGroup);
        $buttonGroup.on("click", "li", function () {
            $buttonGroup.find(".current").removeClass("current");
            $(this).addClass("current");
        });
    });

    var $container = $(".portfolio-wrapper");
    $container.imagesLoaded(function () {
        $(".portfolio-wrapper").isotope({
            // options
            itemSelector: '[class*="col-"]',
            percentPosition: true,
            masonry: {
                // use element for option
                columnWidth: '[class*="col-"]',
            },
        });
    });

    /* ======= Mobile Filter ======= */

    // bind filter on select change
    $(".portfolio-filter-mobile").on("change", function () {
        // get filter value from option value
        var filterValue = this.value;
        // use filterFn if matches value
        filterValue = filterFns[filterValue] || filterValue;
        $container.isotope({ filter: filterValue });
    });

    var filterFns = {
        // show if number is greater than 50
        numberGreaterThan50: function () {
            var number = $(this).find(".number").text();
            return parseInt(number, 10) > 50;
        },
        // show if name ends with -ium
        ium: function () {
            var name = $(this).find(".name").text();
            return name.match(/ium$/);
        },
    };
});

$(function () {
    // "use strict";

    $(".menu-icon").on("click", function () {
        $("header.left").toggleClass("open");
        $(".mobile-header, main.content").toggleClass("push");
    });

    $("main.content, header.left button.close").on("click", function () {
        $("header.left").removeClass("open");
        $(".mobile-header, main.content").removeClass("push");
    });

    /*=========================================================================
     Counterup JS for facts
     =========================================================================*/
    $(".count").counterUp({
        delay: 10,
        time: 2000,
    });

    /*=========================================================================
     Progress bar animation with Waypoint JS
     =========================================================================*/
    if ($(".skill-item").length > 0) {
        var waypoint = new Waypoint({
            element: document.getElementsByClassName("skill-item"),
            handler: function (direction) {
                $(".progress-bar").each(function () {
                    var bar_value = $(this).attr("aria-valuenow") + "%";
                    $(this).animate({ width: bar_value }, { easing: "linear" });
                });

                this.destroy();
            },
            offset: "50%",
        });
    }

    /*=========================================================================
     One Page Scroll with jQuery
     =========================================================================*/
    $('a[data-scroll^="#"]:not([data-scroll="#"])').on(
        "click",
        function (event) {
            var $anchor = $(this);
            $("html, body")
                .stop()
                .animate(
                    {
                        scrollTop:
                            $($anchor.attr("data-scroll")).offset().top - 50,
                    },
                    800,
                    "easeInOutQuad"
                );
            event.preventDefault();
        }
    );

    /*=========================================================================
     Add (nav-link) class to main menu.
     =========================================================================*/
    $(".vertical-menu li a").addClass("nav-link");

    /*=========================================================================
     Bootstrap Scrollspy
     =========================================================================*/
    $("body").scrollspy({ target: ".scrollspy", offset: 50 });

    /*=========================================================================
     Background Image with Data Attribute
     =========================================================================*/
    var bg_img = document.getElementsByClassName("background");

    for (var i = 0; i < bg_img.length; i++) {
        var src = bg_img[i].getAttribute("data-image-src");
        bg_img[i].style.backgroundImage = "url('" + src + "')";
    }

    /*=========================================================================
     Spacer with Data Attribute
     =========================================================================*/
    var list = document.getElementsByClassName("spacer");

    for (var i = 0; i < list.length; i++) {
        var size = list[i].getAttribute("data-height");
        list[i].style.height = "" + size + "px";
    }

    /*=========================================================================
            Scroll to Top
    =========================================================================*/
    $(window).scroll(function () {
        if ($(this).scrollTop() >= 250) {
            // If page is scrolled more than 50px
            $("#return-to-top").fadeIn(200); // Fade in the arrow
        } else {
            $("#return-to-top").fadeOut(200); // Else fade out the arrow
        }
    });
    $("#return-to-top").on("click", function () {
        // When arrow is clicked
        $("body,html").animate(
            {
                scrollTop: 0, // Scroll to top of body
            },
            400
        );
    });
});
