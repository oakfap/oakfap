<?php
session_start();
$host = 'localhost';
$username='client';
$password='oakfap222';
$db= 'test';

$device_id=$_POST['deviceid'];

$conn = mysqli_connect($host, $username, $password, $db);
$sql="SELECT `Name` FROM `account` WHERE `Device_Id`= '{$device_id}'" ;
$data=mysqli_query($conn, $sql);
if($data){
  $data=mysqli_fetch_assoc($data);
	echo "\r\n\t\t".'alert("เรียบร้อย");';
  printf("<br> Hi Mr. :: %s",$data['Name']);
  $_SESSION['name'] = $data['Name'];
	}else{

		echo "\r\n\t\t".'alert("เกิดข้อผิดพลาด! ");';
		printf("error: %s\n", mysqli_error($conn));
		exit();
	}


?>
