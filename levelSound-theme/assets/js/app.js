var root = document.querySelector(':root');

function pad(num, size) {
    var s = num + "";
    while (s.length < size) s = "0" + s;
    return s;
}
var contacts_hasFormInputs;

if (window.innerWidth <= 1024 && ((document.location.pathname == "/") || (document.location.pathname == "/ua/holovna/") || (document.location.pathname == "/en/main/"))) {
    var vid = document.getElementById("video__intro");
    vid.onloadeddata = function() {
        setTimeout(() => {
            $('.preloader').css('opacity', '0');
            $('.body__inner').css('opacity', '1');
            $('.header').css('opacity', '1');
            setTimeout(() => {
                $('.preloader').css('display', 'none');
            }, 200);
        }, 1000);
    };
} else {
    $('.preloader').css('opacity', '0');
    $('.preloader').css('display', 'none');
    $('.body__inner').css('opacity', '1');
    $('.header').css('opacity', '1');
}
// $(document).ready(function() {
//     setTimeout(() => {
//         $('.preloader').css('opacity', '0');
//         $('.body__inner').css('opacity', '1');
//         $('.header').css('opacity', '1');
//         setTimeout(() => {

//             $('.preloader').css('display', 'none');
//         }, 200);
//     }, 2000);
// })

function header_anim() {

    root.style.setProperty('--anim-size1', Math.random() * 1.7);
    root.style.setProperty('--anim-size2', Math.random() * 1.7);
    root.style.setProperty('--anim-size3', Math.random() * 1.7);
    root.style.setProperty('--anim-size4', Math.random() * 1.7);
    root.style.setProperty('--anim-size5', Math.random() * 1.7);
    root.style.setProperty('--anim-size6', Math.random() * 1.7);
    root.style.setProperty('--anim-size7', Math.random() * 1.2);
    root.style.setProperty('--num-top', pad(Math.floor(Math.random() * 999999), 6));
    root.style.setProperty('--num-low', pad(Math.floor(Math.random() * 9999), 4));

    document.getElementById("menu_topNum").innerHTML = pad(Math.floor(Math.random() * 999999), 6);
    document.getElementById("menu_topNum1").innerHTML = pad(Math.floor(Math.random() * 999999), 6);
    document.getElementById("menu_btmNum1").innerHTML = pad(Math.floor(Math.random() * 9999), 4);

    $('.Topnum').each(function() {
        $(this).empty();
        $(this).append(pad(Math.floor(Math.random() * 999999), 6));
    });
    $('.Btmnum').each(function() {
        $(this).empty();
        $(this).append(pad(Math.floor(Math.random() * 9999), 4));
    });
    // root.style.setProperty('--anim-num1', pad(Math.floor(Math.random()*9999), 4));

}

setInterval(header_anim, 500);

var instanceImg;
var instanceVid;
// $(function() {

//     instanceImg = $('img').lazy({

//         effect: "fadeIn",
//         effectTime: 100,
//         threshold: 0,
//         enableThrottle: true,
//         throttle: 250,

//         combined: true,
//         // delay: 5000
//     });

//     instanceVid = $('video').lazy({

//         threshold: 0,
//         enableThrottle: true,
//         throttle: 250,

//         combined: true,
//         // delay: 5000

//     });

// });
//                *HEADER
// * ===================================================================================
//  header__anim_scroll

$(document).ready(function() {
    header__anim_scroll();
})
$(window).on("scroll resize", function() {
    header__anim_scroll();
})
var menuActive = false;


function header__anim_scroll() {
    if ((!menuActive)) {

        var scroll = $(window).scrollTop();

        //  *header size
        var headerHeight_i;
        var headerHeight;
        if (window.innerWidth > 1024 && ((document.location.pathname == "/") || (document.location.pathname == "/ua/holovna/") || (document.location.pathname == "/en/main/"))) {
            headerHeight_i = window.innerHeight * 0.5 - scroll;
            if (headerHeight_i < 0.15 * window.innerHeight) {
                headerHeight = 0.15 * window.innerHeight;
            } else {
                headerHeight = headerHeight_i;
            }
            $('.header__col').css("height", headerHeight);


            //  *opacity video
            var header_opacity = 1 - scroll / headerHeight;
            if (header_opacity < 0) {
                header_opacity = 0;
            }
            $(".header__col").find('video').css("opacity", header_opacity);


            //   *translate logo
            var header_logo_scale = 0.047 * headerHeight + 21.42;
            // if (header_logo_scale < 30 * window.innerHeight * 0.01) {
            //     header_logo_scale = 30 * window.innerHeight * 0.01;
            // }
            $(".header__icon").css({ width: header_logo_scale + 'vh' });
        } else {
            $('.header__col').css("height", window.innerHeight * 0.15);
            // var header_logo_scale = 0.032 * window.innerHeight * 0.15 + 11;
            $(".header__col").find('video').css("opacity", 0);
        }



    } else {
        $(".header").css("opacity", 1);
        // headerHeight = 0.15 * window.innerHeight;
        // $('.header__col').css("height", headerHeight);
    }
}

//    * LANGUAGE SWITCHER
// *====================================
var language_screen_on = false;
$('.language__switcher').click(function() {
    if (language_screen_on == false) {
        $('.btn__menu').css({ transition: 'transform 0.2s ease-in', transform: 'rotate(-90deg) translate(-40%, -300%)' });
        if ($(window).innerWidth > 1024) {
            $('.language__switcher').css('right', '50%)');
            $('.language_switcher_inner').css('right', '40%');
        } else {
            $('.language__switcher').css('right', '50%');
            $('.language_switcher_inner').css('right', '40%');
        }
        language_screen_on = true;
    } else {
        $('.btn__menu').css({ transition: 'transform 0.2s ease-in', transform: '' });
        $('.language__switcher').css('right', '');
        $('.language_switcher_inner').css('right', '');
        setTimeout(() => {
            $('.btn__menu').css({ transition: '' });
        }, 200);
        language_screen_on = false;
        // $('body').css('background-attachment ;', 'initial');
    }
})
$(window).on("resize", function() {
    // var menuHeight_i; // *menu__ resize on scroll
    // var headerHeight = $('header').height();
    // // if (window.innerWidth > 1024) {
    //     menuHeight_i = window.innerHeight - headerHeight;
    // // } else {
    //     // menuHeight_i = 0.8 * window.innerHeight;
    // // }
    // $('.menu').css('transition', 'all 0s');
    // $('.menu').css("height", menuHeight_i);
    // $('.menu').css("top", headerHeight);
    // $('.menu').css('transition', 'none');
})

//          * MENU CLICK
// *==============================================
$('.btn__menu').click(function() {
    //  *header size
    $('.header__col').css({ transition: 'all 1s ease-out' });

    $('.header__icon').css({ transition: 'all 1s ease-out' });
    $('.menu').css({ transition: 'all 1s ease-out' });
    if (parseFloat($('.menu').css("top")) < 0) {

        menuActive = true;
        var scroll = $(window).scrollTop();
        var headerHeight;

        if (window.innerWidth > 1024) {
            headerHeight = 0.15 * window.innerHeight;
        }
        else{
            headerHeight = 0.2 * window.innerHeight;
        }
        $('.header__col').css("height", headerHeight);

        var header_opacity = 0; //  *opacity video
        $(".header__col").find('video').css("opacity", header_opacity);

        //   *translate logo
        if (window.innerWidth > 1024) {
            var header_logo_scale = 0.032 * headerHeight + 11;
        }
        $(".header__icon").css({ width: '30vh' });



        var menuHeight_i; // *menu__ resize on scroll
        var menuHeight_vh;
        if (window.innerWidth > 1024) {
            menuHeight_i = 0.85 * window.innerHeight;
            // menuHeight_vh='85vh';
        } else {
            menuHeight_i = 0.8 * window.innerHeight;
            // menuHeight_vh='80vh';
        }
        // $('.menu').css("height", window.innerHeight);

        // var menuPadding = (menuHeight_i * 100 / window.innerHeight) / 7 - 4;
        // var menuPaddingRight = $('.menu_table').css('width');
        // if (window.innerWidth > 1024) {
        //     $('.menu').css({ padding: '' + menuPadding + '% ' + menuPaddingRight + ' ' + menuPadding + '% 5%' });
        // } else {
        //     $('.menu').css({ padding: '' + menuPadding + '% ' + '0% ' + menuPadding + '% 0%' });
        // }
        var menuBtnScale = 0.0043 * (menuHeight_i * 100 / window.innerHeight) + 0.79;
        // $('.menu__btn').find($("a")).css({ transform: 'scale(' + menuBtnScale + ')' });

        // $('.menu').css("bottom", 0);

        // headerHeight = $('header').height();
        $('.menu').css("top", 0);

    } else {
        menuActive = false;
        header__anim_scroll();
        // $('.menu').css("bottom", window.innerHeight);
        $('.menu').css("top", -window.innerHeight);
        setTimeout(() => {

            $('.header__col').css({ transition: 'all 0.1s' });
            $('.menu').css({ transition: 'all 0s' });
            $(".header__icon").css({ transition: 'width 0s ' });
        }, 1000);
    }
});

var pageTemplate;
var pageMain;
//          * MENU ACTIVE
// *==============================================
$(document).ready(function() {

    $(".menu__btn").find($('a')).each(function(index) {
        $(this).removeClass("active");
        if (~(" " + $(location).attr("href")).indexOf(($(this).attr('href')))) {
            $(this).addClass("active");
        }
        if (index == 0 && !pageMain) {
            $(this).removeClass("active");

        }
    });
})


//      * FOOTER
// *==================================================
$(document).ready(function() {

    if (window.innerWidth < 1024) {
        $('.footer__col').filter('.first').insertAfter($('.footer__col').filter('.second'));
    } else {
        $('.footer__col').filter('.first').insertBefore($('.footer__col').filter('.second'));
    }
});
$(window).resize(function() {
    if (window.innerWidth < 1024) {
        $('.footer__col').filter('.first').insertAfter($('.footer__col').filter('.second'));
    } else {
        $('.footer__col').filter('.first').insertBefore($('.footer__col').filter('.second'));
    }
});




// *  CONTACT FORM
// *=======================================================


//  *contactform
// =================================================
// var wpcf7Elm = document.querySelector( '.wpcf7' );
var response = document.getElementById('contactform_response');
var response_img_id = document.getElementById('response_smile_link');
var response_text = document.getElementsByClassName('contactform_response_text')[0];


//          *intro arrows
// ==========================================

var animArrowTime_Menu = parseFloat($('#menu_arrow_4').css('transition-duration')) * 1000;
setInterval(() => {
    $('#menu_arrow_1').css({ transform: 'translateY(240%)' });

    setTimeout(() => {
        $('#menu_arrow_1').css({ transform: 'translateY(370%)' });
        $('#menu_arrow_2').css({ transform: 'translateY(370%)' });

        setTimeout(() => {
            $('#menu_arrow_1').css({ transform: 'translateY(500%)' });
            $('#menu_arrow_2').css({ transform: 'translateY(500%)' });
            $('#menu_arrow_3').css({ transform: 'translateY(500%)' });

            setTimeout(() => {
                $('#menu_arrow_1').css({ transform: 'translateY(370%)' });
                $('#menu_arrow_2').css({ transform: 'translateY(370%)' });
                $('#menu_arrow_3').css({ transform: 'translateY(370%)' });

                setTimeout(() => {
                    $('#menu_arrow_1').css({ transform: 'translateY(240%)' });
                    $('#menu_arrow_2').css({ transform: 'translateY(240%)' });

                    setTimeout(() => {
                        $('#menu_arrow_1').css({ transform: 'translateY(110%)' });
                    }, animArrowTime_Menu);
                }, animArrowTime_Menu);
            }, animArrowTime_Menu);
        }, animArrowTime_Menu);
    }, animArrowTime_Menu);
}, 6 * animArrowTime_Menu);