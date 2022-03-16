<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json;charset=utf-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
$data = json_decode(file_get_contents('php://input'), true);
//$appUrl='http://localhost/anti-addiction/';
//$mysqli = new mysqli("localhost","root","","anti_addiction");
$appUrl='https://antiaddiction.herokuapp.com/';
$mysqli = new mysqli("remotemysql.com","FA7RqwfHL7","m5EG8qFYpF","FA7RqwfHL7");
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

?>
