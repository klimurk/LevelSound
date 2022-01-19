//                *BENEFITS
//*===================================================================================*

//          *benefits carousel
// =================================


$(document).ready(function() {

    var benefits_sync1 = $("#benefits_sync1");
    var benefits_sync2 = $("#benefits_sync2");
    var syncedSecondary = true;

    benefits_sync1.owlCarousel({
        items: 1,
        smartSpeed: 1000,
        slideSpeed: 2000,
        nav: false,
        margin: 10,

        loop: true,
        slideBy: 1,

    }).on('changed.owl.carousel', syncPosition);

    benefits_sync2
        .on('initialized.owl.carousel', function() {
            benefits_sync2.find(".owl-item").eq(0).addClass("current");
        })
        .owlCarousel({
            items: 1,
            nav: true,
            smartSpeed: 1000,
            slideSpeed: 2000,
            slideBy: 1,

            navText: ["<svg class='sym__control left' style='transform: rotateZ(180deg);'><use xlink:href=#nav_arrow></use> </svg>", "<svg class='sym__control right'><use xlink:href=#nav_arrow></use> </svg>"],

            navContainer: '.benefits__owl__nav',
        }).on('changed.owl.carousel', syncPosition2);

    function syncPosition(el) {
        var count = el.item.count - 1;
        var current = Math.round(el.item.index - (el.item.count / 2) - .5);

        if (current < 0) {
            current = count;
        }
        if (current > count)  {
            current = 0;
        }
        benefits_sync2
            .find(".owl-item")
            .removeClass("current")
            .eq(current)
            .addClass("current");

        var onscreen = benefits_sync2.find('.owl-item.active').length - 1;
        var start = benefits_sync2.find('.owl-item.active').first().index();
        var end = benefits_sync2.find('.owl-item.active').last().index();

        if (current > end) {
            benefits_sync2.data('owl.carousel').to(current, 100, true);
        }
        if (current < start) {
            benefits_sync2.data('owl.carousel').to(current - onscreen, 100, true);
        }
    }





    function syncPosition2(el) {
        if (syncedSecondary) {
            var number = el.item.index;
            benefits_sync1.data('owl.carousel').to(number, 1000, true);
        }
    }

    benefits_sync2.on("click", ".owl-item", function(e) {
        e.preventDefault();
        var number = $(this).index();
        benefits_sync1.data('owl.carousel').to(number, 300, true);
    });
});

//                                      *PEOPLE
// //*===================================================================================*

// * SLick
var parametersCategry = {
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    draggable: false,
    swipe: false,
    arrows: false,
    infinite: true,
    speed: 200,
};
var parametersSync = {
    slidesToShow: 2,
    slidesToScroll: 1,
    vertical: false,
    draggable: false,
    fade: false,
    arrows: false,
    infinite: true,
    speed: 200,
};
parametersBigImages = {
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    draggable: false,
    swipe: false,
    arrows: false,
    infinite: true,
    speed: 200,
}

$(document).ready(function() {
    startslick();
});

function startslick(num) {

    $('.trm-categry-slider')
        .on('init', function(event, slick) {
            $('.trm-categry-slider .slick-slide.slick-current').addClass('is-active');
        })
        .slick(parametersCategry);

    $('.trm-bigimage-slider')
        .on('init', function(event, slick) {
            $('.trm-bigimage-slider .slick-slide.slick-current').addClass('is-active');
        })
        .slick(parametersBigImages);


    $('.trm-sync-slider')
        .slick(parametersSync);
}

// *slider buttons
$('.btn_people').filter('.left').click(function() {
    people_slider_btn($(this), 'Prev');
});
$('.btn_people').filter('.right').click(function() {
    people_slider_btn($(this), 'Next');
});


function people_slider_btn(btnOBJ, direction) {


    // * move to new active slide -->
    $('.trm-sync-slider').slick('slick' + direction);
    $('.trm-categry-slider').slick('slick' + direction);
    $('.trm-bigimage-slider').slick('slick' + direction);

}



// slides.forEach(function(){



//                *CLIENTS
//*===================================================================================*





// $(document).ready(function() {

//     $('.contactform__btn').click(function() {
//         if ($('.wpcf7-response-output').html != '') {
//             $()
//             $('.wpcf7-response-output').empty();
//             $('.wpcf7-response-output').apprend('<svg class="contactform__response_decor" viewBox="0 0 630 695" ><path d="M330 683.62H504.135L617.272 600.277V382" stroke="white" stroke-width="2" stroke-miterlimit="10"/><path d="M607.709 693.58C611.736 693.58 615 684.067 615 672.332C615 660.598 611.736 651.085 607.709 651.085C603.682 651.085 600.417 660.598 600.417 672.332C600.417 684.067 603.682 693.58 607.709 693.58Z" stroke="white" stroke-width="2" stroke-miterlimit="10"/><path d="M607.71 679.625C619.445 679.625 628.957 676.36 628.957 672.333C628.957 668.306 619.445 665.042 607.71 665.042C595.975 665.042 586.462 668.306 586.462 672.333C586.462 676.36 595.975 679.625 607.71 679.625Z" stroke="white" stroke-width="2" stroke-miterlimit="10"/><path d="M622.479 687.863C625.327 685.016 620.909 675.981 612.611 667.683C604.314 659.386 595.279 654.968 592.431 657.815C589.584 660.663 594.002 669.697 602.299 677.995C610.597 686.293 619.632 690.711 622.479 687.863Z" stroke="white" stroke-width="2" stroke-miterlimit="10"/><path d="M612.611 677.994C620.909 669.697 625.327 660.662 622.479 657.814C619.632 654.967 610.597 659.385 602.299 667.683C594.002 675.98 589.584 685.015 592.431 687.862C595.279 690.71 604.314 686.292 612.611 677.994Z" stroke="white" stroke-width="2" stroke-miterlimit="10"/><path d="M1 161V64H217" stroke="white" stroke-width="2"/><path d="M18.3018 36.5311C8.7464 36.5311 1.00016 28.7848 1.00016 19.2294C1.00016 9.67398 8.7464 1.92773 18.3018 1.92773C27.8573 1.92773 35.6035 9.67398 35.6035 19.2294C35.6035 28.7848 27.8573 36.5311 18.3018 36.5311Z" stroke="white" stroke-width="2" stroke-miterlimit="10"/></svg> <div class="contactform__response"></div><div class="contactform__response_text"></div><button class="contactform__response_btn">OK</button>');

//             $('.contactform__response_btn').click(function() {

//             })
//         }
//     })
// })
['wpcf7mailsent'].forEach(function(e) {
    document.addEventListener(e, function(event) {
        cf7_response('cf7_smile_good');
    })
});
['wpcf7invalid', 'wpcf7spam', 'wpcf7mailfailed'].forEach(function(e) {
    document.addEventListener(e, function(event) {
        cf7_response('cf7_smile_bad');
    })
});


function cf7_response(smileLink) {
    response.classList.remove("hidden");
    response.classList.add("visible");

    response_text.innerHTML = '';
    setTimeout(() => {
        response_text.innerHTML = document.getElementsByClassName('wpcf7-response-output')[0].innerHTML;
    }, 500);
    response_img_id.setAttribute('xlink:href', '#' + smileLink);

}


var respons_btn_ok = response.getElementsByClassName('btn_ok');
var respons_btn_close = response.getElementsByClassName('btn_cross');

[respons_btn_ok, respons_btn_close].forEach(function() {
    document.addEventListener('click', function() {
        response.classList.remove("visible");
        response.classList.add("hidden");
    });
});


var slides;
var slidescount;


function slidesEvents(){

    for (let i = 0; i < slides.length; i++) {
        let tempSlide = slides[i];
        tempSlide.addEventListener('click', function(){
            var slideNum = $(this).data('slick-index')+1;
            $('.trm-sync-slider').slick('slickGoTo',  slideNum);
            $('.trm-categry-slider').slick('slickGoTo',  slideNum);
            $('.trm-bigimage-slider').slick('slickGoTo',  slideNum);
        })
    }
}
$(document).ready(function(){
    slides = $('.slider').filter('.trm-sync-slider').find('.slick-list').find('.slick-slide');
    slidescount = slides.length;
    slidesEvents();
})