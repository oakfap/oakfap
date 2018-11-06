<?php
session_start();
if(!empty($_GET['email']))
{
  $host = 'localhost';
  $username='permpany_otiot';
  $password='otiot';
  $db= 'permpany_otiot';
  $email = $_GET['email'];
  $conn = mysqli_connect($host, $username, $password, $db);
  //$sql="UPDATE `bill` SET `img_dir`= '$target_file'  WHERE `Email`= '{$email}' " ;
  $sql="SELECT `Name`,`Tel`  FROM `bill`  WHERE `Email`='{$email}' ";
  $data= mysqli_query($conn, $sql);
  if($data)
  {
    $data= mysqli_fetch_assoc($data);
    $name = $data['Name'];
    $tel = $data['Tel'];
  }else {
    echo '<script type="text/javascript">
        window.onload = function () { alert("Error Connecting with Database Please try again");
          window.location = "http://vrsim4learning.com/smartmeter/smartfarm/index.php";
       }
           </script>';
}
}else {
  echo '<script type="text/javascript">
      window.onload = function () { alert("Error Connecting with Database Please try again");
window.location = "http://vrsim4learning.com/smartmeter/smartfarm/index.php";
     }
         </script>';
}
 ?>

<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php include ("header2.php"); ?>
    <div class="col-md-12" id="Divll" style=" padding-top:10px; padding-bottom:10px;text-align:center;">
      <p style=" font-size:35px;margin-top:10px;">
        เติมเงิน/Topup</p>
        <p style=" font-size:15px;margin-top:10px;">
        <font color="red">  *โปรดเช็คข้อมูล  </font></p>
      <form action="topup_a.php" method="post">
        <p style=" font-size:25px;margin-top:10px;">
          ระบุชื่อ-นามสกุล/Name-surname</p>
        <input type="text" class="btn"  value="<?php echo $name; ?>"  style="width:500px;padding:5px;text-align:center;" readonly />
        <p style=" font-size:25px;">
          อีเมลล์/Email</p>
        <input type="text" class="btn"  value="<?php echo $email; ?>"  style="width:500px;padding:5px;text-align:center;" readonly />
        <p style="font-size:25px;">
         เบอร์โทรศัพท์/Tel.number</p>
        <input type="text" class="btn"  value="<?php echo $tel; ?>" style="width:500px;padding:5px;text-align:center;" readonly />
        <p style="font-size:25px;">  </form>
        <form action="topup_a.php?email=<?php  echo $email;?>" method="post" >
          จำนวนเงิน / Total</p>
        <input type="text" class="btn" name="total" required="required" placeholder="จำนวนเงินที่จะเติม" autofocus style="width:500px;padding:5px;;">
        <input type="submit" value="topup" name="topup">
      </form>
    </div>
  </body>
  <footer>
  	<?php include("footter.php"); ?>
  </footer>
</html>
