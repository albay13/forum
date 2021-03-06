<?php
include '../main.class.php';
$main = new Main();
if(isset($_GET["logout"])){
	$main->logout();
	header("Location:../login.php");	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Create Post | Capstone Two</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
	include 'login-nav.php';
?>
<div class="container-fluid py-3">
	<div class="row">
		<div class="col-lg-10">
			<h3 id="post-title">Create a Topic</h3>
			<?php
				echo "<h5>".date("l jS \of F Y h:i:s A")."</h5>";
			?>
		</div>
	</div>
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="">New Topic</a>
    </li>
  </ul>
</nav>
<br/>
<div class="container">
	<div class="row">
		<div class="offset-lg-3 col-lg-9">
			<?php
				if(isset($_POST["btn-submit"])){
					$data = array(
						"login_id" => $_SESSION["id"],
						"category_id" => $_GET["category_id"],
						"sub_category_id" => $_GET["sub_category_id"],
						"topic" => $_POST["topic"],
						"description" => $_POST["description"],
						"content" => $_POST["content"],
						"page_views" => "0",
						"topic_status" => "1"
					);
					if($main->insert_data("topic_tbl",$data)){
							echo "<div class='alert alert-success col-lg-9'>
							<strong>Success!</strong> You have successfully created a topic.
							</div>";
					}else{
							echo "<div class='alert alert-danger col-lg-9'>
							<strong>Failed!</strong> Your topic was not posted.
							</div>";
					}
				}
			?>
			<form method="post">
			   <div class="form-group row">
			   		<div class="col-lg-9">
			   			<label class="control-label text-uppercase">Topic</label>
			   			<input type="text" class="form-control" name="topic" id="topic" placeholder="Enter a topic" maxlength="70">
			   			<h6 id="remainingText" class="form-text text-muted"></h6>
			   		</div>
			   </div>
			    <div class="form-group row">
			   		<div class="col-lg-9">
			   			<label class="control-label text-uppercase">Description</label>
			   			<input type="text" class="form-control" name="description" id="description" placeholder="Enter short description">
			   		</div>
			   </div>
			   <div class="form-group row">	
			   		<div class="col-lg-9">
			   			<label class="control-label">Content</label>
			   			<textarea class="tinymce" name="content" id="content"></textarea>
			   		</div>
			   </div>
			   <div class="form-group row">
			   		<div class="col-lg-3">
			   			<button id="btn-submit" name="btn-submit" class="form-control btn btn-primary">Submit <i class="fa fa-paper-plane"></i></button>
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
</html>