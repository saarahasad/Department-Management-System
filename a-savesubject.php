<?php
   include('db_connection.php'); 
   $subname=$_POST['name'];
     $sec=$_POST['sec'];
   $fid=$_POST['id'];
   $subcode=$_POST['subcode'];
   $finalsubcode = $sec . $subcode; 
   $edit=$_POST['edit'];
   
  if($edit==0){
     $query="CALL subinsert('$finalsubcode','$subname','$fid');";
  }
  else
  {
    $orginalsubcode=$_GET['subc'];
    $query="UPDATE  Subjects set subcode='$finalsubcode', sub_name='$subname',fid='$fid' where subcode='$orginalsubcode' ;";
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
            alert('$subname information updated!');
                window.location.href='a-addsubject.php';
             </script>";
     }
    
?>