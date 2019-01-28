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
			$number_of_topic = $main->count_data("topic_tbl where category_id = ".$row["id"]);
			$count_topic = mysqli_fetch_array($number_of_topic);
			$number_of_reply = $main->count_data("reply_tbl where category_id = ".$row["id"]);
			$count_reply = mysqli_fetch_array($number_of_reply);
			// $fetch_latest = $main->fetch_data("reply_tbl where date_posted IN (SELECT max(date_posted) FROM reply_tbl) and category_id=".$row["id"]);
			// $latest_data = mysqli_fetch_array($fetch_latest);	
			// $login_id = $latest_data["login_id"];
			// $topic_id = $latest_data["topic_id"];
			// $author_data = $main->fetch_data("personal_details where id=".$login_id);
			// $auth = mysqli_fetch_array($author_data);
			// $fetch_topic = $main->fetch_data("topic_tbl where id=".$topic_id." and login_id= ".$login_id);
			// $topic_data=mysqli_fetch_array($fetch_topic);
			// $date_create = date_create($latest_data["date_posted"]);
			// $date_formatted = date_format($date_create,"j M Y, l, h:i A");
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
									<!-- <th class="text-light" style="width: 20%;">Last post</th> -->
								</tr>
							</thead>
						</table>
					</div>
					

				</div>
			</div>
			</div>
			<?php 
									$fetch_sub_categories = $main->fetch_data("sub_categories");
									foreach ($fetch_sub_categories as $rows) {
										if($row["id"] == $rows["category_id"]){
								?>	
									<div class="row my-2">
										<div class="col-lg-12">
									<table id="first-category" class="table table-striped" style="width: 100%;">
										<tbody>
									<tr>
									<td style="width: 20%; text-align: center;"><p class="text-dark"><img src="../assets/images/bubble.png" width="44" height="44"></td>
									<td style="width: 30%;text-align: left;"><p><a href="sub_category.php?category_id=<?php echo $rows["category_id"];?>&sub_category_id=<?php echo $rows["id"];  ?>"><?php echo $rows["sub_category"]; ?></a><br/>
									<!-- Description -->
									<small><?php echo $rows["description"]; ?></small></p>
									</td>
									<td style="width: 30%; text-align: center;"><p><?php echo $count_topic["total"]; ?> / <?php echo $count_reply["total"]; ?></p></td>
									<!-- <td style="width: 20%;">
										<p>By <?php  echo $auth["last_name"].", ".$auth["first_name"]; ?><br/><?php echo "<small>in  <a href='view_replies.php?sub_category_id=".$topic_data["sub_category_id"]."&topic_id=".$topic_data["id"]."'> Re:".$topic_data["topic"]."</a></small>"; ?><br/>
										<?php echo "<small>".$date_formatted."</small>"; ?>
										</p>
									</td> -->
									</tr>
											</tbody>
										</table>
									</div>
									</div>
								<?php
										}
									}
								?>
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
	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../assets/js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript" src="../assets/js/tinymce/tinymce.js"></script>
    <script type="text/javascript" src="../assets/js/tinymce/init-tinymce.js"></script>
</html>