$(document).ready(function () {
    $('#modal1').modal({
        endingTop: '5%',
    });
    $('#modal2').modal({
        endingTop: '10%',
    });
    $('#modal-message').modal({
        endingTop: '10%',
    });
    $('#safety-modal').modal({
        endingTop: '10%',
    });
});
var options = {
    pdfOpenParams: {
        view: 'FitH'
    },
    fallbackLink: '<div class="container"><p>This browser does not support inline PDFs. Please download the PDF to view it: <a href="/pdf/ITC Steam Certification and Case Study.pdf">Download PDF</a></p></div>'
};

PDFObject.embed("/pdf/ITC Steam Certification and Case Study.pdf", "#pdf-modal", options);