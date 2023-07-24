<!--صفحةانشاء تسجيل دخول للبرنامج 
 
//ابتهال محمد الشريدي ..10\7\2023-->

<?php
 session_start();//اتصال
 include 'dbConn.php';
 
if(isset($_POST['user_name']) && isset($_POST['Passwordd']))//شرط وجود اسم ورقم سري متطابق
 {
     function validate($data)
     {
        $data=trim( $data);
        $data=stripslashes( $data);
        $data= htmlspecialchars( $data);
        return  $data;
     }
     //
    $var_username=validate($_POST['user_name']) ;
    $var_Password =validate ($_POST['Passwordd']);
    if(empty($var_username))//في حالة عدم وجود الاسم يبقى في صفحة تسجيل الدخول
    {
       header("Location: signin.php?error= username error");
       exit();
    }
    else if(empty($var_Password))//في حالة عدم وجود للرقم السري يبقى في الصفحة
    {
      header("Location: signin.php?error= Password error"); 
      exit();
    }
    else
    {
      $conn = mysqli_connect('localhost','root' , '' ,'expenses tracker');//اتصال بقاعدة البيانات
      
       $sql = "SELECT * FROM user_table WHERE user_name='$var_username' and Passwordd='$var_Password'";
       $result = mysqli_query( $conn,$sql,$query);
         
      
        if(mysqli_num_rows($result) === 1)
         {
          $row= mysqli_fetch_assoc($result);
          if( $row['user_name']===$var_username && $row['Passwordd']===$var_Password)
          {
            $_SESSION['user_name']=$row['user_name'];
            $_SESSION['user_id']=$row['user_id'];
            echo"welcom";
          
            header("Location: home.php"); 
             exit();     
          } 
          else{header("Location:signin.php");  exit();}//
        }
        else{header("Location:signin.php");  exit();}//

      }
    }      
   
   else{  header("Location:signin.php");  exit(); }//
   
?>