<?php
include 'main.class.php';
$obj = new Main();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Search | Capstone Two</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<form action="" method="get">
		<div class="form-group">
			<div class="row">
				<div class="col-lg-3">
					<label>Employee Name: </label>
					<input type="text" name="code_search" class="form-control">
				</div>
				<div class="col-lg-3">
					<label>Action:</label>
					<button type="submit" class="btn btn-primary" style="width: 100%;"><span class="fa fa-sesarch"></span> Search</button>
				</div>
			</div>	
		</div>
	</form>
<!-- To get submitted request search in form -->
<?php
if(isset($_REQUEST['code_search'])){
	$code_search = $_REQUEST['code_search'];
	if($code_search != NULL){
		$myrow = $obj->fetch_data("SELECT * FROM tbl_ojt WHERE first_name LIKE '$code_search' OR last_name LIKE '$code_search'");
		foreach($myrow as $row){
?>
		<div class="col-lg-3">
			<?php 
				echo $row["first_name"]." ".$row["last_name"];
			?>
		</div>
<?php			
		}		
	}
}
?>
</body>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</html>