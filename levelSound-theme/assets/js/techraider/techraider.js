var techraider_slick = [];
for (var i = 0; i < $('.techraider__inner__description').children('div').length; i++) {
    techraider_slick.push(false);
}
$(document).ready(function() {
    startslick(1);
    techraider_counter();

});

// * SLick
var parametersCategry = {
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    draggable: false,
    arrows: false,
    swipe: false,
    speed: 0
};
var parametersSync = {
    slidesToShow: 1,
    slidesToScroll: 1,
    // vertical: true,
    // verticalSwiping: true,
    draggable: false,
    fade: false,
    arrows: false,
};



function startslick(num) {
    if (techraider_slick[num - 1] == false) {
        $('.trm-categry-slider' + num)
            .on('init', function(event, slick) {
                $('.trm-categry-slider' + num + ' .slick-slide.slick-current').addClass('is-active');
                techraider_slick[num - 1] = true;
            })
            .slick(parametersCategry);



        $('.trm-sync-slider' + num)
            .on('afterChange', function(event, slick, currentSlide) {

                $('.trm-categry-slider' + num + ' .slick-slide.is-active').css({ opacity: 0 });

                $('.trm-categry-slider' + num + ' .slick-slide.is-active').find('.techraider__inner__description_title').css({ transform: 'translatex(-100%)', opacity: 0 });

                $('.trm-categry-slider' + num + ' .slick-slide.is-active').find('.techraider__inner__description_text').css({ opacity: 0, transform: 'translateY(100%)' });

                $('.trm-categry-slider' + num).slick('slickGoTo', currentSlide);
                var currrentNavSlideElem = '.trm-categry-slider' + num + ' .slick-slide[data-slick-index="' + currentSlide + '"]';
                $('.trm-categry-slider' + num + ' .slick-slide.is-active').removeClass('is-active');
                $(currrentNavSlideElem).addClass('is-active');

                $('.trm-categry-slider' + num + ' .slick-slide.is-active').css({ opacity: 1 });

                $('.trm-categry-slider' + num + ' .slick-slide.is-active').find('.techraider__inner__description_title').css({ transform: 'translatex(0%)', opacity: 1 });

                $('.trm-categry-slider' + num + ' .slick-slide.is-active').find('.techraider__inner__description_text').css({ opacity: 1, transform: 'translateY(0)' });
            })
            .slick(parametersSync);
        $('.trm-categry-slider' + num + ' .slick-slide.is-active').css({ opacity: 1 });
        $('.trm-categry-slider' + num + ' .slick-slide.is-active').find('.techraider__inner__description_title').css({ transform: 'translatex(0%)', opacity: 1 });
        $('.trm-categry-slider' + num + ' .slick-slide.is-active').find('.techraider__inner__description_text').css({ opacity: 1, transform: 'translateY(0)' });
    }
}
// function startslick(num) {
//     if (techraider_slick[num - 1] == false) {
//         $('.trm-categry-slider' + num)
//             .slick(parametersCategry)
//             .on('init', function(event, slick) {
//                 $('.trm-categry-slider' + num + ' .slick-slide.slick-current').addClass('is-active');
//                 techraider_slick[num - 1] = true;

//             })
//             .on('click', '.slick-slide', function(event) {
//                 event.preventDefault();
//                 var goToSingleSlide = $(this).data('slick-index');

//                 $('.trm-sync-slider' + num).slick('slickGoTo', goToSingleSlide);
//             });



//         $('.trm-sync-slider' + num)
//             .slick(parametersSync)
//             .on('afterChange', function(event, slick, currentSlide) {
//                 $('.trm-categry-slider' + num).slick('slickGoTo', currentSlide);
//                 var currrentNavSlideElem = '.trm-categry-slider1 .slick-slide[data-slick-index="' + currentSlide + '"]';
//                 $('.trm-categry-slider' + num + ' .slick-slide.is-active').removeClass('is-active');
//                 $(currrentNavSlideElem).addClass('is-active');
//             });
//     }
// }