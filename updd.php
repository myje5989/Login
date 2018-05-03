<?php
require_once("class.user.php");
$auth_user = new USER();

$id =  $_POST['id'];

$gender =  $_POST['gender'];
$name_title  =  $_POST['name_title'];
$th_name  =  $_POST['th_name'];
$th_lname =  $_POST['th_lname'];
$en_name =  $_POST['en_name'];
$en_lname =  $_POST['en_lname'];
$birth =  $_POST['birth'];
$pro_id =  $_POST['country'];
//echo $pro_id ;
      $auth_user->updateUser($id,	$gender, $name_title,
                        $th_name, $th_lname, $en_name, $en_lname,
                        $birth, $pro_id);

      $auth_user->redirect('home.php');

?>
