<?php

require_once('dbconfig.php');

class USER
{

	private $conn;

	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
	}

	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}

	public function register($id, $email,	$gender, $name_title, $th_name, $th_lname, $en_name, $en_lname, $birth, $pro_id,$pw)
	{
		try
		{
			$new_password = password_hash($pw, PASSWORD_DEFAULT);

			$st = $this->conn->prepare("INSERT INTO  regis.user (id,email,gender,name_title,th_name, th_lname, en_name, en_lname, birth, pro_id,pw)
			VALUES (:id, :email, :gender,:name_title, :th_name, :th_lname, :en_name, :en_lname, :birth, :pro_id,:pw)");
			$st->bindparam(":id",$id);
			$st->bindparam(":email",$email);
			$st->bindparam(":gender",$gender);
			$st->bindparam(":name_title",$name_title);
			$st->bindparam(":th_name",$th_name);
			$st->bindparam(":th_lname",$th_lname);
			$st->bindparam(":en_name",$en_name);
			$st->bindparam(":en_lname",$en_lname);
			$st->bindparam(":birth",$birth);
			$st->bindparam(":pro_id",$pro_id);
			$st->bindparam(":pw",$new_password);
			$st->execute();

			return $st;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
	public function updateUser($id,	$gender, $name_title, $th_name, $th_lname, $en_name, $en_lname, $birth, $pro_id)
	{
		try
		{
			$st = $this->conn->prepare("UPDATE regis.user SET gender= :gender , name_title= :name_title ,
																th_name= :th_name , th_lname= :th_lname,en_name= :en_name ,
																en_lname= :en_lname ,birth= :birth , pro_id = :pro_id WHERE id = :id");
			$st->bindparam(":id",$id);
			$st->bindparam(":gender",$gender);
			$st->bindparam(":name_title",$name_title);
			$st->bindparam(":th_name",$th_name);
			$st->bindparam(":th_lname",$th_lname);
			$st->bindparam(":en_name",$en_name);
			$st->bindparam(":en_lname",$en_lname);
			$st->bindparam(":birth",$birth);
			$st->bindparam(":pro_id",$pro_id);

			$st->execute();
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}

public function updateMajor($id,$major)
{
	try
	{
		$st = $this->conn->prepare("UPDATE regis.user SET major_id = :major  WHERE id = :id");
		$st->bindparam(":id",$id);
		$st->bindparam(":major",$major);

		$st->execute();
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
}

	public function doLogin($uname,$umail,$upass)
	{
		try
		{
			$stmt = $this->conn->prepare("SELECT * FROM regis.user WHERE id= :uname OR email= :umail ");
			$stmt->bindparam(":uname",$uname);
			$stmt->bindparam(":umail",$umail);
			$stmt->execute();
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount() == 1)
			{
				if(password_verify($upass, $userRow['pw']))
				{
					$_SESSION['user_session'] = $userRow['id'];
					return true;
				}
				else
				{
					return false;
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}

	public function is_loggedin()
	{
		if(isset($_SESSION['user_session']))
		{
			return true;
		}
	}

	public function redirect($url)
	{
		header("Location: $url");
	}

	public function doLogout()
	{
		session_destroy();
		unset($_SESSION['user_session']);
		return true;
	}


	public function showProvinces(){
		try
		{
			$st = $this->conn->prepare("SELECT * FROM regis.provinces");
			$st->execute();
			$stm = $st->fetchAll();
			return $stm;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}

	public function showTitle(){
		try
		{
			$st = $this->conn->prepare("SELECT * FROM regis.title_name");
			$st->execute();
			$stm = $st->fetchAll();
			return $stm;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}

	public function showMajor(){
		try
		{
			$st = $this->conn->prepare("SELECT * FROM regis.major");
			$st->execute();
			$stm = $st->fetchAll();
			return $stm;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}


	public function showUserAll(){
		try
		{
			$st = $this->conn->prepare("SELECT th_name ,th_lname , major_n FROM regis.user NATURAL JOIN regis.major");
			$st->execute();
			$stm = $st->fetchAll();
			return $stm;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}

	public function courseReg($mid){
		try
		{
			$st = $this->conn->prepare("	SELECT COUNT(*) as reg_std FROM regis.user WHERE major_id = :mid");
			$st->bindparam(":mid",$mid);
			$st->execute();

			return $st;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}

}
	// $u = new USER();
	// $t = $u->courseReg(123);
	// $te = $t->fetch(PDO::FETCH_ASSOC);
	// echo $te['reg_std'];


?>
