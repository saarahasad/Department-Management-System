<?php
   include('db_connection.php'); 
   $note=$_POST['note'];
    $sem=$_POST['sem'];
    $sec=$_POST['sec'];
    $type=$_POST['type'];
    $date=date("Y-m-d");

    $query="INSERT INTO announcements VALUES('','$note','$date','$type','$sem','$sec');";
   $flagAdd=mysqli_query($dbHandle,$query);
      if($type==1){
           if($flagAdd)
     {
           echo "<script>
            alert('Created!');
                window.location.href='studentannouncements.php';
             </script>";
     }
     else{


           echo "<script>
            alert('Oops! Something went wrong!');
                window.location.href='studentannouncements.php';
             </script>";

     }
    }
      else{
           if($flagAdd)
     {
           echo "<script>
            alert('Created!');
                window.location.href='facultyannouncements.php';
             </script>";
     }
     else{


           echo "<script>
            alert('Oops! Something went wrong!');
                window.location.href='facultyannouncements.php';
             </script>";

     }
    }
    
?>