
$(document).ready(function() {

    $('#newsletter-validate-detail').validate(
            {
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                },
                messages: {
                    email: {required: "This field is required",
                        email: "Invalid e-mail address",
                    },
                },
                highlight: function(element) {

                    $(element).addClass('validation-failed');
                },
                unhighlight: function(element) {
                    $(element).removeClass('validation-failed');

                }


            });
});