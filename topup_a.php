<hmtl>
  <head>
   <meta charset="UTF-8">
 </head>
</html>

<?php
session_start();

if (!empty($_POST['topup'])&&isset($_GET['email'])) {
    $host = 'localhost';
    $username='permpany_otiot';
    $password='otiot';
    $db= 'permpany_otiot';
    $total=$_POST['total'];
    $email = $_GET['email'];
    $conn = mysqli_connect($host, $username, $password, $db);
    if ($conn === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $sql="SELECT `money2` FROM  `account` WHERE `Email`= '{$email}' " ;

    if (mysqli_num_rows(mysqli_query($conn, $sql))) {
        $data=mysqli_fetch_assoc(mysqli_query($conn, $sql));
        $m = $data['money2']+ $total;
        $sql="UPDATE `account` SET `money2` = '$m' WHERE `Email`= '{$email}' " ;
        if(mysqli_query($conn, $sql))
        {
          echo '<script type="text/javascript">
              window.onload = function () { alert("ปรับเงินเรียบร้อย");
              window.location = "http://vrsim4learning.com/smartmeter/smartfarm/showslip.php";
             }
                 </script>' ;
        }else {
          echo '<script type="text/javascript">
              window.onload = function () { alert("Error โปรดลองใหม่");
              window.location = "http://vrsim4learning.com/smartmeter/smartfarm/showslip.php";
             }
                 </script>' ;
        }
        mysqli_close($conn);
    } else {
    }
} else {
    echo "eiei";
}
 ?>
