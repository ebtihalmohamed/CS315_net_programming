
<?php
 //صفحة اضافة الفئات 
 //ابتهال محمد الشريدي ..10\7\2023
require_once 'dbConn.php';?>
<!DOCTYPE html>
<html>

<meta charset="utf-8" />
<div  style="background-color:   hsla(199, 39%, 50%, 0.945); width: 200cap; height:200cap;"> <br><br><br><br>
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
<div class="w" >
<?php //كود اضافة الفئة
require_once 'dbConn.php';
error_reporting(0);
if (isset($_POST['submit']))
{ //تعريف متغيرات
   $var_ID= $_POST['PK_cat'];
   $var_category= $_POST['cat_name'];
   $var_Budget = $_POST['Budget'];
   $var_Paid_up = $_POST['Paid_up'];
   $var_Purchase_Type = $_POST['Purchase_Type'];
   $var_date=date('Y-m-d   ||  H:i:s');
   
//اتصال بقواعد البيانات
   $conn = new mysqli($hn, $un , $pw ,$db);
if ($conn->connect_error) {//تحقق من وجود اي اخطاء
echo "<p>Error: Could not connect to database.<br/>
Please try again later.</p>";
die($conn -> error);
}
$query = "INSERT INTO category (PK_cat, cat_name,Budget, Paid_up, Purchase_Type)VALUES 
('$var_ID', '$var_category', '$var_Budget', '$var_Paid_up','$var_Purchase_Type')" ;
 // echo $query;
 $result = $conn->query($query);
//ارجاع البيانات من قاعدة البيانات
 
  if ($result) {
  echo "مرحبا بك";
  } 
  else {
  echo  $conn -> error ;
  echo  "<br/>.The item was not added.";
   echo "<br/>$query ";
  }
  //جلب جميع البيانات وحفظها في المتغير
  $query = "SELECT * FROM category";
  $var_date = mysqli_query($conn,$query);
  $total = mysqli_num_rows($var_date);
  //echo $total;
  
  if($total!=0)
  {
     
      while($result=mysqli_fetch_assoc($var_date))
      {
          echo " 
          <tr>
          <td>".$result['PK_cat']."</td><br>
          <td>".$result['cat_name']."</td>
          <td>".$result['Budget']."</td>
          <td>".$result['Paid_up']."</td>
          <td>".$result['Purchase_Type']."</td> 
          <td><a href =\'deletecate.php?rn=$result[rollno]\'><input type ='submit' value='Delete'></a></td>
          <td><a href =\'updatecate.php?id=$res[id]\'><input type ='submit' value='update'></a></td>
          
          </tr> ";
         
          
      }
  }
     
  $conn -> close();
      
} 
?>

</div>
</center><br><br><br><br>
</div>

</html>