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
                            $test1 = $_POST['test1'][$i];
                            $assign1 = $_POST['assign1'][$i];
                            $total1 =$test1+$assign1;
                             $usn=$row['fkusn'];
                             $name=$row['name'];
                         
                             include('db_connection.php');
                              $query="insert into Write_internals_for(usn,subcode,test1,assign1,total1) values('$usn','$subcode',$test1,$assign1,$total1);";
                            $flagAdd=mysqli_query($dbHandle,$query);
                           
                                echo "<script>
                                    alert('1st Internal Marks successfully saved!');
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
                            $test1 = $_POST['test1'][$i];
                            $assign1 = $_POST['assign1'][$i];
                            $total1 =$test1+$assign1;
                             $usn=$row['fkusn'];
                             $name=$row['name'];
                         
                             include('db_connection.php');
                              $query="UPDATE Write_internals_for  set test1=$test1,assign1=$assign1,total1=$total1 where usn ='$usn' and subcode='$subcode'";
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
                                    alert('1st Internal Marks successfully updated!');
                                    window.location.href='internalmarks.php';
                                    </script>";
                            }

                            }
                            // setting the session spesific session array value different for each key  
                        }
                    }
                ?>