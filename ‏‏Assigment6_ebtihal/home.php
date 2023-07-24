 <!--صفحة الرئيسية للبرنامج 
 //ابتهال محمد الشريدي ..10\7\2023-->
<?php //ارجاع بيانات المستخدم لعرضها في الصفحةالرئيسية
 session_start();
 if(isset($_SESSION['user_id'])&& isset($_SESSION['user_name'])){?>
<!DOCTYPE html>
<html>
<head>
 
  <div  style="background-color:   hsla(199, 39%, 50%, 0.945); width: 100cap; height:200cap;"> 
<meta charset="utf-8" />
    <title>Expense Tracker (ET)</title>
    <link rel="icon" href="IMG/kkkk.png" type="image/png">
    
    
    <link rel="stylesheet" href="Css/mh.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">    
    <img src="IMG/kkkk.png" align="right" width="150" ><br>
     
   <div  align='center' >
  
      </from>
    </div> 

                 <button  type="submit" value="sign up"><a href="upuser.php">المستخدم</a> </button> 
                 <button  type="submit" value="search"><a href="search.php">search</a> </button>  
              <font color="white"> <h2>&emsp;&emsp; *USER : <?php echo $_SESSION['user_name']; ?></h2></font>
            
       <div class="txt" >    &emsp;&emsp; محفظتي <br>     My Wallet  (ET)  </div>
        
        <form name="signup" action = "/Assigment%203/PHP/signup.php" method = "post">
    
        <a href="singup.html" target="_self"> </a>  <br>
        </form><br>
        <div class="ee" >
        <button  type="submit" value="sign up"><a href="signup.php">sign up</a> </button>
        <button   type="submit" value="sign in"><a href="signin.php">sign in</a> </button>
        <button   type="submit" value="Log out"><i ><a href="logout.php" class="fa fa-sign-out" aria-hidden="true" >Log out</a></i></button>
        
        </div>
         <br>
         <hr style="height: 2cap; border: none; border-top: 4px solid hwb(0 95% 0%);" />
         
         <nav><center> 
          <h3 >&ensp;&emsp;&emsp;
          <div class="xx">
         
          <button  type="submit" > <a href="aboutus.html" target="_self"> معلومات عنا</a> </button>&emsp; |&emsp;
         
          <button  type="submit" > <a href="category.php" target="_self"> إضافة فئة </a></button>&emsp; |&emsp;
          <button  type="submit" ><a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjaj63Irbn_AhVn_7sIHSveA1UQFnoECBIQAQ&url=https%3A%2F%2Fwww.canva.com%2Far_eg%2Fcreate%2Freport-cards%2F&usg=AOvVaw0O7b5yYAxM1KtifBM6GfnO"target="_self">التقارير</a></button>&emsp; |&emsp;  
          <button  type="submit" > <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjs5rLIrrn_AhVJVKQEHf8SDv0QFnoECA4QAQ&url=https%3A%2F%2Ficolna.com%2Fnote_teacher&usg=AOvVaw0EJum012-ycqpYFtBVLsDg" target="_self"> ملاحظات</a></button>&emsp; |&emsp;
          <button  type="submit" > <a href="displaycate.php" target="_self">  الفئات</a></button>&emsp; |&emsp;
          </div>  </h3></center>
      </nav> <br>
        </div>  
        <?php } else{header("Location: home.php"); 
             exit();  } ?>
</head>

<header> 
</header>

<body>
<div class="x" >
   <div class="img" ><img src="IMG/kk.png"> </div>
   <div class="w">مرحباً بكم في صفحتنا</div>
</div>






<br><br>
<div class="tx">
  <div class="im" ><img src="IMG/images.jpg" width="470px"> </div>
  <div class="t"><pre>                    <u>: خدمة تعقب النفقات  *</u >
    
    . وفر أموالك وإحترس من الإسراف
 
 
 
 
  </pre>
 </div></div>



 <div class="rd" >
 . لقد قمنا بتصميم هذا الموقع لتعقب أين أنفقت أموالك ولتزويدك بمهارة الإدارة المالية  -
</div>

<br><br>
<div class="ww">
  <div class="i" ><img src="IMG/img2.jpg" width="700px" height="300px"> </div></div>
  <div class="xc" align="right"><pre>                    <u>: تجربة مميزة للوصول إلى الأهداف المالية  *</u >

 يسمح لك تحديد الأهداف المالية بوضع الآمال والأحلام قيد التنفيذ
   
    . يبدأ بإختيار هدف ثم وضع خطة لتحقيقه
  
  </pre>
</div>





  </body>
 

<footer>
  &thinsp;
  <font color="white"> <div style="background-color: hwb(0 3% 97%); width: 100%; height: 100%;">
  <br> <p><b><u>  || To contact me through my personal accounts:  ||</u></b></p> 

     <img src="IMG/im1.webp" alt="IMG" width="50">
     <img src="IMG/im2.png" alt="img" width="50">
     <img src="IMG/im3.png" alt="img" width="50">
     <img src="IMG/im5.png" alt="img" width="50">
     <img src="IMG/im9.png" alt="img" width="50">
     

       <font color="white"> <p>To communicate : Ebtihal Mohammed</p>
         <p> phone number : +218926929426</p>
         <p> E-mail : <a href="https://gmail.com" target="_blank">batomo199@gmail.com</a></p> 
         <p>GitHub : <a href="https://github.com/ebtihalmohamed"
              target="_blank"></a></p>     
         </font>

      &thinsp;
     <div align="right">
      <font color="white"><p><a href="https://www.linkedin.com/legal/copyright-policy?trk=homepage-basic_footer-copyright-policy"
          &emsp; target="_blank">سياسة حقوق النشر</a>
          &emsp; |&emsp;  <a href="https://www.google.com/intl/ar/privacy.html"
              target="_blank">سياسة الخصوصية</a></p>
          <p><center> Copyright © 2023 - 2025 . Ebtihal Mohammed</center></p>
          &thinsp;
        </font></div></font>
    </div>
</footer>
</html>