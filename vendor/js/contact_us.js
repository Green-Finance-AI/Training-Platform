// Improved Contact Form Submission with SweetAlert2
$("#contact-form-data").on('submit', function (e) {
    e.preventDefault(); // Prevent default form submission

    $(".contact_btn i").removeClass('d-none'); // Show loading spinner

    // Form validation
    var proceed = true;
    var requiredFields = ['first_name', 'last_name', 'email', 'message'];

    requiredFields.forEach(function (fieldId) {
        if (!$('#' + fieldId).val()) {
            proceed = false;
        }
    });

    if (proceed) {
        $.ajax({
            type: 'POST',
            url: 'send_email.php',
            data: $(this).serialize(),
            dataType: 'html',
            success: function (response) {
                if (response.toLowerCase().includes("success")) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Message Sent!',
                        text: 'Thank you for reaching out. We will get back to you soon.',
                    });
                    // Reset the form
                    $('#contact-form-data')[0].reset();
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'There was a problem sending your message. Please try again.',
                    });
                }
                $(".contact_btn i").addClass('d-none'); // Hide loading spinner
            },
            error: function () {
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'Unable to send message. Please check your internet connection or try again later.',
                });
                $(".contact_btn i").addClass('d-none'); // Hide loading spinner
            }
        });
    } else {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please fill out all required fields before submitting.',
        });
        $(".contact_btn i").addClass('d-none'); // Hide loading spinner
    }
});
