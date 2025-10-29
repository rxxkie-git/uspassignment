$(document).ready(function() {
    $('#registration-form').on('submit', function(event) {
        event.preventDefault();

        // Simple client-side validation
        var name = $('#full-name').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var dob = $('#dob').val();
        var gender = $('#gender').val();

        if (!name || !email || !phone || !dob || !gender) {
            alert('All fields are required!');
            return;
        }

        // Sending form data via AJAX
        $.ajax({
            url: $(this).attr('action'), // Points to process.php
            type: 'POST',
            data: {
                full_name: name,
                email: email,
                phone: phone,
                dob: dob,
                gender: gender
            },
            success: function(response) {
                // Display the server response (submitted data)
                $('#response').show();
                $('#submitted-data').html(response);
            },
            error: function() {
                alert('There was an error with your submission. Please try again.');
            }
        });
    });
});
