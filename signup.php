<?php
include('config/config.php');

$email=$data['email'];
$pwd=$data['pwd'];
$sql = "SELECT email, pwd,role FROM user where email='".$email."'";
$result = $mysqli -> query($sql);
$row = $result -> fetch_array(MYSQLI_ASSOC);
//print_r($row);
echo "INSERT INTO `user`(`email`, `pwd`) VALUES ('".$email."','".$pwd."')";
// $res=array();
// if(count($row)>0){
//     $res=array("code"=>400,"msg"=>"User with same email already exists");
// }else{
//     $sql = "INSERT INTO `user`(`email`, `pwd`) VALUES ('".$email."','".$pwd."')";
//     $result = $mysqli -> query($sql);
//     //$id=$mysqli ->insert_id;
//     if($id){
//         $res=array("code"=>200,"msg"=>"Signed up successfully");
//     }else{
//         $res=array("code"=>400,"msg"=>"Something went wrong");
//     }
// }

// echo json_encode($res); 
?>