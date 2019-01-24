<!DOCTYPE html>
<html lang="en">
<head>
	<title>Create Post | Capstone Two</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		body{
			background-color: #dbdbdb;
		}
	</style>
</head>
<body>
<div class="container-fluid py-3" style="background-color: white;">
	<div class="row">
		<div class="col-lg-10">
			<h3>Post Title</h3>
			<?php
				echo "<h5>".date("l jS \of F Y h:i:s A")."</h5>";
			?>
		</div>
	</div>
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#">Edit</a>
    </li>
  </ul>
</nav>
<br/>
<div class="container">
	<div class="row">
		<div class="offset-lg-3 col-lg-9">
			<form method="post">
			   <div class="form-group row">
			   		<div class="col-lg-9">
			   			<label class="control-label text-uppercase">Title</label>
			   			<input type="text" class="form-control" name="" placeholder="Enter the title of the post">
			   			<small class="text-count"><span>0</span>/70</small>
			   		</div>
			   </div>
			    <div class="form-group row">
			   		<div class="col-lg-9">
			   			<label class="control-label text-uppercase">Description</label>
			   			<input type="text" class="form-control" name="" placeholder="Enter short description">
			   		</div>
			   </div>
			   <div class="form-group row">
			   		<div class="col-lg-5">
			   			<label class="control-label text-uppercase">Select category</label>
			   			<select class="form-control">
			   				<option>First Category</option>
			   				<option>Second Category</option>
			   				<option>Third Category</option>
			   			</select>
			   		</div>
			   		<div class="col-lg-4">
			   			<label class="control-label text-uppercase">Select sub-category</label>
			   			<select class="form-control">
			   				<option>First Category</option>
			   				<option>Second Category</option>
			   				<option>Third Category</option>
			   			</select>
			   		</div>
			   </div>
			   <!-- <div class="form-group row">
			   	<div class="col-lg-9">
		        <label class="control-label text-uppercase">Topic Image</label>
		        	<div class="well img-well" style="border-radius: 0px; width: 500px; background-color:white;">
		        <label style="width: 500px; font-size: 15px; border: 3px dotted #428bca; padding: 50px; " class="btn font-primary"><i class="fa fa-camera fa-2x"></i><br><br>ADD IMAGE IMAGE <input  type="file" name="file1" id="file1" class="upload" style="display: none;" required>
		        </label>
		        </div>
		        <div class="img-responsive"  id="image1"></div>
		         <small id="removeImage" class="form-text text-muted"><a href=""><i class="fa fa-trash"></i> Remove Image</a></small>
		         <small id="recommend" class="form-text text-muted">We recommend using a compelling image which can attract more people to come to your event.</small>
		     	</div>
		        </div> -->
			   <div class="form-group row">
			   		<div class="col-lg-9">
			   			<label class="control-label">Content</label>
			   			<textarea class="tinymce" id="content"></textarea>
			   		</div>
			   </div>
			   <div class="form-group row">
			   		<div class="col-lg-3">
			   			<button class="form-control btn btn-primary">Submit <i class="far fa-paper-plane"></i></button>
			   		</div>
			   </div>
			</form>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>
</body>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript" src="assets/js/tinymce/tinymce.js"></script>
    <script type="text/javascript" src="assets/js/tinymce/init-tinymce.js"></script>
	<script>
		 $(document).ready(function() {
            $('.loader').fadeOut(1000);
          });
	</script>
</html>