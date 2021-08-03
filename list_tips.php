<?php
include('config/config.php');

$sql = "SELECT * FROM tips where 1";
$result = $mysqli -> query($sql);

$res=array();
$finalData=array();
while($row = $result -> fetch_array(MYSQLI_ASSOC)){
    $finalData[]=$row;
}
if(count($finalData)>0){
    $res=array("code"=>200,"msg"=>"Tips fetched successfully","data"=>$finalData);
}else{
    $res=array("code"=>400,"msg"=>"No tips found");
}
echo json_encode($res); 
?>