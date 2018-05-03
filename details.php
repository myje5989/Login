<?php
include_once('header.php');

?>


	<div class="container">


			<h2 class="form-signin-heading">ข้อมูลส่วนตัว.</h2><hr />
			<div class="form-group">
			<label for="id" class="col-sm-3 control-label">รหัสบัตรประชาชน : <?php echo $userRow['id']; ?></label>
			</div>
			<div class="form-group">
				<label for="gender1" class="col-sm-3 control-label">เพศ : <?php echo $userRow['gender'];?></label>
			</div>
			<div class="form-group">
				<label for="thName" class="col-sm-4 control-label">ชื่อภาษาไทย : <?php echo $userRow['title_name']." ".$userRow['th_name']." ".$userRow['th_lname'];?></label>
	     </div>
       <div class="form-group">
         <label for="enName" class="col-sm-4 control-label">ชื่อภาษาอังกฤษ: <?php echo $userRow['title_en']." ".$userRow['en_name']." ".$userRow['en_lname'];?></label>
        </div>
	<!-- Name TH -->
	<div class="form-group">
		<label for="email" class="col-sm-3 control-label">อีเมล : <?php echo $userRow['email']; ?></label>
	</div>
	<div class="form-group">
		<label for="birth" class="col-sm-3 control-label">วันเกิด : <?php echo $userRow['birth']; ?></label>
	</div>
	<div class="form-group">
		<label for="country" class="col-sm-3 control-label">จังหวัด : <?php echo $userRow['PROVINCE_NAME']; ?></label>
	</div>
<?php if($userRow['major_id']!=0 || !empty($userRow['major_id'])){
  echo '<div class="form-group">
    <label for="faculty" class="col-sm-3 control-label">คณะ :  '.$userRow['faculty_n'].'</label>
  </div>
  <div class="form-group">
    <label for="major" class="col-sm-3 control-label">สาขา : '.$userRow['major_n'].' </label>
	</div>';

}
?>
	<!-- /.form-group -->
	<br />

</div>


<?php
include_once('footer.php');
?>
