/**
 * Created by RIGALLITOH on 20/10/2017.
 */

$('document').ready(function()
{
    //customized methods
    jQuery.validator.addMethod("validEmail", function (value, element) {
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(value)) {
            return true;
        } else {
            return false;
        };
    }, "Enter a valid email address!");

    jQuery.validator.addMethod("phoneUS", function (phone_number, element) {
        phone_number = phone_number.replace(/\s+/g, "");
        return this.optional(element) || phone_number.length > 9 &&
            phone_number.match(/^\+[0-9]{12}$/);
    }, "Specify a valid phone number!");

    //SECTION A: Applicant's Registration Details.
    $("#register").validate({
        rules:
        {
            fname: {
                required: true,
                lettersonly: true,
                minlength: 3
            },
            mname:   {
                lettersonly: true
            },

            lname:   {
                required: true,
                lettersonly: true,
                minlength: 3
            },
            email: {
                required: true,
                email: true,
                validEmail:true
            },
            phone:     {
                required: true,
                phoneUS:true
            },
            address:   {
                required: true,
                //lettersonly: true,
                //minlength: 3
            },
            town:   {
                required: true,
                //lettersonly: true,
                minlength: 3
            },
            password: {
                required: true,
                minlength: 4,
                maxlength: 8
            },
            password2: {
                required: true,
                equalTo: '#password'
            },
            id_number:   {
                required: true,
                number:true,
                minlength:8,
                maxlength:10
            },
            photo:     {
                required: true
            },
            category:     {
                required: true
            },
            price:     {
                required: true
            },
            description:     {
                required: true
            }
        },
        messages:
        {    fname:{
            required: "Please enter your First Name",
            lettersonly: "Name should contains letters only!"
        },
            mname:{
                lettersonly: "Name should contains letters only!"
            },

            lname:{
                required: "Please enter your Last Name",
                lettersonly: "Name should contains letters only!"
            },
            address:{
                required: "Please enter your Address",
            },
            town:{
                required: "Please enter your Town",
            },
            id_number: {
                required:  "Please enter your ID number",
                number: "Numeric figures only!"
            },
            phone: {
                required:  "Please enter your Phone Number"
            },
            email: {
                required:  "Please enter your email address",
                email: "Enter a valid email address!"
            },
            password:{
                required: "Please enter your password"
            },
            password2:{
                required: "Confirm new password required!",
                equalTo:"Passwords should match!"
            },
            photo:{
                required: "Please select photo!"
            },
            category:{
                required: "Please select category!"
            },
            description:{
                required: "Please enter description !"
            },
            price:{
                required: "Please enter price!"
            }

        }
    });

    $("#reset_pass").validate({
        rules:{
            password: {
                required: true,
                minlength: 4,
                maxlength: 8
            },
            password2: {
                required: true,
                equalTo: '#password'
            }
        },
        messages:{
            password:{
                required: "Please enter new password"
            },
            password2:{
                required: "Confirm new password required!",
                equalTo:"Passwords should match!"
            }
        }

    });

});

