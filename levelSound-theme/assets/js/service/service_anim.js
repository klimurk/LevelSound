var root = document.querySelector(':root');

function pad(num, size) {
    var s = num + "";
    while (s.length < size) s = "0" + s;
    return s;
}

function serviceOpenClose(num) {
    if ($('#service_btn_' + num).find('.service__list__item__global_col_open_btn_text').filter('.open').css('display') == 'block') {
        $('#service_btn_' + num).find('.service__list__item__global_col_open_btn_text').filter('.open').css('display', 'none');
        $('#service_btn_' + num).find('.service__list__item__global_col_open_btn_text').filter('.close').css('display', 'block');

        $('#service_list_' + num).css('display', 'initial');
        $('#service_btn_' + num).find('svg').css({ transform: 'rotate(90deg)' });
    } else {

        $('#service_btn_' + num).find('.service__list__item__global_col_open_btn_text').filter('.open').css('display', 'block');
        $('#service_btn_' + num).find('.service__list__item__global_col_open_btn_text').filter('.close').css('display', 'none');
        $('#service_list_' + num).css('display', 'none');
        $('#service_btn_' + num).find('svg').css({ transform: 'rotate(0deg)' });
    }
}



// $('#service_btn_1').click(function() {
//     serviceOpenClose('1');
// })
$('.service__list__item__global_col_open_btn').each(function(index) {

    $(this).click(function() {
        serviceOpenClose(index + 1);
    })
})