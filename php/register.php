<?php
include_once('db_conn.php');
$username=mysqli_real_escape_string($con,$_POST['username']);
$useremail=mysqli_real_escape_string($con,$_POST['useremail']);
$userrole=mysqli_real_escape_string($con,$_POST['userrole']);
$state=mysqli_real_escape_string($con,$_POST['state']);
$city=mysqli_real_escape_string($con,$_POST['city']);
$password=mysqli_real_escape_string($con,$_POST['password']);
echo "hiii Debasimita ".$username;
echo "hii".$useremail;
echo "hii deba".$userrole;
echo "hii debasmita".$state;
echo "hello".$city;
echo "hiii Debasimita ".$password;




?>