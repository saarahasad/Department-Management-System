<?php
include('db_connection.php');
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form
        $username=$_POST['username'];
        $password=$_POST['password'];
        $type=$_POST['type'];
        $query="select f_name from Faculty_members  where Faculty_id='F000' and fpassword='$password' AND f_email='$username';";
        $flagAdd=mysqli_query($dbHandle,$query);
        $row = mysqli_fetch_array($flagAdd,MYSQLI_ASSOC);
         if(!$flagAdd){
        die("Could not connect".mysql_error());
    }
        $count = mysqli_num_rows($flagAdd);

        if($count == 1) {
            $_SESSION['login_user'] = $username;
            header("location: adminhome.php");
        }
        else {
             header("location:admin.php");
        }
   }




?>
