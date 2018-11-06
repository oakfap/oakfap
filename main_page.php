<?php
	session_start();

	if(!isset($_SESSION['Email']))
	{
		echo '<script type="text/javascript">
				window.onload = function () { alert("ยังไม่ login !!");
				window.location = "http://vrsim4learning.com/smartmeter/smartfarm/login_page.php";
			 }
					 </script>' ;
	}

  $email=$_SESSION['Email'];

	$host = 'localhost';
	$username='permpany_otiot';
	$password='otiot';
	$db= 'permpany_otiot';

	$conn = mysqli_connect($host, $username, $password, $db);
	$sql="SELECT `money2`,`Device_Id`,`electric_left` FROM `account` WHERE `Email`= '{$email}' " ;
	$data=mysqli_num_rows(mysqli_query($conn, $sql));
	$data=mysqli_fetch_assoc(mysqli_query($conn, $sql));
	$muney=$data['money2'];
  $did=$data['Device_Id'];
	$el = $data['electric_left'];
	$sql2="SELECT `img_dir` FROM `bill` WHERE `Email`= '{$email}' " ;
	$data2=mysqli_fetch_assoc(mysqli_query($conn, $sql2));
	$img_dir=$data2['img_dir'];
?>

<html>
<body>
	<head>

		<script type="text/javascript">
			function show_alert() {
				alert("Changing to Signin Page!");

			}
		</script>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php include ("header2.php"); ?>
		<div class="col-md-12" id="Divll" style=" padding-top:10px; padding-bottom:23px;text-align:center;">
			<div id="Div1">
				<?php if (isset($_SESSION['Email'])) {
	    echo "User : ". $_SESSION['Email'];
	         } else {
	    echo "No user login yet!";
	       } ?>
				 <form method="post" action="login_page.php">
					 <button  type="submit" name="logout" value="asdasd" style="font-family: 'Kanit', sans-serif;color:#000; ">	<?php if (isset($_SESSION['Email'])) {
		 	    echo "logout";
		 	         } else {
		 	    echo "login";
		 	       } ?></button>
				 </form>
			</div>
			<p style=" font-size:40px;margin-top:10px;padding-right:225px;">
				หน้าหลัก/Main page</p>
			<p style=" font-size:15px;margin-top:10px;">
			<?php
						echo "เลขเครื่องของท่านคือ/Your device number is : ".$did;
						?></p>
			<form method="post" action="buy.php?el=<?php echo $el; ?>">
				<p style=" font-size:25px;margin-top:10px;">
					เงินที่มี/Current Money</p>
				<input type="text" class="btn" name="muney" value="<?php echo $muney; echo " ฿" ?>" readonly style="width:300px;padding:12px;"/>
				<p style=" font-size:25px;margin-top:10px;">
					ปริมาณไฟฟ้าที่เหลือ/Current Electricity </p>
				<input type="text" class="btn" name="el" value="<?php echo $el; echo " ampere"; ?>" readonly style="width:300px;padding:12px;"/>
				<p style=" font-size:25px;margin-top:10px;">
					ระบุจำเงินที่จะจ่าย/Money to pay</p>
				<input type="text" class="btn" name="total" required="required" placeholder="โปรดใส่ตัวเลขที่เป็นจำนวนเต็มบวก" style="width:300px;padding:12px;" />
				<br />
				<br />
				<input type='hidden' name="buy" value="<?php echo $muney; ?>" />
				<button class="btn btn-default" type="submit" style="font-family: 'Kanit', sans-serif;color:#000; font-size:25px;width:150px;height:40px;">ตกลง</button>
			</form>

			<a href="index.php">
				<input type='hidden' name="add" />
				<button class="btn btn-default" type="submit" onclick="show_alert()" style="font-family: 'Kanit', sans-serif;color:#000; font-size:25px;width:240px;height:40px;">ไปหน้าสมัครสมาชิค</button>
			</a>
			<a href="slip.php">
				<input type='hidden' name="add" />
				<button style="font-family: 'Kanit', sans-serif;color:#000; font-size:25px;width:240px;height:40px;">เซฟ Slip</button>
			</a>
			<br>
			<a href="on_off.php">
				<input type='hidden' name="add" />
				<button style="font-family: 'Kanit', sans-serif;color:#000; font-size:25px;width:240px;height:40px;">ไปจัดการไฟฟ้า</button>
			</a>
			<a href="indi_showslip.php?img_dir=<?php echo $img_dir; ?>">
				<button style="font-family: 'Kanit', sans-serif;color:#000; font-size:25px;width:240px;height:40px;">ดูสลิป</button>
			</a>
			<br />
		</div>
	</body>
	<footer>
		<?php include("footter.php"); ?>
	</footer>
</html>
