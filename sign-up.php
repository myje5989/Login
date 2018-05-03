<?php
session_start();
require_once('class.user.php');
$user = new USER();

if($user->is_loggedin()!="")
{
	$user->redirect('home.php');
}

if(isset($_POST['btn-signup']))
{
	$uname = strip_tags($_POST['txt_uname']);
	$umail = strip_tags($_POST['txt_umail']);
	$gender = strip_tags($_POST['gender']);
	$upass = strip_tags($_POST['txt_upass']);
	$name_title  = strip_tags($_POST['name_title']);
	$th_name  = strip_tags($_POST['th_name']);
	$th_lname = strip_tags($_POST['th_lname']);
	$en_name = strip_tags($_POST['en_name']);
	$en_lname = strip_tags($_POST['en_lname']);
	$birth = strip_tags($_POST['birth']);
	$pro_id = strip_tags($_POST['country']);

	if($uname=="")	{
		$error[] = "provide username !";
	}
	else if($umail=="")	{
		$error[] = "provide email id !";
	}
	else if(!filter_var($umail, FILTER_VALIDATE_EMAIL))	{
		$error[] = 'Please enter a valid email address !';
	}
	else if($upass=="")	{
		$error[] = "provide password !";
	}
	else if(strlen($upass) < 6){
		$error[] = "Password must be atleast 6 characters";
	}
	else
	{
		try
		{
			$stmt = $user->runQuery("SELECT id, email FROM regis.user WHERE id=:uname OR email=:umail");
			$stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
			$row=$stmt->fetch(PDO::FETCH_ASSOC);

			if($row['txt_uname']==$uname) {
				$error[] = "รหัสบัตรประชาชนถูกใช้แล้ว !";
			}
			else if($row['txt_umail']==$umail) {
				$error[] = "อีเมลนี้มีผู้ใช้แล้ว !";
			}
			else
			{
				if($user->register($uname, $umail,$gender, $name_title, $th_name, $th_lname, $en_name, $en_lname, $birth, $pro_id,$upass)){
					$user->redirect('sign-up.php?joined');
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
}
// id ,  email ,  name_title ,  th_name ,  th_lname ,  en_name ,  en_lname ,  birth ,  pro_id ,  pw
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Sign up</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="style.css" type="text/css"  />
</head>
<body>

	<div class="signin-form">

		<div class="container">

			<form method="post" class="form-signin">
				<h2 class="form-signin-heading">ลงทะเบียนผู้สมัคร.</h2><hr />
				<?php
				if(isset($error))
				{
					foreach($error as $error)
					{
						?>
						<div class="alert alert-danger">
							<i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
						</div>
						<?php
					}
				}
				else if(isset($_GET['joined']))
				{
					?>
					<div class="alert alert-info">
						<i class="glyphicon glyphicon-log-in"></i> &nbsp; ลงทะเบียนสำเร็จ <a href='index.php'>เข้าสู่ระบบ</a> ที่นี่
					</div>
					<?php
				}
				?>
				<div class="form-group">
					<label for="id" class="col-sm-3 control-label">รหัสบัตรประชาชน</label>
					<div class="col-sm-9">
						<input type="text" id="txt_uname" name="txt_uname" class="form-control" pattern="[0-9]{13}" size="13" maxlength="13" required  autofocus>
					</div>
				</div>

				<div class="form-group">
				<label for="gender1" class="col-sm-3 control-label">เพศ</label>
					<div class="col-sm">
						<input type="radio" id="gender" name="gender" value="ชาย" checked> ชาย
						<input type="radio" id="gender" name="gender" value="หญิง"> หญิง
						<input type="radio" id="gender" name="gender" value="อื่นๆ"> อื่นๆ<br>
					</div>
				</div>
				<div class="form-group">
					<label for="title" class="col-sm-3 control-label">คำนำหน้า</label>
					<div class="col-sm-9">
						<select  id="name_title" name="name_title" class="form-control">
							<?php
							$result = $user->showTitle();
							if(isset($result)){foreach($result as $row){  ?>
								<option value="<?php echo $row['title_id'];?>"><?php echo $row['title_name'];?> - <?php echo $row['title_en'];?></option>
								<?php
							}
						}?>
					</select>
				</div>
			</div>
			<!-- Name TH -->
			<div class="form-group">
				<label for="th_name" class="col-sm-3 control-label">ชื่อ</label>
				<div class="col-sm-9">
					<input type="text"  id="th_name" name="th_name" pattern="[ก-๙]{2,}" min="2" max="50"  class="form-control" required >
				</div>
			</div>
			<div class="form-group">
				<label for="th_lname" class="col-sm-3 control-label">นามสกุล</label>
				<div class="col-sm-9">
					<input type="text" id="th_lname" name="th_lname" pattern="[ก-๙]{2,}" min="2" max="50" class="form-control" required >
				</div>
			</div>
			<!-- Name Eng -->
			<div class="form-group">
				<label for="en_name" class="col-sm-3 control-label">Firstname</label>
				<div class="col-sm-9">
					<input type="text" id="en_name" name="en_name" class="form-control" required >
				</div>
			</div>
			<div class="form-group">
				<label for="en_lname" class="col-sm-3 control-label">Lastname</label>
				<div class="col-sm-9">
					<input type="text" id="en_lname" name="en_lname" class="form-control" required >
				</div>
			</div>
			<div class="form-group">
				<label for="email" class="col-sm-3 control-label">อีเมล</label>
				<div class="col-sm-9">
					<input type="email" id="txt_umail" name="txt_umail" placeholder="xxxx@gmail.com" class="form-control" required >
				</div>
			</div>
			<div class="form-group">
				<label for="pw" class="col-sm-3 control-label">รหัสผ่าน</label>
				<div class="col-sm-9">
					<input type="password" id="txt_upass" name="txt_upass" placeholder="abc456" pattern="[0-9a-zA-Zก-๙]{6,20}" class="form-control" required >
				</div>
			</div>
			<div class="form-group">
				<label for="birth" class="col-sm-3 control-label">วันเกิด</label>
				<div class="col-sm-9">
					<input type="date" id="birth" name="birth" class="form-control" required >
				</div>
			</div>
			<div class="form-group">
				<label for="country" class="col-sm-3 control-label">จังหวัด</label>
				<div class="col-sm-9">
					<select  id="country" name="country" class="form-control">
						<?php

						$result1 = $user->showProvinces();
						foreach($result1 as $row1){  ?>
							<option value="<?php echo $row1['PROVINCE_ID'];?>"><?php echo $row1['PROVINCE_NAME'];?></option>
							<?php
						}?>
					</select>
				</div>
			</div>

			<!-- /.form-group -->
			<div class="form-group">
				<div class="col-sm-9 col-sm-offset-3">
					<button type="submit" class="btn btn-primary btn-block" name="btn-signup">สมัคร</button>
				</div>
			</div>
			<br />


					<label>เคยสมัครแล้ว !<a href="index.php"> เข้าสู่ระบบ </a></label>

		</form>
	</div>
</div>



</body>
</html>
