<?php session_start();
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
<body>
  <?php include("header2.php"); ?>
  <div id="Divl">
    <?php if (isset($_SESSION['Email'])) {
  echo "User : ". $_SESSION['Email'];
       } else {
  echo "No user login yet!";
     } ?>
  </div>
  <div class="col-md-12" id="Divll" style=" padding-top:10px; padding-bottom:10px;text-align:center;">
    <form action="upload.php" method="post" enctype="multipart/form-data">
      <p style=" font-size:25px;margin-top:10px;padding-right:225px;">
        ระบุชื่อ-นามสกุล/Name-surname</p>
      <input type="text" class="btn" name="name1" required="required" style="width:500px;padding:5px;" />
      <p style=" font-size:25px;">
        อีเมลล์/Email</p>
      <input type="text" class="btn" name="email" required="required" style="width:500px;padding:5px;">
      <p style="font-size:25px;">
       เบอร์โทรศัพท์/Tel.number</p>
      <input type="text" class="btn" name="tel" required="required" style="width:500px;padding:5px;">
      <p style=" font-size:25px;">
        เลขที่คำสั่งซื้อ / Order ID</p>
      <input type="text" class="btn" name="order" required="required" style="width:500px;padding:5px;;">
      <p style=" font-size:25px;">
        วันที่ชำระเงิน / Date (dd/mm/yy)</p>
      <input type="text" class="btn" name="date" required="required" style="width:500px;padding:5px;;">
      <p style=" font-size:25px;">
        จำนวนเงิน / Total</p>
      <input type="text" class="btn" name="total" required="required" style="width:500px;padding:5px;;">
      <p style=" font-size:25px;">
        ธนาคารที่ชำระเงิน / Bank </p>
      <select name="bank" style="width:500px;padding:5px; ">
        <option value="ธนาคารไทยพาณิชย์" selected>ธนาคารไทยพาณิชย์ </option>
        <option value="ธนาคารกสิกรไทย">ธนาคารกสิกรไทย</option>
        <option value="ธนาคารกรุงเทพ">ธนาคารกรุงเทพ</option>
        <option value="ธนาคารกรุงศรีอยุธยา">ธนาคารกรุงศรีอยุธยา</option>
      </select>
      <p style=" font-size:25px;">
        อัพโหลดสลิป / Upload Slip </p>
      <input type="file" class="btn" required name="fileToUpload" id="fileToUpload">
      <input type="submit" value="Upload Image" name="submit">
    </form>
  </div>
</body>
<footer>
	<?php include("footter.php"); ?>
</footer>
</html>
