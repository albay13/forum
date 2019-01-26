$(function(){
	 $.validator.setDefaults({
	    errorClass: 'help-block',
	    highlight: function(element) {
	      $(element)
	        .closest('.form-group')
	        .addClass('has-error');
	    },
	    unhighlight: function(element) {
	      $(element)
	        .closest('.form-group')
	        .removeClass('has-error');
	    },
	    errorPlacement: function (error, element) {
	      if (element.prop('type') === 'checkbox') {
	        error.insertAfter(element.parent());
	      } else {
	        error.insertAfter(element);
	      }
	    }
	  });
	$.validator.addMethod('strongPassword', function(value, element) {
	return this.optional(element) 
	|| value.length >= 8
	&& /\d/.test(value)
	&& /[a-z]/i.test(value);
	}, 'Your password must be at least 8 characters long and contain at least one number and one character')
	$.validator.addMethod('cellphone', function(value, element) {
	return this.optional(element) 
	|| value.length == 11
	}, '11-Digit cellphone number is required')
	$("#registration").validate({
		rules:{
			username:{
				required:true,
				remote:{
					url:"ajax_files/check_username.php",
					type:"post"
				}
			},
			password:{
				required:true,
				minlength:8,
				strongPassword:true
			},
			confirmpassword:{
				required:true,
				minlength:8,
				equalTo:"#password"
			},
			first_name:{
				required:true,
				maxlength:50
			},
			last_name:{
				required:true,
				maxlength:50
			},
			birthdate:{
				required:true
			},
			email:{
				required:true,
				email:true,
				maxlength:100
			},
			contact_number:{
		      	required: true,
		      	cellphone: true
		    },
		    iagree:"required"
		},
		messages:{
			username:{
				required:"Please enter username",
				remote:"Username already exist"
			},
			password:{
				required:"Please enter password"
			},
			confirmpassword:{
				required:"This field is required to confirm password"
			},
			first_name:{
				required:"Please enter first name"
			},
			last_name:{
				required:"Please enter last name"
			},
			birthdate:{
				required:"Please enter birthdate"
			},
			email:{
				required:"Please enter email"
			},
			contact_number:{
				required:"Please enter 11-Digit Cellphone Number"
			},
			iagree:{
				required:" Please check to agree to our term of service "
			}
		}
	});
});