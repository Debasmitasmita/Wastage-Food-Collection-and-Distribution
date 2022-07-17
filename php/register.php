<?php
include_once('db_conn.php');
$username=mysqli_real_escape_string($con,$_POST['username']);
$useremail=mysqli_real_escape_string($con,$_POST['useremail']);
$userrole=mysqli_real_escape_string($con,$_POST['userrole']);
$state=mysqli_real_escape_string($con,$_POST['state']);
$city=mysqli_real_escape_string($con,$_POST['city']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$repassword=mysqli_real_escape_string($con,$_POST['repassword']);
$validation_msg= "";
if(!empty($username) && !empty($useremail) && !empty($userrole) && !empty($state) && !empty($city) && !empty($password) && !empty($repassword)){

    $validation_msg = array("icon"=>"success", "text"=>"Registration Succesfull", "title"=>"Done!");
    echo json_encode($validation_msg); //convert array to json format

}else{

    $validation_msg = array("icon"=>"error", "text"=>"Please Fill All Required Field", "title"=>"Sorry!");
    echo json_encode($validation_msg); //convert array to json format
}




?>