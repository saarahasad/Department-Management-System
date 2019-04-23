<?php
   include('db_connection.php'); 
   $sl=$_GET['sl'];
    $query="delete from announcements where sl= $sl;";
   $flagAdd=mysqli_query($dbHandle,$query);
      if(!$flagAdd)
     {
       print(mysqli_error($dbHandle));
     }
     $type=$_GET['type'];


    include('db_connection.php'); 
    $query1="call deleteannouncement";
    $flagAdd1=mysqli_query($dbHandle,$query1);
    if($type==1){
           if($flagAdd1)
     {
           echo "<script>
            alert('Deleted!');
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
           if($flagAdd1)
     {
           echo "<script>
            alert('Deleted!');
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