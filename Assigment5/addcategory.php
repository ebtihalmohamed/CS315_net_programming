<!DOCTYPE html>
<html>
<!--//صفحة اضافة الفئات 
 //ابتهال محمد الشريدي ..10\7\2023-->
  
 <div  style="background-color:   hsla(199, 39%, 50%, 0.945); width: 100cap; height:200cap;"> 
 <?php //ارجاع بيانات المستخدم لعرضها في الصفحة
 session_start();
 if(isset($_SESSION['user_id'])&& isset($_SESSION['user_name'])){?>
<font color="white"> <h2>&emsp;&emsp; *USER : <?php echo $_SESSION['user_name']; ?></h2></font>
<?php } else{header("Location: addcategory.php"); 
             exit();  } ?>
<head>

  <title>إضافة فئة</title>
<center>  <h1>أدخل ماذا أنفقت في هذا اليوم </h1></center>

</head> 
<body>
  <br><br><br><br>
  <style>
  .text-box{
   border: 5px solid white;
   border-radius:15px;
   padding: 20px;
  width: 300px;
  background: #dfbfbf;
  }
  </style>


<center>

<form name="sign in"  action ='add.php' method ='POST'>
  <div class="text-box">
 
  <div ><h3>إسم الفئة <h3> <br>
    <input type='text' placeholder="أدخل اسم الفئة" name='cat_name'  required="required" style="width:100px ; height:50px;"></div>
<br><br>
<div  >الميزانية <br>  
<input type='text' placeholder="أدخل الميزانية" name='Budget'  required="required" style="width:100px ; height:30px;"></div>
<br><br>
<?php 
$date =date('Y-m-d   ||  H:i:s');
echo $date;
?>
<br><br>
<table>
  <tr>
<td><div  align="right">القيمة المدفوعة &thinsp; &thinsp;<br>
<input type='text' placeholder="أدخل القيمة" name='Paid_up'  required="required" style="width:100px ; height:30px;"></div></td>
<td><div align="left"> &thinsp; &thinsp; &thinsp; &thinsp; &thinsp;نوع الدفع <br>&thinsp; &thinsp;
<input type='text' placeholder="نوع الدفع"name='Purchase_Type' required="required" style="width:100px ; height:30px;">  </div>
</td>

</table></tr>


</div>

<br><br><br>
<style>
  .but{
    color: #dfbfbf; 
    width: 70px;
    height: 60px;
    font-family: sans-serif;
    border-style: dashed;
    border:solid 1px #b3cec1;
    border-radius: 100px;
   background-color: hwb(194 74% 5%);
  }
</style>
<div class="but">
<input type="submit" name ='submit'>
<button type="submit" >  <a href="home.php">  إلغاء   </a></button><br><br><br>
</div>
</form>
</center>
 
 
</body>
  </div>
</html>
