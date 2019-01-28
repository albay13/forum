<?php
include '../main.class.php';
$main = new Main();
function time_ago($timestamp){
	$time_ago = strtotime($timestamp);
	$current_time = time();
	$time_difference = $current_time - $time_ago;
	$seconds = $time_difference;
	$minutes = round($seconds/60);
	$hours = round($seconds/3600);
	$days = round($seconds/86400);
	$weeks = round($seconds/604800);
	$months = round($seconds/2629440);
	$years = round($seconds/31553280);

	if($seconds <= 60){
		return "Just Now";
	}else if ($minutes <= 60) {
		if($minutes==1){
			return "one minute ago";
		}else{
			return $minutes." minutes ago";
		}
	}else if ($hours <= 24) {
		if($hours ==1){
			return "an hour ago";
		}else{
			return $hours." hrs ago";
		}
	}else if ($days <= 7) {
		if($days == 1){
			return "yesterday";
		}else{
			return $days." days ago";
		}
	}else if ($weeks <= 4.3) {
		if($weeks == 1){
			return "a week ago";
		}else{
			return $weeks." weeks ago";
		}
	}else if($months <= 12){
		if($months == 1){
			return "a month ago";
		}else{
			return $months." months ago";
		}
	}else{
		if($years == 1){
			return "a year ago";
		}else{
			return $years." years ago";
		}
	}

}

if(isset($_REQUEST)){
	$output = "";
	$account_name = $main->fetch_data("personal_details where login_id=".$_SESSION["id"]);
	$name = mysqli_fetch_array($account_name);
	
	$data = $main->fetch_data("topic_tbl where category_id =".$_REQUEST["category_id"]." AND sub_category_id=".$_REQUEST["sub_category_id"]." order by id desc");
		foreach($data as $row){
			$date = date_create($row["date_posted"]);
			$count_reply = $main->count_data("reply_tbl where topic_id =".$row["id"]);
			$total = mysqli_fetch_array($count_reply);
			$output .= "<div class='row'><div class='col-lg-12'><table id='first-category' class='table table-striped' style='width: 		100%;'><tbody>";	
			$output.="<tr>
				<td style='width: 20%; text-align: center;'><p class='text-dark'><img src='../assets/images/bubble.png' width='44' height='44'></td>
				<td style='width: 30%;text-align: left;'><p><a id='btn-counter' href='view_replies.php?category_id=".$_REQUEST["category_id"]."&sub_category_id=".$_REQUEST["sub_category_id"]."&topic_id=".$row["id"]."'>".$row["topic"]."</a><br/>
				<small>".$row["description"]."</small></p>
				<small>Posted <span class='time-ago'>".time_ago($row["date_posted"])."</span></small>
				</td>
				<td style='width: 30%; text-align: center;'><p>".$total["total"]." / 27</p></td>
				<td style='width: 20%;'>
					<p>By ".$name["last_name"].", ".$name["first_name"]."<br/>
					".date_format($date,"j M Y, l")."
					</p>
				</td>
				</tr>";
				$output.="</tbody></table></div></div>";
		}
	echo $output;
}
?>