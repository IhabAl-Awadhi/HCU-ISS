<?php
/*session_start();
require 'DB.php';
$id=$_SESSION['id'];

$sql = "SELECT * FROM student WHERE id = '$id' ";
$result = mysql_query($sql,$connection);

$student_id=$row['student_id'];
$photo=$row['photo'];
$full_name=$row['student_name'];
$chinese_name=$row['chinese_name'];
$major=$row['major'];
*/
?>
<?php
session_start();
require 'DB.php';

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student Infomamtion </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    <center>
      <br><br><br><br><br>
      <img src="image/ligo.jpg" alt="logo" height="222px" width="222px">
    <h1 style="color:#3385d1;">Harbin Cambrigde University</h1>
    <h2 style="color:#3385d1;">International Student Services</h2>
  <br><br><br><br><br>


<form class="search"  method="post">



<div class="container">
<div class="row">

  <div class="col-md-6">
      <input class="form-control" type="search" name="lookingfor" placeholder="name & passport & student ID" autofocus style="width:500px">

  </div>





    <div class="col-md-2">
      <button class="form-control" type="submit" name="search" value='Search' style="width:50px;"><img src="image/search.png" alt="search" height=20px; width=20px; ></button>
    </div>

</div>

</div>

</form>
<br><br><br><br>

<div class="row">




<?php

if(isset($_POST['search'])){
$full_name=$_POST['lookingfor'];
$sql = "SELECT * FROM student WHERE student_name LIKE '%$full_name%' || chinese_name LIKE '%$full_name%' || major LIKE '%$full_name%' || passport_NO LIKE '%$full_name%'";
$result = mysql_query($sql,$connection);
if(mysql_num_rows($result)){
  while ($row = mysql_fetch_array($result)){
  echo '<div class="col-lg-2">';
  echo '<form class="" action="student_deep.php" method="post">';
  echo '<div class="card" style="width: 16rem; border:3px solid #3385d1">';
    $photo=$row['photo'];
  echo ' <img class="card-img-top" src="image/'.$photo.'" alt="student" height="300" Width="250">';
  echo '<div class="card-body">';
  echo '<h5 class="card-title">'.$row['chinese_name'].'</h5>';
  echo '<p class="card-text">'.$row['major'].'</p>';

  echo '<input type="hidden" name="S_ID" value="'.$row['student_id'].'">';

  //'<!--  <a  type="submit" class="btn btn-primary" style=" background-color;#3385d1.;">check more</a>-->";
  echo '<button type="submit" name="Action" class="btn btn-primary" style=" background-color:#3385d1;">check more</button>';

  /*if (isset($_POST['Action'])) {

    header('location:student_deep.php');}*/

  echo " </div></div>
</div>
  </form>
";



}
}
}
else {
  // code...
  echo "no student found ";
}


//$row = mysql_fetch_array($result,MYSQLI_ASSOC);
?>





</div>



  <br><br><br><br><br>












  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
