<?php
require_once("class.user.php");
$auth_user = new USER();

$id =  $_POST['id'];

$major=  $_POST['major'];

//echo $pro_id ;
      $auth_user->updateMajor($id,	$major);

      $auth_user->redirect('home.php');

?>
