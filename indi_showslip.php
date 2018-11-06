<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
<style>
#myDIV {
    width: 100%;
    padding: 50px 0;
    text-align: center;
    background-color: lightgreen;
    margin-top: 20px;
}
</style>
</head>
<body>
<?php include("header2.php"); ?>
<button style="height:50px; width:50px;" align="center" onclick="myFunction()">เปิด/ปิด</button>

<div id="myDIV">
<img src="<?php echo $_GET['img_dir']; ?>" alt="No Silp just yet">
</div>
<script>
function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>

</body>
<footer>
	<?php include("footter.php"); ?>
</footer>
</html>
