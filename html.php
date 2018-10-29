<?php
	session_start();
?>

<html>
<body>
<div class="container-fluid" >
         <div class="row-fluid">

             <div class="col-md-12" style=" padding-top:10px; padding-bottom:23px;text-align:center;" >
               <!-- <form method="post" action="sign_up_a.php">
                        <p style=" font-size:25px;margin-top:10px;">
                       ระบุชื่อผู้ใช้งาน</p>
                   <input type="text" class="btn" name="username" required="required" style="width:300px;padding:12px;"/>
                           <br />
                           <br />

                       <p style=" font-size:25px;">
                        ระบุรหัสผ่าน</p>
                   <input type="password" class="btn" name="password" required="required" style="width:300px;padding:12px;">
                         <br />
                           <br />

                       <p style="font-size:25px;">
                        ระบุอีเมลแอดเดรส</p>
                   <input type="text" class="btn" name="email" required="required" style="width:300px;padding:12px;">
                         <br />
                         <br />
                         <p style=" font-size:25px;">
                        ระบุไอดีอุปกรณ์</p>
                   <input type="text" class="btn" name="deviceid" required="required" style="width:300px;padding:12px;">
                         <br />
                         <br />
                         <input type='hidden' name="add" />
                             <button class="btn btn-default" type="submit" style="font-family: 'Kanit', sans-serif;color:#000; font-size:25px;width:150px;height:40px;">ลงทะเบียน</button>
s

													 </form>

								<form method="post" action="getstatus.php" >
									<p style=" font-size:25px;">
								 ระบุไอดีอุปกรณ์</p>
						<input type="text" class="btn" name="deviceid" required="required" style="width:300px;padding:12px;">
									<br />
									<br />
									<input type='hidden' name="get"  />
											 <button class="btn btn-default" type="submit" style="font-family: 'Kanit', sans-serif;color:#000; font-size:25px;width:150px;height:80px;">Fetch Data Test</button>
								</form> -->

								<form method="get" action="api.php" >
									<p style=" font-size:25px;">
								 Mode</p>
									<input type='hidden' name="ModeCha"  value="1" />
									 <button class="btn btn-default" type="submit" style="font-family: 'Kanit', sans-serif;color:#000; font-size:25px;width:150px;height:80px;">เปิด</button>
</form>
										<form method="get" action="api.php" >
								  <input type='hidden' name="ModeCha2"  value="0" />
	 									<button class="btn btn-default" type="submit" style="font-family: 'Kanit', sans-serif;color:#000; font-size:25px;width:150px;height:80px;">ปิด</button>
								</form>

             </div>
         </div>
       </div>
</body>


 </html>
>
