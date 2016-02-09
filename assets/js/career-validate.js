
$().ready(function() {
		// validate quote form
		$("#career-form").validate({
		rules: {
			name: "required",
			email:
				{
					required: true,
					email: true
				},
			mobile:
				{
					required: true,
					digits: true
					
				},
			city:
				{
					required: true,
					digits: false,
					maxlength: 20
				},
			keyskills:
				{
					required: true
					
				},
			file:
				{
					required: true,
					
				},		
				
			experience:
				{
					required: true,
					
				}
				
			},
			messages: {
				name: "Please enter your name",
				email: "Please enter a valid email address",
				
				mobile: {
					required: "Please enter your mobile no.",
					digits: "Please enter only digits"
					
				},
				city: {
					required: "Please enter your city",
					digits: "Please enter only letters.",
					maxlength: "Please enter no more than 20 letters. "
				},
				keyskills: {
					required: "Please enter your keyskills",
					
				},
				file: {
					required: "Please upload your resume"
					
				},
				experience: {
					required: "Please select an experience",
					
				}
				
			}
		});


});