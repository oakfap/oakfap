<?php
	session_start();
	if(!empty($_GET['Device_Id']))
	{
		echo "eo";
	}
?>

<html>
<head>
    <script type="text/javascript">
        function show_alert() {
            alert("Changing to Signin Page!");
        }
    </script>
</head>
<body>
<div class="container-fluid" >
         <div class="row-fluid">

             <div class="col-md-12" style=" padding-top:10px; padding-bottom:23px;text-align:center;" >
							 <p style=" font-size:40px;margin-top:10px;">
							ลงชื่อเข้าใช้/Login</p>
                <form method="post" action="login_a.php">
                        <p style=" font-size:25px;margin-top:10px;">
                       ระบุชื่อผู้ใช้งาน/username</p>
                   <input type="text" class="btn" name="username" required="required" style="width:300px;padding:12px;"/>
                           <br />
                           <br />

                       <p style=" font-size:25px;">
                        ระบุรหัสผ่าน/password</p>
                   <input type="password" class="btn" name="password" required="required" style="width:300px;padding:12px;">
                         <br />
                           <br />


                         <input type='hidden' name="get" value="eiei" />
                             <button class="btn btn-default" type="submit" style="font-family: 'Kanit', sans-serif;color:#000; font-size:25px;width:150px;height:40px;">ลงชื่อเข้าใช้</button>
													 </form>

								<form action="index.php">

				 	                <input type='hidden' name="add" />
				 	                   <button class="btn btn-default" type="submit" onclick="show_alert()" style="font-family: 'Kanit', sans-serif;color:#000; font-size:25px;width:240px;height:40px;">ไปหน้าลงทะเบียน</button>



								 </form>


             </div>
         </div>
       </div>
</body>


 </html>
>
