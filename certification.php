<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>certification</title>

  </head>
  <button type="button" onclick="printJS('cer', 'html')">
     Print Form
  </button>
  <body >
    <div  id="cer" style="background-image:url('ligo.png');
    background-repeat: no-repeat;
    background-position:center;
    background-size: auto;
    background-attachment: fixed;">

    <img src="HCULOGO.png" alt="logo doc">
    <center>
      <br><br><br>

    <div  class="container" style="width:1000px;">
    <center>
      <h2 style="font-size:40px;">在读证明</h2>
      <h2 style="font-size:40px;">CERTIFICATION</h2>
      <br><br><br>
    </center>
    <center>
      <p style="font-size:30px;">兹证明 <strong><?php echo $_POST['English_name']." , ".$_POST['chinese_name']." "; ?></strong>，性别 <strong><?php echo $_POST['chinese_gender']; ?></strong>，出生日期 <strong><?php echo $_POST['Birthday']; ?></strong>，
        护照号码 <strong><?php echo $_POST['passport']." "; ?></strong>，
         国籍 <strong><?php echo $_POST['Chinese_country']; ?></strong>，为我校 国际文化流学院自费留学生，学习期限 <strong><?php echo $_POST['from_date']; ?></strong> 到 <strong><?php echo $_POST['to_date']; ?></strong>·</p>
      <br><br><br>
      <br><br><br>
      </center>
<strong style="  float:right;font-size:30px;">
      哈尔滨剑桥学院 国际文化流学院<br>
      <?php date_default_timezone_set('UTC');
      echo date('yy')." 年 ".date('m')."月".date('j')."日"; ?><br><br>
    </strong></right>
        <br><br><br><br><br>
        <p style="float:left;font-size:30px;">To Whom it may concern,</p>
        <br><br>
        <center>
        <br><p style="font-size:30px;float:left;">MR./MS <strong><?php echo $_POST['English_name']; ?></strong>, date of birth :<strong><?php echo $_POST['Birthday']; ?></strong> ,
         passport NO.:<strong><?php echo $_POST['passport']; ?></strong>, nationality: <strong><?php echo $_POST['En_country']; ?></strong>,was enrolled as an international
           student of International Culture Exchange College of Harbin Cambrigde University in <strong><?php echo $_POST['major']; ?></strong>.His/Her
           anicipated date of completion for this program is <strong><?php echo $_POST['to_date']; ?></strong>ْْ.</p>
         </center>
         <br><br><br><br>
         <strong style="float:left;font-size:30px;">
         Mr. Wang<br>
         Dean of International Cultural Exchange College<br>
         Harbin Cambrigde University<br>
         <?php date_default_timezone_set('UTC');
         echo date('M')." ".date('j').",".date('yy'); ?><br></p>
       </strong>
         <br><br><br><br><br><br>
          <br><br><br><br><br><br>
           <br><br><br><br><br><br>
    </div>
  </center>
  </div>
<script src="print.js"></script>
  </body>
</html>
