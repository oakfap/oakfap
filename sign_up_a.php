<?php
session_start();


if(!empty($_POST['add']))
{
  echo "1";
$host = 'localhost';
$username='client';
$password='oakfap222';
$db= 'test';

$user_name=$_POST['username'];
$passwd=$_POST['password'];
$email=$_POST['email'];
$device_id=$_POST['deviceid'];

$conn = mysqli_connect($host, $username, $password, $db);
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

						$sql="INSERT INTO `account` (Name,Password,Email,Device_Id,Status,money2) VALUES ('$user_name','$passwd','$email','$device_id','0','0')";
						if(mysqli_query($conn, $sql)){
							echo "\r\n\t\t".'alert("ลงทะเบียนเรียบร้อย");';
						}else{

							echo "\r\n\t\t".'alert("เกิดข้อผิดพลาด! ในการลงทะเบียน");';
						  printf("error: %s\n", mysqli_error($conn));
							exit();
						}
}
else if (!empty($_POST['create']))
{
  $host = 'localhost';
  $username='client';
  $password='oakfap222';
  $conn = new mysqli($host, $username, $password);
  $sql = "CREATE DATABASE account";
  if (mysqli_query($conn, $sql)) {
      echo "Database created successfully";
  } else {
      echo "Error creating database: " . mysqli_error($conn);
  }

  mysqli_close($conn);
}

 ?>
