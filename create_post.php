<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home | Capstone Two</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php include 'nav.php'; ?>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="card card-top">
        <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Create Post</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<br/><br/>
<div class="container">
	<div class="row">
		<div class="col-lg-9">
			<h3>Create Post</h3>
			<hr>
			<form method="post">
			   <div class="form-group row">
			   		<div class="col-lg-6">
			   			<label class="control-label">Select category</label>
			   			<select class="form-control">
			   				<option>First Category</option>
			   				<option>Second Category</option>
			   				<option>Third Category</option>
			   			</select>
			   		</div>
			   </div>
			    <div class="form-group row">
			   		<div class="col-lg-6">
			   			<label class="control-label">Name</label>
			   			<input type="text" class="form-control" name="" placeholder="Enter your name">
			   		</div>
			   </div>
			   <div class="form-group row">
			   		<div class="col-lg-6">
			   			<label class="control-label">Title</label>
			   			<input type="text" class="form-control" name="" placeholder="Enter the title of the post">
			   		</div>
			   </div>
			   <div class="form-group row">
			   		<div class="col-lg-12">
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