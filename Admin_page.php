<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin page</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <center>
      <br><br><br><br><br>
      <img src="image/ligo.jpg" alt="logo" height="222px" width="222px">
    <h1 style="color:#3385d1;">Harbin Cambrigde University</h1>
    <h2 style="color:#3385d1;">International Student Services</h2>
  <br><br><br><br><br>

<div class="container">
  <ul class="list-group list-group-horizontal">
  <li class="list-group-item" style="background-color:#3385d1;">  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1" style="height:180px;width:300px;font-size: 33px; background-color:#3385d1;border-radius:4em;">
      Add Students<br>添加学生
    </button></li>
  <li class="list-group-item" style="background-color:#3385d1;"><a href="student_Info.php">
    <button type="button" class="btn btn-primary" data-toggle="modal" style="height:180px;width:300px;font-size: 33px; background-color:#3385d1;border-radius:4em;">
    Student Info<br>学生信息
    </button></a></li>
  <li class="list-group-item" style="background-color:#3385d1;">  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal3" style="height:180px;width:300px;font-size: 33px; background-color:#3385d1; border-radius:4em;">
      Add Time Table<br>添加时间表
    </button></li>
  <li class="list-group-item" style="background-color:#3385d1;">  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal4" style="height:180px;width:300px;font-size: 33px; background-color:#3385d1;border-radius:4em;">
      Add Exam Time<br>添加考试时间表
    </button></li>
</ul>
</div>
<br><br><br><br><br>

<div class="container">
  <div class="row">
    <div class="col-md-2">

    </div>

    <div class="col-md-3" style="padding-top: 50px;">

    </div>

    <div class="col-md-2">

    </div>

    <div class="col-md-3" style="padding-top: 50px;">
    </div>

    <div class="col-md-2">

    </div>
  </div>

  <div class="row">
    <div class="col-md-2">

    </div>

    <div class="col-md-3" style="padding-top: 50px;">

    </div>

    <div class="col-md-2">

    </div>

    <div class="col-md-3" style="padding-top: 50px;">

    </div>

    <div class="col-md-2">

    </div>
  </div>
</div>


<div class="modal fade" id="myModal1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"> Add New Student<br>添加学生 </h4>
        <button type="button" class="close" data-dismiss="modal">×</button>
      </div>



      <!-- Modal body -->
      <div class="modal-body">


        <form class="" action="" method="post" enctype="multipart/form-data">
          <table>
            <tr>
              <td>Student Name<br> 学生姓名:</td>
              <td>  <input type="text" name="uname" class="form-control"></td>
            </tr>

            <tr>
              <td>Chinese Name <br>中文名:</td>
              <td>  <input type="text" name="chinese_name" class="form-control"></td>
            </tr>

            <tr>
              <td>Student ID<br> 学生号:</td>
              <td>  <input type="text" name="student_id" class="form-control"></td>
            </tr>

            <tr>
              <td>Password <br>密码:</td>
              <td><input type="password" name="pass" class="form-control"></td>
            </tr>
            <tr>
              <td>E_mail <br>电子邮:</td>
              <td><input name="email" class="form-control"></td>
            </tr>

            <tr>
              <td>Nationalty <br>国籍:</td>
              <td>  <select id="country" name="country" class="form-control">
                    <option value="empty!">----</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Åland Islands">Åland Islands</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                    <option value="Antarctica">Antarctica</option>
                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Aruba">Aruba</option>
                    <option value="Australia">Australia</option>
                    <option value="Austria">Austria</option>
                    <option value="Azerbaijan">Azerbaijan</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrain">Bahrain</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Belarus">Belarus</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Belize">Belize</option>
                    <option value="Benin">Benin</option>
                    <option value="Bermuda">Bermuda</option>
                    <option value="Bhutan">Bhutan</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                    <option value="Botswana">Botswana</option>
                    <option value="Bouvet Island">Bouvet Island</option>
                    <option value="Brazil">Brazil</option>
                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Burundi">Burundi</option>
                    <option value="Cambodia">Cambodia</option>
                    <option value="Cameroon">Cameroon</option>
                    <option value="Canada">Canada</option>
                    <option value="Cape Verde">Cape Verde</option>
                    <option value="Cayman Islands">Cayman Islands</option>
                    <option value="Central African Republic">Central African Republic</option>
                    <option value="Chad">Chad</option>
                    <option value="Chile">Chile</option>
                    <option value="China">China</option>
                    <option value="Christmas Island">Christmas Island</option>
                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Comoros">Comoros</option>
                    <option value="Congo">Congo</option>
                    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                    <option value="Cook Islands">Cook Islands</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Cote D ivoire">Cote D ivoire</option>
                    <option value="Croatia">Croatia</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Cyprus">Cyprus</option>
                    <option value="Czech Republic">Czech Republic</option>
                    <option value="Denmark">Denmark</option>
                    <option value="Djibouti">Djibouti</option>
                    <option value="Dominica">Dominica</option>
                    <option value="Dominican Republic">Dominican Republic</option>
                    <option value="Ecuador">Ecuador</option>
                    <option value="Egypt">Egypt</option>
                    <option value="El Salvador">El Salvador</option>
                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                    <option value="Eritrea">Eritrea</option>
                    <option value="Estonia">Estonia</option>
                    <option value="Ethiopia">Ethiopia</option>
                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                    <option value="Faroe Islands">Faroe Islands</option>
                    <option value="Fiji">Fiji</option>
                    <option value="Finland">Finland</option>
                    <option value="France">France</option>
                    <option value="French Guiana">French Guiana</option>
                    <option value="French Polynesia">French Polynesia</option>
                    <option value="French Southern Territories">French Southern Territories</option>
                    <option value="Gabon">Gabon</option>
                    <option value="Gambia">Gambia</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Germany">Germany</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Gibraltar">Gibraltar</option>
                    <option value="Greece">Greece</option>
                    <option value="Greenland">Greenland</option>
                    <option value="Grenada">Grenada</option>
                    <option value="Guadeloupe">Guadeloupe</option>
                    <option value="Guam">Guam</option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guernsey">Guernsey</option>
                    <option value="Guinea">Guinea</option>
                    <option value="Guinea-bissau">Guinea-bissau</option>
                    <option value="Guyana">Guyana</option>
                    <option value="Haiti">Haiti</option>
                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Hong Kong">Hong Kong</option>
                    <option value="Hungary">Hungary</option>
                    <option value="Iceland">Iceland</option>
                    <option value="India">India</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                    <option value="Iraq">Iraq</option>
                    <option value="Ireland">Ireland</option>
                    <option value="Isle of Man">Isle of Man</option>
                    <option value="Israel">Israel</option>
                    <option value="Italy">Italy</option>
                    <option value="Jamaica">Jamaica</option>
                    <option value="Japan">Japan</option>
                    <option value="Jersey">Jersey</option>
                    <option value="Jordan">Jordan</option>
                    <option value="Kazakhstan">Kazakhstan</option>
                    <option value="Kenya">Kenya</option>
                    <option value="Kiribati">Kiribati</option>
                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                    <option value="Korea, Republic of">Korea, Republic of</option>
                    <option value="Kuwait">Kuwait</option>
                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                    <option value="Latvia">Latvia</option>
                    <option value="Lebanon">Lebanon</option>
                    <option value="Lesotho">Lesotho</option>
                    <option value="Liberia">Liberia</option>
                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                    <option value="Liechtenstein">Liechtenstein</option>
                    <option value="Lithuania">Lithuania</option>
                    <option value="Luxembourg">Luxembourg</option>
                    <option value="Macao">Macao</option>
                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                    <option value="Madagascar">Madagascar</option>
                    <option value="Malawi">Malawi</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="Maldives">Maldives</option>
                    <option value="Mali">Mali</option>
                    <option value="Malta">Malta</option>
                    <option value="Marshall Islands">Marshall Islands</option>
                    <option value="Martinique">Martinique</option>
                    <option value="Mauritania">Mauritania</option>
                    <option value="Mauritius">Mauritius</option>
                    <option value="Mayotte">Mayotte</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                    <option value="Monaco">Monaco</option>
                    <option value="Mongolia">Mongolia</option>
                    <option value="Montenegro">Montenegro</option>
                    <option value="Montserrat">Montserrat</option>
                    <option value="Morocco">Morocco</option>
                    <option value="Mozambique">Mozambique</option>
                    <option value="Myanmar">Myanmar</option>
                    <option value="Namibia">Namibia</option>
                    <option value="Nauru">Nauru</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Netherlands">Netherlands</option>
                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                    <option value="New Caledonia">New Caledonia</option>
                    <option value="New Zealand">New Zealand</option>
                    <option value="Nicaragua">Nicaragua</option>
                    <option value="Niger">Niger</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="Niue">Niue</option>
                    <option value="Norfolk Island">Norfolk Island</option>
                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                    <option value="Norway">Norway</option>
                    <option value="Oman">Oman</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Palau">Palau</option>
                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                    <option value="Panama">Panama</option>
                    <option value="Papua New Guinea">Papua New Guinea</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Peru">Peru</option>
                    <option value="Philippines">Philippines</option>
                    <option value="Pitcairn">Pitcairn</option>
                    <option value="Poland">Poland</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Puerto Rico">Puerto Rico</option>
                    <option value="Qatar">Qatar</option>
                    <option value="Reunion">Reunion</option>
                    <option value="Romania">Romania</option>
                    <option value="Russian Federation">Russian Federation</option>
                    <option value="Rwanda">Rwanda</option>
                    <option value="Saint Helena">Saint Helena</option>
                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                    <option value="Saint Lucia">Saint Lucia</option>
                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                    <option value="Samoa">Samoa</option>
                    <option value="San Marino">San Marino</option>
                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                    <option value="Saudi Arabia">Saudi Arabia</option>
                    <option value="Senegal">Senegal</option>
                    <option value="Serbia">Serbia</option>
                    <option value="Seychelles">Seychelles</option>
                    <option value="Sierra Leone">Sierra Leone</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Slovakia">Slovakia</option>
                    <option value="Slovenia">Slovenia</option>
                    <option value="Solomon Islands">Solomon Islands</option>
                    <option value="Somalia">Somalia</option>
                    <option value="South Africa">South Africa</option>
                    <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                    <option value="Spain">Spain</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="Sudan">Sudan</option>
                    <option value="Suriname">Suriname</option>
                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                    <option value="Swaziland">Swaziland</option>
                    <option value="Sweden">Sweden</option>
                    <option value="Switzerland">Switzerland</option>
                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                    <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                    <option value="Tajikistan">Tajikistan</option>
                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                    <option value="Thailand">Thailand</option>
                    <option value="Timor-leste">Timor-leste</option>
                    <option value="Togo">Togo</option>
                    <option value="Tokelau">Tokelau</option>
                    <option value="Tonga">Tonga</option>
                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                    <option value="Tunisia">Tunisia</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Turkmenistan">Turkmenistan</option>
                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                    <option value="Tuvalu">Tuvalu</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Ukraine">Ukraine</option>
                    <option value="United Arab Emirates">United Arab Emirates</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="United States">United States</option>
                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                    <option value="Uruguay">Uruguay</option>
                    <option value="Uzbekistan">Uzbekistan</option>
                    <option value="Vanuatu">Vanuatu</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="Viet Nam">Viet Nam</option>
                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                    <option value="Western Sahara">Western Sahara</option>
                    <option value="Yemen">Yemen</option>
                    <option value="Zambia">Zambia</option>
                    <option value="Zimbabwe">Zimbabwe</option>
                </select></td>
            </tr>

            <tr>
              <td>Phone <br>手机号码: </td>
              <td><input type="text" name="phone" class="form-control"></td>
            </tr>

            <tr>
              <td>Birthday <br>生日期: </td>
              <td><input type="date" name="Birthday" class="form-control"></td>
            </tr>

            <tr>
              <td>Passport <br>护照号: </td>
              <td><input type="text" name="id_number" class="form-control"></td>
            </tr>

            <tr>
              <td>Major <br>专业: </td>
              <td><input type="text" name="Major" class="form-control"></td>
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
              <td><input type="text" name="visa_NO" class="form-control"></td>
            </tr>

            <tr>
              <td>visa date Expiry<br> 签证到期: </td>
              <td><input type="date" name="visa_date" class="form-control"></td>
            </tr>

            <tr>
              <td>Gender <br>性别: </td>
              <td><select  name="gender" class="form-control">
                <option value="male">male <br>男</option>
                <option value="female">female <br>女</option>

              </select></td>
            </tr>


                    <tr>
                      <td>photo<br> 照片: </td>
                      <td><input type="file" name="file" class="form-control">

                    </tr>


    </table>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <center>
        <br>  <tr>
          <td><input class="btn btn-primary" type="submit" name="Add" value="register"></td>
        </tr>
          </form>

          <?php
          require 'DB.php';

            if(isset($_POST['Add']))
            {
              $user=$_POST['uname'];
              $chinese_name=$_POST['chinese_name'];
              $student_id=$_POST['student_id'];
              $pass=$_POST['pass'];
              $email=$_POST['email'];
              $nationalty=$_POST['country'];
              $phone=$_POST['phone'];
              $birthday=$_POST['Birthday'];
              $id_number=$_POST['id_number'];
              $major=$_POST['Major'];
              $major_depart=$_POST['major_depart'];
              $gender=$_POST['gender'];
              $visa_no=$_POST['visa_NO'];
              $visa_date=$_POST['visa_date'];
              $file = $_FILES['file'];
              $file_name = $file['name'];
              $file_type = $file ['type'];
              $file_size = $file ['size'];
              $file_path = $file ['tmp_name'];

              if($file_name!="" && ($file_type="image/jpeg"||$file_type="image/png"||$file_type="image/gif")&& $file_size<=614400){}

              if(move_uploaded_file ($file_path,$file_name)){}

          $query="INSERT INTO student(major,mjr,nationalty,passport_NO,phone,photo,student_id,student_name,
            student_pass,visa_date,visa_no,birthday,chinese_name,E_mail,gender)
          VALUES ('$major','$major_depart','$nationalty','$id_number','$phone','$file_name',
            '$student_id','$user','$pass','$visa_date','$visa_no','$birthday','$chinese_name','$email','$gender')";
          if(mysql_query($query,$connection)){
          echo "<script> alert('you have add student $user')</script>";
          echo "<br>";
          }
          else  echo "error in mysql_query";}
          else {
            echo "no post there";
          }
          ?>

      </div>
    </div>
  </div>
</div>






<div class="modal fade" id="myModal3" >
  <div class="modal-dialog-centered"  style="height:500px; width:1000px; ">
    <div class="modal-content" >
      <!-- Modal Header modal-content-->
      <div class="modal-header">
        <h4 class="modal-title"> Add Time Table <br>添加课程时间表 </h4>
  <form class="" action="" method="post" enctype="multipart/form-data">

        <button type="submit" class="close" name="close">×</button>



      </div>



      <!-- Modal body -->
      <div class="modal-body">

        <table>
          <form class="" action="update_table.php" method="post">
            <tr>
              <td><h5>Major<br>专业</h5></td>
              <td><span><select class="form-control" name="Major" style="width:300px;">
                <option value="CL1">chinese Language 1</option>
                <option value="CL2">chinese Language Advance</option>
                <option value="IET">International Economics & Trade</option>
                <option value="CST">Computer Science & Technology </option></select></span></td>

                <td><h5>year<br>年</h5></td>

                <td> <span><select class="form-control" name="acadimic_year" style="width:300px;">
                  <option value="2019-2020">2019-2020 1</option>
                  <option value="2019-2020">2019-2020 2</option>
                  <option value="2020-2021">2020-2021 1</option>
                  <option value="2020-2021">2020-2021 2</option>
                  <option value="2021-2022">2021-2022 1</option>
                  <option value="2021-2022">2021-2022 2</option>
                  <option value="2022-2023">2022-2023 1</option>
                  <option value="2022-2023">2022-2023 2</option>
                  </select></span> </td>

                  <td>
                    <input class="btn btn-primary" type="submit" name="updatetable" value="update timetable" >
                  </td>
            </tr>

          </form>


        </table>
         <br><br>

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
         <br><br>


      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <center>
          <tr>
          <td><input class="btn btn-primary" type="submit" name="Add_table" value="Add 添加"></td><b><b><b>

          <td><input class="btn btn-primary" type="reset"  name="reset" value="Reset 重置"> </td>
        </tr>
          </form>

          <?php

          if(isset($_POST['Add_table']))
          {
            $acadimic_year=$_POST['acadimic_year'];
            $major=$_POST['Major'];
            $mon1=$_POST['mon1'];
            $tue1=$_POST['tue1'];
            $wen1=$_POST['wen1'];
            $thu1=$_POST['thu1'];
            $fri1=$_POST['fri1'];
            $mon2=$_POST['mon2'];
            $tue2=$_POST['tue2'];
            $wen2=$_POST['wen2'];
            $thu2=$_POST['thu2'];
            $fri2=$_POST['fri2'];
            $mon3=$_POST['mon3'];
            $tue3=$_POST['tue3'];
            $wen3=$_POST['wen3'];
            $thu3=$_POST['thu3'];
            $fri3=$_POST['fri3'];
            $mon4=$_POST['mon4'];
            $tue4=$_POST['tue4'];
            $wen4=$_POST['wen4'];
            $thu4=$_POST['thu4'];
            $fri4=$_POST['fri4'];

            $query="INSERT INTO time_table(major,year_acadmic,mon1,tue1,wen1,thu1,fri1)
            VALUES ('$major','$acadimic_year','$mon1','$tue1','$wen1','$thu1','$fri1'),
                   ('$major','$acadimic_year','$mon2','$tue2','$wen2','$thu2','$fri2'),
                   ('$major','$acadimic_year','$mon3','$tue3','$wen3','$thu3','$fri3'),
                   ('$major','$acadimic_year','$mon4','$tue4','$wen4','$thu4','$fri4')";
            if(mysql_query($query,$connection)){
            echo "done";
          }else {
            echo "mistake in query!!";
          }
        }
           ?>

      </div>
    </div>
  </div>
</div>

<br>


<div class="modal fade" id="myModal4" >
  <div class="modal-dialog-centered"  style="height:500px; width:1000px; ">
    <div class="modal-content" >
      <!-- Modal Header modal-content-->
      <div class="modal-header">
        <h4 class="modal-title"> Exam Time Table<br>考试时间表</h4>

          <form class="" action="" method="post" enctype="multipart/form-data">
        <button type="submit" class="close" name="close" >×</button>


      </div>



      <!-- Modal body -->
      <div class="modal-body">

          <table>
            <tr>
              <td><h5>Major<br>专业</h5></td>
              <td><span><select class="form-control" name="Major" style="width:300px;">
                <option value="CL1">chinese Language 1</option>
                <option value="CL2">chinese Language Advance</option>
                <option value="IET">International Economics & Trade</option>
                <option value="CST">Computer Science & Technology </option>  </select></span></td>
                <td><h5>year<br>年</h5></td>

                <td> <span><select class="form-control" name="acadmic_year" style="width:300px;">
                  <option value="2019-2020">2019-2020 1</option>
                  <option value="2019-2020">2019-2020 2</option>
                  <option value="2020-2021">2020-2021 1</option>
                  <option value="2020-2021">2020-2021 2</option>
                  <option value="2021-2022">2021-2022 1</option>
                  <option value="2021-2022">2021-2022 2</option>
                  <option value="2022-2023">2022-2023 1</option>
                  <option value="2022-2023">2022-2023 2</option>
                  </select></span> </td>
            </tr>
          </table>


          <table>
           <tr>

             <th>subject Name<br>课程名</th>
             <th>Date<br>期日</th>
             <th>Time<br>时间</th>
             <th>Room No<br>班号</th>

           </tr>

           <tr>

             <td><input type="text" name="sn1" value="" class="form-control"></td>
             <td><input type="date" name="date1" value="" class="form-control"></td>
             <td><input type="time" name="time1" value="" class="form-control"></td>
             <td><input type="number" name="rn1" value="" class="form-control"></td>

           </tr>

           <tr>

             <td><input type="text" name="sn2" value="" class="form-control"></td>
             <td><input type="date" name="date2" value="" class="form-control"></td>
             <td><input type="time" name="time2" value="" class="form-control"></td>
             <td><input type="number" name="rn2" value="" class="form-control"></td>
           </tr>

           <tr>

             <td><input type="text" name="sn3" value="" class="form-control"></td>
             <td><input type="date" name="date3" value="" class="form-control"></td>
             <td><input type="time" name="time3" value="" class="form-control"></td>
             <td><input type="number" name="rn3" value="" class="form-control"></td>
           </tr>

           <tr>

             <td><input type="text" name="sn4" value="" class="form-control"></td>
             <td><input type="date" name="date4" value="" class="form-control"></td>
             <td><input type="time" name="time4" value="" class="form-control"></td>
             <td><input type="number" name="rn4" value="" class="form-control"></td>
           </tr>


         </table>

          <br><br>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <center>
        <br>  <tr>
          <td><input class="btn btn-primary" type="submit" name="AddExamtable" value="Add 添加"></td><b><b>
          <td><input class="btn btn-primary" type="reset"  name="reset" value="Reset 重置"> </td>
        </tr>
          </form>
      </div>

      <?php

      require 'DB.php';
      if(isset($_POST['AddExamtable'])){
        $acadmic_year=$_POST['acadmic_year'];
        $major=$_POST['Major'];
        $sn1=$_POST['sn1'];
        $date1=$_POST['date1'];
        $time1=$_POST['time1'];
        $rn1=$_POST['rn1'];
        $sn2=$_POST['sn2'];
        $date2=$_POST['date2'];
        $time2=$_POST['time2'];
        $rn2=$_POST['rn2'];
        $sn3=$_POST['sn3'];
        $date3=$_POST['date3'];
        $time3=$_POST['time3'];
        $rn3=$_POST['rn3'];
        $sn4=$_POST['sn4'];
        $date4=$_POST['date4'];
        $time4=$_POST['time4'];
        $rn4=$_POST['rn4'];


        $query="INSERT INTO exam_table(major,sn1,date1,time1,rn1,year_academic)
        VALUES ('$major','$sn1','$date1','$time1','$rn1','$acadmic_year'),
               ('$major','$sn2','$date2','$time2','$rn2','$acadmic_year'),
               ('$major','$sn3','$date3','$time3','$rn3','$acadmic_year'),
               ('$major','$sn4','$date4','$time4','$rn4','$acadmic_year')";
        if(mysql_query($query,$connection)){
        echo "done";
        echo "<br>";

      }
      echo "something wrong (*^*)";
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



<?php if(isset($_POST['close']))
    {
   echo  "<script type='text/javascript'>";
   echo "window.close();";
   echo "</script>";
     } ?>
