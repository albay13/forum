<?php
	include 'main.class.php';
	$main = new Main();
?>
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
			<?php
			if(isset($_POST["btn-register"])){
			 	$username = $_POST["username"];
			 	$password = md5($_POST["password"]);
			 	$first_name = $_POST["first_name"];
			 	$last_name = $_POST["last_name"];
			 	$birthdate = $_POST["birthdate"];
			 	$age = $_POST["age"];
			 	$email = $_POST["email"];
			 	$contact_number = $_POST["contact_number"];
			 	$iagree = $_POST["iagree"];
			 	if($username == "" || $password == "" || $first_name == "" || $last_name == "" || $birthdate == "" || $age == "" || $email == "" || $contact_number == "" || $iagree == ""){
			 		return false;
			 	}else{
				 	$data = array(
				 		"first_name"  => $first_name,
				 		"last_name" => $last_name,
				 		"birthdate" => $birthdate,
				 		"age" => $age,
				 		"email" => $email,
				 		"contact_number" => $contact_number,
				 		"status" => "0"
				 	);
				 	$main->check_account($username,$password,$data);
			 	}
			 }
			?>
			<form action="" method="post" name="registration" id="registration">
				<div class="divider-new">
                	<h5>Login Details</h5>
				</div>
				<div class="form-group row">
					<div class="col-lg-8">
						<label class="control-label font-weight-bold">Username</label>
						<input type="text" name="username" id="username" class="form-control" placeholder="Enter username">
						<h6 class="text-danger" id="username-error"></h6>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-lg-4">
						<label class="control-label font-weight-bold">Password</label>
						<input type="password" name="password" id="password" class="form-control" placeholder="Enter Password">
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
						<input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter First Name" maxlength="50" required>
					</div>
					<div class="col-lg-4">
						<label class="control-label font-weight-bold">Last Name</label>
						<input type="text" name="last_name" id="last_name" class="form-control" placeholder="Enter Last Name" maxlength="50" required>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-lg-4">
						<label class="control-label font-weight-bold">Birthdate</label>
						<input type="text" name="birthdate" id="birthdate" class="form-control calendar"  placeholder="YYYY-MM-DD" required>
						<input type="date" name="hidden-birthdate" id="hidden-birthdate" hidden>
					</div>
					<div class="col-lg-2">
						<label class="control-label font-weight-bold">Age</label>
						<input type="text" name="age" id="age" class="form-control" readonly>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-lg-4">
						<label class="control-label font-weight-bold">E-Mail</label>
						<input type="email" name="email" id="email" class="form-control" placeholder="sample@gmail.com" maxlength="100" required>
					</div>
					<div class="col-lg-4">
						<label class="control-label font-weight-bold">Contact Number</label>
						<input type="text" name="contact_number" id="contact_number"  class="form-control" placeholder="0912-xxx-xxxx" onkeypress="numbersOnly()" maxlength="11" required>
					</div>
				</div>
				<div class="divider-new">
                	<h5>Term of Service</h5>
				</div>
				<div class="form-group row">
					<div class="col-lg-12">
						 <p style="color: black; text-align: justify;">By submitting your registration information, you indicate that you agree to the Terms of use and have read and understood Creative Corner's Privacy Policy. Your submission of this form will constitute your consent to the collection and use of this information by Creative Corner and its affiliates. You also agree to receive required administrative and legal notices such as this electronically.</p><label style="color: black"><input name="iagree" id="iagree" value="1" class="control-label " type="checkbox" /> I Agree </label>
					</div>
				 </div>
				 <div class="form-group row">
				 	<div class="col-lg-3">
				 		<button type="submit" data-loading-text="<i class='fas fa-spinner fa-spin '></i> Processing" name="btn-register" id="btn-register" class="btn btn-primary form-control">Register</button>
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
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.js"></script>
	<script src="assets/js/registration-form.js"></script>
	<script src="assets/js/script.js"></script>
	<script type="text/javascript">
		 var d = new Date();
  		 var year = d.getFullYear();
  		 var month = d.getMonth();
  		 var day = d.getDay();
  		 var fulldate = new Date(year-18,month,day);//18 year ago
  		 //Pignose Calendar
        $('input.calendar').pignoseCalendar({
        	  format: 'YYYY-MM-DD', // date format string. (2017/02/02)
	          theme: 'dark', // Dark theme
	          maxDate:fulldate,
	          date:moment(fulldate),
        	  click:function(event,context){
	        	var birthdate = $("input.calendar").val(); 
	        	$("#hidden-birthdate").val(birthdate);
	        	submitBday();
	          }
        });
  	</script>
  	<script>
		 $(document).ready(function() {
            $('.loader').fadeOut(1000);
          });
	</script>
</body>
</html>