<?php
session_start();
error_reporting(~E_NOTICE);

$conn = mysqli_connect($host, $username, $password, $db);
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(!empty($_GET['test']))
{
      $sql="UPDATE `account` SET `Status`= 1 WHERE `Device_Id`= '{$did}'" ;
}
  else
   {
      $sql="UPDATE `account` SET `Status`= 0 WHERE `Device_Id`= '{$did}'" ;
   }
   
  echo $sql;
   if(mysqli_query($conn, $sql)){
      echo "\r\n\t\t".'alert("เรียบร้อย");';
    }else{

      echo "\r\n\t\t".'alert("เกิดข้อผิดพลาด!");';
      printf("error: %s\n", mysqli_error($conn));
      exit();
}
?>
