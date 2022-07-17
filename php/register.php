<?php
include_once('db_conn.php');
$username=mysqli_real_escape_string($con,$_POST['username']);
$password=mysqli_real_escape_string($con,$_POST['password']);
echo "hiii Debasimita ".$username;
echo "hiii Debasimita ".$password;




?>