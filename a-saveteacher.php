<?php
   include('db_connection.php'); 
   $fname=$_POST['name'];
   $fid=$_POST['id'];
   $fpass=$_POST['password'];
   $femail=$_POST['email'];
    $edit= $_POST['edit'];
   
    if($edit==0){
    $query="INSERT INTO Faculty_members VALUES('$fid','$fpass','$fname','$femail');";
    }
    else{
         $orginialfid=$_GET['facid'];
        $query="UPDATE  Faculty_members  set Faculty_id='$fid', fpassword='$fpass', f_name='$fname', f_email='$femail' where Faculty_id='$orginialfid';";
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
            alert('Faculty member information updated!');
                window.location.href='a-addteacher.php';
             </script>";
     }
    
?>