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


</head>
<br><br><br><br>

<body>
<style>
  .text-box{
   border: 10px solid white;
   border-radius:30px;
   padding: 40px;
  width: 500px;
  background: #dfbfbf;
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
 
  }
  </style>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class='text-box' align='center'>

<form  action="enter.php" method="POST">
<button id="add" type="submit"> addcate</button>
<button type="submit" >  <a href="home.php">  إلغاء   </a></button><br><br>
</div>
</form>
</body>

<br><br><br><br><br><br><br><br><br><br><br><br>
</div>
</html>