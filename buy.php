<hmtl>
  <head>
   <meta charset="UTF-8">
 </head>
</html>

<?php
session_start();

if(!empty($_POST['buy']))
{
$cm = $_POST['buy'];
$pm = $_POST['total'];
$el = $_GET['el'];
$m = 0 ;
if($cm === 0 OR $cm<$pm )
{
  echo '<script type="text/javascript">
      window.onload = function () { alert("เงินของคุณไม่พอ");
      window.location = "http://vrsim4learning.com/smartmeter/smartfarm/main_page.php";
     }
         </script>';
}else if ($pm <= 0 )
{
  echo '<script type="text/javascript">
      window.onload = function () { alert("ใส่ข้อมูลผิดรูปเเบบ");
      window.location = "http://vrsim4learning.com/smartmeter/smartfarm/main_page.php";
     }
         </script>';
}
else{
$m = $cm - $pm ;
$email = $_SESSION['Email'];
$elec = $pm/10 ;
$el = $el + $elec;
$sql="UPDATE `account` SET `money2`= '$m' ,`electric_left`= '$el'  WHERE `Email`= '{$email}' " ;
$host = 'localhost';
$username='permpany_otiot';
$password='otiot';
$db= 'permpany_otiot';

$conn = mysqli_connect($host, $username, $password, $db) ;
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(mysqli_query($conn, $sql)){
  echo '<script type="text/javascript">
      window.onload = function () { alert("เรียบร้อย");
      window.location = "http://vrsim4learning.com/smartmeter/smartfarm/main_page.php";
     }
         </script>';
 }else{

   echo '<script type="text/javascript">
       window.onload = function () { alert("Error connecting to db");
       window.location = "http://vrsim4learning.com/smartmeter/smartfarm/main_page.php";
      }
          </script>';
   exit();
}

}
;

}
?>
