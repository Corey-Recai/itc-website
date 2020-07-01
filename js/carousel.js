$(document).ready(function () {
    $('#home-carousel-1').carousel({
        fullWidth: true,
        indicators: false
    });

    autoplay()

    function autoplay() {
        $('#home-carousel-1').carousel('next');
        setTimeout(autoplay, 10000);
    }
});

$(document).ready(function () {
    $('#home-carousel-2').carousel({
        fullWidth: true,
        indicators: false
    });

    autoplay()

    function autoplay() {
        $('#home-carousel-2').carousel('next');
        setTimeout(autoplay, 10000);
    }
});

$(document).ready(function () {
    $('#contact-carousel-1').carousel({
        fullWidth: true,
        indicators: false,
        numVisible: 6
    }).height(600);

    autoplay()

    function autoplay() {
        $('#contact-carousel-1').carousel('next');
        setTimeout(autoplay, 5000);
    }
});

$(document).ready(function () {
    $('#safety-carousel').carousel({
        fullWidth: true,
        indicators: false,
        numVisible: 6
    }).height(600).set(1);

    autoplay()

    function autoplay() {
        $('#safety-carousel').carousel('next');
        setTimeout(autoplay, 5000);
    }
});