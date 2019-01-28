<?php
include '../main.class.php';
$main = new Main();
$uid = $_SESSION["id"];
if(!$main->get_session()){
	header("Location:../login.php");
}
if(isset($_GET["logout"])){
	$main->logout();
	header("Location:../login.php");	
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home | Capstone Two</title>
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
<div class="loader"></div>
<br/><br/>
<section id="post">
	<div class="container">
			<div class="row mb-2">
			<div class="col-lg-12">
				<!-- Category -->
				<div class="mb-1">
					<a class="btn btn-secondary btn-sm text-uppercase" href="create_post.php?category_id=<?php echo $_GET["category_id"]; ?>&sub_category_id=<?php echo $_GET["sub_category_id"]; ?>">Add New Topic</a>
				</div>
				<div class="card">
					<div class="card-header bg-aqua">
						<table style="width: 100%;">
							<thead>
								<tr>
									<th class="text-light" style="width: 50%;">Subject / Started by</th>
									<th class="text-light" style="width: 30%; text-align: center;">Replies / Views</th>
									<th class="text-light" style="width: 20%;">Last post</th>
								</tr>
							</thead>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="sub-category"></div>
		<br/>
	</div>
</section>
<?php 
	include '../footer.php';
?>
</body>
	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../assets/js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript" src="../assets/js/tinymce/tinymce.js"></script>
    <script type="text/javascript" src="../assets/js/tinymce/init-tinymce.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			time_ago();
			function time_ago(){
				$.post(
					"../ajax_files/time_ago.php",
					{category_id:"<?php echo $_GET["category_id"] ?>",sub_category_id:"<?php echo $_GET["sub_category_id"]; ?>"},
					function(data){
						$(".sub-category").html(data);
					});
			}
			setInterval(function(){
				time_ago();
			},3000);
			
		});
	</script>
	<script>
		 $(document).ready(function() {
            $('.loader').fadeOut(1000);
          });
	</script>
</html>