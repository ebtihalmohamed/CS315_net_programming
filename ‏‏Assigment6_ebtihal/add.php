<?php
 //صفحة اضافة الفئات 
 //ابتهال محمد الشريدي ..10\7\2023
require_once 'dbConn.php';?>

<!DOCTYPE html>
<html>
<meta charset="utf-8" />
<div  style="background-color:   hsla(199, 39%, 50%, 0.945); width: 200cap; height:200cap;"> <br><br><br><br>    
<!----------------------------------------------------------------------------------------------------->
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

<h1>البيانات</h1>
</center>
</head>

<style>
    .w{
        border: 5px solid white;
        border-radius:15px;
       padding: 20px;
        width: 300px;
       background: #dfbfbf;
    }
</style>
<center>

</center><br><br><br><br>



<body>
<center> 
<form action="a.php" method ='POST'> 
    
<div class="w" >
<div  >التاريخ  <br>  
<input type='date' placeholder="أدخل التاريخ" name='date'  required="required" style="width:100px ; height:30px;"></div>
<br><br><br><br>
<table>
  <tr>
<td><div  align="right">القيمة المدفوعة &thinsp; &thinsp;<br>
<input type='text' placeholder="أدخل القيمة" name='Paid_up' required="required" style="width:100px ; height:30px;"></div></td>
<td><div align="left"> &thinsp; &thinsp; &thinsp; &thinsp; &thinsp;نوع الدفع <br>&thinsp; &thinsp;
<input  type='text' placeholder="نوع الدفع" name='payment_type'  required="required" style="width:100px ; height:30px;">  </div>
</td>
</table><br><br><br>
<input type="submit" name ='submit'></center>
</div></from><br><br><br>
<br><br><br><br></body></div>
</html>