<?php
class Main{
	public $con;
	private $hostName = "localhost";
	private $userName = "root";
	private $password = "";
	private $dbName = "forum";

	public function __construct(){
		$this->db_connect();
	}
	public function db_connect(){
		$this->con = mysqli_connect($this->hostName,$this->userName,$this->password,$this->dbName);
		if(mysqli_connect_errno()){
			die("Connection error");
			exit;
		}else{
			return $this->con;
		}
	}
	public function reg_data($)
	public function insert_data($table,$data){
		$sql = "";
		$sql .= "INSERT INTO ".$table;
		$sql .= " (".implode(",", array_keys($data)).") VALUES";
		$sql .= " ('".implode("','", array_values($data))."')";
		$query = mysqli_query($this->con,$sql);
		if($query){
			return true;
		}
	}

}
?>