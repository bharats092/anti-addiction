<?php
include('config/config.php');

$email=$data['email'];
$pwd=$data['pwd'];
$sql = "SELECT id,email, pwd,role FROM user where email='".$email."' && pwd='".$pwd."'";
$result = $mysqli -> query($sql);
$row = $result -> fetch_array(MYSQLI_ASSOC);
$res=array();
if(count($row)>0){
    $res=array("code"=>200,"msg"=>"Logged in successfully","data"=>$row);
}else{
    $res=array("code"=>400,"msg"=>"Incorrect email id or password");
}
echo json_encode($res); 
?>