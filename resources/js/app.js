require('./bootstrap');

document.addEventListener("DOMContentLoaded", function () {
    setTimeout(function () {
        document.getElementById('preloader').style.visibility = 'hidden';
    }, 1000);

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
