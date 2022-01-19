$(document).ready(function() {

        terchraider_anim_tabs();
        techraider_anim_bottom_squares();
    })
    //      * slick buttons
    // ===================================================


$('.btn_instruments').filter('.left').click(function() {
    techraider_slider_btn($(this), 'Prev');
    techraider_counter();
    techraider_anim_Dots_leftTop('up');
});


$('.btn_instruments').filter('.right').click(function() {
    techraider_slider_btn($(this), 'Next');
    techraider_counter();
    techraider_anim_Dots_leftTop('down');
});

function techraider_slider_btn(btnOBJ, direction) {
    $('.techraider__inner__instruments__slider').find('.slider').filter('.active').slick('slick' + direction);
    btnOBJ.find('.btn_instruments_background').css('fill', '#EA0F0F');
    btnOBJ.find('.btn_instruments_arrows').css('fill', '#ffffff');
    setTimeout(() => {
        btnOBJ.find('.btn_instruments_background').css('fill', '');
        btnOBJ.find('.btn_instruments_arrows').css('fill', '');
    }, 200);
}

//      * item counter
// ===================================================
function techraider_counter() {
    $('.techraider__inner__counter').find('span').empty();

    if ((($('.techraider__inner__instruments__slider').find('.slider').filter('.active').find('.slick-track').children('div').length - 1) / 2) != 0) {


        $('.techraider__inner__counter').find('span').append(
            $('.techraider__inner__instruments__slider').find('.slider').filter('.active').find('.slick-slide').filter('.slick-active').index() + ' - ' +
            ($('.techraider__inner__instruments__slider').find('.slider').filter('.active').find('.slick-track').children('div').length - 1) / 2);
    } else {
        $('.techraider__inner__counter').find('span').append('1 - 1');
    }
}



//      * anim decor top left
// ===================================================
function techraider_anim_Dots_leftTop(direction) {
    var techraider_anim_time = 100; //0.2s
    if (direction == 'down') {
        $('#techraider_topleft_arrow_3').css('transform', 'translate(-34%, 24%)');
        setTimeout(() => {
            $('#techraider_topleft_circle_2').css('transform', 'translate(-33%, 26%)');
            setTimeout(() => {
                $('#techraider_topleft_arrow_2').css('transform', 'translate(-31%, 25%)');
                $('#techraider_topleft_arrow_3').css('transform', 'translate(-66%, 50%)');

                // ------------------ anim middle --------------------------
                setTimeout(() => {
                    $('#techraider_topleft_arrow_2').css('transform', 'translate(0%, 0%)');
                    $('#techraider_topleft_arrow_3').css('transform', 'translate(-34%, 24%)');
                    setTimeout(() => {
                        $('#techraider_topleft_circle_2').css('transform', 'translate(0%, 0%)');
                        setTimeout(() => {
                            $('#techraider_topleft_arrow_3').css('transform', 'translate(0%,0%)');
                        }, techraider_anim_time);
                    }, techraider_anim_time);
                }, techraider_anim_time);
            }, techraider_anim_time);
        }, techraider_anim_time);
    } else if (direction == 'up') {
        $('#techraider_topleft_arrow_1').css('transform', 'translate(31%, -31%)');
        setTimeout(() => {
            $('#techraider_topleft_circle_1').css('transform', 'translate(32%, -32%)');
            setTimeout(() => {
                $('#techraider_topleft_arrow_2').css('transform', 'translate(32%, -32%)');
                $('#techraider_topleft_arrow_1').css('transform', 'translate(64%, -64%)');

                // ------------------ anim middle --------------------------
                setTimeout(() => {
                    $('#techraider_topleft_arrow_2').css('transform', 'translate(0%, 0%)');
                    $('#techraider_topleft_arrow_1').css('transform', 'translate(31%, -31%)');
                    setTimeout(() => {
                        $('#techraider_topleft_circle_1').css('transform', 'translate(0%, 0%)');
                        setTimeout(() => {
                            $('#techraider_topleft_arrow_1').css('transform', 'translate(0%,0%)');
                        }, techraider_anim_time);
                    }, techraider_anim_time);
                }, techraider_anim_time);
            }, techraider_anim_time);
        }, techraider_anim_time);
    }
}


function terchraider_anim_tabs() {
    $('.techraider__tab_btn').each(function(index) {
        $(this).click(function() {
            $('.techraider__inner__description').children('div').each(function() {
                $(this).removeClass('active');
            });
            $('.techraider__inner__instruments__slider').children('div').each(function() {
                $(this).removeClass('active');
            });
            $('#techraider_tab_info' + (index + 1)).addClass('active');
            $('#techraider_tab_images' + (index + 1)).addClass('active');
            $('.techraider__tab_btn').each(function() {
                $(this).removeClass('active');
            });

            $(this).addClass('active');
            startslick(index + 1);

            techraider_counter();
        });
    });
}

function techraider_anim_bottom_squares() {
    var techraider_anim_time = 200;
    $('#square_path2').css('transform', 'translateX(0)');
    $('#square_path3').css('transform', 'translateX(-9.3%)');
    $('#square_path4').css('transform', 'translateX(-18.6%)');
    $('#square_path5').css('transform', 'translateX(-28.6%)');
    $('#square_path6').css('transform', 'translateX(-37.5%)');
    $('#square_path7').css('transform', 'translateX(-47%)');
    setTimeout(() => {
        $('#square_path3').css('transform', 'translateX(0)');
        $('#square_path4').css('transform', 'translateX(-9.3%)');
        $('#square_path5').css('transform', 'translateX(-18.6%)');
        $('#square_path6').css('transform', 'translateX(-28%)');
        $('#square_path7').css('transform', 'translateX(-37%)');
        setTimeout(() => {
            $('#square_path4').css('transform', 'translateX(0)');
            $('#square_path5').css('transform', 'translateX(-9.3%)');
            $('#square_path6').css('transform', 'translateX(-18.6%)');
            $('#square_path7').css('transform', 'translateX(-28%)');
            setTimeout(() => {
                $('#square_path5').css('transform', 'translateX(0)');
                $('#square_path6').css('transform', 'translateX(-9.3%)');
                $('#square_path7').css('transform', 'translateX(-18.6%)');
                setTimeout(() => {
                    $('#square_path6').css('transform', 'translateX(0)');
                    $('#square_path7').css('transform', 'translateX(-9.3%)');
                    setTimeout(() => {
                        $('#square_path7').css('transform', 'translateX(0)');
                    }, techraider_anim_time);
                }, techraider_anim_time);
            }, techraider_anim_time);
        }, techraider_anim_time);
    }, techraider_anim_time);

}