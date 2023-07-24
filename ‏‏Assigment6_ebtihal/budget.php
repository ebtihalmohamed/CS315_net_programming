<?php
include 'dbConn.php';

$conn = new mysqli($hn, $un , $pw ,$db);
if ($conn->connect_error)
 {
  die("Connection failed: " . $conn->connect_error);
}

$button_value = $_POST['namecate'];
 $user_id= $_SESSION['user_id'];


 $sql = "SELECT * FROM categorys WHERE  namecate = '$button_value' AND fk_us = '$user_id'";
 $result = $conn->query($sql);


  // The button has not been pressed by the user, so insert it into the database
  $sql = "INSERT INTO categorys(namecate,fk_us)  VALUES ('$button_value','$user_id')";
  /*دالة $conn->query($sql) تقوم بتنفيذ استعلام SQL على قاعدة البيانات المتصل بها عبر الاتصال $conn.
 وتقوم بإرجاع نتيجة الاستعلام ككائن من النوع mysqli_result في حال نجاح التنفيذ،
  أو تقوم بإرجاع قيمة false في حال فشل التنفيذ.*/
 
  if ($conn->query($sql) === TRUE) {
      echo "Button value inserted successfully.";
       header("Location: budget.php"); 
  }else {
    echo "Error: " . $sql . "<br>" . $conn->error;
         }
 

// Finally, close the connection
$conn->close();

?>
<!-------------------------------------هادي متع تعديل البيانات--------------------------------------->
<?php
include "dbConn.php";
error_reporting(0);
$conn = new mysqli($hn, $un , $pw ,$db);

  $catg_name = $_POST['cat_name'];
  $the_amount = $_POST['Budget'];
  $the_date = $_POST['date'];
  $Paid_up= $_POST['Paid_up'];
  $Purchase_Type= $_POST['Purchase_Type'];
//
//

//
if ($_SERVER['REQUEST_METHOO']=='GET') 
{
   if(!isset($GET["PK_cat"]))
   {
    header("Location: home.php?msg=not successfully");
    exit;
   }
  $id=$_GET['PK_cat'];
  $sql = "SELECT * FROM category WHERE PK_cat='$id'";
  $result =$conn->query($sql);
  $row=$result->fetch_assoc();
  if(!$row)
  {
    header("Location: home.php?msg=not successfully");
    exit;
    $catg_name = $row['cat_name'];
  $the_amount = $row['Budget'];
  $the_date = $row['date'];
  $Paid_up= $row['Paid_up'];
  $Purchase_Type= $row['Purchase_Type'];
  }
}
  else
  {
    $id = $_POST['PK_cat'];
    $catg_name = $_POST['cat_name'];
  $the_amount = $_POST['Budget'];
  $the_date = $_POST['date'];
  $Paid_up= $_POST['Paid_up'];
  $Purchase_Type= $_POST['Purchase_Type'];
    do
    {
       if(empty($id)||empty($catg_name)||empty($the_amount)||empty($the_date)||empty($Paid_up)||empty($Purchase_Type))
       {
        $error="is empty."; break;
       }
      $sql ="UPDATE category". "SET PK_cat ='$id'  catg_name='$catg_name',Budget='$the_amount',
      date='$the_date',Paid_up='$Paid_up',Purchase_Type='$Purchase_Type'". " WHERE PK_cat= '$id'";
      $result =$conn->query($sql);
      if(!$result)
      {
        $erroe="invalid query:".$conn->error;
        break;
      }
      $sucssmessage="true update";
      header("Location: add.php?msg=not successfully");
    exit;
    }
    while(true);
}
 
?>







<div  >التاريخ  <br>  
<input type='date' placeholder="أدخل التاريخ" name='date' value="<?php echo $the_date ?>" required="required" style="width:100px ; height:30px;"></div>
<br><br>

<br><br>
<table>
  <tr>
<td><div  align="right">القيمة المدفوعة &thinsp; &thinsp;<br>
<input type='text' placeholder="أدخل القيمة" name='Paid_up' value="<?php echo $Paid_up ?>" required="required" style="width:100px ; height:30px;"></div></td>
<td><div align="left"> &thinsp; &thinsp; &thinsp; &thinsp; &thinsp;نوع الدفع <br>&thinsp; &thinsp;
<input type='text' placeholder="نوع الدفع" name='Purchase_Type' value="<?php echo $Purchase_Type ?>" required="required" style="width:100px ; height:30px;">  </div>
</td>

</table></tr>
<?php //كود لحدف فئة
 $conn = new mysqli($hn, $un , $pw ,$db);
include 'dbConn.php';

if(isset($_GET['PK_cat']))
{
    $id=$_GET['PK_cat'];
    $delete=mysqli_query($conn,"DELETE FROM category WHERE PK_cat='$id'");

}
$select='SELECT*FROM category';

$query=mysqli_query($conn,$select);
echo '<center><p style ="color:green">SUCCESSFULL !</p></center>'; 

?>
<!----------------------------------------------------------------------------------------------------->

<?php //كود تعديل فئة
//للحصول او ارجاع جميع البيانات وحفظها في متغير RESULT
$conn = new mysqli($hn, $un , $pw ,$db);
include_once 'dbConn.php';
$result=mysqli_query($conn,"SELECT *FROM category ");
?>

<!----------------------------------------------------------------------------------------------------->

<!-- كود لادخال بيانات الفئة وطباعتها -->

<?php //كود اضافة الفئة
 session_start();
require_once 'dbConn.php';
error_reporting(0);
try{

  
//اتصال بقواعد البيانات
   $conn = new mysqli($hn, $un , $pw ,$db);
if ($conn->connect_error) {//تحقق من وجود اي اخطاء
echo "<p>Error: Could not connect to database.<br/>
Please try again later.</p>";
die($conn -> error);
}
if (isset($_POST['submit']))
{ //تعريف متغيرات
  
   


$tot=$_SESSION['Budget'];
 $result = $conn->query($query);
//ارجاع البيانات من قاعدة البيانات
 
  if ($result) 
  {
     echo "مرحبا بك";
  } 
  else {
  echo  $conn -> error ;
  echo  "<br/>.The item was not added.";
   echo "<br/>$query ";
  }
  //جلب جميع البيانات وحفظها في المتغير
  $query = "SELECT * FROM datacategory";
  $var_date = mysqli_query($conn,$query);
  $total = mysqli_num_rows($var_date);  
  if($total!=0)
  {
    
    echo'
           <thead><tr>
            <th>الفئة</th>
            <th>الميزانية</th>
            <th>التاريخ</th>
            <th>المدفوع</th>
            <th>نوع الدفع</th>
           <thead><tr>' ;
     
      while($result=mysqli_fetch_assoc($var_date))
      {
          echo "<table border='2' bgcolor='white'> 
          <tr>
          <td>".$result['namecate']."</td><br>
          <td>".$result['cat_name']."</td>
          <td>".$result['Budget']."</td>
          <td>".$result['date']."</td>
          <td>".$result['Paid_up']."</td>
          <td>".$result['Purchase_Type']."</td>
        
          <td><a href ='add.php?PK_cat=".$result['PK_cat']."'><input type ='submit' value='Delete'></a></td>
          <td><a href ='updatecate.php?PK_cat=".$result['PK_cat']."'><input type ='submit' value='update'></a></td>
          
          </tr> </table>";        
      }
  }   }   
  $conn -> close();  

} 


?>


