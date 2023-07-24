<!DOCTYPE html>
<html>
<div  style="background-color:   hsla(199, 39%, 50%, 0.945); width: 100cap; height:200cap;"> 

<head>
<link rel="stylesheet" href="Css/cate.css">
<?php //ارجاع بيانات المستخدم لعرضها في الصفحة
 session_start();
 if(isset($_SESSION['user_id'])&& isset($_SESSION['user_name'])){?>
<font color="white"> <h2>&emsp;&emsp; *USER : <?php echo $_SESSION['user_name']; ?></h2></font>
<?php } else{header("Location: addcategory.php"); 
             exit();  } ?>
<center>
<title>category (ET)</title>

<h1>ادخل بيانات الفئة</h1>
</center>
</head>
<body>
    <br><br><br><br>



<?php
 
 require_once 'dbConn.php';
   $var_name= $_POST['namecate'];
   $var_budget = $_POST['Budget'];
    $user_id= $_SESSION['user_id'];
   $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) {
      echo "<p>Error: Could not connect to database.<br/>
      Please try again later.</p>";
        die($conn -> error);
    } 
   
    $sql = "INSERT INTO categorys(namecate ,Budget,fk_us)  VALUES 
         ('$var_name','$var_budget','$user_id')" ;
        
          $result=$conn->query($sql);
         
         echo"تمت العملية";
       // header('location:displaycate.php');
         $conn -> close(); 
          
?>


<form action="" method ='POST'>

<div  align="center">الفئة  &thinsp; &thinsp;<br>
<input type='text' placeholder="أدخل القيمة" name='namecate'  required="required" style="width:100px ; height:30px;"></div>
<div  align="center">الميزانية  &thinsp; &thinsp;<br>
<input type='text' placeholder="أدخل القيمة" name='Budget'  required="required" style="width:100px ; height:30px;"></div>
<center><input type="submit" name ='submit'></center>
<center><button type="submit" >  <a href="category.php">  إلغاء   </a></button><br><br><center>
<br><br><br><br><br><br><br><br>

<!-- $query = "SELECT * FROM categorys WHERE namecate='$var_name' and Budget='$var_budget'";
          $row= mysqli_fetch_assoc($result);
          $_SESSION['namecate']='namecate';
            $_SESSION['Budget']='Budget';-->
</body>  
</html>

