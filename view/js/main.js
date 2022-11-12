window.onscroll = function() {
    myFunction()
};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
    } else {
        navbar.classList.remove("sticky");
    }
}
var upbutton = document.getElementById("goToUp");
window.onscroll = function() {
    seeButton()
};

function seeButton() {
    if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
        upbutton.style.display = "block";
    } else {
        upbutton.style.display = "none";
    }
}

function scrollToUp() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}