<?php
include_once('header.php');

?>
<div class="signin-form">

	<div class="container">

		<form method="post" class="form-signin" action="updmajor.php">
			<h2 class="form-signin-heading">ลงทะเบียนสาขา.</h2><hr />
			<div class="form-group">
			<!--	<label for="id" class="col-sm-3 control-label">รหัสบัตรประชาชน</label>
				<div class="col-sm-9">-->
					<input type="text" id="id" value="<?php echo $userRow['id']; ?>" name="id" class="form-control" pattern="[0-9]{13}" size="13" maxlength="13" required hidden readonly>
				<!--	</div>
			</div>-->

			<div class="form-group">
				<label for="faculty1" class="col-sm-3 control-label">สาขาที่ต้องการลงทะเบียน</label>
				<div class="col-sm-9">
					<select  id="major" name="major" class="form-control">
						<?php
						$result = $auth_user->showMajor();
						if(isset($result)){foreach($result as $row){?>
							<option value="<?php echo $row['major_id'];?>"><?php echo $row['major_n'];?> - <?php echo $row['major_l'];?></option>
							<?php
						}
				}
        ?>
			</select>
		</div>
	</div>


	<!-- /.form-group -->
	<div class="form-group">
		<div class="col-sm-9 col-sm-offset-3">
			<button type="submit" class="btn btn-primary btn-block" name="btn-signup">ยืนยันการลงทะเบียน</button>
		</div>
	</div>
	<br />

</form>
</div>
</div>

<?php
include_once('footer.php');
?>
