<?php
include '../main.class.php';
$main = new Main();
$today = date("l jS \of F Y h:i:s A");
if(isset($_GET["logout"])){
	$main->logout();
	header("Location:../login.php");	
}
$fetch_topic = $main->fetch_data("topic_tbl where id = ".$_GET["topic_id"]);
$row = mysqli_fetch_array($fetch_topic);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Reply | Capstone Two</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<script>
	    function onSubmit(token) {
	        document.getElementById("i-recaptcha").submit();
	    }
	</script>
</head>
<body>
<?php
	include 'login-nav.php';
?>
<div class="loader"></div>
<div class="container-fluid py-3">
	<div class="row">
		<div class="col-lg-10">
			<h5 id="post-title">Subject - Re : <?php echo $row["topic"]; ?></h5>
			<?php
				echo "<h6>".$today."</h6>";
			?>
		</div>
	</div>
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#">Post Reply</a>
    </li>
  </ul>
</nav>
<br/>
<div class="container">
	<div class="row">
		<div class="offset-lg-2 col-lg-9">
			<?php
				if($_SERVER["REQUEST_METHOD"] == 'POST'){
					$res = $main->post_captcha($_POST['g-recaptcha-response']);

					if (!$res['success']) {
					    echo 'reCAPTCHA error: Check to make sure your keys match the registered domain and are in the correct locations. You may also want to doublecheck your code for typos or syntax errors.';
					} else {
						$data = array(
							"login_id" => $_SESSION["id"],
							"category_id"=>$_GET["category_id"],
							"sub_category_id" => $_GET["sub_category_id"],
							"topic_id" => $_GET["topic_id"],
							"content" => $_POST["content"],
							"reply_icon" => $_POST["msg_icon"],
							"reply_status" => "1"
						);
						if($main->insert_data("reply_tbl",$data)){
							echo "<div class='alert alert-success col-lg-9'>
							<strong>Success!</strong> You have successfully reply to a topic.
							</div>";
					 	}
					}
				}
			?>
			<form method="post" id='i-recaptcha'>
				<div class="form-group row">	
			   		<div class="col-lg-6">
			   			<label class="control-label">Message Icon</label>
			   			<select id="msg_icon" name="msg_icon" class="form-control">
			   				<option value=""></option>
			   				<option>Standard</option>
			   				<option>Thumb Up</option>
			   				<option>Thumb Down</option>
			   				<option>Exclamation Point</option>
			   				<option>Question Mark</option>
			   				<option>Lamp</option>
			   				<option>Smiley</option>
			   				<option>Angry</option>
			   				<option>Cheesy</option>
			   				<option>Grin</option>
			   				<option>Sad</option>
			   				<option>Wink</option>
			   			</select>
			   		</div>
			   </div>
			   <div class="form-group row">	
			   		<div class="col-lg-10">
			   			<label class="control-label">Content</label>
			   			<textarea class="tinymce" name="content" id="content" required></textarea>
			   		</div>
			   </div>
			   <div class="form-group row">
			   		<div class="col-lg-3">
		   			<button name="btn-submit" data-callback="onSubmit" class=" form-control btn btn-primary g-recaptcha" data-sitekey="6LekKI0UAAAAAOknOqZ94YK5vZXEM_wQJ7LOlIby">Submit</button>
		   			</div>
			   </div>
			</form>
		</div>
	</div>
</div>
<?php include '../footer.php'; ?>
</body>
	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../assets/js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript" src="../assets/js/tinymce/tinymce.js"></script>
    <script type="text/javascript" src="../assets/js/tinymce/init-tinymce.js"></script>
   <script>
		 $(document).ready(function() {
            $('.loader').fadeOut(1000);
            $("#topic").on('keyup',function(){
            	var $this = $(this).val();
                if($this == ''){
                    $("#post-title").text("Create a Topic");
                    $("#remainingText").css('color','black');
                    $("#remainingText").hide();
                }else{
                    $("#remainingText").show();
                    $("#remainingText").text("Text count : "+$this.length + "/70");
                    if($this.length == "70"){
                        $("#remainingText").addClass('text-danger');
                    }else{
                        $("#remainingText").removeClass('text-danger');
                    }
                    $("#post-title").html($this);
                }
            });
          });
	</script>
	<script>
		 $(document).ready(function() {
            $('.loader').fadeOut(1000);
          });
	</script>
</html>