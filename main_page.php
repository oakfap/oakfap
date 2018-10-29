<?php
	session_start();
?>

<html>
<body>
<div class="container-fluid" >
         <div class="row-fluid">
             <div class="col-md-12" style=" padding-top:10px; padding-bottom:23px;text-align:center;" >
							 <p style=" font-size:40px;margin-top:10px;">
							หน้าหลัก/Main page</p>
                <form method="post" action="login_a.php">
									<p style=" font-size:25px;margin-top:10px;">
								 เงินที่มี/Current Money</p>
									<input type="text" class="btn" value="abc" readonly style="width:300px;padding:12px;"/>
                        <p style=" font-size:25px;margin-top:10px;">
                       ระบุจำเงินที่จะจ่าย/Money to pay</p>
                   <input type="text" class="btn" name="username" required="required" style="width:300px;padding:12px;"/>
                           <br />
                           <br />
                         <input type='hidden' name="get" value="eiei" />
                             <button class="btn btn-default" type="submit" style="font-family: 'Kanit', sans-serif;color:#000; font-size:25px;width:150px;height:40px;">ตกลง</button>
													 </form>

								<form action="login_page.php">
				 	                <input type='hidden' name="add" />
				 	                   <button class="btn btn-default" type="submit" onclick="show_alert()" style="font-family: 'Kanit', sans-serif;color:#000; font-size:25px;width:240px;height:40px;">ไปหน้าล็อคอิน</button>
								 </form>


             </div>
         </div>
       </div>
</body>


 </html>
>
