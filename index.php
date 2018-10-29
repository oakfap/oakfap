<?php
	session_start();
?>

<html>
<head>
    <script type="text/javascript">
        function show_alert() {
            alert("Changing to login Page!");
        }
    </script>
</head>


<body>
<div class="container-fluid" >
         <div class="row-fluid">

             <div class="col-md-12" style=" padding-top:10px; padding-bottom:23px;text-align:center;" >
							 <p style=" font-size:40px;margin-top:10px;">
							สมัครสมาชิค/Signin</p>
                <form method="post" action="sign_up_a.php">
                        <p style=" font-size:25px;margin-top:10px;">
                       ระบุชื่อผู้ใช้งาน/username</p>
                   <input type="text" class="btn" name="username" required="required" style="width:300px;padding:12px;"/>
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

				 	                <input type='hidden' name="add" value="test"/>
				 	                   <button class="btn btn-default" type="submit" onclick="show_alert()" style="font-family: 'Kanit', sans-serif;color:#000; font-size:25px;width:240px;height:40px;">ไปหน้าลงชื่อเข้าใช้</button>
								 </form>


             </div>
         </div>
       </div>
</body>
 </html>
