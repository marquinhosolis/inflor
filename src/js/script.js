/**
 * forEach implementation for Objects/NodeLists/Arrays, automatic type loops and context options
 *
 * @private
 * @author Todd Motto
 * @link https://github.com/toddmotto/foreach
 * @param {Array|Object|NodeList} collection - Collection of items to iterate, could be an Array, Object or NodeList
 * @callback requestCallback      callback   - Callback function for each iteration.
 * @param {Array|Object|NodeList} scope=null - Object/NodeList/Array that forEach is iterating over, to use as the this value when executing callback.
 * @returns {}
 */
var forEach = function (t, o, r) {
    if ("[object Object]" === Object.prototype.toString.call(t))
        for (var c in t)
            Object.prototype.hasOwnProperty.call(t, c) && o.call(r, t[c], c, t);
    else for (var e = 0, l = t.length; l > e; e++) o.call(r, t[e], e, t);
};

var hamburgers = document.querySelectorAll(".hamburger");
if (hamburgers.length > 0) {
    forEach(hamburgers, function (hamburger) {
        hamburger.addEventListener(
            "click",
            function () {
                this.classList.toggle("is-active");
            },
            false
        );
    });
}

function menuMobileAnimation() {
    $(".hamburger").click(function () {
        $(".mobileNav").toggleClass("mobileNav--visible");
    });
}

function fixedMenuOnTop() {
    $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();
        if (scroll > 200) {
            $(".desktopMenu-fixed").addClass("desktopMenu-fixed--visible");
        } else {
            $(".desktopMenu-fixed").removeClass("desktopMenu-fixed--visible");
        }
    });
}

function flexsliderClientsHome() {
    if ($(window).width() < 768) {
        if ($(".clientsHomeLogos ul li").length >= 5) {
            $(".clientsHomeLogos").removeClass("clientsHomeLogosBlock");
            $(".clientsHomeLogos").addClass("flexslider carousel");
        }
    } else {
        if ($(".clientsHomeLogos ul li").length >= 8) {
            $(".clientsHomeLogos").removeClass("clientsHomeLogosBlock");
            $(".clientsHomeLogos").addClass("flexslider carousel");
        }
    }
    $(".clientsHome .flexslider").flexslider({
        animation: "slide",
        animationLoop: false,
        itemWidth: 90,
        itemMargin: 20,
        controlNav: false,
        move: 1,
    });
}

function solutionKeySlide() {
    if ($(window).width() < 768) {
        $(".keyBenefits .flexslider").flexslider({
            animation: "slide",
            controlNav: false,
        });
    } else {
        $(".keyBenefitsBoxes").removeClass("flexslider");
    }
}

function flexsliderAboutValuesBoxes() {
    // $(".aboutOurValuesTitleBoxes").flipster({
    //     style: "flat",
    //     spacing: 0.08,
    //     buttons: true,
    //     scrollwheel: false,
    //     loop: true,
    // });
}

function flexsliderTestimonials() {
    $(".testimonialsWrapper").flipster({
        style: "carousel",
        spacing: -0.2,
        buttons: true,
        scrollwheel: false,
        loop: true,
    });
}

function autoSubmitSelect() {
    $(".selectWrapper select").change(function () {
        $(".selectWrapper form").submit();
    });
}

function spanUnderline() {
    $(".underlineTitle").each(function () {
        var originalHTML = $(this).html();
        var newHTML = originalHTML.replace("{{", "<span>");
        var outputHTML = newHTML.replace("}}", "</span>");
        $(this).html(outputHTML);
    });
}

function adjustHeightValuesBoxes() {
    // var tallestBox = 0;
    $(".aboutOurValuesTitleBoxes li").each(function () {
        // if ($(this).outerHeight() > tallestBox) {
        //     tallestBox = $(this).outerHeight();
        // }
    });
    // $(".aboutOurValuesTitleBoxes .aboutOurValuesTitleBox").css(
    //     "height",
    //     tallestBox
    // );
}

function slideCertificationsCopy() {
    $(".certificationsBox").each(function () {
        $(this)
            .mouseenter(function () {
                $(this).find(".certificationsBoxText").slideDown("fast");
            })
            .mouseleave(function () {
                $(this).find(".certificationsBoxText").slideUp();
            });
    });
}

function servicesToggle() {
    $(".serviceUnique").each(function () {
        //var numP = $(this).find(".serviceUniqueText p").size();
        $(this).find(".serviceUniqueText").children().slice(3).hide();
        var numP = $(this).find(".serviceUniqueText").children().length;
        $(this).click(function (e) {
            e.preventDefault();
            $(this)
                .find(".serviceUniqueText")
                .children()
                .slice(3)
                .slideToggle();
            $(this).find(".serviceUniqueTextMoreLess").toggle();
        });
    });
}

function homeCaseSutdiesAnimation() {
    $(".caseStudyHome").each(function () {
        $(this)
            .mouseenter(function () {
                $(this).find(".caseStudyHomeCopy").slideDown();
            })
            .mouseleave(function () {
                $(this).find(".caseStudyHomeCopy").slideUp();
            });
    });
}

function solutionsFaqs() {
    $(".servicesFaq .faqQuestion").click(function () {
        $(this).closest(".faq").find(".faqAnswer").slideToggle();
        $(this).toggleClass("faqQuestion--visible");
        //alert("bfgnghm");
    });
}

function subMenuShow() {
    $(".desktopMenu .menu-item-has-children")
        .mouseenter(function () {
            $(this).find("ul").fadeIn();
        })
        .mouseleave(function () {
            $(this).find("ul").fadeOut();
        });

    $(".mobileNav .menu-item-has-children").click(function (e) {
        e.preventDefault();
        $(this).toggleClass("subMenu--visible");
        $(this).find("ul").slideToggle();
        $(this)
            .find("ul li a")
            .click(function () {
                window.location = $(this).attr("href");
            });
    });
}

$(document).ready(function () {
    spanUnderline();
    menuMobileAnimation();
    fixedMenuOnTop();
    flexsliderClientsHome();
    autoSubmitSelect();
    flexsliderAboutValuesBoxes();
    flexsliderTestimonials();
    adjustHeightValuesBoxes();
    slideCertificationsCopy();
    servicesToggle();
    solutionKeySlide();
    homeCaseSutdiesAnimation();
    solutionsFaqs();
    subMenuShow();
    new WOW().init();
});
