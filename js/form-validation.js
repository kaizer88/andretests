// Wait for the DOM to be ready

$(function() {
	
jQuery.validator.addMethod("lettersonly", function(value, element) {
return this.optional(element) || /^[a-z\s]+$/i.test(value);
}, "Only alphabetical characters");


jQuery.validator.addMethod("validDate",function(value, element) {
    return value.match(/^(0?[1-9]|[12][0-9]|3[01])[\/\-]([0][1-9]|1[012])[\/\-]\d{4}$/);
},
"Please enter a valid date in the format DD-MM-YYYY");

  // Initialize form validation on the form.
  $("form[name='addUser']").validate({
    // Specify validation rules
    rules: {
		name: {
			required: true,
			lettersonly: true
		},
		surname: {
			required: true,
			lettersonly: true
		},

		id_no: {
			required: true,
			minlength: 5,
			maxlength: 13,
			digits:true
			
		},
		dob: {
			required: true,
			validDate:true
		},
    },
    // Specify validation error messages
    messages: {
		name: {
			required: "Please enter your name",
			lettersonly: "Only alphabets allowed",
		},
		surname: {
			required: "Please enter your surname",
			lettersonly: "Only alphabets allowed",
		},
		id_no: {
			required: "Please enter your id number",
			minlength: "Your id number must be at least 5 numbers shot",
			maxlength: "Your id number must be at most 13 numbers long",
		},
		dob: {
			required: "Please enter your date of birth",
			validDate: "Valid date of birth format DD-MM-YYYYs",
		},
		},
		// Make sure the form is submitted to the destination defined
		submitHandler: function(form) {
		form.submit();
    }
  });
});