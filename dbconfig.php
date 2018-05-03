<?php

class DataBase{


	public $host = "localhost:55935";
	public $db_name = "regis";
	public $username = "azure";
	public $password = "6#vWHD_$";
	private $conn;

	public function dbConnection()
	{
		$this->conn = null;

		try
		{

			$this->conn = new PDO ("mysql:host =" . $this->host . ";port=55935,dbname=". $this->db_name , $this->username ,$this->password
				,array(PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8"));
				$this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 

		}
		catch(PDOException $exception){
			echo "Connection error :" . $exception->getMessage();
		}
		return $this->conn;

	}

}

  
?>