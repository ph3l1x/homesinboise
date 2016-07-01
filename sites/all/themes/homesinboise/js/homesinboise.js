(function ($) {
    $(document).ready(function () {


        $(".cityAutocomplete").autocomplete({
            source: "/ajax/mls_city_autocomplete",
            minLength: 1,
            //select: function (event, ui) {
            //    var url = ui.item.id;
            //    if (url != '#') {
            //        location.href = '/blog/' + url;
            //    }
            //},

            html: true, // optional (jquery.ui.autocomplete.html.js required)

            // optional (if other layers overlap autocomplete list)
            open: function (event, ui) {
                $(".ui-autocomplete").css({
                    "z-index": "1000",
                    "list-style": "none",
                    "width": "234px"
                });
                //$(".ui-autocomplete > li > a").css ({
                //    "background": "none",
                //    "border": "none"
                //});
                //$(".ui-state-focus").css ({
                //    "background": "#356fa2"
                //});
            }
        });


//Listings TABS

$('.tabButton').each(function (index) {
    $(this).on("click", function () {
        $('.tabButton').removeClass('tabButtonActive');
        $(this).addClass('tabButtonActive');
        var currentClass = $(this).attr('class').split(' ')[0];
        if (currentClass == 'imageMapImages') {
            $('.mapImages').css("display", "block");
            $('.mapStreet').css("display", "none");
            $('.mapMap').css("display", "none");
            $('.mapSatellite').css("display", "none");
        }
        if (currentClass == 'imageMapStreet') {
            $('.mapImages').css("display", "none");
            $('.mapStreet').css("display", "block");
            $('.mapMap').css("display", "none");
            $('.mapSatellite').css("display", "none");
        }
        if (currentClass == 'imageMapMap') {
            $('.mapImages').css("display", "none");
            $('.mapStreet').css("display", "none");
            $('.mapMap').css("display", "block");
            $('.mapSatellite').css("display", "none");
        }
        if (currentClass == 'imageMapSatellite') {
            $('.mapImages').css("display", "none");
            $('.mapStreet').css("display", "none");
            $('.mapMap').css("display", "none");
            $('.mapSatellite').css("display", "block");
        }

    });
});


//INFO TABS
$('.tabButton1').each(function (index) {
    $(this).on("click", function () {
        $('.tabButton1').removeClass('tabButtonActive1');
        $(this).addClass('tabButtonActive1');
        var currentClass = $(this).attr('class').split(' ')[0];
        if (currentClass == 'tabInterior') {
            $('.tabInteriorInfo').css("display", "block");
            $('.tabExteriorInfo').css("display", "none");
            $('.tabMoreInfoInfo').css("display", "none");
            $('.tabTaxesInfo').css("display", "none");
            $('.tabUtilitiesInfo').css("display", "none");
            $('.tabSchoolInfo').css("display", "none");
        }
        if (currentClass == 'tabExterior') {
            $('.tabInteriorInfo').css("display", "none");
            $('.tabExteriorInfo').css("display", "block");
            $('.tabMoreInfoInfo').css("display", "none");
            $('.tabTaxesInfo').css("display", "none");
            $('.tabUtilitiesInfo').css("display", "none");
            $('.tabSchoolInfo').css("display", "none");
        }
        if (currentClass == 'tabMoreInfo') {
            $('.tabInteriorInfo').css("display", "none");
            $('.tabExteriorInfo').css("display", "none");
            $('.tabMoreInfoInfo').css("display", "block");
            $('.tabTaxesInfo').css("display", "none");
            $('.tabUtilitiesInfo').css("display", "none");
            $('.tabSchoolInfo').css("display", "none");
        }
        if (currentClass == 'tabTaxes') {
            $('.tabInteriorInfo').css("display", "none");
            $('.tabExteriorInfo').css("display", "none");
            $('.tabMoreInfoInfo').css("display", "none");
            $('.tabTaxesInfo').css("display", "block");
            $('.tabUtilitiesInfo').css("display", "none");
            $('.tabSchoolInfo').css("display", "none");
        }
        if (currentClass == 'tabUtilities') {
            $('.tabInteriorInfo').css("display", "none");
            $('.tabExteriorInfo').css("display", "none");
            $('.tabMoreInfoInfo').css("display", "none");
            $('.tabTaxesInfo').css("display", "none");
            $('.tabUtilitiesInfo').css("display", "block");
            $('.tabSchoolInfo').css("display", "none");
        }
        if (currentClass == 'tabSchool') {
            $('.tabInteriorInfo').css("display", "none");
            $('.tabExteriorInfo').css("display", "none");
            $('.tabMoreInfoInfo').css("display", "none");
            $('.tabTaxesInfo').css("display", "none");
            $('.tabUtilitiesInfo').css("display", "none");
            $('.tabSchoolInfo').css("display", "block");
        }
    });
});

// Remove Optional Default Value from More Information Block

$("#edit-submitted-phone-number").each(function () {
    // store default value
    var v = this.value;

    $(this).blur(function () {
        // if input is empty, reset value to default
        if (this.value.length == 0) this.value = v;
    }).focus(function () {
        // when input is focused, clear its contents
        this.value = "";
    });
});

var box = $('#back-top');

$(window).scroll(function () {
    var winPos = $(window).scrollTop();
    if (winPos <= 228) {
        box.addClass('visuallyhidden');
        box.one('transitionend', function (e) {
            box.addClass('hidden');
        });
    } else {
        if (box.hasClass('hidden')) {
            box.removeClass('hidden');
            setTimeout(function () {
                box.removeClass('visuallyhidden');
            }, 20);
        }
    }
})

$('#back-top a').click(function () {
    $('html, body').animate({
        scrollTop: 0,
    }, 1000);
    return false;
});

$('.header-container').each(function () {


    var autoSet = ($(this).css("line-height"));
    var $bgobj = $(this); // assigning the object

    $(window).scroll(function () {
        var yPos = ($(window).scrollTop() / $bgobj.data('speed') );
        // Put together our final background position
        //var coords = autoSet + ' ' + yPos + 'px';
        var coords = '0 ' + yPos + 'px';

        // Move the background
        $bgobj.css({backgroundPosition: coords});
    });
});
$('.p2').each(function () {
    var $bgobj = $(this); // assigning the object

    $(window).scroll(function () {
        var yPos = ($(window).scrollTop() / $bgobj.data('speed') - 650);

        // Put together our final background position
        var coords = '0 ' + yPos + 'px';

        // Move the background
        $bgobj.css({backgroundPosition: coords});
    });
});


// FILTERS JQUERY //

var bedSelector = $('.bed-container');
bedSelector.mouseenter(function () {
    $('.bed.off').addClass('remove');
    $('.bed.on').removeClass('remove');
    $(this).find('ul.isotope-filters').removeClass('remove');
})
bedSelector.mouseleave(function () {
    $('.bed.off').removeClass('remove');
    $('.bed.on').addClass('remove');
    $(this).find('ul.isotope-filters').addClass('remove');
})

var bathSelector = $('.bath-container');
bathSelector.mouseenter(function () {
    $('.bath.off').addClass('remove');
    $('.bath.on').removeClass('remove');
    $(this).find('ul.isotope-filters').removeClass('remove');
})
bathSelector.mouseleave(function () {
    $('.bath.off').removeClass('remove');
    $('.bath.on').addClass('remove');
    $(this).find('ul.isotope-filters').addClass('remove');
})

// Animate buttons, shrink and fade shadow

$("#nav-shadow li").hover(function () {
    var e = this;
    $(e).find("a").stop().animate({marginTop: "-14px"}, 250, function () {
        $(e).find("a").animate({marginTop: "-10px"}, 250);
    });
    $(e).find("img.shadow").stop().animate({width: "80%", height: "20px", marginLeft: "0px", opacity: 0.25}, 250);
}, function () {
    var e = this;
    $(e).find("a").stop().animate({marginTop: "4px"}, 250, function () {
        $(e).find("a").animate({marginTop: "0px"}, 250);
    });
    $(e).find("img.shadow").stop().animate({width: "100%", height: "27px", marginLeft: "0px", opacity: 1}, 250);
});


})
;
})
(jQuery);





