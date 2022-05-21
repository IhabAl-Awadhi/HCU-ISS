
<!DOCTYPE html>
<?php
session_start();

require 'DB.php';


$id=$_SESSION['student'];

$sql = "SELECT * FROM student WHERE student_id = '$id' ";
$result = mysql_query($sql,$connection);
$row = mysql_fetch_array($result,MYSQLI_ASSOC);
$student_id=$row['student_id'];
$photo=$row['photo'];
$student_name=$row['student_name'];
$chinese_name=$row['chinese_name'];
$major=$row['major'];
$passport=$row['passport_NO'];
$birthday=$row['brithday'];
$gender=$row['gender'];
$email=$row['E_mail'];
$nationalty=$row['nationalty'];
$phone=$row['phone'];
$visa_no=$row['visa_no'];
$visa_date=$row['visa_date'];

?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> input information</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  </head>
  <body>
    <br><br><br><br><br>
    <center>
<form class="" action="certification.php" method="post">
  <table>
    <tr>
      <td>Name : </td>
      <td><input class="form-control" type="text" name="English_name" value="<?php echo $student_name; ?>">  </td>
    </tr>

    <tr>
      <td>Chinese Name : </td>
      <td><input class="form-control" type="text" name="chinese_name" value="<?php echo $chinese_name; ?>">  </td>
    </tr>

    <tr>
      <td>性别 : </td>
      <td><select class="form-control" class="" name="chinese_gender">
        <option value="男">男</option>
        <option value="女">女</option>

      </select> </td>
    </tr>

    <tr>
      <td>出生日期 : </td>
      <td><input class="form-control" type="date" name="Birthday" value="<?php echo $birthday; ?>">  </td>
    </tr>

    <tr>
      <td>护照号码 : </td>
      <td><input class="form-control" type="text" name="passport" value="<?php echo $passport; ?>">  </td>
    </tr>

    <tr>
      <td>国籍 : </td>
      <td><input class="form-control" type="text" name="Chinese_country" placeholder="中国">  </td>
    </tr>

    <tr>
      <td>country : </td>
      <td><input class="form-control" type="text" name="En_country" placeholder="China">  </td>
    </tr>

    <tr>
      <td>从 : </td>
      <td><input class="form-control" type="date" name="from_date" value="">  </td>
    </tr>

    <tr>
      <td>到 : </td>
      <td><input class="form-control" type="date" name="to_date" value="">  </td>
    </tr>

    <tr>
      <td>Major : </td>
      <td>
      <select class="form-control" name="major" style="width:300px;">
          <option value="CL1">chinese Language 1</option>
          <option value="CL2">chinese Language Advance</option>
          <option value="IET">International Economics & Trade</option>
          <option value="CST">Computer Science & Technology </option></td>
        </select>
      </td>
    </tr>

   <tr>
     <td></td>
     <td> <input type="submit" name="send" value="create certificate" class="form-control btn btn-primary"> </td>
     <td></td>
   </tr>
  </table>

</form>




  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
