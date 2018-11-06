<hmtl>

  <head>
    <meta charset="UTF-8">
  </head>

</html>

  <?php
session_start();

$host = 'localhost';
$username='permpany_otiot';
$password='otiot';
$db= 'permpany_otiot';
$conn = mysqli_connect($host, $username, $password, $db) ;

if (!empty($_POST['did'])) {
    $did = $_POST['did'];
    $st = $_GET['status'];
    $sql="UPDATE `account` SET `Status`= '$st'  WHERE `Device_Id`= '{$did}' " ;
    mysqli_query($conn, $sql);
    mysqli_close();
    echo '<script type="text/javascript">
window.onload = function () { alert("เรียบร้อย");
window.location = "http://vrsim4learning.com/smartmeter/smartfarm/on_off.php";
}
 </script>';
} 
?>
