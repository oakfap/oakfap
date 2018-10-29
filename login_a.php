<?php
session_start();



if(!empty($_POST['get']))
{

$host = 'localhost';
$username='client';
$password='oakfap222';
$db= 'test';

$user_name=$_POST['username'];
$passwd=$_POST['password'];


$conn = mysqli_connect($host, $username, $password, $db);
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

						$sql="SELECT `Device_Id` FROM `account` WHERE `Name`= '{$user_name}' AND `Password`= '{$passwd}'  " ;

						if(mysqli_num_rows(mysqli_query($conn, $sql))){
              $data=mysqli_fetch_assoc(mysqli_query($conn, $sql));
              echo '<script type="text/javascript">
                  window.onload = function () { alert("login เรียบร้อย");
                  window.location.href = "http://192.168.1.41/main_page.php?Device_Id="+string($data['Device_Id'])";
                 }
                     </script>';
						}else{
              echo '<script type="text/javascript">
                  window.onload = function () { alert("เกิดข้อผิดพลาด! ในการหาข้อมูลโปรดเช็ค Input หรือ ลงทะเบียนก่อน");
                  window.location = "http://192.168.1.41/login_page.php";
                 }
                     </script>';

						}
            exit();
}


 ?>
