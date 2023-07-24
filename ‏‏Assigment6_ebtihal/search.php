<?php
include 'dbConn.php';
?>
<!DOCTYPE html>
<html>
<div  style="background-color:   hsla(199, 39%, 50%, 0.945); width: 200cap; height:200cap;"> <br><br>

<?php //ارجاع بيانات المستخدم لعرضها في الصفحة
 session_start();
 if(isset($_SESSION['user_id'])&& isset($_SESSION['user_name'])){?>
<font color="white"> <h2>&emsp;&emsp; *USER : <?php echo $_SESSION['user_name']; ?></h2></font>
<?php } else{header("Location: addcategory.php"); 
             exit();  } ?>


<title>search (ET)</title>
<center><h1>نتائج البحث (ET)</h1></center>
<meta charset="utf-8" />

<link rel="icon" href="IMG/kkkk.png" type="image/png">


<form  method="POST" >
        <div  align='center'>   
      <input  type="text"  name="search"  placeholder="search" size="40">  
      <button class='btn btn-dark' name='submit'>search</button>
       </div>
       </form>

<div>
<table border='2' align='center' bgcolor='#ffebee'>
<?php
 //ظrequire_once 'dbConn.php'error_reporting(0);
$conn = new mysqli($hn, $un , $pw ,$db);

if(isset($_POST['submit']))
{
   $search= $_POST['search'];
   $sql="SELECT*FROM categorys WHERE namecate='$search' OR date='$search'";
   $result=mysqli_query($conn,$sql);
   if($result)
   {
    if(mysqli_num_rows($result)>0)
    {
        echo'
           <thead><tr>
            <th>الفئة</th>
            <th>الميزانية</th>
            <th>التاريخ</th>
            <th>المصروف</th>
            <th>نوع الدفع</th>
           </tr> </thead>
       ' ;
       while ($row=mysqli_fetch_assoc($result)){
        echo'
          <tbody><tr>
            <td>'.$row['namecate'].'</td>
            <td>'.$row['Budget'].'</td>
           
            
           </tr> </tbody>
       ';
        }} //<td>'.$row['date'].'</td>
           // <td>'.$row['Paid_up'].'</td>
           // <td>'.$row['Purchase_Type'].'</td>
    else{echo"<h2> العنصر الذي تبحث عنه ليس موجود</h2>";}
   }
    
}
$conn -> close();
?>
<br><br><br><br>
</table>
</div>
</html>