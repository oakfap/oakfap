<?php
session_start();
if(!empty($_POST['logout'])){
	sunset();
	echo '<a href="index.php"></a>';
}
if(isset($_SESSION['Email']))
{
 echo '<script type="text/javascript" >alert("คุณ log in เเล้ว redirect to หน้าหลัก !!")</script>';
 echo '<script type="text/javascript" >window.location = "http://vrsim4learning.com/smartmeter/smartfarm/main_page.php"</script>';
}
function sunset()
	{
	 session_unset();
	}
 ?>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
	<?php include ("header2.php"); ?>
			<div class="col-md-12" id="Divll" style=" padding-top:10px; padding-bottom:23px;text-align:center;">
				<p style=" font-size:40px;margin-top:10px;">
					ลงชื่อเข้าใช้/Login</p>
				<form method="post" action="login_a.php">
					<p style=" font-size:25px;margin-top:10px;">
						ระบุชื่อผู้ใช้งาน/username</p>
					<input type="text" class="btn" name="username" required="required" style="width:300px;padding:12px;" />
					<br />
					<br />
					<p style=" font-size:25px;">
						ระบุรหัสผ่าน/password</p>
					<input type="password" class="btn" name="password" required="required" style="width:300px;padding:12px;">
					<br />
					<br />

					<input type='hidden' name="get" value="eiei" />
					<button class="btn btn-default" type="submit" style="font-family: 'Kanit', sans-serif;color:#000; font-size:25px;width:150px;height:40px;">ลงชื่อเข้าใช้</button>
				</form>
				<a href="index.php">
					<input type='hidden' name="add" />
					<button class="btn btn-default" type="submit" onclick="show_alert()" style="font-family: 'Kanit', sans-serif;color:#000; font-size:25px;width:240px;height:40px;">ไปหน้าลงทะเบียน</button>
				</a>
			</div>
</body>
<footer>
	<?php include("footter.php"); ?>
</footer>
</html>
