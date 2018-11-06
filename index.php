<?php
    session_start();
    if (!empty($_POST['logout'])) {
        sunset();
        echo '<a href="index.php"></a>';
    }
  function sunset()
  {
      session_unset();
  }

?>

<html>

<head>
	<script type="text/javascript">
		function show_alert() {
			alert("Changing to login Page!");
		}
	</script>
	<meta charset="UTF-8">
	<style>
		#Divr{
		 background-color: lightgray;
		 padding-top: 25px ;
		 padding-bottom: 25px ;
		 float: right;
		 border: dotted;
	 }
		</style>
</head>

<body>
	<?php include("header.php"); ?>
	<div class="col-md-12" id="Divll" style="padding-top:10px; padding-bottom:23px;text-align:center;">
    <div id="Div1" >
      <?php if (isset($_SESSION['Email'])) {
    echo "User : ". $_SESSION['Email'];
         } else {
    echo "No user login yet!";
       } ?>
       <br/>
       <form style="float:left;" method="post" action="login_page.php">
         <button  type="submit" name="logout" value="asdasd" style="font-family: 'Kanit', sans-serif;color:#000; ">	<?php if (isset($_SESSION['Email'])) {
        echo "logout";
             } else {
        echo "login";
           } ?></button>
       </form>
    <?php if (isset($_SESSION['Email'])){ ?>
       <form style="float:right;" action="main_page.php">
         <button  type="submit" style="font-family: 'Kanit', sans-serif;color:#000; ">ไปหน้าหลัก</button>
       </form>
  <?php } ?>
    </div>
		<p style=" font-size:40px;margin-top:10px; padding-right:225px;">
			สมัครสมาชิก/Signin</p>
		<form method="post" action="sign_up_a.php">
			<p style=" font-size:25px;margin-top:10px;">
				ระบุชื่อผู้ใช้งาน/username</p>
			<input type="text" class="btn" name="username" required="required" style="width:300px;padding:12px;" />
			<p style=" font-size:25px;">
				ระบุรหัสผ่าน/password</p>
			<input type="password" class="btn" name="password" required="required" style="width:300px;padding:12px;">
			<p style="font-size:25px;">
				ระบุอีเมลแอดเดรส/email</p>
			<input type="text" class="btn" name="email" required="required" style="width:300px;padding:12px;">
			<p style=" font-size:25px;">
				ระบุไอดีอุปกรณ์/Device Id</p>
			<input type="text" class="btn" name="deviceid" required="required" style="width:300px;padding:12px;">
			<br />
			<br />
			<input type='hidden' name="add" value="test" />
			<button class="btn btn-default" type="submit" style="font-family: 'Kanit', sans-serif;color:#000; font-size:25px;width:150px;height:40px;">ลงทะเบียน</button>
		</form>

		<form action="login_page.php">

			<input type='hidden' name="add" value="test" />
			<button class="btn btn-default" type="submit" onclick="show_alert()" style="font-family: 'Kanit', sans-serif;color:#000; font-size:25px;width:240px;height:40px;">ไปหน้าลงชื่อเข้าใช้</button>
		</form>
	</div>
</body>
<footer>
	<?php include("footter.php"); ?>
</footer>
</html>
