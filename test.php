<?php

require 'DB.php';






 ?>


<form   method="post">
  <input class="form-control" type="search" name="searching" placeholder="look in" >

  <button class="form-control" type="submit" name="click"><img src="image/search.png" alt="search" height=20px; width=20px; ></button>





 <?php
 if (isset($_POST['click'])) {
   $name=$_POST['searching'];

   $query="SELECT * FROM student WHERE student_name LIKE '%$name%'";
   $result=mysql_query($query,$connection);
 if(mysql_num_rows($result)){
   while ($row = mysql_fetch_array($result)){
     $old_name=$row['student_name'];
     $old_pass=$row['passport_NO'];
     $change_major=$row['major'];
     $student_id=$row['student_id'];
     $id=$row['id'];
     echo "<h2>".$id."</h2>";
     echo "<h2>".$student_id."</h2>";
     echo "<h2>".$old_name."</h2>";
     echo "<h2>".$old_pass."</h2>";
     echo "<h2>".$change_major."</h2>";

     }
   }
 }
 $student_id=$row['student_id'];
 $photo=$row['photo'];
 $student_name=$row['student_name'];
 $chinese_name=$row['chinese_name'];
 $major=$row['major'];
 $passport=$row['passport_NO'];
 $birthday=$row['birthday'];
 $gender=$row['gender'];
 $email=$row['E_mail'];
 $nationalty=$row['nationalty'];
 $phone=$row['phone'];
 $mjr=$row['mjr'];

  ?>


<br><br><br><br><br><br><br><br>
<input type="hidden" name="new_id" value="<?php echo $id;?>"><br>
<input type="text" name="new_student_name" value="<?php echo $old_name;?>"><br>
<input type="text" name="new_passport_NO" value="<?php  echo $old_pass;?>"><br>
<input type="text" name="new_major" value="<?php echo $change_major;?>"><br>
<input type="submit" name="update" value="update">


</form>
<?php
$new_id=$_POST['new_id'];
$new_student_name=$_POST['new_student_name'];
$new_passort_no=$_POST['new_passport_NO'];
$new_major=$_POST['new_major'];
if (isset($_POST['update'])) {
$update_query="UPDATE student SET student_name='$new_student_name' , passport_NO ='$new_passort_no', major='$new_major' WHERE id ='$new_id'";
if (mysql_query($update_query,$connection) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $connection->error;
}
}


 ?>
