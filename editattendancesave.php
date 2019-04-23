<?php
                      if (isset($_POST["submit"])) 
                    {
                         include('db_connection.php');
                        $subcode = $_POST['subcode'][0];
                         $hour = $_POST['hour'][0];
                        $date = $_POST['date'][0];
                          $query="Select fkusn,name from Tracker, Students where usn=fkusn and fksubcode='$subcode' ";
                        $objList=mysqli_query($dbHandle,$query);
                        if(!$objList){
                            die("Could not connect".mysql_error());
                        }
                        for ($i = 0; $i < count($_POST['attendance']); $i++) { 
                            if($row=mysqli_fetch_array($objList,MYSQL_ASSOC)){
                            $attendance = $_POST['attendance'][$i];
                             $usn=$row['fkusn'];
                             $name=$row['name'];
                             print $usn;
                             print $subcode;
                             print $attendance;
                             print $hour;
                             print $date;
                             include('db_connection.php');
                              $query1="update Attend set attendance='$attendance' where  usn_fk='$usn' and subcode_fk='$subcode' and hours=$hour and date= '$date' ;";
                            $flag=mysqli_query($dbHandle,$query1);
                           

                            }
                            // setting the session spesific session array value different for each key  
                        }
                         if(!$flag)
                            {   die("Could not connect".mysqli_error($dbHandle));
                              
                            }
                            else{
                             
                                echo "<script>
                                    alert('Attendance successfully saved!');
                                    window.location.href='subjectclasses.php?subcode=$subcode';
                                    </script>";
                            }
                        
                    }
                ?>