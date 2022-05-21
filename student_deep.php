<?php
session_start();
require 'DB.php';
$id=$_POST['S_ID'];

$sql = "SELECT * FROM student WHERE student_id = '$id' ";
$result = mysql_query($sql,$connection);
$row = mysql_fetch_array($result,MYSQLI_ASSOC);
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
$visa_no=$row['visa_no'];
$visa_date=$row['visa_date'];

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>student deep information</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style media="screen">
    .nav-item{
      float: ;
        text-align: center;
        border-width: 8px;

        background-position: center;



    }
    .navbar{
      background-color: #3385d1;
      border: 5px;
      border-radius: 3em

    }
    nav{
    background-color: #3385d1;

    width: 800px;
    position: absolute;
    top: 20px;
    right:0;

    height: 120x;
    }
   table,th,td,tr{
     border: 2px solid black;
     text-align: center;
   }


    </style>

  </head>
  <body>
    <center>
      <br><br><br><br><br><br><br><br><br>
      <img src="image/ligo.jpg" alt="logo" height="222px" width="222px">
    <h1 style="color:#3385d1;">Harbin Cambrigde University</h1>
    <h2 style="color:#3385d1;">International Student Services</h2>
<br><br><br>
<nav class="navbar navbar-expand-lg navbar-light sticky-top" style="max-width:100%;">
  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo01" style="text-align:center; ">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0" style="text-align:center">

      <li class="nav-item">
        <a class="nav-link" href="#information" style="color:white;">Student Information<br>学生信息</a>

      <li class="nav-item" >
        <a class="nav-link" href="#CTT" style="color:white;">Class Time Table<br>班级时间表</a>

      <li class="nav-item" >
        <a class="nav-link" href="#ETT" style="color:white;">Exams Time Table <br>考试时间表</a>

      <li class="nav-item" >
        <a class="nav-link" href="#ER" style="color:white;">Exams results<br>考试成绩</a>

      <li class="nav-item" >
        <a class="nav-link" href="Admin_page.php" style="color:white;">control page<br>控制页</a>

      <li class="nav-item" >
        <a class="nav-link" href="#visaPR" style="color:white;">Visa PR<br>签证</a>



  </div>
</nav>
<br><br><br><br><br><br><br><br>
<br><br><br><br>

<br><br><br><br>

<div class="information" id="information" style="max-width:100%;">
  <br><br><br><br><br><br><br><br>
  <h2 style="color:#3385d1">Student Information 学生信息</h2>
  <br><br><br><br>
  <table style="max-width:100%;">
    <tr>
      <td rowspan="4" > <img src="image/<?php echo "$photo"; ?>" alt="" style="width:250px; height:250px;"> </td>
      <th style="color:#3385d1">student name<br>学生姓名</th>
      <td><?php echo "$student_name"; ?></td>
    </tr>
    <tr>
      <th style="color:#3385d1">Chinese name<br>中文姓名</th>
      <td style=" width:600px;"><?php echo "$chinese_name"; ?></td>
    </tr>
    <tr>
      <th style="color:#3385d1">student ID<br>学生号</th>
      <td><?php echo "$student_id"; ?></td>
    </tr>
    <tr>
      <th style="color:#3385d1">Passport<br>护照号</th>
      <td><?php echo "$passport"; ?></td>
    </tr>
    </table>
    <br><br>
    <table style="max-width:100%;width:962px; height:250px; ">
      <tr>
        <th style="color:#3385d1">Nationalty<br>国籍</th>
        <td><?php echo "$nationalty"; ?></td>
        <th style="color:#3385d1">Major<br>专业</th>
        <td><?php echo "$major"; ?></td>
      </tr>
      <tr>
        <th style="color:#3385d1">E_mail<br>电子邮件</th>
        <td><?php echo "$email"; ?></td>
        <th style="color:#3385d1">Gender<br>性别</th>
        <td><?php echo "$gender"; ?></td>
      </tr>
      <tr>
        <th style="color:#3385d1">Phone<br>手机号码</th>
        <td><?php echo "$phone"; ?></td>
        <th style="color:#3385d1">Birthday<br>生日</th>
        <td><?php echo "$birthday"; ?></td>
      </tr>

      <tr>
        <th style="color:#3385d1">visa_no.<br>签证号</th>
        <td><?php echo "$visa_no"; ?></td>
        <th style="color:#3385d1">visa_date<br>签证到期</th>
        <td><?php echo "$visa_date"; ?></td>
      </tr>

    </table>


</div>
<br> <br>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1" >
  Update Student Info<br>学生信息
  </button>

<div class="modal fade" id="myModal1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"> Update New Student<br>添加学生 </h4><?php $uniqe_id=$row['id'];?>
        <button type="button" class="close" data-dismiss="modal">×</button>
      </div>



      <!-- Modal body -->
      <div class="modal-body">


        <form class="" action="" method="post" enctype="multipart/form-data">
          <table>
            <tr>
              <td><input type="hidden" name="new_id" value="<?php echo $uniqe_id;?>"></td>
            </tr>
            <tr>
              <td>Student Name<br> 学生姓名:</td>
              <td>  <input type="text" name="student_name" class="form-control" value="<?php echo $student_name;?>"></td>
            </tr>

            <tr>
              <td>Chinese Name <br>中文名:</td>
              <td>  <input type="text" name="chinese_name" class="form-control" value="<?php echo $chinese_name;?>"></td>
            </tr>

            <tr>
              <td>Student ID<br> 学生号:</td>
              <td>  <input type="text" name="student_id" class="form-control" value="<?php echo $student_id;?>"></td>
            </tr>


            <tr>
              <td>E_mail <br>电子邮:</td>
              <td><input name="email" class="form-control" value="<?php echo $email;?>"></td>
            </tr>

            <tr>
              <td>Nationalty <br>国籍:</td>
              <td>  <input  name="country" class="form-control" value="<?php echo $nationalty;?>">
                  </td>
            </tr>

            <tr>
              <td>Phone <br>手机号码: </td>
              <td><input type="text" name="phone" class="form-control" value="<?php echo $phone;?>"></td>
            </tr>

            <tr>
              <td>Birthday <br>生日期: </td>
              <td><input type="date" name="Birthday" class="form-control" value="<?php echo $birthday;?>"></td>
            </tr>

            <tr>
              <td>Passport <br>护照号: </td>
              <td><input type="text" name="passport_NO" class="form-control" value="<?php echo $passport;?>"></td>
            </tr>

            <tr>
              <td>Major <br>专业: </td>
              <td><input type="text" name="Major" class="form-control" value="<?php echo $major;?>"></td>
            </tr>

            <tr>
              <td>major_department <br>选择专业部: </td>
              <td>  <select class="form-control" name="major_depart" style="width:300px;">
                  <option value="CL1">chinese Language 1</option>
                  <option value="CL2">chinese Language Advance</option>
                  <option value="IET">International Economics & Trade</option>
                  <option value="CST">Computer Science & Technology </option></td>
                </select>
            </tr>

            <tr>
              <td>visa_NO <br>签证号: </td>
              <td><input type="text" name="visa_no" class="form-control" value="<?php echo $visa_no;?>"></td>
            </tr>

            <tr>
              <td>visa date Expiry<br> 签证到期: </td>
              <td><input type="date" name="visa_date" class="form-control" value="<?php echo $visa_date;?>"></td>
            </tr>

            <tr>
              <td>Gender <br>性别: </td>
              <td><input  name="gender" class="form-control" value="<?php echo $gender;?>">
                </td>
            </tr>





    </table>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <center>
        <br>  <tr>
          <td><input class="btn btn-primary" type="submit" name="update" value="Update"></td>
        </tr>
          </form>

<?php
$new_id=$_POST['new_id'];
$new_student_id=$_POST['student_id'];
$new_student_name=$_POST['student_name'];
$new_chinese_name=$_POST['chinese_name'];
$new_major=$_POST['Major'];
$new_passport=$_POST['passport_NO'];
$new_birthday=$_POST['Birthday'];
$new_gender=$_POST['gender'];
$new_email=$_POST['email'];
$new_nationalty=$_POST['country'];
$new_phone=$_POST['phone'];
$new_mjr=$_POST['mjr'];
$new_mjr_dep=$_POST['major_depart'];
$new_visa_no=$_POST['visa_no'];
$new_visa_date=$_POST['visa_date'];

if (isset($_POST['update'])) {
$update_query="UPDATE student SET student_name='$new_student_name' ,chinese_name='$new_chinese_name',
               passport_NO ='$new_passport', major='$new_major' , mjr='$new_mjr_dep' ,E_mail='$new_email', nationalty='$new_nationalty',
                phone='$new_phone', birthday='$new_birthday' ,visa_no='$new_visa_no', visa_date='$new_visa_date' , gender='$new_gender'  WHERE ID = '$new_id' ";
if (mysql_query($update_query,$connection) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $connection->error;
}


}
 ?>


</div>
</div>
</div>
</div>


<div id="CTT" >
  <br><br><br><br><br><br><br><br>
  <br><br><br><br><br>
  <h2 style="color:#3385d1">Major<?php echo " ".$row['major'];?></h2> <br><br><br>
  <table style="width:962px; height:250px;" >
   <tr>
     <th></th>
     <th style="color:#3385d1">Monday<br>星期一</th>
     <th style="color:#3385d1">Tuesday<br>星期二</th>
     <th style="color:#3385d1">Wenday<br>星期三</th>
     <th style="color:#3385d1">Thursday<br>星期四</th>
     <th style="color:#3385d1">Friday<br>星期五</th>
   </tr>
<?php
$sql = "SELECT * FROM student,time_table WHERE student.mjr = time_table.major AND student.student_id = '$id'  ";
$result = mysql_query($sql,$connection);
$times=0;
$times1=1;
if (mysql_num_rows($result)) {
  while ($row = mysql_fetch_array($result)) {
  echo "<tr>";
  echo "<td>".$times1++."-".$times1++."</td>";
  echo "<td>".$row['mon1']."</td>";
  echo "<td>".$row['tue1']."</td>";
  echo "<td>".$row['wen1']."</td>";
  echo "<td>".$row['thu1']."</td>";
  echo "<td>".$row['fri1']."</td>";
  echo "</tr>";
  }
}
 ?>


 </table>

</div>


<div id="ETT" style="Width:100%">
  <br><br><br><br><br><br><br><br>
  <br><br><br><br><br>
  <h2 style="color:#3385d1;"> Exam_Time</h2> <br><br><br>

  <table style="width:962px; height:250px ";>
   <tr>

     <th style="color:#3385d1">subject Name<br>课程名</th>
     <th style="color:#3385d1">Date<br>日期</th>
     <th style="color:#3385d1">Time<br>时间</th>
     <th style="color:#3385d1">Room No<br>班号</th>

   </tr>


   <?php
   $sql = "SELECT * FROM student,exam_table WHERE student.mjr = exam_table.major AND student.student_id = '$id'   ";
   $result = mysql_query($sql,$connection);
   if (mysql_num_rows($result)) {
     while ($row=mysql_fetch_array($result,MYSQLI_ASSOC)) {
       echo "<tr>";
       echo "<td>".$row['sn1']."</td>";
       echo "<td>".$row['date1']."</td>";
       echo "<td>".$row['time1']."</td>";
       echo "<td>".$row['rn1']."</td>";
       echo "</tr>";

     }
   }



?>


 </table>
</div>


<div id="ER">
  <br><br><br><br><br><br><br><br>
  <br><br><br><br><br>
  <h2 style="color:#3385d1;" >Exam Results</h2>
  <br><br><br>

  <table style="width:962px; height:250px">
    <tr>
      <th style="width:40px;color:#3385d1;">编号<br>NO</th>
      <th style="width:700px;color:#3385d1;">课程名称<br>Course Name</th>
      <th style="color:#3385d1">课时<br>Times</th>
      <th style="color:#3385d1">学分<br>Credits</th>
      <th style="color:#3385d1">成绩<br>Grades</th>
    </tr>
    <?php
    $count=1;
    $sql = "SELECT * FROM student,exam_table WHERE student.mjr = exam_table.major AND student.student_id = '$id'   ";
    $result = mysql_query($sql,$connection);
    $subject_name=$row['sn1'];
    if (mysql_num_rows($result)) {
      while ($row=mysql_fetch_array($result,MYSQLI_ASSOC)) {
        $subject_name=$row['sn1'];

        echo '<form method="post" enctype="multipart/form-data"><tr>';
        echo "<td>".$count++."</td>";
        echo '<td><input type="text" name="subject_name[]" class="form-control"  value='.$subject_name.'></td>';
        echo '<input type="hidden" name="counter[]" class="form-control" value='.$counter.'>';
        echo '<input type="hidden" name="id[]" class="form-control" value='.$id.'>';
        echo '<td><input type="text" name="times[]" class="form-control"></td>';
        echo '<td><input type="text" name="credits[]" class="form-control"></td>';
        echo '<td><input type="text" name="grades[]" class="form-control"></td>';
        echo "</tr>";


    }


      }



      echo "</table><br><br><br>";
      echo '<input type="submit" name="input" value="input Grades" class="btn btn-primary" >';
    echo "</form>";

    if (isset($_POST['input'])) {

        $counter=$_POST['counter'];
        $sut_id=$_POST['id'];
        $subject_name=$_POST['subject_name'];
        $times=$_POST['times'];
        $credits=$_POST['credits'];
        $grades=$_POST['grades'];

        for ($i=0; $i <count($counter) ; $i++) {
          $input_data=$query="INSERT INTO exam_result(counter,student_ids,subject_name,times,credits,grades)
          VALUES ('$counter[$i]','$sut_id[$i]','$subject_name[$i]','$times[$i]','$credits[$i]','$grades[$i]')";
          if ($input_data_one=mysql_query($input_data,$connection)) {
           echo "<script> alert('Already input $subject_name[$i]==$grades[$i]')</script>";
           header('location:student_Info.php');
          }
          else {
            echo "<script> alert('mistake input $subject_name[$i]')</script>";
          }
        }




  }
     ?>


  <!-- -->


</div>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>

<div class="">

    <table style="width:962px; height:250px">
      <tr>
        <th style="width:40px;color:#3385d1;">编号<br>NO</th>
        <th style="width:700px;color:#3385d1;">课程名称<br>Course Name</th>
        <th style="color:#3385d1">课时<br>Times</th>
        <th style="color:#3385d1">学分<br>Credits</th>
        <th style="color:#3385d1">成绩<br>Grades</th>
      </tr>

      <?php
      $count=1;
      $sql = "SELECT * FROM student,exam_result WHERE  student.student_id = '$id' AND exam_result.student_ids = '$id' ";
      $result = mysql_query($sql,$connection);

      if (mysql_num_rows($result)) {
        while ($row=mysql_fetch_array($result,MYSQLI_ASSOC)) {
          $subject_name=$row['sn1'];


          echo "<td>".$count++."</td>";
          echo '<td>'.$row['subject_name'].'</td>';
          echo '<td>'.$row['times'].'</td>';
          echo '<td>'.$row['credits'].'</td>';
          echo '<td>'.$row['grades'].'</td>';
          echo "</tr>";

          $total_time=$total_time+$row['times'];
          $total_credits=$total_credits+$row['credits']++;
          $total_grades=$total_grades+$row['grades']++;
      }


        }
      ?>

      <tr>
         <th style="color:#3385d1">合计<br>Consult</th>
         <td></td>
         <td><?php echo $total_time;?></td>
         <td><?php echo $total_credits;?></td>
         <td><?php echo $total_grades;?></td>
       </tr>

     </table>
</div>

<div id="payment">
  <br><br><br><br><br><br><br><br>
  <br><br><br><br><br><br><br><br>

</div>

<div id="visaPR">
  <br><br><br><br><br><br><br><br>
  <br><br><br><br><br><br><br><br>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
</html>
