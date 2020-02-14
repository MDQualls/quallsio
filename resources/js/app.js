require('./bootstrap');

document.addEventListener("DOMContentLoaded", function () {

    document.getElementById('preloader').style.visibility = 'hidden';

    var scroll = new SmoothScroll('a[href*="#"]', {
        speed: 700,
        speedAsDuration: true
    });

    $('#main-nav-bar').waypoint(function (direction) {
        if (direction === "down") {
            $('nav').addClass('sticky');
        } else {
            $('nav').removeClass('sticky');
        }
    }, {
        offset: '80px;'
    });
});
