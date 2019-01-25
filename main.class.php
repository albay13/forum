<?php
session_start();
class Main{
	public $con;
	private $hostName = "localhost";
	private $userName = "admin";
	private $password = "root";
	private $dbName = "forum";

	public function __construct(){
		$this->db_connect();
	}
	//Database Connection
	public function db_connect(){
		$this->con = mysqli_connect($this->hostName,$this->userName,$this->password,$this->dbName);
		if(mysqli_connect_errno()){
			die("Connection error");
			exit;
		}else{
			return $this->con;
		}
	}
	//Registration, Check if username if already existing
	public function check_account($username,$password,$data){
		$check_query = "SELECT username FROM login_details WHERE username = '$username'";
		$output = array(
				"username" => $username,
				"password" => $password,
				"account_status" => '0'
			);
		$result = mysqli_query($this->con,$check_query);
		$check_num = $result->num_rows;
		if($check_num > 0){
			echo "Registration Failed. Username is already exist.";
			return false;
		}else{
			if($this->insert_data('login_details',$output)){
				$last_id = array(
					"login_id" => $this->con->insert_id
				);
				$output2 = array_merge($last_id, $data);
			}
			$this->insert_data('personal_details',$output2);
			echo "Registration Successful";
		}
	}
	//Insert of data
	public function insert_data($table,$data){
		$sql = "";
		$sql .= "INSERT INTO ".$table;
		$sql .= " (".implode(",", array_keys($data)).") VALUES";
		$sql .= " ('".implode("','", array_values($data))."')";
		$query = mysqli_query($this->con,$sql);
		if($query){
			return true;
		}else{
			die("Unable to insert data");
		}
	}
	//Real time checking of username if exist
	public function check_username($username){
		$query = "SELECT * FROM login_details WHERE username = '$username'";
		$result = mysqli_query($this->con,$query);
		$count_rows = $result->num_rows;
		if($count_rows > 0){
			echo "Username already exist";
		}else{
			echo "";
		}
	}
	//Login, username or password if correct
	public function check_login($username,$password){
		$password = md5($password);
		$query = "SELECT * FROM login_details WHERE username='$username' AND password = '$password'";
		$result = mysqli_query($this->con,$query);
		$count_rows = $result->num_rows;
		if($count_rows > 0){
			return true;
		}else{
			return false;
		}
	}

}
?>