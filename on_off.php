<?php
	session_start();
	session_start();
	if(!isset($_SESSION['Email']))
	{
		echo '<script type="text/javascript" >alert("คุณยังไม่ได้ login!!")</script>';
		echo '<script type="text/javascript" >window.location = "http://vrsim4learning.com/smartmeter/smartfarm/login_page.php"</script>';
	}
	$email=$_SESSION['Email'];

	$host = 'localhost';
	$username='permpany_otiot';
	$password='otiot';
	$db= 'permpany_otiot';

	$conn = mysqli_connect($host, $username, $password, $db);
	$sql="SELECT `Status`,`Device_Id`,`electric_left` FROM `account` WHERE `Email`= '{$email}' " ;
	$data=mysqli_num_rows(mysqli_query($conn, $sql));
	$data=mysqli_fetch_assoc(mysqli_query($conn, $sql));
	$did=$data['Device_Id'];
	$el = $data['electric_left'];
	$st = $data['Status'];
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
					 <button  type="submit" name="logout" value="asdasd" style="font-family: 'Kanit', sans-serif;color:#000; ">log out</button>
				 </form>
			</div>
			<p style=" font-size:40px;margin-top:10px;padding-right:225px;">
				จัดการไฟฟ้า/Electric Management</p>
			<p style=" font-size:15px;margin-top:10px;">
			<?php
						echo "เลขเครื่องของท่านคือ/Your device number is : ".$did;
						?></p>
			ปริมาณไฟฟ้าที่เหลือ/Current Electricity </p>
    	<input type="text" class="btn" name="el" value="<?php echo $el; echo " ampere"; ?>" readonly style="width:300px;padding:12px;"/>
     <br/>
		 <br/>
     <div style="border:solid;padding-top: 25px;background-color: pink ;">
			<p style=" font-size:40px;margin-top:10px;">
				สวิทซ์/Switch</p>
			<form action="on_off_a.php?status=1" method="post">
				<input type="hidden" name="did" value="<?php echo $did; ?>" >
       <button style="height: 50px; width: 250px;"  type="submit"><p style=" font-size:15px;margin-top:10px;">เปิด</p></button>
		 </form>
			<form  action="on_off_a.php?status=0" method="post">
				<input type="hidden" name="did" value="<?php echo $did; ?>">
       <button style="height: 50px; width: 250px;"  type="submit"><p style=" font-size:15px;margin-top:10px;">ปิด</p></button>
		 </form>
	 </div>
			<br/>
			<br/>

			<a href="main_page.php">
				<input type='hidden' name="add" />
				<button class="btn btn-default" type="submit" onclick="show_alert()" style="font-family: 'Kanit', sans-serif;color:#000; font-size:25px;width:240px;height:40px;">กลับ</button>
			</a>
			<br />
		</div>
	</body>
	<footer>
		<?php include("footter.php"); ?>
	</footer>
</html>
