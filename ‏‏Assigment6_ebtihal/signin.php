<?php
session_start();  
?>
<!--صفحة تسجيل دخول واجهة للبرنامج 
 //ابتهال محمد الشريدي ..10\7\2023-->
<!DOCTYPE html>
<html> 
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="Css/signin.css">
    <link rel="icon" href="IMG/imf.jpg" type="image/png">
    <div style="background-color: rgba(48, 146, 163, 0.904); width: 100cap; height:200cap;"> 
        <div  > 
            <img src="IMG/imf.jpg" align="right" height="100px">
          </div>
        <p><font color="white" size="7" face=" Impact" dir="rtl"> <center> <br> صفحة تسجيل الدخول  </font></center> </p>
        <hr style="height: 2cap; border: none; border-top: 4px solid hwb(0 95% 0%);" />  
        <br><br>

         <nav><center> 
    <h3 >&ensp;&emsp;&emsp;
    
    <hr style="height: 2cap; border: none; border-top: 4px solid hwb(0 95% 0%);" />  
   </h3></center>
    </div>
    
</head>
<header>
 
  
</header>

<body>
    <br><br><br><br><br>

<main class="mn">
<form name="sign in"  action ='signinpost.php' method ='POST'>
  <?php if(isset($_GET['error'])) {echo $_GET['error'];}?>
  <div class="f">
  <div class="s">  اسم المستخدم :
    <input type='text' placeholder="أدخل اسم المستخدم هنا" name='user_name' size="30" required="required"></div>
<br><br><br>
<div class="s">  كلمة السر: 
<input type='password' placeholder="أدخل كلمة السر هنا" name='Passwordd' size="30" required="required"></div>
<br><br><br>

<input type="submit" name ='submit'>
<button type="submit" >  <a href="signup.php">  إلغاء   </a></button>
<button type="submit" >  <a href="signup.php"> انشاء حساب  </a></button><br><br><br>
</div>
</form></main>
</body>

&thinsp; &thinsp; &thinsp; &thinsp; &thinsp; &thinsp; &thinsp; &thinsp;
<footer>
  
    <div style="background-color: hwb(0 3% 97%); width: 100%; height: 100%;">
      &thinsp;
        <font color="white">  <p><center> Copyright © 2023 - 2025 . Ebtihal Mohammed</center></p>
          &thinsp;
        </font>
    </div>
</footer>

</html>