<?php
include '../main.class.php';
$main = new Main();
if(isset($_POST)){
	$output = "";
	$account_name = $main->fetch_data("personal_details where login_id=".$_SESSION["id"]);
	$name = mysqli_fetch_array($account_name);
	$data = $main->fetch_data("reply_tbl where sub_category_id=".$_POST["sub_category_id"]." and topic_id = ".$_POST["topic_id"]." order by id desc");
		foreach($data as $row){
			$author_details = $main->fetch_data("login_details where id=".$row["login_id"]);
			$auth_data = mysqli_fetch_array($author_details);
			$topic_details = $main->fetch_data("topic_tbl where id=".$row["topic_id"]);
			$topic_data = mysqli_fetch_array($topic_details);
			$date = date_create($row["date_posted"]);
			$formatted_date = date_format($date, "M j, Y, h:i A");
			$output .= '<div class="row">
						<div class="col-lg-12">
							<div class="card" style="background-color: #e0e0e0;">
								<div class="card-body">
									<table style="width: 100%;">
										<thead>
											<tr>
												<th class="text-dark" style="width: 10%;">'.$auth_data["username"].'</th>
												<th class="text-dark" style="width: 80%;">Re :'.$topic_data["topic"].'</th>
											</tr>
										</thead>
										<tbody>
												<tr>
													<td class="text-dark" style="width: 10%;"></td>
													<td class="text-dark" style="width: 80%;">on <small>'.$formatted_date."</small><br/><hr style='border-top: 1px dotted black;'>".$row["content"].'</td>
												</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						</div>';
		}
	echo $output;
}

?>