<?php
include('db_connection.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($dbHandle,"select f_name from Faculty_members where f_email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['f_name'];
   
    $q = mysqli_query($dbHandle,"select Faculty_id from Faculty_members where f_email = '$user_check' ");
   
   $row = mysqli_fetch_array($q,MYSQLI_ASSOC);
   
   $login_id = $row['Faculty_id'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:home.html");
   }
?>