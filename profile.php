<?php
include_once('header.php');

?>
<div class="signin-form">

	<div class="container">

		<form method="post" class="form-signin" action="updd.php">
			<h2 class="form-signin-heading">ข้อมูลส่วนตัว.</h2><hr />
			<div class="form-group">
			<!--	<label for="id" class="col-sm-3 control-label">รหัสบัตรประชาชน</label>
				<div class="col-sm-9">-->
					<input type="text" id="id" value="<?php echo $userRow['id']; ?>" name="id" class="form-control" pattern="[0-9]{13}" size="13" maxlength="13" required hidden readonly>
				<!--	</div>
			</div>-->

			<div class="form-group">
				<label for="gender1" class="col-sm-3 control-label">เพศ</label>
				<div class="col-sm">
					<input type="radio" id="gender" name="gender" value="ชาย" <?php if($userRow['gender']=="ชาย"){echo "checked";} ?>>ชาย
					<input type="radio" id="gender" name="gender" value="หญิง" <?php if($userRow['gender']=="หญิง"){echo "checked";} ?>> หญิง
					<input type="radio" id="gender" name="gender" value="อื่นๆ" <?php if($userRow['gender']=="อื่นๆ"){echo "checked";} ?>> อื่นๆ

				</div>
			</div>
			<div class="form-group">
				<label for="title" class="col-sm-3 control-label">คำนำหน้า</label>
				<div class="col-sm-9">
					<select  id="name_title" name="name_title" class="form-control">
						<?php
						$result = $auth_user->showTitle();
						if(isset($result)){foreach($result as $row){ if($userRow['title_id']==$row['title_id']){?>
							<option selected="selected" value="<?php echo $row['title_id'];?>"><?php echo $row['title_name'];?> - <?php echo $row['title_en'];?></option>
							<?php
						}else{?>
							<option value="<?php echo $row['title_id'];?>"><?php echo $row['title_name'];?> - <?php echo $row['title_en'];?></option>
							<?php
						}
					}
				}?>
			</select>
		</div>
	</div>
	<!-- Name TH -->
	<div class="form-group">
		<label for="th_name" class="col-sm-3 control-label">ชื่อ</label>
		<div class="col-sm-9">
			<input type="text"  id="th_name" value="<?php echo $userRow['th_name']; ?>" name="th_name" pattern="[ก-๙]{2,}" min="2" max="50"  class="form-control" required >
		</div>
	</div>
	<div class="form-group">
		<label for="th_lname" class="col-sm-3 control-label">นามสกุล</label>
		<div class="col-sm-9">
			<input type="text" id="th_lname" value="<?php echo $userRow['th_lname']; ?>" name="th_lname" pattern="[ก-๙]{2,}" min="2" max="50" class="form-control" required >
		</div>
	</div>
	<!-- Name Eng -->
	<div class="form-group">
		<label for="en_name" class="col-sm-3 control-label">Firstname</label>
		<div class="col-sm-9">
			<input type="text" id="en_name" value="<?php echo $userRow['en_name']; ?>" name="en_name" class="form-control" required >
		</div>
	</div>
	<div class="form-group">
		<label for="en_lname" class="col-sm-3 control-label">Lastname</label>
		<div class="col-sm-9">
			<input type="text" id="en_lname" value="<?php echo $userRow['en_lname']; ?>" name="en_lname" class="form-control" required >
		</div>
	</div>
	<!--<div class="form-group">
		<label for="email" class="col-sm-3 control-label">อีเมล</label>
		<div class="col-sm-9">
			<input type="email" id="email" value="<?php //echo $userRow['email']; ?>"  name="email" placeholder="xxxx@gmail.com" class="form-control" readonly required >
		</div>
	</div>
	<div class="form-group">
		<label for="pw" class="col-sm-3 control-label">รหัสผ่าน</label>
		<div class="col-sm-9">
			<input type="password" id="pw" value="<?php// echo $userRow['pw']; ?>" name="pw" placeholder="abc456" pattern="[0-9a-zA-Zก-๙]{6,20}" class="form-control" readonly required >
		</div>
	</div>-->
	<div class="form-group">
		<label for="birth" class="col-sm-3 control-label">วันเกิด</label>
		<div class="col-sm-9">
			<input type="date" id="birth" value="<?php echo $userRow['birth']; ?>" name="birth" class="form-control" required >
		</div>
	</div>
	<div class="form-group">
		<label for="country" class="col-sm-3 control-label">จังหวัด</label>
		<div class="col-sm-9">
			<select  id="country" name="country" class="form-control" >
				<?php

				$result1 = $auth_user->showProvinces();
				foreach($result1 as $row1){ if($row1['PROVINCE_ID']==$userRow['pro_id'])  { ?>
					<option selected="selected" value="<?php echo $row1['PROVINCE_ID'];?>"><?php echo $row1['PROVINCE_NAME'];?></option>
					<?php
				}else{ ?>
						<option value="<?php echo $row1['PROVINCE_ID'];?>"><?php echo $row1['PROVINCE_NAME'];?></option>
						<?php
						}

				}?>
			</select>
		</div>
	</div>

	<!-- /.form-group -->
	<div class="form-group">
		<div class="col-sm-9 col-sm-offset-3">
			<button type="submit" class="btn btn-primary btn-block" name="btn-signup">แก้ไข</button>
		</div>
	</div>
	<br />

</form>
</div>
</div>

<?php
include_once('footer.php');
?>
