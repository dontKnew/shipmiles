(function ($) {
    "use strict";
    $(window).on("load", function () {
        $(".preloader").fadeOut(5000);
        $(".preloader").remove();
    });
    var $bgSection = $(".bg-section");
    var $bgPattern = $(".bg-pattern");
    var $colBg = $(".col-bg");
    $bgSection.each(function () {
        var bgSrc = $(this).children("img").attr("src");
        var bgUrl = "url(" + bgSrc + ")";
        $(this).parent().css("backgroundImage", bgUrl);
        $(this).parent().addClass("bg-section");
        $(this).remove();
    });
    $bgPattern.each(function () {
        var bgSrc = $(this).children("img").attr("src");
        var bgUrl = "url(" + bgSrc + ")";
        $(this).parent().css("backgroundImage", bgUrl);
        $(this).parent().addClass("bg-pattern");
        $(this).remove();
    });
    $colBg.each(function () {
        var bgSrc = $(this).children("img").attr("src");
        var bgUrl = "url(" + bgSrc + ")";
        $(this).parent().css("backgroundImage", bgUrl);
        $(this).parent().addClass("col-bg");
        $(this).remove();
    });
    var $moduleIcon = $(".module-icon"),
        $moduleCancel = $(".module-cancel");
    $moduleIcon.on("click", function (e) {
        $(this).parent().siblings().removeClass("module-active");
        $(this).parent(".module").toggleClass("module-active");
        e.stopPropagation();
    });
    $moduleCancel.on("click", function (e) {
        $(".module").removeClass("module-active");
        e.stopPropagation();
        e.preventDefault();
        $(".wrapper").removeClass("sidearea-active");
    });
    $(".sidearea-icon").on("click", function () {
        if ($(this).parent().hasClass("module-active")) {
            $(".wrapper").addClass("sidearea-active");
            $(this).addClass("module-sidearea-close");
        } else {
            $(".wrapper").removeClass("sidearea-active");
            $(this).removeClass("module-sidearea-close");
        }
    });
    $(".module-cart .module-icon").click(function () {
        $(this).siblings(".cart-box").toggleClass("active");
    });
    $(document).click(function () {
        if ($(".cart-box").hasClass("active")) {
            $(".module-cart .module-icon").click();
        }
        if ($(".module-sidearea").hasClass("module-active")) {
            $(".module-sidearea .module-cancel").click();
            $(".wrapper").removeClass("sidearea-active");
        }
    });
    $(document).keyup(function (e) {
        if (e.keyCode == 27) {
            if ($(".cart-box").hasClass("active")) {
                $(".module-cart .module-icon").click();
            }
            if ($(".module-search").hasClass("module-active")) {
                $(".module-search .module-cancel").click();
            }
            if ($(".module-sidearea").hasClass("module-active")) {
                $(".module-sidearea .module-cancel").click();
                $(".wrapper").removeClass("sidearea-active");
            }
        }
    });
    $(".cart-box , .module-cart .module-icon , .module-search .form-search , .module-sidearea .module-sidearea-wrap").click(function (e) {
        e.stopPropagation();
    });
    var $dropToggle = $("[data-toggle='dropdown']");
    $dropToggle.on("click", function (event) {
        event.preventDefault();
        event.stopPropagation();
        $(this).parent().siblings().removeClass("show");
        $(this).parent().toggleClass("show");
    });
    $(".toggle-icon").click(function () {
        $(".popup-menu").addClass("active");
    });
    $(".popup-close i").click(function () {
        $(".popup-menu").removeClass("active");
    });
    $(document).keyup(function (e) {
        if (e.keyCode == 27) {
            if ($(".popup-menu").hasClass("active")) {
                $(".popup-close i").click();
            }
        }
    });
    $(window).scroll(function () {
        if ($(document).scrollTop() > 100) {
            $(".navbar-sticky").addClass("navbar-fixed");
        } else {
            $(".navbar-sticky").removeClass("navbar-fixed");
        }
    });
    $.fn.zyCounter = function (options) {
        var settings = $.extend({ duration: 40, easing: "swing" }, options);
        return this.each(function () {
            var $this = $(this);
            var startCounter = function () {
                var numbers = [];
                var length = $this.length;
                var number = $this.text();
                var isComma = /[,\-]/.test(number);
                var isFloat = /[,\-]/.test(number);
                var number = number.replace(/,/g, "");
                var divisions = settings.duration;
                var decimalPlaces = isFloat ? (number.split(".")[1] || []).length : 0;
                for (var rcn = divisions; rcn >= 1; rcn--) {
                    var newNum = parseInt((number / divisions) * rcn);
                    if (isFloat) {
                        newNum = parseFloat((number / divisions) * rcn).toFixed(decimalPlaces);
                    }
                    if (isComma) {
                        while (/(\d+)(\d{3})/.test(newNum.toString())) {
                            newNum = newNum.toString().replace(/(\d+)(\d{3})/, "$1" + "," + "$2");
                        }
                    }
                    numbers.unshift(newNum);
                }
                var counterUpDisplay = function () {
                    $this.text(numbers.shift());
                    setTimeout(counterUpDisplay, settings.duration);
                };
                setTimeout(counterUpDisplay, settings.duration);
            };
            $this.waypoint(startCounter, { offset: "100%", triggerOnce: true });
        });
    };
    $(".counting").zyCounter();
    $(document).ready(function () {
        if ($(".countdown").length > 0) {
            $(".countdown").each(function () {
                var $countDown = $(this),
                    countDate = $countDown.data("count-date"),
                    newDate = new Date(countDate);
                $countDown.countdown({ until: newDate, format: "MMMM Do , h:mm:ss a" });
            });
        }
    });
    $(".mailchimp").ajaxChimp({ url: "http://wplly.us5.list-manage.com/subscribe/post?u=91b69df995c1c90e1de2f6497&id=aa0f2ab5fa", callback: chimpCallback });
    function chimpCallback(resp) {
        if (resp.result === "success") {
            $(".subscribe-alert")
                .html('<div class="alert alert-success">' + resp.msg + "</div>")
                .fadeIn(1000);
        } else if (resp.result === "error") {
            $(".subscribe-alert")
                .html('<div class="alert alert-danger">' + resp.msg + "</div>")
                .fadeIn(1000);
        }
    }
    $(".subscribe-alert").on("click", function () {
        $(this).fadeOut();
    });
    $("#campaignmonitor").submit(function (e) {
        e.preventDefault();
        $.getJSON(this.action + "?callback=?", $(this).serialize(), function (data) {
            if (data.Status === 400) {
                alert("Error: " + data.Message);
            } else {
                alert("Success: " + data.Message);
            }
        });
    });
    var $carouselDirection = $("html").attr("dir");
    if ($carouselDirection == "rtl") {
        var $carouselrtl = true;
    } else {
        var $carouselrtl = false;
    }
    $(".carousel").each(function () {
        var $Carousel = $(this);
        $Carousel.owlCarousel({
            loop: $Carousel.data("loop"),
            autoplay: $Carousel.data("autoplay"),
            margin: $Carousel.data("space"),
            nav: $Carousel.data("nav"),
            dots: $Carousel.data("dots"),
            center: $Carousel.data("center"),
            dotsSpeed: $Carousel.data("speed"),
            animateOut: "fadeOut",
            responsive: { 0: { items: 1 }, 600: { items: $Carousel.data("slide-rs") }, 1000: { items: $Carousel.data("slide") } },
        });
    });
    $(".custom-carousel").each(function () {
        var $Carousel = $(this);
        $Carousel.owlCarousel({
            loop: $Carousel.data("loop"),
            autoplay: $Carousel.data("autoplay"),
            margin: $Carousel.data("space"),
            nav: $Carousel.data("nav"),
            dots: $Carousel.data("dots"),
            center: $Carousel.data("center"),
            dotsSpeed: $Carousel.data("speed"),
            dotsContainer: "#carousel-custom-dots",
            responsive: { 0: { items: 1 }, 600: { items: $Carousel.data("slide-rs") }, 1000: { items: $Carousel.data("slide") } },
        });
    });
    $(".custom-carousel").owlCarousel({ thumbs: true, thumbsPrerendered: true });
    $("#carousel-custom-dots .owl-dot").click(function () {
        $(this).siblings(".owl-dot").removeClass("active");
        $(this).addClass("active");
        $(".custom-carousel").trigger("to.owl.carousel", [$(this).index(), 300]);
    });
    $(".custom-carousel").on("changed.owl.carousel", function (event) {
        var items = event.item.count;
        var item = event.item.index;
        var owlDots = document.querySelectorAll("#carousel-custom-dots .owl-dot");
        if (owlDots.length > 0) {
            owlDots[item].click();
        }
    });
    var $imgPopup = $(".img-popup");
    $imgPopup.magnificPopup({ type: "image" });
    $(".img-gallery-item").magnificPopup({ type: "image", gallery: { enabled: true } });
    $(".popup-video,.popup-gmaps").magnificPopup({
        disableOn: 700,
        mainClass: "mfp-fade",
        removalDelay: 0,
        preloader: false,
        fixedContentPos: false,
        type: "iframe",
        iframe: {
            markup: '<div class="mfp-iframe-scaler">' + '<div class="mfp-close"></div>' + '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' + "</div>",
            patterns: { youtube: { index: "youtube.com/", id: "v=", src: "//www.youtube.com/embed/%id%?autoplay=1" } },
            srcAction: "iframe_src",
        },
    });
    var backTop = $("#back-to-top");
    if (backTop.length) {
        var scrollTrigger = 200,
            backToTop = function () {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    backTop.addClass("show");
                } else {
                    backTop.removeClass("show");
                }
            };
        backToTop();
        $(window).on("scroll", function () {
            backToTop();
        });
        backTop.on("click", function (e) {
            e.preventDefault();
            $("html,body").animate({ scrollTop: 0 }, 700);
        });
    }
    var $galleryFilter = $(".gallery-filter"),
        galleryLength = $galleryFilter.length,
        protfolioFinder = $galleryFilter.find("a"),
        $galleryAll = $("#gallery-all");
    protfolioFinder.on("click", function (e) {
        e.preventDefault();
        $galleryFilter.find("a.active-filter").removeClass("active-filter");
        $(this).addClass("active-filter");
    });
    if (galleryLength > 0) {
        $galleryAll.imagesLoaded().progress(function () {
            $galleryAll.isotope({ filter: "*", animationOptions: { duration: 750, itemSelector: ".gallery-item", easing: "linear", queue: false } });
        });
    }
    protfolioFinder.on("click", function (e) {
        e.preventDefault();
        var $selector = $(this).attr("data-filter");
        $galleryAll.imagesLoaded().progress(function () {
            $galleryAll.isotope({ filter: $selector, animationOptions: { duration: 750, itemSelector: ".gallery-item", easing: "linear", queue: false } });
            return false;
        });
    });
    var $workFilter = $(".cases-filter"),
        workLength = $workFilter.length,
        workFinder = $workFilter.find("a"),
        $workAll = $("#all-cases");
    workFinder.on("click", function (e) {
        e.preventDefault();
        $workFilter.find("a.active-filter").removeClass("active-filter");
        $(this).addClass("active-filter");
    });
    if (workLength > 0) {
        $workAll.imagesLoaded().progress(function () {
            $workAll.isotope({ filter: "*", animationOptions: { duration: 750, itemSelector: ".work-item", easing: "linear", queue: false } });
        });
    }
    workFinder.on("click", function (e) {
        e.preventDefault();
        var $selector = $(this).attr("data-filter");
        $workAll.imagesLoaded().progress(function () {
            $workAll.isotope({ filter: $selector, animationOptions: { duration: 750, itemSelector: ".work-item", easing: "linear", queue: false } });
            return false;
        });
    });
    var aScroll = $('a[data-scroll="scrollTo"]');
    aScroll.on("click", function (event) {
        var target = $($(this).attr("href"));
        if (target.length) {
            event.preventDefault();
            $("html, body").animate({ scrollTop: target.offset().top }, 1000);
            if ($(this).hasClass("menu-item")) {
                $(this).parent().addClass("active");
                $(this).parent().siblings().removeClass("active");
            }
        }
    });
    $(".progressbar").each(function () {
        $(this).waypoint(
            function () {
                var progressBar = $(".progress-bar"),
                    progressBarTitle = $(".progress-title .value");
                progressBar.each(function () {
                    $(this).css("width", $(this).attr("aria-valuenow") + "%");
                });
                progressBarTitle.each(function () {
                    $(this).css("opacity", 1);
                });
            },
            { triggerOnce: true, offset: "bottom-in-view" }
        );
    });
    // var contactForm = $(".contactForm"),
    //     contactResult = $(".contact-result");
    // contactForm.validate({
    //     debug: false,
    //     submitHandler: function (contactForm) {
    //         $(contactResult, contactForm).html("Please Wait...");
    //         $.ajax({
    //             type: "POST",
    //             url: "sendmail.php",
    //             data: $(contactForm).serialize(),
    //             timeout: 20000,
    //             success: function (msg) {
    //                 $(contactResult, contactForm).html('<div class="alert alert-success" role="alert"><strong>Thank you. We will contact you shortly.</strong></div>').delay(3000).fadeOut(2000);
    //                 gtag_form_conversion();
    //             },
    //             error: $(".thanks").show(),
    //         });
    //         return false;
    //     },
    // });
    $("#loadMore").on("click", function (e) {
        e.preventDefault();
        $(".content.d-none").slice(0, 3).removeClass("d-none");
        if ($(".content.d-none").length == 0) {
            $("#loadMore").addClass("d-none");
        }
    });
    $(".collapse").on("shown.bs.collapse", function () {
        $(this).parent(".card").addClass("active-acc");
    });
    $(".collapse").on("hidden.bs.collapse", function () {
        $(this).parent(".card").removeClass("active-acc");
    });
    // $("select").niceSelect();
    $(".contact-types .button").click(function () {
        if ($(".contact-card .contact-body").hasClass($(this).data("form"))) {
            return false;
        }
        $(this).siblings(".button").removeClass("active");
        $(this).addClass("active");
        $(".contact-card .contact-body").toggleClass("trackFormActive quoteFormActive");
    });
})(jQuery);
