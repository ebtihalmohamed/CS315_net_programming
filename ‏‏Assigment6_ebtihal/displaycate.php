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

<h1>الفئات</h1>
</center>
</head>


<body>
<table border='2' align='center' bgcolor='#ffebee'>
<?php
include 'dbConn.php';
$conn = new mysqli($hn, $un , $pw ,$db);
 // التحقق من نجاح الاتصال
  if ($conn->connect_error) {
      die("فشل الاتصال: " . $conn->connect_error);
  }
$sql = "SELECT * FROM categorys";
$result = $conn->query($sql);
 
  // التحقق من وجود نتائج
  if ($result->num_rows > 0) 
  {
    

    echo'
           <thead><tr>
            <th>الفئة</th>
            <th>الميزانية</th>
            <th>اختر</th>
            <th>اختر</th>
            <th>اختر</th>
           <thead><tr>' ;
    // طباعة بيانات كل صف في الجدول
    while($row = $result->fetch_assoc()) {
    $_SESSION['namecate']=$row['namecate'];
    $_SESSION['Budget']=$row['Budget'];
    $_SESSION['id_cat']=$row['id_cat'];
        echo "
        
          <tbody><tr>
          <td>".$row['namecate']."</td>
          <td>".$row['Budget']."</td>
          <td><a href ='add.php?id_cat=".$row['id_cat']."'><input type ='submit' value='Add'></a></td>
          <td><a href ='delete.php?id_cat=".$row['id_cat']."'><input type ='submit' value='Delete'></a></td>
          <td><a href ='updatecate.php?id_cat=".$row['id_cat']."'><input type ='submit' value='update'></a></td>
          
          </tr> </tbody>";     
    }
} 
else {
         echo "لا توجد نتائج";
     }
  
  $conn -> close();  
?>

</table>
<br><br><br><br>
<center><button type="submit" >  <a href="home.php">  إلغاء   </a></button><br><br><center>


</body>  
<html>