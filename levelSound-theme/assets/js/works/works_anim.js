
var root = document.querySelector(':root');
function pad(num, size) {
    var s = num+"";
    while (s.length < size) s = "0" + s;
    return s;
}

function rectanim()
{
        document.getElementById("works_btmNum").innerHTML = pad(Math.floor(Math.random()*9999), 4);

}

setInterval(rectanim,500);
