<?php
 require_once 'dbConn.php';
   $var_username= $_POST['User_Name'];
   $var_Email = $_POST['E_Mail'];
   $var_Phon = $_POST['Phone'];
   $var_Password = $_POST['Passwordd'];
   $var_fPassword = $_POST['fPassword'];
   $var_Country = $_POST['country'];
   
   $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) {
      echo "<p>Error: Could not connect to database.<br/>
      Please try again later.</p>";
        die($conn -> error);
    } 
  
    $sql = "INSERT INTO user_table(user_name ,user_email,user_phone,Passwordd,country)  VALUES 
         ('$var_username','$var_Email',$var_Phon,'$var_Password','$var_Country')" ;
        echo$sql;
          $result=$conn->query($sql);
     
        
         $conn -> close(); 
          header('location:signin.php');
?>