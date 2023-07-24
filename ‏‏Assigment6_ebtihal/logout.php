<?php 
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
header("location:signin.php"); 
exit();
?>
<!--صفحة 
 //تسجيل خروج
 ابتهال محمد الشريدي ..10\7\2023-->