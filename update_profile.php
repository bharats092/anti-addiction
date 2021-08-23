<?php
include('config/config.php');

$email=$data['email'];
$pwd=$data['pwd'];
$id=$data['id'];

    $sql = "UPDATE `user` SET email='".$email."',pwd='".$pwd."' where id=".$id;
    $result = $mysqli -> query($sql);
    
    if($result){
        $res=array("code"=>200,"msg"=>"Profile updated successfully");
    }else{
        $res=array("code"=>400,"msg"=>"Something went wrong");
    }


echo json_encode($res); 
?>