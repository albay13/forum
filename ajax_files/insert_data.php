<?php 
 include '../main.class.php';
 $main = new Main();
 if(isset($_REQUEST)){
 	$username = $_REQUEST["username"];
 	$password = md5($_REQUEST["password"]);
 	$first_name = $_REQUEST["first_name"];
 	$last_name = $_REQUEST["last_name"];
 	$birthdate = $_REQUEST["birthdate"];
 	$age = $_REQUEST["age"];
 	$email = $_REQUEST["email"];
 	$contact_number = $_REQUEST["contact_number"];
 	$iagree = $_REQUEST["iagree"];
 	$data = array(
 		"first_name"  => $first_name,
 		"last_name" => $last_name,
 		"birthdate" => $birthdate,
 		"age" => $age,
 		"email" => $email,
 		"contact_number" => $contact_number,
 		"status" => "0"
 	);
 	$main->check_account($username,$password,$data);
 }
?>