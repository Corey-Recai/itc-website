M.AutoInit();
// Ajax load main content into page
$(document).ready(function () {
    $("#home").load("home.html");
    $("#services").load("services.html");
});

function clickHome() {
    document.getElementById("home-link").click();
}

function clickServices() {
    document.getElementById("services-link").click();
}

function clickProjects() {
    document.getElementById("projects-link").click();
}

function clickCareers() {
    document.getElementById("careers-link").click();
}

function clickContact() {
    document.getElementById("contact-link").click();
}

// Load Weather Widget
! function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (!d.getElementById(id)) {
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://weatherwidget.io/js/widget.min.js';
        fjs.parentNode.insertBefore(js, fjs);
    }
}(document, 'script', 'weatherwidget-io-js');