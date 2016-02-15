

$(Document).ready(function() {

		// validate quote form

		$("#quote-form").validate({

		rules: {

			name: "required",

			email:

				{

					required: true,

					email: true

				},

			phone:

				{

					required: true,

					digits: true,

					minlength: 10,

					maxlength: 10

				},			

				

			description:

				{

					required: true,

					minlength: 100,

					maxlength: 300

				},

				

			},

			messages: {

				name: "Please enter your name",

				email: "Please enter a valid email address",

				phone: {

					required: "Please enter your phone no.",

					digits: "Please enter only digits.",

					minlength: "Please enter at least 10 digits.",

					maxlength: "Please enter no more than 10 digits. "

				},

				description: {

					required: "Please enter your message",

					minlength: "Please enter at least 100 characters.",

					maxlength: "Please enter no more than 300 characters."

				}

				

			}

		});
		
		$("#contactq-form").validate({

		rules: {

			name: "required",

			email:

				{

					required: true,

					email: true

				},

			phone:

				{

					required: true,

					digits: true,

					minlength: 10,

					maxlength: 10

				},			

				

			description:

				{

					required: true,

					minlength: 100,

					maxlength: 300

				},

				

			},

			messages: {

				name: "Please enter your name",

				email: "Please enter a valid email address",

				phone: {

					required: "Please enter your phone no.",

					digits: "Please enter only digits.",

					minlength: "Please enter at least 10 digits.",

					maxlength: "Please enter no more than 10 digits. "

				},

				description: {

					required: "Please enter your message",

					minlength: "Please enter at least 100 characters.",

					maxlength: "Please enter no more than 300 characters."

				}

				

			}

		});





});