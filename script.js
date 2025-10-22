console.log("script.js loaded");

$(document).ready(function() {
    $('#registrationForm').on('submit', function(event) {
        event.preventDefault();

        $.ajax({
            url: 'submit.php',
            method: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                // Redirect to a new page to display the response
                document.open();
                document.write(response);
                document.close();
            },
            error: function(xhr, status, error) {
                $('#display').html('<p style="color:red;">Submission error: ' + error + '</p>');
            }
        });
    });
});
