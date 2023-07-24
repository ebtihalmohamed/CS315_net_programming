<!DOCTYPE html>
<html><!--صفحة تعديل للبرنامج 
 
ليست مكتملة!

//ابتهال محمد الشريدي ..10\7\2023-->
<head> 
  <div style="background-color: rgba(70, 139, 185, 0.904); width: 100cap; height:200cap;"> 
<?php //ارجاع بيانات المستخدم لعرضها في الصفحة
 session_start();
 if(isset($_SESSION['user_id'])&& isset($_SESSION['user_name'])){?>
<font color="white"> <h2>&emsp;&emsp; *USER : <?php echo $_SESSION['user_name']; ?></h2></font>
<?php } else{header("Location: home.php"); 
             exit();  } ?>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="Css/signup.css">
   
    <title>update user (ET)</title>
    <link rel="icon" href="IMG/imf.jpg" type="image/png">
    
        
            <font color="white" size="7"> <center>  <i><h2> تعديل بيانات المستخدم </h2></i> </font></center> 
            <hr style="height: 2cap; border: none; border-top: 4px solid hwb(0 95% 0%);" />   
</head>


<header>

    <nav><center> 
        
        
        <hr style="height: 2cap; border: none; border-top: 4px solid hwb(0 95% 0%);" />  
       </center>
    </nav>

 </header>

 <body>


    <main class="main">
    
        <form name="sign up" action = "updateuser.php" method = "POST">
           <div class="log" >
            <div class="a">
               إسم المستخدم :<br> <input type="text"  name="User_Name" value='<?php echo $var_date['user_name'] ?>' size="10" placeholder="enter email" required="required"> 
             </div><br>
             <div class="a">
            العنوان  : <br> <input type="text" name="country" value='<?php echo $data['country'] ?>' size="14" placeholder="enter your address" required="required"> 
            </div><br>
            <div class="a">
              رقم الهاتف :<br> <input type="number"  name="Phone" value='<?php echo $data['Phone'] ?>' size="10" placeholder="enter your phone number" required="required"> 
            </div><br>
            <div class="a">
              البريد الإلكتروني  :<br> <input type="email"  name="E_Mail"  value='<?php echo $data['E_Mail'] ?>' size="14" placeholder="enter E-mail" required="required"> 
            </div><br>
            <div class="a">
              كلمة المرور :<br><input type="password"  name="Passwordd"  value='<?php echo $data['Passwordd'] ?>' size="10" placeholder="enter password" required="required"> 
            </div><br>
            <div class="a">
              تأكيد كلمة المرور :<br> <input type="password"  name="fPassword" value='<?php echo $data['Passwordd'] ?>' size="30" placeholder="enter password" required="required">        
            </div><br>
          <br> <br>
          <div>
               <input type="submit" name ='submit' value='حفظ'>
               <button type="submit"  >  <a href="home.php">  إلغاء   </a></button><br><br><br></div>
               
            
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
