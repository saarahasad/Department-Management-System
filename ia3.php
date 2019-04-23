

<?php
if (isset($_POST['submit'])) 
                    {
                         include('db_connection.php');
                        $subcode = $_POST['subcode'][0];
                          $query="Select fkusn,name from Tracker, Students where usn=fkusn and fksubcode='$subcode' ";
                        $objList=mysqli_query($dbHandle,$query);
                        if(!$objList){
                            die("Could not connect".mysql_error());
                        }
                        for ($i = 0; $i < count($_POST['test1']); $i++) {
                            if($row=mysqli_fetch_array($objList,MYSQL_ASSOC)){
                            $test2 = $_POST['test1'][$i];
                            $assign2 = $_POST['assign1'][$i];
                            $total2 =$test2+$assign2;
                             $usn=$row['fkusn'];
                             $name=$row['name'];
                         
                             include('db_connection.php');
                              $query="insert into Write_internals_for(usn,subcode,test3,assign3,total3) values('$usn','$subcode',$test2,$assign2,$total2);";
                            $flagAdd=mysqli_query($dbHandle,$query);
                           
                                echo "<script>
                                    alert('3rd Internal Marks successfully saved!');
                                    window.location.href='internalmarks.php';
                                    </script>";
                            

                            }
                            // setting the session spesific session array value different for each key  
                        }
                    }
            if (isset($_POST['update'])) 
                    {
                         include('db_connection.php');
                        $subcode = $_POST['subcode'][0];
                          $query="Select fkusn,name from Tracker, Students where usn=fkusn and fksubcode='$subcode' ";
                        $objList=mysqli_query($dbHandle,$query);
                        if(!$objList){
                            die("Could not connect".mysql_error());
                        }
                        for ($i = 0; $i < count($_POST['test1']); $i++) {
                            if($row=mysqli_fetch_array($objList,MYSQL_ASSOC)){
                             $test2 = $_POST['test1'][$i];
                            $assign2 = $_POST['assign1'][$i];
                            $total2 =$test2+$assign2;
                             $usn=$row['fkusn'];
                             $name=$row['name'];
                         
                             include('db_connection.php');
                              $query="UPDATE Write_internals_for  set test3=$test2,assign3=$assign2,total3=$total2 where usn ='$usn' and subcode='$subcode'";
                         $flagAdd=mysqli_query($dbHandle,$query);
                               if(!$flagAdd)
                            {
                              echo "<script>
                                    alert('Oops! Something went wrong with the update!');
                                     window.location.href='internalmarks.php';
                                    </script>";
                            }
                             else{
                                echo "<script>
                                    alert('3rd Internal Marks successfully updated!');
                                    window.location.href='internalmarks.php';
                                    </script>";
                            }

                            }
                            // setting the session spesific session array value different for each key  
                        }
                    }
                ?>