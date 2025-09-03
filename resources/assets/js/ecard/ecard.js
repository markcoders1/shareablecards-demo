document.addEventListener("turbo:load", loadEcardData);

function loadEcardData() {
    $("#e-vcard-id").select2();
    resetCardFrom()
}

listenChange("#e-vcard-id", function (e) {
    e.preventDefault();
    let vcardId = $("#e-vcard-id").val();
    if (!vcardId) {
        return;
    }
    $.ajax({
        url: route("get-vcard-data"),
        type: "GET",
        data: { vcardId: vcardId },
        success: function (result) {
            if (result.success) {
                $("#e-card-first-name").val(result.data.first_name);
                $("#e-card-last-name").val(result.data.last_name);
                $("#e-card-email").val(result.data.email);
                $("#e-card-occupation").val(result.data.occupation);
                $("#e-card-location").val(result.data.location);
                $("#prefix_code").val(result.data.region_code);
                $("#phoneNumber").val(result.data.phone);
                $("#e-card-website").val(result.data.website);
            }
        },
        error: function (result) {
            displayErrorMessage(result.responseJSON.message);
        },
    });
});
function resetCardFrom() {
    $('#virtualBackgroundSubmitBtn').on('click', function (event) {
        event.preventDefault(); // Prevent default form submission
        document.e_card_form.submit();
        // Reset the form after a short delay to ensure the submission is processed
        setTimeout(function () {
            document.e_card_form.reset();
            $('#e-vcard-id').val('').trigger('change');
        }, 1000);
    });
}


