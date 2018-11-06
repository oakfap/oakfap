<?php
session_start();
error_reporting(~E_NOTICE);
$data = "1";
$host = 'localhost';
$username='permpany_otiot';
$password='otiot';
$db= 'permpany_otiot';

$conn = mysqli_connect($host, $username, $password, $db);
if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

  if (isset($_GET['check'])) {
      $sql="SELECT `Status` FROM `account` WHERE `Device_Id`= 1" ;
      $data=mysqli_query($conn, $sql);
      if ($data) {
          $data=mysqli_fetch_assoc($data);
          echo $data['Status'] ;
      }
  } elseif (isset($_GET['amp'])) {
      $sql="SELECT `electric_left` FROM `account` WHERE `Device_Id`= 1" ;
      $data=mysqli_query($conn, $sql);
      if ($data) {
          $data=mysqli_fetch_assoc($data);
          if ($data['electric_left']<2) {
              echo "out";
              exit();
          } else {
              $calc=$data['electric_left']-$_GET['amp'] ;
              if ($calc<2) {
                  $sql="UPDATE `account` SET `Status`= 0 WHERE `Device_Id`=1 " ;
                  mysqli_query($conn, $sql);
              }
              $sql="UPDATE `account` SET `electric_left`= '{$calc}' WHERE `Device_Id`=1 " ;
              mysqli_query($conn, $sql);
              echo "Success";
          }
      }
  }

?>
