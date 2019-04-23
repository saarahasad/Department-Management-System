<?php
   include('db_connection.php'); 
   $grade=$_POST['grade'];
    $usn=$_GET['usn'];
   $subcode=$_GET['subcode'];
    $date=$_GET['date'];
    $no=$_GET['no'];
   
    $query="UPDATE  assignments set grade='$grade' where subcode_fk='$subcode' and usnfk='$usn'and number=$no and date='$date' ;";
   $flagAdd=mysqli_query($dbHandle,$query);
      if(!$flagAdd)
     {
            print(mysqli_error($dbHandle));
     }
     else
     {
           echo "<script>
            alert('Assignment graded!');
                 window.location.href='submitted.php?subcode=$subcode';
             </script>";
     }
    
?>