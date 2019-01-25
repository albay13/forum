<!DOCTYPE html>
<html>
<head>
	<title>Registration | Capstone Two</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/pg-calendar/dist/css/pignose.calendar.min.css">
</head>
<body>
<?php 
	include 'nav.php';
?>
<br/><br/>
<div class="container">
	<div class="row">
		<div class="col-lg-9">
			<h4>Registration Form</h4>
			<hr>
			<form action="" method="post" name="registration" id="registration">
				<div class="divider-new">
                	<h5>Login Details</h5>
				</div>
				<div class="form-group row">
					<div class="col-lg-8">
						<label class="control-label font-weight-bold">Username</label>
						<input type="text" name="username" id="username" class="form-control" placeholder="Enter username" required>
						<h6 class="text-danger" id="username-error"></h6>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-lg-4">
						<label class="control-label font-weight-bold">Password</label>
						<input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" required>
					</div>
					<div class="col-lg-4">
						<label class="control-label font-weight-bold">Confirm Password</label>
						<input type="password" name="confirmpassword" id="confirmpassword" class="form-control" placeholder="Confirm Password" required>
					</div>
				</div>
				<div class="divider-new">
                	<h5>Personal Information</h5>
				</div>
				<div class="form-group row">
					<div class="col-lg-4">
						<label class="control-label font-weight-bold">First Name</label>
						<input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter First Name" required>
					</div>
					<div class="col-lg-4">
						<label class="control-label font-weight-bold">Last Name</label>
						<input type="text" name="last_name" id="last_name" class="form-control" placeholder="Enter Last Name" required>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-lg-4">
						<label class="control-label font-weight-bold">Birthdate</label>
						<input type="text" name="birthdate" id="birthdate" class="form-control calendar" placeholder="YYYY-MM-DD" onchange="submitBday()" required>
					</div>
					<div class="col-lg-2">
						<label class="control-label font-weight-bold">Age</label>
						<input type="text" name="age" id="age" value="18" class="form-control" readonly>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-lg-4">
						<label class="control-label font-weight-bold">E-Mail</label>
						<input type="email" name="email" id="email" class="form-control" placeholder="sample@gmail.com" required>
					</div>
					<div class="col-lg-4">
						<label class="control-label font-weight-bold">Contact Number</label>
						<input type="text" name="contact_number" id="contact_number"  class="form-control" placeholder="0912-xxx-xxxx" onkeypress="numbersOnly()" required>
					</div>
				</div>
				<div class="divider-new">
                	<h5>Term of Service</h5>
				</div>
				<div class="form-group row">
					<div class="col-lg-12">
						 <p style="color: black; text-align: justify;">By submitting your registration information, you indicate that you agree to the Terms of use and have read and understood Creative Corner's Privacy Policy. Your submission of this form will constitute your consent to the collection and use of this information by Creative Corner and its affiliates. You also agree to receive required administrative and legal notices such as this electronically.</p><label style="color: black"><input name="iagree" id="iagree" value="1" class="control-label " type="checkbox" required /> I Agree</label>
					</div>
				 </div>
				 <div class="form-group row">
				 	<div class="col-lg-3">
				 		<button data-loading-text="<i class='fas fa-spinner fa-spin '></i> Processing" name="btn-register" id="btn-register" class="btn btn-primary form-control">Register</button>
				 	</div>
				 </div>
			</form>
		</div>
		<div class="col-lg-3">
				<div class="card">
					<div class="card-header bg-aqua text-light">Categories</div>
					<div class="card-body">
						<table class="table table-striped">
							<tbody>
								<tr>
									<td>First Category</td>
								</tr>
								<tr>
									<td>Second Category</td>
								</tr>
								<tr>
									<td>Third Category</td>
								</tr>
								<tr>
									<td>Fourth Category</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<br/>
				<div class="card">
					<div class="card-header bg-aqua text-light">Recent Post</div>
					<div class="card-body">
						<table class="table table-striped">
							<tbody>
								<tr>
									<td>Post 1</td>
								</tr>
								<tr>
									<td>Post 2</td>
								</tr>
								<tr>
									<td>Post 3</td>
								</tr>
								<tr>
									<td>Post 4</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div> <!-- col-lg-3 -->
	</div>
</div>
<br/><br/>
<?php include 'footer.php'; ?>
</body>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript" src="assets/js/tinymce/tinymce.js"></script>
    <script type="text/javascript" src="assets/js/tinymce/init-tinymce.js"></script>
	<script src="assets/pg-calendar/dist/js/pignose.calendar.full.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="assets/js/script.js"></script>
	<script type="text/javascript">
		 var d = new Date();
  		 var year = d.getFullYear();
  		 var month = d.getMonth();
  		 var day = d.getDay();
  		 var fulldate = new Date(year-18,month,day);//18 year ago
  		 //Pignose Calendar
        $('input.calendar').pignoseCalendar({
          format: 'MM/DD/YYYY', // date format string. (2017/02/02)
          theme: 'dark', // Dark theme
          maxDate:fulldate,
          date:moment(fulldate)
        });
  	</script>
  	<script>
		 $(document).ready(function() {
            $('.loader').fadeOut(1000);
          });
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			//For button register
			$("#btn-register").on('click',function(e){
				var $this = $(this);
				e.preventDefault();
				$.post(
					"ajax_files/insert_data.php",
					$("#registration").serialize(),
					function(data,status){
						$this.button('loading');
						setTimeout(function(){
							swal({
							  title: "Success",
							  text: data,
							  icon: "success",
							  button: "OK",
							}).then(function(){ 
								location.reload();
								}
							);
						$this.button('reset');
						},2000);
					}
				);
			});
			//Real-time checking of username
			$("#username").on('blur',function(){
					var value = $(this).val();
					$.post(
						"ajax_files/check_username.php",
						{username:value},
						function(data,status){
							if(data == "Username already exist"){
								$("#username-error").show();
								$("#username-error").text(data);
							}else{
									//No returning value
								$("#username-error").hide();
							}
						}

					);
			});
		});
	</script>

</body>
</html>