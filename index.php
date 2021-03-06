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
<!-- <div class="loader"></div> -->
<?php 
	include 'nav.php';
?>
<br/><br/>
<section id="post">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<!-- First Category -->
				<div class="card">
					<div class="card-header bg-aqua">
						<table style="width: 100%;">
							<thead>
								<tr>
									<th class="text-light" style="width: 50%;">First Category</th>
									<th class="text-light" style="width: 30%; text-align: center;">Topic / Post</th>
									<th class="text-light" style="width: 20%;">Last post</th>
								</tr>
							</thead>
						</table>
					</div>
					<div class="card-body">
						<table id="first-category" class="table table-striped" style="width: 100%;">
							<tbody>
								<tr>
									<td style="width: 20%; text-align: center;"><p class="text-dark"><img src="assets/images/bubble.png" width="44" height="44"></td>
									<td style="width: 30%;text-align: left;"><p><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a><br/><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</small></p>
									<br/>
									<small>Posted 1 year ago</small>
									</td>
									<td style="width: 30%; text-align: center;"><p>5/27</p></td>
									<td style="width: 20%;">
										<p>By Albay, Noli <br/>
										12 Mar 2019, Saturday
										</p>
									</td>
								</tr>
								<tr style="cursor: pointer;">
									<td class="align-items-center" style="width: 20%;text-align: center;"><p class="text-dark"><img src="assets/images/bubble.png" width="44" height="44"></td>
									<td style="width: 30%;text-align: left;"><p><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></p>
									<small>Posted 2 mis ago</small>
									</td>
									<td style="width: 30%; text-align: center;"><p>5/27</p></td>
									<td style="width: 20%;">
										<p>By Albay, Noli <br/>
										12 Mar 2019, Saturday
										</p>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<br/>
				<!-- Second Category -->
				<div class="card">
					<div class="card-header bg-aqua">
						<table style="width: 100%;">
							<thead>
								<tr>
									<th class="text-light" style="width: 50%;">Second Category</th>
									<th class="text-light" style="width: 30%; text-align: center;">Topic / Post</th>
									<th class="text-light" style="width: 20%;">Last post</th>
								</tr>
							</thead>
						</table>
					</div>
					<div class="card-body">
						<table id="first-category" class="table table-striped" style="width: 100%;">
							<tbody>
								<tr>
									<td style="width: 20%; text-align: center;"><p class="text-dark"><img src="assets/images/bubble.png" width="44" height="44"></td>
									<td style="width: 30%;text-align: left;">
										<p><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></p>
									<small>Posted 1 year ago</small><br/>
									</td>
									<td style="width: 30%; text-align: center;"><p>5/27</p></td>
									<td style="width: 20%;">
										<p>By Albay, Noli <br/>
										12 Mar 2019, Saturday
										</p>
									</td>
								</tr>
								<tr>
									<td class="align-items-center" style="width: 20%;text-align: center;"><p class="text-dark"><img src="assets/images/bubble.png" width="44" height="44"></td>
									<td style="width: 30%;text-align: left;"><p><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></p>
									<small>Posted 2 mis ago</small>
									</td>
									<td style="width: 30%; text-align: center;"><p>5/27</p></td>
									<td style="width: 20%;">
										<p>By Albay, Noli <br/>
										12 Mar 2019, Saturday
										</p>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<br/>
				<!-- Third Category -->
				<div class="card">
					<div class="card-header bg-aqua">
						<table style="width: 100%;">
							<thead>
								<tr>
									<th class="text-light" style="width: 50%;">First Category</th>
									<th class="text-light" style="width: 30%; text-align: center;">Topic / Post</th>
									<th class="text-light" style="width: 20%;">Last post</th>
								</tr>
							</thead>
						</table>
					</div>
					<div class="card-body">
						<table id="first-category" class="table table-striped" style="width: 100%;">
							<tbody>
								<tr class="row-post" style="cursor: pointer;">
									<td style="width: 20%; text-align: center;"><p class="text-dark"><img src="assets/images/bubble.png" width="44" height="44"></td>
									<td style="width: 30%;text-align: left;"><p><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></p>
									<small>Posted 1 year ago</small>
									</td>
									<td style="width: 30%; text-align: center;"><p>5/27</p></td>
									<td style="width: 20%;">
										<p>By Albay, Noli <br/>
										12 Mar 2019, Saturday
										</p>
									</td>
								</tr>
								<tr style="cursor: pointer;">
									<td class="align-items-center" style="width: 20%;text-align: center;"><p class="text-dark"><img src="assets/images/bubble.png" width="44" height="44"></td>
									<td style="width: 30%;text-align: left;"><p><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></p>
									<small>Posted 2 mis ago</small>
									</td>
									<td style="width: 30%; text-align: center;"><p>5/27</p></td>
									<td style="width: 20%;">
										<p>By Albay, Noli <br/>
										12 Mar 2019, Saturday
										</p>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<br/><br/>
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