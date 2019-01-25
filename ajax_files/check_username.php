<?php
include '../main.class.php';
$main = new Main();
if(isset($_REQUEST["username"])){
	$main->check_username($_REQUEST["username"]);
}

?>