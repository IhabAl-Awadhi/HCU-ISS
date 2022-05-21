<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>update timetable</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>



<?php
require "DB.php";
if(isset($_POST['updatetable']))
$semster=$_POST['acadimic_year'];
$majoring=$_POST['Major'];
$sql = "SELECT * FROM time_table WHERE year_acadmic = '$semster' && major = '$majoring'";
$result = mysql_query($sql,$connection);
if(mysql_num_rows($result)){
  while ($row = mysql_fetch_array($result)){


  }
}


 ?>

    <div class="" id="myModalone">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title"> Update time tabel </h4>
            <h3><?php echo $majoring; ?></h3>
            <h3><?php echo $semster; ?></h3>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>



          <!-- Modal body -->
          <div class="modal-body">


            <form class="" action="" method="post" enctype="multipart/form-data">
              <table>
                <tr>
                  <th></th>
                  <th>Monday<br>星期一</th>
                  <th>Tuesday<br>星期二</th>
                  <th>Wenday<br>星期三</th>
                  <th>Thursday<br>星期四</th>
                  <th>Friday<br>星期五</th>
                </tr>

                <tr>
                  <td>1-2</td>
                  <td><input type="text" name="mon1" value="" class="form-control"></td>
                  <td><input type="text" name="tue1" value="" class="form-control"></td>
                  <td><input type="text" name="wen1" value="" class="form-control"></td>
                  <td><input type="text" name="thu1" value="" class="form-control"></td>
                  <td><input type="text" name="fri1" value="" class="form-control"></td>
                </tr>

                <tr>
                  <td>3-4</td>
                  <td><input type="text" name="mon2" value="" class="form-control"></td>
                  <td><input type="text" name="tue2" value="" class="form-control"></td>
                  <td><input type="text" name="wen2" value="" class="form-control"></td>
                  <td><input type="text" name="thu2" value="" class="form-control"></td>
                  <td><input type="text" name="fri2" value="" class="form-control"></td>
                </tr>

                <tr>
                  <td>5-6</td>
                  <td><input type="text" name="mon3" value="" class="form-control"></td>
                  <td><input type="text" name="tue3" value="" class="form-control"></td>
                  <td><input type="text" name="wen3" value="" class="form-control"></td>
                  <td><input type="text" name="thu3" value="" class="form-control"></td>
                  <td><input type="text" name="fri3" value="" class="form-control"></td>
                </tr>

                <tr>
                  <td>7-8</td>
                  <td><input type="text" name="mon4" value="" class="form-control"></td>
                  <td><input type="text" name="tue4" value="" class="form-control"></td>
                  <td><input type="text" name="wen4" value="" class="form-control"></td>
                  <td><input type="text" name="thu4" value="" class="form-control"></td>
                  <td><input type="text" name="fri4" value="" class="form-control"></td>
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

                  </div>
                  </div>
                  </div>
                  </div>



                  <?php

                  $new_acadimic_year=$_POST['acadimic_year'];
                  $new_major=$_POST['Major'];
                  $new_mon1=$_POST['mon1'];
                  $new_tue1=$_POST['tue1'];
                  $new_wen1=$_POST['wen1'];
                  $new_thu1=$_POST['thu1'];
                  $new_fri1=$_POST['fri1'];
                  $new_mon2=$_POST['mon2'];
                  $new_tue2=$_POST['tue2'];
                  $new_wen2=$_POST['wen2'];
                  $new_thu2=$_POST['thu2'];
                  $new_fri2=$_POST['fri2'];
                  $new_mon3=$_POST['mon3'];
                  $new_tue3=$_POST['tue3'];
                  $new_wen3=$_POST['wen3'];
                  $new_thu3=$_POST['thu3'];
                  $new_fri3=$_POST['fri3'];
                  $new_mon4=$_POST['mon4'];
                  $new_tue4=$_POST['tue4'];
                  $new_wen4=$_POST['wen4'];
                  $new_thu4=$_POST['thu4'];
                  $new_fri4=$_POST['fri4'];

                  if(isset($_POST['updatetable']))
                  {
                    $year=$_POST['acadimic_year'];
                    $majoring=$_POST['Major'];
                  }


                  ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>


<?php if(isset($_POST['close']))
{
    echo  "<script type='text/javascript'>";
    echo "window.close();";
    echo "</script>";
  } ?>
