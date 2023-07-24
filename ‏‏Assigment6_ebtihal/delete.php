
<!----------------------------------------------------------------------------------------------------->
<?php //كود لحدف فئة
 
include 'dbConn.php';
$conn = new mysqli($hn, $un , $pw ,$db);
if(isset($_GET['id_cat']))
{
    $id=$_GET['id_cat'];
    $delete=mysqli_query($conn,"DELETE FROM categorys WHERE id_cat='$id'");

}
$select='SELECT*FROM categorys';

$query=mysqli_query($conn,$select);
header("Location: displaycate.php"); 
echo '<center><p style ="color:green">SUCCESSFULL !</p></center>'; 

?>
<!----------------------------------------------------------------------------------------------------->
