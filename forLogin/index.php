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
<br/><br/>
<section id="post">
	<div class="container">
		<?php
			$data = $main->fetch_data("categories");
			foreach($data as $row){
		?>
			<div class="row">
			<div class="col-lg-12">
				<!-- Category -->
				<div class="card">
					<div class="card-header bg-aqua">
						<table style="width: 100%;">
							<thead>
								<tr>
									<th class="text-light" style="width: 50%;"><?php echo $row["categories"]; ?></th>
									<th class="text-light" style="width: 30%; text-align: center;">Topic / Post</th>
									<th class="text-light" style="width: 20%;">Last post</th>
								</tr>
							</thead>
						</table>
					</div>
					<div class="card-body">
						<table id="first-category" class="table table-striped" style="width: 100%;">
							<tbody>
								<?php 
									$fetch_sub_categories = $main->fetch_data("sub_categories");
									foreach ($fetch_sub_categories as $rows) {
										if($row["id"] == $rows["category_id"]){
								?>
									<tr>
									<td style="width: 20%; text-align: center;"><p class="text-dark"><img src="../assets/images/bubble.png" width="44" height="44"></td>
									<td style="width: 30%;text-align: left;"><p><a href="sub_category.php?id=<?php echo $rows["id"];  ?>"><?php echo $rows["sub_category"]; ?></a><br/>
									<!-- Description -->
									<small><?php echo $rows["description"]; ?></small></p>
									</td>
									<td style="width: 30%; text-align: center;"><p>5/27</p></td>
									<td style="width: 20%;">
										<p>By Albay, Noli <br/>
										12 Mar 2019, Saturday
										</p>
									</td>
									</tr>
								<?php
										}
									}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<br/>
		<?php 
			}
		?>
	</div>
</section>
<?php 
	include '../footer.php';
?>
</body>
</html>