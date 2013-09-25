$(document).ready(function() {
    jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z]+$/i.test(value);
    }, "Letters only please");
    jQuery.validator.addMethod("alphanum", function(value, element) {
        return this.optional(element) || /^[a-z0-9]+$/i.test(value);
    }, "Letters only please");
    $('#co-billing-form').validate(
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
                    street1: {
                        required: true,
                        alphanum: true
                    },
                    city: {
                        required: true,
                        alphanum: true
                    }
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
                    street1: {
                        required: "Adress is required.",
                        alphanum: "No special characters acepted."
                    },
                    city: {
                        required: "City is required.",
                        alphanum: "No special characters acepted."
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