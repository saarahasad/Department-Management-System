<?php
   include('db_connection.php'); 
   
   $usn=$_GET['usn'];
  
    $query="delete from Students where usn= '$usn';";
   $flagAdd=mysqli_query($dbHandle,$query);
      if(!$flagAdd)
     {
          print(mysqli_error($dbHandle));
     }
     else
     {
           echo "<script>
            alert('Student bearing $usn deleted!');
                window.location.href='a-addstudent.php';
             </script>";
     }
    
?>