
    <?php
        include('db_connection.php'); 
        $usn=$_POST['usn'];
        $subcode=$_POST['subcode'];
        $a=sizeof($subcode);
        $i=0;
        $query="SELECT  count(fkusn) FROM Tracker WHERE EXISTS (SELECT *  FROM Tracker WHERE fkusn='$usn') and fkusn='$usn';";
        $s=mysqli_query($dbHandle,$query);
          if(!$s){
        die("Could not connect".mysql_error());
            }
        $rowsub=mysqli_fetch_array($s,MYSQL_ASSOC);
        $count=$rowsub['count(fkusn)'];
        if($count==0){
            while($i<$a){ 
             include('db_connection.php'); 
                 $query1="insert into Tracker values('$usn','$subcode[$i]') ;";
                $flag=mysqli_query($dbHandle,$query1);
                $i=$i+1;
            }
             if(!$s){
        die("Could not 1 ddonnect".mysqli_error($dbHandle));
             }
             else{
                                echo "<script>
                                    alert('Tracker updated!');
                                    window.location.href='a-addtracker.php';
                                    </script>";
                            }
 

        }
        else{
             /*    include('db_connection.php'); 
            $query1="UPDATE Tracker SET fkusn ='$usn', fksubcode = '$s1' WHERE fkusn='$usn';";
            $flag=mysqli_query($dbHandle,$query1);
              include('db_connection.php'); 
               $query1="UPDATE Tracker SET fkusn ='$usn', fksubcode = '$s2' WHERE fkusn='$usn';";
            $flag=mysqli_query($dbHandle,$query1);
             $query1="UPDATE Tracker SET fkusn ='$usn', fksubcode = '$s3' WHERE fkusn='$usn';";
            $flag=mysqli_query($dbHandle,$query1);
             $query1="UPDATE Tracker SET fkusn ='$usn', fksubcode = '$s4' WHERE fkusn='$usn';";
            $flag=mysqli_query($dbHandle,$query1);
             $query1="UPDATE Tracker SET fkusn ='$usn', fksubcode = '$s5' WHERE fkusn='$usn';";
            $flag=mysqli_query($dbHandle,$query1);
             $query1="UPDATE Tracker SET fkusn ='$usn', fksubcode = '$s6' WHERE fkusn='$usn';";
            $flag=mysqli_query($dbHandle,$query1);
             $query1="UPDATE Tracker SET fkusn ='$usn', fksubcode = '$s7' WHERE fkusn='$usn';";
            $flag=mysqli_query($dbHandle,$query1);
             $query1="UPDATE Tracker SET fkusn ='$usn', fksubcode = '$s8' WHERE fkusn='$usn';";
            $flag=mysqli_query($dbHandle,$query1);*/
               /*if(!$flag){
        die("Could not 1 ddonnect".mysqli_error($dbHandle));*/
             //}
            /* else{
                                echo "<script>
                                    alert('1st Internal Marks successfully saved!');
                                    window.location.href='a-addtracker.php';
                                    </script>";
                            }*/
        }


    ?>
