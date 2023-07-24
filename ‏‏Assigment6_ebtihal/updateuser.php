<?php
session_start();
include 'dbConn.php';

// Create connection
$conn = new mysqli($hn, $un, $pw, $db);
$isbn = $_GET['user_table'];
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

 //"UPDATE MyGuests SET lastname='Doe' WHERE id=2";
$sql ="UPDATE user_table SET user_name='$_POST['User_Name']', user_email='$_POST['E_Mail']',
 Passwordd='$_POST['Passwordd']',user_phone=$_POST['Phone'], country='$_POST['country']' WHERE 
  name_user='$_SESSION['user_name']'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>