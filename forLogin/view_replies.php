<?php
	include '../main.class.php';
	$main = new Main();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Replies | Capstone Two</title>
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
	$data = $main->fetch_data("topic_tbl where id = ".$_GET["topic_id"]);
	$topic = mysqli_fetch_array($data);
	$author_data = $main->fetch_data("login_details where id=".$topic["login_id"]);
	$auth_data = mysqli_fetch_array($author_data);
	$date = date_create($topic["date_posted"]);
	$formatted_date = date_format($date, "M j, Y, h:i A");
?>
<div class="loader"></div>
<br/><br/>
<section id="reply">
	<div class="container">
			<div class="row">
			<div class="col-lg-12">
				<!-- Category -->
				<div class="mb-1">
				<a class="btn btn-secondary btn-sm text-uppercase" href="<?php echo "reply_post.php?category_id=".$_GET["category_id"]."&sub_category_id=".$_GET["sub_category_id"]."&topic_id=".$_GET["topic_id"]; ?>">Add A Reply</a>
				</div>
				<div class="card">
					<div class="card-header bg-aqua">
						<table style="width: 100%;">
							<thead>
								<tr>
									<th class="text-light" style="width: 10%;">Author</th>
									<th class="text-light" style="width: 80%;">Topic : <?php echo $topic["topic"]; ?></th>
							</thead>
						</table>
					</div>
				</div>
				
			</div>
				</div>
			<div class="row">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-body">
									<table style="width: 100%;">
										<thead>
											<tr>
												<th class="text-dark" style="width: 10%;"><?php echo $auth_data["username"] ?></th>
												<th class="text-dark" style="width: 80%;"><?php echo $topic["topic"]; ?></th>
											</tr>
										</thead>
										<tbody>
												<tr>
													<td class="text-dark" style="width: 10%;"></td>
													<td class="text-dark" style="width: 80%;">on <small><?php echo $formatted_date; ?></small><br/><hr style="border-top: 1px dotted black;"><?php echo $topic["content"]; ?></td>
												</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						</div>
			<div id="replies"></div>
			</div>
		</div>
		<br/>
	</div>
</section>
<?php 
	include '../footer.php';
?>
</body>
	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			view_replies();
			function view_replies(){
				$.post(
					"../ajax_files/_replies.php",
					{sub_category_id:"<?php echo $_GET["sub_category_id"] ?>",topic_id:"<?php echo $_GET["topic_id"]; ?>"},
					function(data){
						$("#replies").html(data);
					}
				);
			}
		});
	</script>
	<script>
		 $(document).ready(function() {
            $('.loader').fadeOut(1000);
          });
	</script>
</html>