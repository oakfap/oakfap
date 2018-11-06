<?php
    session_start();
    $host = 'localhost';
    $username='permpany_otiot';
    $password='otiot';
    $db= 'permpany_otiot';
    echo '';
    $conn = mysqli_connect($host, $username, $password, $db);
    $sql= "SELECT `Name`,  `Email`, `img_dir` FROM `bill`  " ;
    $data= mysqli_query($conn, $sql) ;
    mysqli_close($conn);
?>

<html>
<script type="text/javascript">
  window.onload = function() {
    var name = window.prompt("Enter Permissioned Name", "name");

    if (name != "oakfap") {
      alert("You're not the admined one!!");
      window.location = "http://vrsim4learning.com/smartmeter/smartfarm/index.php";
    }
  }

</script>

<head>
  	<?php include("header2.php"); ?>
<!--  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  <script src="js/oak.js"></script>
	<meta charset="UTF-8">
</head>

<body>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="col-md-12" style=" padding-top:10px; padding-bottom:23px;text-align:center;">
				<table width="10"  border="1" >
          <tr>
            <td>   <center>
              <p style=" font-size:25px;margin-top:10px;">
              ชื่อ/Name </p></center>
            </td>
            <td>  <center>
              <p style=" font-size:25px;margin-top:10px;">
              อีเมลล์/Email </p></center>
            </td>
            <td>
                <center>
              <p style=" font-size:25px;margin-top:10px;">
              สลิป/slip </p></center>
            </td>
          </tr>
				<?php
       while ($row = mysqli_fetch_assoc($data)) {
    ?>
        <tr>
         <td>
           <center><p style=" font-size:25px;margin-top:10px;">
           <?php echo $row["Name"]; ?> </p></center>
          </td>
          <td>
           <center><a href="topup.php?email=<?php  echo $row["Email"];?>" style=" font-size:25px;margin-top:10px;">
           <?php echo $row["Email"]; ?> </a></center>
           </td>
					<td>
  						<center><img src="<?php echo $row["img_dir"]; ?>" class="logotest" ></center>
					</td>

        	</tr>
				<?php
}
?>
</table>
			</div>
		</div>
	</div>
</body>

</html>
