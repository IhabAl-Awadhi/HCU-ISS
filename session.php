<?php
include 'DB.php';
session_start();

$id_check=$_SESSION['myid'];
$sql="SELECT id FROM student WHERE id ='$id_check'";
$ses_sql=mysql_query($connection,$sql);

$row=mysql_fetch_array($ses_sql,MYSQLI_ASSOC);

$row['id']=$student_uniqe_id;

if(!isset($_SESSION['myid'])){
  header("location:Studentlogin.php");
  die();
}



 ?>
