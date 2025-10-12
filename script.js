console.log("script.js loaded");

$(document).ready(function() {
    $('#registrationForm').on('submit', function(event) {
        event.preventDefault();
        alert('Form submit intercepted, sending data...');

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
