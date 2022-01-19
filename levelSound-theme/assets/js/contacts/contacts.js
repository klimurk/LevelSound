$(document).ready(function() {
    let link = window.location.href.split('/');
    let parametr = link[link.length - 1];

    if (parametr.includes("?")) {
        $('.withoutCalender').css('display', 'none');
        $('.withCalender').css('display', 'block');
        parametr = parametr.substring(1);
        if (!parametr.includes('calendar')) {
            let select = $('.contacts_form_select').find('span').find('select');
            select.val(parametr);
        }
    } else {
        $('.withoutCalender').css('display', 'block');
        $('.withCalender').css('display', 'none');
    }
});
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

$(document).ready(function() {
    setTimeout(() => {
        $('.xdsoft_datetimepicker ').insertAfter($('.form__nums'));

        $('#calendar_text').insertAfter($('.xdsoft_timepicker '));
    })
});
$('.wpcf7-form-control').filter('.wpcf7-text').filter('.wpcf7-validates-as-required').filter('.walcf7-datetimepicker').click(function() {
    // console.log('change');
    setTimeout(() => {
        $('.xdsoft_datetimepicker ').css('display', 'flex');
        $('.xdsoft_datetimepicker ').css('flex-direction', 'column');
        $('.xdsoft_datetimepicker ').css('justify-content', 'flex-start');
        let i = 2;
        // console.log(document.getElementsByClassName('xdsoft_time').length);
        // for( let )


    }, 100);
});

var list = document.getElementsByClassName("xdsoft_time_variant")[0];
list.removeChild(list.childNodes[1]);
// list.removeChild(list.childNodes[2]);
// list.removeChild(list.childNodes[3]);
// list.removeChild(list.childNodes[4]);
// list.removeChild(list.childNodes[5]);
// list.removeChild(list.childNodes[6]);
// list.removeChild(list.childNodes[7]);