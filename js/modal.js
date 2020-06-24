$(document).ready(function () {
    $('.modal').modal()
});



var options = {
    pdfOpenParams: {
        view: 'FitH'
    }
};

PDFObject.embed("/pdf/ITC Steam Certification and Case Study.pdf", "#modal-content", options);