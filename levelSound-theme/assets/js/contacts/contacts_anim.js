var root = document.querySelector(':root');



function contacts_anim() {
    // console.log('contacts');
    document.getElementById("form_topNum1").innerHTML = pad(Math.floor(Math.random() * 999999), 6);
    document.getElementById("form_btmNum1").innerHTML = pad(Math.floor(Math.random() * 9999), 4);
    // document.getElementById("form_topNum").innerHTML = pad(Math.floor(Math.random() * 999999), 6);


}

setInterval(contacts_anim, 500);