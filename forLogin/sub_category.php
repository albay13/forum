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
			<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li><a href="#">Pictures</a></li>
				  <li><a href="#">Summer 15</a></li>
				  <li>Italy</li>
				</ul>
				<!-- Category -->
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
					<div class="card-body">
						<table id="first-category" class="table table-striped" style="width: 100%;">
							<tbody>
								<?php 
									$data = $main->fetch_data("topic_tbl where sub_category_id=".$_GET["id"]);
									foreach($data as $row){
								?>
									<tr>
									<td style="width: 20%; text-align: center;"><p class="text-dark"><img src="../assets/images/bubble.png" width="44" height="44"></td>
									<td style="width: 30%;text-align: left;"><p><a href="?sub_category_id=<?php echo $rows["id"];  ?>"><?php echo $row["topic"]; ?></a><br/>
									<!-- Description -->
									<small><?php echo $row["description"]; ?></small></p>
									</td>
									<td style="width: 30%; text-align: center;"><p>5/27</p></td>
									<td style="width: 20%;">
										<?php
											$account_name = $main->fetch_data("personal_details where login_id=".$_SESSION["id"]);
											$name = mysqli_fetch_array($account_name);
										?>
										<p><?php echo "By ".$name["last_name"].", ".$name["first_name"] ?><br/>
										<?php 
										$date = date_create($row["date_posted"]);
										echo date_format($date,"j M Y, l"); ?>
										</p>
									</td>
									</tr>
								<?php
										}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<br/>
	</div>
</section>
<?php 
	include '../footer.php';
?>
</body>
</html>