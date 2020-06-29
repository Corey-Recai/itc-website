
$(document).ready(function () {
    $('#home-carousel-1').carousel({
        dist: 0,
        fullWidth: true,
        indicators: false,
        noWrap: false
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
        indicators: false,
        noWrap: false
    });

    autoplay()

    function autoplay() {
        $('#home-carousel-2').carousel('next');
        setTimeout(autoplay, 10000);
    }
});