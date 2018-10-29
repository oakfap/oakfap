<?php
session_start();
error_reporting(~E_NOTICE);
$data = "1";
$host = 'localhost';
$username='client';
$password='oakfap222';
$db= 'test';

$conn = mysqli_connect($host, $username, $password, $db);
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(!empty($_GET['test']))
{
  if($_GET['test']== 1)
  {
  $sql="SELECT `Status` FROM `account` WHERE `Device_Id`= 1" ;
  $data=mysqli_query($conn, $sql);
  if($data){
    $data=mysqli_fetch_assoc($data);
   echo $data['Status'] ;

  }
 }
 else if($_GET['test']== 2)
 {
   $sql="SELECT `money` FROM `account` WHERE `Device_Id`= 1" ;
   $data=mysqli_query($conn, $sql);
   if($data){
     
     $calc=$data['money']-$_GET['amp'] ;
    if($calc<2)
    {
      $sql="UPDATE `account` SET `Status`= 0 WHERE `Device_Id`=1 " ;
      mysqli_query($conn, $sql);
    }
      $sql="UPDATE `account` SET `money2`= '{$calc}' WHERE `Device_Id`=1 " ;
    mysqli_query($conn, $sql);
 }
}
}
?>
