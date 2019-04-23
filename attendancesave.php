<?php
                      if (isset($_POST["submit"])) 
                    {
                         include('db_connection.php');
                        $subcode = $_POST['subcode'][0];
                         $hour = $_POST['hour'][0];
                        $date = date('Y/m/d');
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
                             include('db_connection.php');
                              $query="insert into Attend(usn_fk,subcode_fk,sec,hours,date,attendance) values('$usn','$subcode',0,$hour,'$date', '$attendance');";
                            $flagAdd=mysqli_query($dbHandle,$query);
                            if(!$flagAdd)
                            {
                       // die("Could not connect".mysqli_error($dbHandle));                                 
                              echo "<script>
                                    alert('Failed! Please try again! ');
                                      window.location.href='subjectclasses.php?subcode=$subcode';
                                    </script>";

                            }
                            else{
                             
                                echo "<script>
                                    alert('Attendance successfully saved!');
                                    window.location.href='subjectclasses.php?subcode=$subcode';
                                    </script>";
                            }

                            }
                            // setting the session spesific session array value different for each key  
                        }
                    }
                ?>