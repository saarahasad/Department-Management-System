<?php
   include('db_connection.php'); 
   
   $usn=$_GET['usn'];
  
    $query="delete from Tracker where fkusn= '$usn';";
   $flagAdd=mysqli_query($dbHandle,$query);
      if(!$flagAdd)
     {
          print(mysqli_error($dbHandle));
     }
     else
     {
           echo "<script>
            alert('Tracker swubjects for Student bearing $usn deleted!');
                window.location.href='a-addtracker.php';
             </script>";
     }
    
?>