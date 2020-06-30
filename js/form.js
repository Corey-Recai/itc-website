var scriptUrl = "https://script.google.com/macros/s/AKfycbwzt6IUCJLIHxL_ltAL_cM4U90GLBqtPgZ7W4k04MA4HurN_C_t/exec"

function submit() {
    // disabling submit button;
    $('input:button').prop('disabled', true);
    let payload = {};
    $('input:text').each(function (index) {
        let propname = $(this).attr('id')
        payload[propname] = $(this).val();
    });


    postPayload(payload)
        .then(function (result) {
            console.log("completed call");
            $('input:text').val('');
            $('input:button').prop('disabled', false);
            alert("File Uploaded Successfully");
        })
        .catch(function (error) {
            console.log("error occured");
            $('input:button').prop('disabled', false);
        })
        .catch(function (err) {
            console.error("some error occured");
            $('input:button').prop('disabled', false);
        });
}

function postPayload(payload) {
    return new Promise(function (resolve, reject) {
        $.ajax({
            type: "POST",
            url: scriptUrl,
            data: payload,
            success: function (result) {
                resolve(result);
            },
            error: function (error) {
                reject(error);
            }
        });
    });
}