<?php
include('config/config.php');

$title=$data['title'];
$details=$data['details'];
$sql = "INSERT INTO `tips`(`title`, `details`) VALUES ('".$title."' ,'".$details."')";
$result = $mysqli -> query($sql);
$id=$mysqli ->insert_id;
if($id){
    $res=array("code"=>200,"msg"=>"Tips added successfully","data"=>$id);
}else{
    $res=array("code"=>400,"msg"=>"Something went wrong");
}


echo json_encode($res); 
?>