<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>student login</title>
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






<div class="container" style="border:4px solid black">
  <div class="row">
    <div class="col-md-6">
      <img src="image/students.png" alt="students" width="100%">

    </div>

  <div class="col-md-6"  style="background-color:#3385d1">
    <form method="post" action="" enctype="multipart/form-data">
    <br>      <h3 style="color:white;">student login 学生登录</h3><br><br>
      <table>
          <br>  <br>  <br>
          <tr>
            <label style="color:white;">Student ID 学生号 :</label>
          </tr>
          <tr>
            <input class="form-control" type="text" name="student_ID"><br><br>
          </tr>

          <tr>
            <label style="color:white;">Password 密码:</label>
          </tr>
          <tr>
            <input class="form-control" type="password" name="password" >
            <input type="hidden" name="id" value="">
          </tr>
      </table>
      <br>

      <input style="background-color:white; color:#3385d1;" class="btn btn-primary" type="submit" name="login" value="Login">
    </form>
    <?
    session_start();
    require 'DB.php';
    $student_id=$_POST['student_ID'];
    $password=$_POST['password'];

    $sql = "SELECT id FROM student WHERE student_id = '$student_id' and student_pass = '$password'";
    $result = mysql_query($sql,$connection);
    $row = mysql_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];
    $id=$row['id'];
    $count = mysql_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row


    if (isset($_POST['login'])) {
      if($count == 1){
        $_SESSION['student']=$student_id;
        header('location:student_page.php');
      }


      else {
      echo "<br>";
      echo "<h6>you name or password are wrong !</h6>";
      }

    }
    ?>
  </div>
  </div>

</div>
<br><br><br><br><br>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
