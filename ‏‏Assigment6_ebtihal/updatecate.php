<?php
require_once 'dbConn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$var_name= $_POST['namecate'];
$var_budget = $_POST['Budget'];
 $id= $_POST['id_cat'];
// تحديث بيانات جدول معين
//$sql = "UPDATE اسم_الجدول SET حقل1='قيمة1', حقل2='قيمة2' WHERE شرط";

try {
  // Create a PDO connection to the database
  $conn = new PDO("mysql:host=$hn;db=$db", $un, $pw);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Prepare an UPDATE statement for the appropriate table based on the category ID
  $stmt = $conn->prepare("UPDATE categorys SET namecate=:namecate, Budget=:Budget WHERE id_cat=:id_cat");

  $stmt->bindParam(':namecate', $var_name);
  $stmt->bindParam(':Budget', $var_budget);
  $stmt->bindParam(':id_cat', $id);

  $stmt->execute();
//categorys(namecate ,Budget,fk_us)
  header("Location: displaycate.php"); 
  
  echo "تم تحديث البيانات بنجاح";}
     catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
// إغلاق اتصال قاعدة البيانات
$conn = null;
    exit; }
?>

<!DOCTYPE html>
<html>
<!--//صفحة اضافة الفئات 
 //ابتهال محمد الشريدي ..10\7\2023
صفحة تعديل بيانات الفئات-->
  
 <div  style="background-color:   hsla(199, 39%, 50%, 0.945); width: 100cap; height:200cap;"> 
 <?php //ارجاع بيانات المستخدم لعرضها في الصفحة
 session_start();
 if(isset($_SESSION['user_id'])&& isset($_SESSION['user_name'])){?>
<font color="white"> <h2>&emsp;&emsp; *USER : <?php echo $_SESSION['user_name']; ?></h2></font>
<?php } else{header("Location: addcategory.php"); 
             exit();  } ?>
<head>

  <title>تعديل فئة</title>
<center>  <h1> تعديل البيانات المدخلة للنفقة </h1></center>

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

<?php
    // Check if an ID has been passed as a GET parameter
    if (isset($_GET['id_cat'])) {
        // Get the ID and retrieve the data for that record from the database
        $id = $_GET['id_cat'];

        try {
            // Create a PDO connection to the database
            $conn = new PDO("mysql:host=$hn;db=$db", $un, $pw);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Prepare a SELECT statement for the appropriate table based on the category ID
            $stmt = $conn->prepare("SELECT * FROM categorys WHERE id_cat=:id_cat");

            // Bind parameters to the statement and execute it
            $stmt->bindParam(':id_cat', $id);
            $stmt->execute();

            // Fetch the data for the record
            $row = $stmt->fetch();
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        // Close the database connection
        $conn = null;
    }
    ?>

<form  method ='POST' >

  <div class="text-box">
   
  <div  >اسم الفئة <br>  
<input type='text' placeholder="أدخل الفئة" name='namecate' value="<?php echo $row['namecate']; ?>" required="required" style="width:100px ; height:30px;"></div>
<br><br>
<div  >الميزانية <br>  
<input type='text' placeholder="أدخل الميزانية" name='Budget' value="<?php echo $row['Budget']; ?>"required="required" style="width:100px ; height:30px;"></div>
<br><br>
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
<input type="submit" name ='submit' value='تعديل' >
<button type="submit" >  <a href="displaycate.php">  إلغاء   </a></button>
<br><br><br>
</div>
</form>
</center>
 







 
</body>
  </div>
</html>
