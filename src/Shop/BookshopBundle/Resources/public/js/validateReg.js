$(document).ready(function() {
    jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z]+$/i.test(value);
    }, "Letters only please");
    jQuery.validator.addMethod("alphanum", function(value, element) {
        return this.optional(element) || /^[a-z0-9]+$/i.test(value);
    }, "Letters only please");
    $('#form-validate').validate(
            {
                rules: {
                    firstname: {
                        required: true,
                        minlength: 2,
                        lettersonly: true
                    },
                    lastname: {
                        required: true,
                        minlength: 2,
                        lettersonly: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    username: {
                        required: true,
                        alphanum: true
                    },
                    password: {
                        minlength: 6,
                        required: true,
                    },
                    confirmation: {
                        minlength: 6,
                        equalTo: '#password'
                    },
                },
                messages: {
                    firstname: {
                        minlength: "Firstname must be longer than 2 characters",
                        required: "Firstname is required.",
                        lettersonly: "Firstname must be alphabetical."
                    },
                    lastname: {
                        minlength: "Lastname must be longer than 2 characters",
                        required: "Lastname is required.",
                        lettersonly: "Lastname must be alphabetical."
                    },
                    email: {
                        required: "Email is required.",
                        email: "Not valid email format"
                    },
                    username: {
                        required: "Username is required.",
                        alphanum: "No special characters acepted."
                    },
                    password: {
                        required: "Password is required.",
                        minlength: "Password must be at least 6 characters"
                    },
                    confirmation: {
                        minlength: "Password confirmation must be at least 6 characters",
                        equalTo: "Passwords do not match"
                    },
                },
                highlight: function(element) {
                    $(element).addClass("validation-failed");
                },
                unhighlight: function(element) {
                    $(element).removeClass("validation-failed");
                }
            });
});