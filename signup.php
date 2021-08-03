<?php
include('config/config.php');

$email=$data['email'];
$pwd=$data['pwd'];
// $sql = "SELECT email, pwd,role FROM user where email='".$email."'";
// $result = $mysqli -> query($sql);
// $row = $result -> fetch_array(MYSQLI_ASSOC);
// $res=array();
// if(count($row)>0){
//     $res=array("code"=>400,"msg"=>"User with same email already exists");
// }else{
    $sql1 = "INSERT INTO `user`(`email`, `pwd`) VALUES ('".$email."','".$pwd."')";
    $mysqli -> query($sql1);
    //$id=$mysqli ->insert_id;
    $res=array("code"=>200,"msg"=>"Signed up successfully");
   
//}

echo json_encode($res); 
?>