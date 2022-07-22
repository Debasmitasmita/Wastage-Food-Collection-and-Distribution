<?php
include_once('db_conn.php');

$useremail=mysqli_real_escape_string($con,$_POST['useremail']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$validation_msg= "";
if(!empty($useremail) && !empty($password) ){

    $validation_msg = array("icon"=>"success", "text"=>"login Succesfull", "title"=>"Done!");
    echo json_encode($validation_msg); //convert array to json format

}else{

    $validation_msg = array("icon"=>"error", "text"=>"Please Fill All Required Field", "title"=>"Sorry!");
    echo json_encode($validation_msg); //convert array to json format
}




?>