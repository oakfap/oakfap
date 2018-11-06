<hmtl>
  <head>
    <meta charset="UTF-8">
  </head>
</html>

<?php
session_start();
$target_dir = "media/images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

$host = 'localhost';
$username='permpany_otiot';
$password='otiot';
$db= 'permpany_otiot';

if (!empty($_POST["submit"])) {
    $name = $_POST['name1'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $order = $_POST['order'];
    $date = $_POST['date'];
    $total = $_POST['total'];
    $bank = $_POST['bank'];
    echo $email  ;
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
          echo '<script type="text/javascript">
              window.onload = function () { alert("File is not image");
              window.location = "http://vrsim4learning.com/smartmeter/smartfarm/slip.php";
             }
                 </script>' ;
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
      echo '<script type="text/javascript">
          window.onload = function () { alert("Your file exists");
          window.location = "http://vrsim4learning.com/smartmeter/smartfarm/slip.php";
         }
             </script>' ;
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 5*1024*1024) {
      echo '<script type="text/javascript">
          window.onload = function () { alert("Your file to large.");
          window.location = "http://vrsim4learning.com/smartmeter/smartfarm/slip.php";
         }
             </script>' ;
        $uploadOk = 0;
    }
    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif") {
  echo '<script type="text/javascript">
      window.onload = function () { alert("Error with your file surname");
      window.location = "http://vrsim4learning.com/smartmeter/smartfarm/slip.php";
     }
         </script>' ;
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $conn = mysqli_connect($host, $username, $password, $db);
            //$sql="UPDATE `bill` SET `img_dir`= '$target_file'  WHERE `Email`= '{$email}' " ;
            $sql="INSERT INTO `bill` (Name,Email,Tel,Order_id,Date,Total,Bank,img_dir) VALUES ('$name','$email','$tel','$order','$date','$total','$bank','$target_file')";
            if (mysqli_query($conn, $sql)) {
                echo '<script type="text/javascript">
                    window.onload = function () { alert("Update successfully");
                     window.location = "http://vrsim4learning.com/smartmeter/smartfarm/slip.php";
                   }
                       </script>' ;

            }else echo "error with db";
          } else {
            echo '<script type="text/javascript">
                window.onload = function () { alert("Error upload your file");
                window.location = "http://vrsim4learning.com/smartmeter/smartfarm/slip.php";
               }
                   </script>' ;
            }
        }

    }

?>
