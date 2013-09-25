
$(document).ready(function() {

    $('#login-form').validate(
            {
                rules: {
                    'login[username]': {
                        required: true,
                        email: true
                    },
                    'login[password]': {
                        required: true
                    }
                },
                messages: {
                    'login[username]': {required: "This field is required",
                        email: "Invalid e-mail address",
                    },
                    'login[password]': {required: "This field is required"},
                },
                highlight: function(element) {

                    $(element).addClass('validation-failed');
                },
                unhighlight: function(element) {
                    $(element).removeClass('validation-failed');

                }


            });
});
