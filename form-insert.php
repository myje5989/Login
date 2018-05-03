<!DOCTYPE html>
<html>
<head>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<title></title>


</head>
<body>
	<!--  $id, $email, $name_title, $th_name, $th_lname, $en_name, $en_lname, $birth, $pro_id   -->
	<div class="container">
		<form class="form-horizontal" role="form" method="post" action="">
			<h2>ลงทะเบียนผู้สัมคร</h2>
			<!-- ID -->
			<div class="form-group">
				<label for="id" class="col-sm-3 control-label">รหัสบัตรประชาชน</label>
				<div class="col-sm-9">
					<input type="text" id="id" class="form-control" pattern="[0-9]{13}" size="13" maxlength="13" required  autofocus>
				</div>
			</div>
			<div class="form-group">
				<label for="title" class="col-sm-3 control-label">เพศ</label>
				<div class="col-sm-9">
					<input type="radio" name="gender" value="ชาย" checked> ชาย<br>
					<input type="radio" name="gender" value="หญิง"> หญิง"<br>
					<input type="radio" name="gender" value="อื่นๆ"> อื่นๆ
				</div>
			</div>
			<div class="form-group">
				<label for="title" class="col-sm-3 control-label">คำนำหน้า</label>
				<div class="col-sm-9">
					<select id="name_title" class="form-control">
						<?php
						include("class/control.php");
						$reg = new regi();
						$result = $reg->showTitle();
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
				<input type="text" id="th_name" pattern="[ก-๙]{2,}" min="2" max="50"  class="form-control" required >
			</div>
		</div>
		<div class="form-group">
			<label for="th_lname" class="col-sm-3 control-label">นามสกุล</label>
			<div class="col-sm-9">
				<input type="text" id="th_lname" pattern="[ก-๙]{2,}" min="2" max="50" class="form-control" required >
			</div>
		</div>
		<!-- Name Eng -->
		<div class="form-group">
			<label for="en_name" class="col-sm-3 control-label">Firstname</label>
			<div class="col-sm-9">
				<input type="text" id="en_name" class="form-control" required >
			</div>
		</div>
		<div class="form-group">
			<label for="en_lname" class="col-sm-3 control-label">Lastname</label>
			<div class="col-sm-9">
				<input type="text" id="en_lname" class="form-control" required >
			</div>
		</div>
		<div class="form-group">
			<label for="email" class="col-sm-3 control-label">อีเมล</label>
			<div class="col-sm-9">
				<input type="email" id="email" placeholder="xxxx@gmail.com" class="form-control" required >
			</div>
		</div>
		<div class="form-group">
			<label for="pw" class="col-sm-3 control-label">รหัสผ่าน</label>
			<div class="col-sm-9">
				<input type="password" id="pw" placeholder="123456" pattern=".{6,20}" class="form-control" required >
			</div>
		</div>
		<div class="form-group">
			<label for="birth" class="col-sm-3 control-label">วันเกิด</label>
			<div class="col-sm-9">
				<input type="date" id="birth" class="form-control" required >
			</div>
		</div>
		<div class="form-group">
			<label for="country" class="col-sm-3 control-label">จังหวัด</label>
			<div class="col-sm-9">
				<select id="country" class="form-control">
					<?php

					$result1 = $reg->showProvinces();
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
				<button type="submit" class="btn btn-primary btn-block">สมัคร</button>
			</div>
		</div>
	</form> <!-- /form -->


</body>
</html>
