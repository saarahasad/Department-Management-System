<?php
   include('db_connection.php'); 
   
   $subcode=$_GET['subcode'];
  
    $query="delete from Subjects where subcode= '$subcode';";
   $flagAdd=mysqli_query($dbHandle,$query);
      if(!$flagAdd)
     {
          print(mysqli_error($dbHandle));
     }
     else
     {
           echo "<script>
            alert('Subject with subcode $subcode deleted!');
                window.location.href='a-addsubject.php';
             </script>";
     }
    
?>