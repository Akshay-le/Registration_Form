console.log("script.js loaded");

$(document).ready(function() {
    $('#registrationForm').on('submit', function(event) {
        event.preventDefault();

        // simple client-side validation for fields that won't be auto-enforced due to preventDefault
        if (!this.checkValidity()) {
            // show browser validation UI
            this.reportValidity();
            return;
        }

        // ensure a gender option is selected (the required attribute on radios can be inconsistent cross-browser)
        if (!$('input[name="gender"]:checked').val()) {
            $('#display').html('<p style="color:red;">Please select your gender.</p>');
            return;
        }

        // ensure confirmation checkbox checked
        if (!$('#confirm').is(':checked')) {
            $('#display').html('<p style="color:red;">Please confirm that the information is accurate.</p>');
            return;
        }

        // final user confirmation (optional double-check)
        if (!confirm('Are you sure you want to submit the form?')) {
            return;
        }

        // show a lightweight indicator
        $('#display').html('<p>Sending data…</p>');

        $.ajax({
            url: 'submit.php',
            method: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                $('#display').html(response).hide().fadeIn('slow');
                $('#registrationForm')[0].reset();
            },
            error: function(xhr, status, error) {
                $('#display').html('<p style="color:red;">Submission error: ' + error + '</p>');
            }
        });
    });
});
