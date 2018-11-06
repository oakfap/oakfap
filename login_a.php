<hmtl>
  <head>
   <meta charset="UTF-8">
 </head>
</html>

<?php
session_start();

if (isset($_SESSION['Email']))
{
  echo '<script type="text/javascript">
      window.onload = function () { alert("คุณloginเเล้ว redirect to หน้าหลัก");
      window.location = "http://vrsim4learning.com/smartmeter/smartfarm/main_page.php";
     }
         </script>';
}
if(!empty($_POST['get']))
{

  $host = 'localhost';
	$username='permpany_otiot';
	$password='otiot';
	$db= 'permpany_otiot';

$user_name=$_POST['username'];
$passwd=$_POST['password'];
$conn = mysqli_connect($host, $username, $password, $db);
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

						$sql="SELECT  `Name`,`Device_Id`, `Email` FROM `account` WHERE `Name`= '{$user_name}' AND `Password`= '{$passwd}'  " ;

						if(mysqli_num_rows(mysqli_query($conn, $sql))){
              $data=mysqli_fetch_assoc(mysqli_query($conn, $sql));
              $_SESSION['Name']= $data['Name'];
              $_SESSION['Device_Id']= $data['Device_Id'];
              $_SESSION['Email']= $data['Email'];
              echo '<script type="text/javascript">
                  window.onload = function () { alert("login เรียบร้อย");
                      window.location = "http://vrsim4learning.com/smartmeter/smartfarm/main_page.php";
                 }
                     </script>';
              mysqli_close($conn);
						}else{

              echo '<script type="text/javascript">
                  window.onload = function () { alert("เกิดข้อผิดพลาด! ในการหาข้อมูลโปรดเช็ค Input หรือ ลงทะเบียนก่อน");
                  window.location = "http://vrsim4learning.com/smartmeter/smartfarm/login_page.php";
                 }
                     </script>';
						}

}
else
{die("ERROR");}
 ?>
<html>
 <body>
   <p style=" font-size:40px;margin-top:50px; text-align:center;">
  Hello!! User: <?php
echo  $_SESSION['Name'];
?>
</p>

   <div class="col-md-12" style=" padding-top:10px; padding-bottom:23px;text-align:center;" >
     <a  href="main_page.php">
       <button class="btn btn-default" type="submit" style="font-family: 'Kanit', sans-serif;color:#000; font-size:25px;width:150px;height:40px;">ตกลง</button>
     </a>
      <a href="login_page.php">
          <input type='hidden' name="add" value="test" />
              <button  class="btn btn-default" type="submit" style="font-family: 'Kanit', sans-serif;color:#000; font-size:25px;width:150px;height:40px;">กลับ</button>
      </a>

</body>
</html>
