<?php

	require_once("session.php");

	require_once("class.user.php");
	$auth_user = new USER();


	$user_id = $_SESSION['user_session'];

	$stmt = $auth_user->runQuery("SELECT * FROM  regis.user u
JOIN regis.provinces p on u.pro_id=p.PROVINCE_ID
NATURAL JOIN regis.major m
NATURAL JOIN regis.faculty f
JOIN regis.title_name tn ON  u.name_title=tn.title_id WHERE id= :user_id");
	$stmt->execute(array(":user_id"=>$user_id));

	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <title>ระบบลงทะเบียนนักศึกษาใหม่</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light default navbar-fixed-top">
  <div class="center container-fluid">
    <div class="container">
      <div class="navbar-header">

      <a class="navbar-brand" href="home.php"><img src="img/cb1.png">ระบบลงทะเบียนนักศึกษาใหม่ (จัดทำเพื่อใช้ในการศึกษา)</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <?php if($userRow['major_id']==0 || empty($userRow['major_id'])){echo '<a class="nav-item nav-link active" href="addMajor.php">สมัครเข้าเรียน <span class="sr-only">(current)</span></a>'; }?>
          <a class="nav-item nav-link" href="opencourse.php">หลักสูตรที่เปิดสอน</a>
					<a class="nav-item nav-link" href="alluser.php">รายชื่อผู้สมัครทั้งหมด</a>
          <!--<a class="nav-item nav-link disabled" href="#">สมัครสมาชิก</a>-->
        </div>
        <div class="nav navbar-nav navbar-right">

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
        <span class="glyphicon glyphicon-user"></span>&nbsp;สวัสดี ' <?php echo $userRow['th_name']; ?>&nbsp;<span class="caret"></span></a>
            <ul class="dropdown-menu">
							<li><a href="details.php"><span class="glyphicon glyphicon-user"></span>&nbsp;ข้อมูลส่วนตัว</a></li>
              <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span>&nbsp;แก้ไขข้อมูลส่วนตัว</a></li>
              <li><a href="logout.php?logout=true"><span class="glyphicon glyphicon-log-out"></span>&nbsp;ออกจากระบบ</a></li>
            </ul>
          </li>
        </div>
      </div>
    </div>
    </div>
    </div>


    </nav>
