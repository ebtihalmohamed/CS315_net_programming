<?php
$catg_name = $_POST['cat_name'];
$the_amount = $_POST['Budget'];
$the_date = $_POST['date'];
$Paid_up= $_POST['Paid_up'];
$Purchase_Type= $_POST['Purchase_Type'];
$sql = "SELECT * FROM category";
$result =mysqli_query($conn ,$sql);

if($result)
  {
     
      while($row=mysqli_fetch_assoc($result))
      {
          echo "<table border='2' bgcolor='white'> 
          <tr>
          <td>".$id['PK_cat']."</td><br>
          <td>".$catg_name['cat_name']."</td>
          <td>".$the_amount['Budget']."</td>
          $the_date = $_POST['date'];
          <td>".$result['Paid_up']."</td>
          <td>".$result['Purchase_Type']."</td>
        
          <td><a href ='add.php?PK_cat=".$result['PK_cat']."'><input type ='submit' value='Delete'></a></td>
          <td><a href ='updatecate.php?PK_cat=".$result['PK_cat']."'><input type ='submit' value='update'></a></td>
          
          </tr> </table>";        
      }
  }     



?>