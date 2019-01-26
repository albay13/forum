<?php
include 'main.class.php';
$main = new Main();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login | Capstone Two</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php 
	include 'nav.php';
?>	
<br/><br/>
<div class="container">
	<div class="row">
		<div class="col-lg-9">
			<h3>Login via</h3>
            <p>Online Forum Account Information </p>
            <?php
			if(isset($_POST["login"])){
				extract($_POST);
				$login = $main->check_login($username,$password);
				if($login){
					header("Location:forLogin/index.php");
				}else{
				echo "<div class='alert alert-danger'>
						<strong>Login Failed!</strong> Email or username / password is incorrect.
						</div>";
				}
			}
			if(isset($_SESSION['id'])){
				header('Location:forLogin/index.php');
			}

            ?>
			<form action="" method="post" id="login_form" name="login_form">
				<div class="form-group row">
					<div class="col-lg-9">
						<label class="control-label font-weight-bold">Username</label>
						<input type="text" name="username" id="username" class="form-control" placeholder="Enter Username">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-lg-9">
						<label class="control-label font-weight-bold">Password</label>
						<input type="password" name="password" id="password" class="form-control" placeholder="Enter Password">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-lg-3">
						<button id="login" name="login" class="form-control btn btn-primary">LOGIN</button>
					</div>
				</div>
				 <center>
      <p>Having trouble with your password?<a href="ForgetPassword.php"><u> Forgot Password.</u></a></p>
    </center>
    <div class="divider-new">
  <h5>or</h5>
  </div>
   <div class="form-group row">
   		<div class="col-lg-12 text-center">
   			<a class="btn text-light btn-facebook col-lg-3">
	        <i class="fa fa-facebook"></i> Login with Facebook
	   		</a>
	   		<span class="mx-3"></span>
	   			<a class="btn text-light btn-google col-lg-3">
	        <i class="fa fa-google"></i> Login with Google
	   		</a>
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
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.js"></script>
	<script src="assets/js/login.js"></script>
	<script>
		 $(document).ready(function() {
            $('.loader').fadeOut(1000);
          });
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$
		});
	</script>
</body>
</html>