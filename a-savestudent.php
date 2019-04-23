<?php
   include('db_connection.php'); 
   $name=$_POST['name'];
    $usn=$_POST['usn'];
   $sem=$_POST['sem'];
    $sec=$_POST['sec'];
     $phone=$_POST['phone'];
   $email=$_POST['email'];
    $address=$_POST['address'];
    $edit=$_POST['edit'];
    if($edit==0){
    $query="INSERT INTO Students VALUES('$usn','$sem','$sec','$name','$phone','$address','$email');";
    }
    else{
          $orginalusn=$_GET['usn'];

      $query="UPDATE `Students` SET `usn`='$usn', `sem`='$sem', `name`='$name', `phone`='$phone', `address`='$address', `email`='$email' WHERE `usn`='$orginalusn';";
    }
   $flagAdd=mysqli_query($dbHandle,$query);
      if(!$flagAdd)
     {
         echo "<script>
            alert('Oops! Something went wrong! ');
              window.location.href='a-addteacher.php';
             </script>";
     }
     else
     {
           echo "<script>
            alert(' Student $name bearing $usn successfully updated!');
                window.location.href='a-addstudent.php';
             </script>";
     }
    
?>