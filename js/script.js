M.AutoInit();
// Ajax load main content into page
$(document).ready(function () {
    $("#home").load("home.html");
    $("#services").load("services.html");
    $("#projects").load("projects.html");
    $("#careers").load("careers.html");
    $("#contact").load("/php/contact.php");
});

function clickHome() {
    document.getElementById("home-link").click();
    document.getElementById("sidenav-close").click();
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

function clickServices() {
    document.getElementById("services-link").click();
    document.getElementById("sidenav-close").click();
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

function clickProjects() {
    document.getElementById("projects-link").click();
    document.getElementById("sidenav-close").click();
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

function clickCareers() {
    document.getElementById("careers-link").click();
    document.getElementById("sidenav-close").click();
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

function clickContact() {
    document.getElementById("contact-link").click();
    document.getElementById("sidenav-close").click();
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}