<?php
include('config/config.php');

$id=$data['id'];
$sql = "DELETE FROM `tips` WHERE id='".$id."'";
$result = $mysqli -> query($sql);
$res=array();
if($result){
    $res=array("code"=>200,"msg"=>"Tip deleted successfully");
}else{
    $res=array("code"=>400,"msg"=>"Something went wrong");
}
echo json_encode($res); 
?>