<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="Css/signup.css">
    <div style="background-color: rgba(70, 139, 185, 0.904); width: 100cap; height:200cap;"> 
    <title>singup (ET)</title>
    <link rel="icon" href="IMG/imf.jpg" type="image/png">
    
        
            <font color="white" size="7"> <center>  <i><h2>إنشاء حساب جديد</h2></i> </font></center> 
            <hr style="height: 2cap; border: none; border-top: 4px solid hwb(0 95% 0%);" />   
</head>


<header>

    <nav><center> 
        <h3 >&ensp;&emsp;&emsp;
        
        <hr style="height: 2cap; border: none; border-top: 4px solid hwb(0 95% 0%);" />  
       </h3></center>
    </nav>

 </header>

 <body>


    <main class="main">
    
        <form name="sign up" action = "signuppost.php" method = "POST">
           <div class="log" >
            <div class="a">
               إسم المستخدم :<br> <input type="text"  name="User_Name" size="10" placeholder="enter email" required="required"> 
             </div><br>
             <div class="a">
            العنوان  : <br> <input type="text" name="country" size="14" placeholder="enter your address" required="required"> 
            </div><br>
            <div class="a">
              رقم الهاتف :<br> <input type="number"  name="Phone" size="10" placeholder="enter your phone number" required="required"> 
            </div><br>
            <div class="a">
              البريد الإلكتروني  :<br> <input type="email"  name="E_Mail" size="14" placeholder="enter E-mail" required="required"> 
            </div><br>
            <div class="a">
              كلمة المرور :<br><input type="password"  name="Passwordd" size="10" placeholder="enter password" required="required"> 
            </div><br>
            <div class="a">
              تأكيد كلمة المرور :<br> <input type="password"  name="fPassword" size="30" placeholder="enter password" required="required">        
            </div><br>
          <br> <br>
         
               <input type="submit" name ='submit'>
               <button type="submit"  >  <a href="home.php">  إلغاء   </a></button><br><br><br>
               <button type="submit"  >  <a href="signin.php">  تسجيل دخول  </a></button><br><br><br>
            
          </div>
         </form>
       </main>
    </div>
</div>
</body>
<footer>
  
    <div style="background-color: hwb(0 3% 97%); width: 100%; height: 100%;">
      &thinsp;
        <font color="white">  <p><center> Copyright © 2023 - 2025 . Ebtihal Mohammed</center></p>
          &thinsp;
        </font>
    </div>
</footer>



</html>
