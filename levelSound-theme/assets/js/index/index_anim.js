// const animation = document.querySelector('.intro__anim');
var root = document.querySelector(':root');



function intro_anim() {

    document.getElementById("intro_lines_topNum").innerHTML = pad(Math.floor(Math.random() * 999999), 6);
    document.getElementById("intro_lines_btmNum").innerHTML = pad(Math.floor(Math.random() * 9999), 4);

    document.getElementById("animlines_topNum").innerHTML = pad(Math.floor(Math.random() * 999999), 6);
    document.getElementById("animlines_btmNum").innerHTML = pad(Math.floor(Math.random() * 9999), 4);
    document.getElementById("animlines_topNum1").innerHTML = pad(Math.floor(Math.random() * 999999), 6);
    document.getElementById("casseteSide_topNum").innerHTML = pad(Math.floor(Math.random() * 999999), 6);

}

setInterval(intro_anim, 500);


//      *vinyl
// ==============================================================

const clients = document.getElementById('clients');
const package = document.getElementById('package');
const vinyl = document.getElementById('vinyl');
document.addEventListener('scroll', check_scroll);

function check_scroll() {
    if (window.pageYOffset + window.innerHeight - clients.offsetTop > 0 && window.pageYOffset - (clients.offsetTop + clients.offsetHeight) < 0) {


        if (window.innerWidth > 1024) {

            let translate = -(((package.getBoundingClientRect().top - window.innerHeight) * 150) / package.offsetWidth);
            if (translate > 100) {
                translate = 100;
            }
            if (translate < 0) {
                translate = 0;
            }
            package.style.transform = 'translateX(' + translate + '%) ';


            let translateVinyl = -(((package.getBoundingClientRect().top - window.innerHeight) * 250) / package.offsetWidth);
            if (translateVinyl > 150) {
                translateVinyl = 150;
            }
            vinyl.style.left = (translateVinyl - 100) + '%';
            let degreess = 360 * translateVinyl / 150;
            vinyl.style.transform = ' rotate(' + degreess + 'deg)';
        } else {
            let translate = -(((package.getBoundingClientRect().top - window.innerHeight) * 100) / package.offsetHeight);
            if (translate > 100) {
                translate = 100;
            }
            package.style.transform = 'translateY(' + translate + '%) ';


            let translateVinyl = -(((package.getBoundingClientRect().top - window.innerHeight * 0.7) * 150) / package.offsetHeight);
            if (translateVinyl > 150) {
                translateVinyl = 150;
            }
            vinyl.style.top = (translateVinyl - 100) + '%';
        }

    }


}

//          *table arrows
// ==========================================

var animArrowTime = parseFloat($('#cassette_arrow_4').css('transition-duration')) * 1000;
setInterval(() => {
    $('#cassette_arrow_4').css({ transform: 'translateX(370%)' });

    setTimeout(() => {
        $('#cassette_arrow_4').css({ transform: 'translateX(240%)' });
        $('#cassette_arrow_3').css({ transform: 'translateX(240%)' });

        setTimeout(() => {
            $('#cassette_arrow_4').css({ transform: 'translateX(110%)' });
            $('#cassette_arrow_3').css({ transform: 'translateX(110%)' });
            $('#cassette_arrow_2').css({ transform: 'translateX(110%)' });

            setTimeout(() => {
                $('#cassette_arrow_4').css({ transform: 'translateX(240%)' });
                $('#cassette_arrow_3').css({ transform: 'translateX(240%)' });
                $('#cassette_arrow_2').css({ transform: 'translateX(240%)' });

                setTimeout(() => {
                    $('#cassette_arrow_4').css({ transform: 'translateX(370%)' });
                    $('#cassette_arrow_3').css({ transform: 'translateX(370%)' });

                    setTimeout(() => {
                        $('#cassette_arrow_4').css({ transform: 'translateX(500%)' });
                    }, animArrowTime);
                }, animArrowTime);
            }, animArrowTime);
        }, animArrowTime);
    }, animArrowTime);
}, 6 * animArrowTime);



// *    People text
// *========================================================

var expand = $('<i />', {
    class: 'expand fa fa-expand'
});

var collapse = $('<i />', {
    class: 'collapse fa fa-compress'
});

$(function() {
    $('.write-box').append(expand);
    $('.write-box').prepend(collapse);

    $('.expand, .collapse').click(function() {
        $('.write-box').toggleClass('expanded');
    });
});