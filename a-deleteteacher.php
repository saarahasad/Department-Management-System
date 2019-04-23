<?php
   include('db_connection.php'); 
   
   $fid=$_GET['fid'];
  
    $query="delete from Faculty_members where Faculty_id= '$fid';";
   $flagAdd=mysqli_query($dbHandle,$query);
      if(!$flagAdd)
     {
          print(mysqli_error($dbHandle));
     }
     else
     {
           echo "<script>
            alert('Faculty member deleted!');
                window.location.href='a-addteacher.php';
             </script>";
     }
    
?>