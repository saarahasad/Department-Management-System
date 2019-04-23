

 <!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald|Vollkorn+SC" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Passion+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
        <script type="text/javascript" src="vendor/jquery-1.11.3.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
        <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
        <link rel="stylesheet" href="vendor/login/css/style.css">
        <script  src="vendor/login/js/index.js"></script>
          <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="style5.css">

<link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed" rel="stylesheet">

        <style>
          
            body{
                    background-size: cover;


            }
             .navbar{
                background-color:black;
                    padding: 0px;
                        margin: 0px;
                color:white;
                font-family: 'Montserrat', sans-serif;

            }
            .navbar-default .navbar-nav>li>a {
                color: white!important;
            }
            .dropdown-menu>li>a {
                 background-color: black;
                color:white;
            }
            .navbar-nav>li>.dropdown-menu
            {
                padding: 0px;
            }

        	.footer {
                bottom: 0;
                width: 100%;
                height: 50px;
                background-color:black;
                text-align: center;
                padding: 10px;
                color: white;
                }
            @media(min-width:800px){
            .nav{
                margin-left: 90px;
            }
            }

        @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100);

        body {
        
        font-family: "Roboto", helvetica, arial, sans-serif;
        font-weight: bold;
        text-rendering: optimizeLegibility;
        background:white;
        }

.circular-image img {
               width: 170px;
               height: 170px;
               -webkit-border-radius: 150px;
               -moz-border-radius: 150px;
               -ms-border-radius: 150px;
               -o-border-radius: 150px;
                border-radius: 150px;
                border: 4px solid black;
                              }      
                               #sidebarCollapse {
    width: 40px;
    height: 40px;
    background: #f5f5f5;
}

#sidebarCollapse span {
    width: 80%;
    height: 2px;
    margin: 0 auto;
    display: block;
    background: #555;
    transition: all 0.8s cubic-bezier(0.810, -0.330, 0.345, 1.375);
}
#sidebarCollapse span:first-of-type {
    /* rotate first one */
    transform: rotate(45deg) translate(2px, 2px);
}
#sidebarCollapse span:nth-of-type(2) {
    /* second one is not visible */
    opacity: 0;
}
#sidebarCollapse span:last-of-type {
    /* rotate third one */
    transform: rotate(-45deg) translate(1px, -1px);
}

#sidebarCollapse.active span {
    /* no rotation */
    transform: none;
    /* all bars are visible */
    opacity: 1;
    margin: 5px auto;
}
.wrapper {
    display: flex;
    align-items: stretch;
    perspective: 1500px; /* Define how many pixels the sidebar is placed from the view. */
}

#sidebar {
    min-width: 250px;
    max-width: 250px;
    background: #76323F;
    color: #fff;
    transition: all 0.6s cubic-bezier(0.945, 0.020, 0.270, 0.665);
    transform-origin: center left; /* Set the transformed position of sidebar to center left side. */
}

#sidebar.active {
    margin-left: -250px;
    transform: rotateY(100deg); /* Rotate sidebar vertically by 100 degrees. */
}
@media (max-width: 768px) {
    /* Reversing the behavior of the sidebar: 
       it'll be rotated vertically and off canvas by default, 
       collapsing in on toggle button click with removal of 
       the vertical rotation.   */
    #sidebar {
        margin-left: -250px;
        transform: rotateY(100deg);
    }
    #sidebar.active {
        margin-left: 0;
        transform: none;
    }

    /* Reversing the behavior of the bars: 
       Removing the rotation from the first,
       last bars and reappear the second bar on default state, 
       and giving them a vertical margin */
    #sidebarCollapse span:first-of-type,
    #sidebarCollapse span:nth-of-type(2),
    #sidebarCollapse span:last-of-type {
        transform: none;
        opacity: 1;
        margin: 5px auto;
    }

    /* Removing the vertical margin and make the first and last bars rotate again when the sidebar is open, hiding the second bar */
    #sidebarCollapse.active span {
        margin: 0 auto;
    }
    #sidebarCollapse.active span:first-of-type {
        transform: rotate(45deg) translate(2px, 2px);
    }
    #sidebarCollapse.active span:nth-of-type(2) {
        opacity: 0;
    }
    #sidebarCollapse.active span:last-of-type {
        transform: rotate(-45deg) translate(1px, -1px);
    }
}
#table-fill{
     border-radius:3px;
  border-collapse: collapse;
  height: 320px;
  margin: auto;
  max-width: 100%;
  padding:5px;
  width: 100%;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  animation: float 5s infinite;
}
 
#theading{
  color:black;
    border-top:4px solid #9ea7af;
  border-bottom:4px solid #9ea7af;
  font-size:19px;
  font-weight: 400;
  
  padding:24px;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  vertical-align:middle;: 
}
#rows{
     color:black;
  padding:10px;
  text-align:center;
  vertical-align:middle;
  font-size:18px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
}

#trr{
      border-top: 1px solid #C1C3D1;
  border-bottom-: 1px solid #C1C3D1;
  color:#666B85;
  font-size:16px;
  font-weight:normal;
  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);

}
     
            
        </style>

    </head>
    <body>
       <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                     $(this).toggleClass('active');
                 });
             });
             	

         </script>

        <!--navbar-->
         <link rel="stylesheet" href="navbarstyle.css">
         <nav style="font-weight:bold; opacity:0.9;" class="navbar navbar-default navbar-fixed-top">
          

           <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a  style="margin-left:-58px;color:white; font-weight:700; font-size:25px;"class="navbar-brand" href="home.html">DMS</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                     <div id="cssmenu">
                    <ul class="nav navbar-nav">
                    <li ><a  href="home.html">HOME</a></li>
                    <li  class="active"  ><a  href="studentlogin.php">STUDENT </a></li>
                       <li ><a  href="facultylogin.php">FACULTY </a></li>
                    <li><a  href="admin.php">ADMIN </a>
                    
                    
                    </li>
                    <li><a href="syllabus.php">SYLLABUS</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    </ul>
                      </div>

        
                </div><!-- /.navbar-collapse -->
            </div>
          

        </nav>

        <div class="container text-center" style=" font-family: 'Barlow Semi Condensed', sans-serif;color:white;margin-top: 50px;height: 700px; background: url('image/bg-notif.jpg'); background-size: 1200px 700px;  background-repeat: no-repeat;" >
        <?php

            
            include('db_connection.php');
            if(isset($_POST['usn']))
                $usn=$_POST['usn'];
            else     
                   $usn=$_GET['usn'];

            $q="select s.sem, s.sec from Students s where  s.usn='$usn'";
             $objlist = mysqli_query($dbHandle,$q);
             $r=mysqli_fetch_array($objlist);
            $sem=$r['sem'];
            $sec=$r['sec'];
            include('db_connection.php');
              print"<table border='0' align='center' style='width:400px;margin-top:150px; font-size: 20px;font-family: 'Barlow Semi Condensed', sans-serif;'>";
               print"<tr>";
            print" <th class='text-center'>SEMESTER: $sem </th>";
            print" <th  class='text-center'>SECTION: $sec </th>";
            print" <th class='text-center'>ANNOUNCEMENTS </th>";
            print"</tr>";
            print"</table>";

              $query1="SELECT * FROM announcements where  (sem=$sem and sec=$sec and type=1) or (sem='' and sec=''and type=1)";
                print"<table border='0' align='center' style='width:700px;margin-top:20px; font-size: 20px;font-family: 'Barlow Semi Condensed', sans-serif;'>";
             $flagAdd = mysqli_query($dbHandle,$query1);
    

              while($row=mysqli_fetch_array($flagAdd,MYSQL_ASSOC)) {
                  $note=$row['note'];
                  $date=$row['date'];
                  print"<tr>";
                      print" <td width='70%' class='text-center'>$note </td>";
                         print" <td width='70%' class='text-center'>$date </td>";
                    print"</tr>";

                }

                 print"</tbody>";
                        print"</table>";
                  
             
        ?>
        </div>

                    <div class="container">
                          <h2 style="background:#E0E0E0; padding:20px;" class="text-center">RESULTS </h2>

                        <div class="row">
                            <div class="col-md-4 text-center">
                                <div class="circular-image"><img <?php  
                                   if(isset($_POST['usn']))
                                    $usn=$_POST['usn'];
                                else     
                                    $usn=$_GET['usn'];
                                        print"src='studentimage/$usn.png'"; ?>/>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div style="  margin-top:40px; width: 100%" >     
                                    <div class="form"  style="padding:25px;" actiion="" method="POST">
                                        <table  border="1" style="height: 35px;width:100%;background-color: white!important;margin-top: -40px;">
                                            <tr style=" width:100%; height: 30px;font-family: 'Vollkorn SC', serif;font-family: 'Oswald', sans-serif;font-size: 18px;">
                                                <th style="width:40%;"class="text-center">USN</th>  
                                                <!--<th class="text-center">TOTAL</th>-->    
                                                    <?php                      
                                                    include('db_connection.php');
                                                       if(isset($_POST['usn']))
                                                        $usn=$_POST['usn'];
                                                    else     
                                                        $usn=$_GET['usn'];

                                                    $sql="select s.usn from Students s where s.usn='$usn'";
                                                    //print $sql;

                                                    $objlist = mysqli_query($dbHandle,$sql);

                                                    
                                                    if (!$objlist)
                                                    {
                                                        print "Error: " . mysql_error();
                                                    }
                        

                                            $row=mysqli_fetch_array($objlist, MYSQL_ASSOC);
                                                
                                                    $usn=$row['usn'];
                                                    
                                                
                                                    
                                                    echo "<th class='text-center'>$usn</th>";

                                            
                                            ?>

                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div style=" margin-top:-43px; width: 100%"  >
                                    <div class="form"  style="padding:25px;" actiion="" method="POST">
                                        <table  border="1"  style="height: 35px;width:100%;font-family: 'Vollkorn SC', serif;font-family: 'Oswald', sans-serif;font-size: 18px;margin-top: -5px;">
                                            <tr style=" width:100%; height: 30px;background-color: white!important; ">
                                                <th style="width:40%;" class="text-center">NAME</th>
                                                
                                                <!--<th class="text-center">TOTAL</th>-->    
                                            
                                            <?php
                                          
                                            include('db_connection.php');
                                            $sql="select s.name from Students s where s.usn='$usn'";
                                            $objlist = mysqli_query($dbHandle,$sql);
                                            if (!$objlist)
                                            {
                                                print "Error: " . mysql_error();
                                            }
                                            $row=mysqli_fetch_array($objlist);
                                            $name=$row['name'];
                                            echo "<th class='text-center'>$name</th>";
                                            ?>
                                            </tr>
                                        </table>
                                    </div>  

                                </div>
                                <div style="margin-top: -43px; width: 100%"  >
                                    <div class="form"  style="padding:25px;" actiion="" method="POST">
                                    <table border="1"  style="height: 35px;width:100%;;font-family: 'Vollkorn SC', serif;
                                    font-family: 'Oswald', sans-serif;font-size: 18px;">
                                        <tr style="margin-bottom:20px!important; width:100%; height: 30px;background-color: white!important; ">
                                            <th style="width:40%;" class="text-center">SEM</th>
                                            
                                            <!--<th class="text-center">TOTAL</th>-->    
                                        
                                        <?php  
                                        include('db_connection.php');
                                        $sql="select s.sem from Students s where  s.usn='$usn'";
                                        $objlist = mysqli_query($dbHandle,$sql);
                                        if (!$objlist)
                                        {
                                            print "Error: " . mysql_error();
                                        }
                                        $row=mysqli_fetch_array($objlist);
                                        $sem=$row['sem'];
                                        echo "<th class='text-center'>$sem</th>";
                                        ?>

                                        </tr>
                                    </table>
                                    </div>  
                                </div>
                                <div style="margin-top: -43px; width: 100%"  >
                                    <div class="form"  style="padding:25px;" actiion="" method="POST">
                                        <table   border="1" style="height: 35px;width:100%;font-family: 'Vollkorn SC', serif; font-family: 'Oswald', sans-serif;font-size: 18px;">
                                            <tr style="margin-bottom:20px!important; width:100%; height: 30px;background-color: white!important; ">
                                                <th style="width:40%;" class="text-center">SEC</th>
                                                
                                                <!--<th class="text-center">TOTAL</th>-->    
                                            
                                            <?php 
                                            include('db_connection.php');
                                                $sql="select s.sec from Students s where s.usn='$usn'";
                                                //print $sql;

                                                $objlist = mysqli_query($dbHandle,$sql);
                                                
                                                if (!$objlist)
                                                {
                                                    print "Error: " . mysql_error();
                                                }
                                                

                                            $row=mysqli_fetch_array($objlist);
                                                
                                                    $sec=$row['sec'];
                                                    
                                                
                                                    
                                                    echo "<th class='text-center'>$sec</th>";     
                                            ?>

                                            </tr>
                                        </table>
                                </div>  
                            </div>
                        </div>
                    </div>
                    <div style=" margin-top: -40px;" class="tab-pane  center" id="two"> 
                        <div class="form"  style="padding:25px;" action="" method="POST">
                            <table   border="1" style="height: 270px;width:100%;background-color: white!important;border-radius: 0px;">
                                <tr style="margin-bottom:20px!important; width:100%; height: 50px; font-family: 'Vollkorn SC', serif;font-family: 'Oswald', sans-serif;font-size: 18px;">
                                    
                                    <th class="text-center">SUBJECTS</th>
                                    <th class="text-center">TEST1</th>
                                    <th class="text-center">ASSIGN1</th>
                                    <th class="text-center">TOTAL1</th>
                                    <th class="text-center">TEST2</th>
                                    <th class="text-center">ASSIGN2</th>
                                    <th class="text-center">TOTAL2</th>
                                    <th class="text-center">TEST3</th>
                                    <th class="text-center">ASSIGN3</th>
                                    <th class="text-center">T0TAL3</th>
                                    <th class="text-center">AVG</th>
                                    <th class="text-center">ATTENDANCE</th>
                                </tr>
                                    
                                    
                                    <!--<th class="text-center">TOTAL</th>-->    
                                
                                <?php
                                    include('db_connection.php');
                                      function bubble_sort($arr) {
                                        $size = count($arr);
                                        for ($i=0; $i<$size; $i++) {
                                            for ($j=0; $j<$size-1-$i; $j++) {
                                                if ($arr[$j+1] < $arr[$j]) {
                                                    swap($arr, $j, $j+1);
                                                }
                                            }
                                        }
                                        return $arr;
                                    }

                                    function swap(&$arr, $a, $b) {
                                        $tmp = $arr[$a];
                                        $arr[$a] = $arr[$b];
                                        $arr[$b] = $tmp;
                    }
            
            
                                    $sql="select s.usn,s.name,s.sem,s.sec, sub.sub_name,ia.test1,ia.assign1,ia.total1,ia.test2,ia.assign2,
                                    ia.total2,ia.test3,ia.assign3,ia.total3,ia.avg,ia.subcode from Subjects sub, Students s,Write_internals_for ia where   s.usn=ia.usn and ia.subcode =sub.subcode AND s.usn='$usn'";

                                    //print $sql;

                                    $objlist = mysqli_query($dbHandle,$sql);
                                    
                                    if (!$objlist)
                                    {
                                        print "Error: " . mysqli_error($dbHandle);
                                    }
                                    

                                                            
                                    while($row=mysqli_fetch_array($objlist))
                                    {
                                        
                                    
                                            
                                            $subn=$row['sub_name'];
                                             $sub=$row['subcode'];

                                        $t1=$row['test1'];
                                        $a1=$row['assign1'];
                                        $to1=$row['total1'];
                                        $t2=$row['test2'];
                                        $a2=$row['assign2'];
                                        $to2=$row['total2'];
                                        $t3=$row['test3'];
                                        $a3=$row['assign3'];
                                        $to3=$row['total3'];
                                        $avg=$row['avg'];
                                        echo "<tr>";

                                    
                                    
                                    echo "<td class='text-center'>$subn</td>";
                                    
                                    echo "<td class='text-center'>$t1</td>";
                                    
                                    echo "<td class='text-center'>$a1</td>";
                                    
                                    echo "<td class='text-center' >$to1</td>";
                                    
                                    echo "<td class='text-center'>$t2</td>";

                                    echo "<td class='text-center'>$a2</td>";
                                    
                                    echo "<td class='text-center'> $to2</td>";

                                    echo "<td class='text-center'>$t3</td>";
                                    
                                    echo "<td class='text-center'>$a3</td>";
                                    
                                    echo "<td class='text-center'>$to3</td>";
                                      $a=$row['total1'];
                                    $b=$row['total2'];
                                    $c=$row['total3'];
                                       $arr = array($a,$b,$c);
                                        $arr = bubble_sort($arr);
                                        $total=$arr[1]+$arr[2];
                                        $avg=$total/2;
                                    echo "<td class='text-center'>$avg</td>";
                                   

                                     include('db_connection.php');
                                    $query1="select count(hours) from Attend where usn_fk='$usn' and attendance='P'	and subcode_fk ='$sub';";  
                                    $attendance=mysqli_query($dbHandle,$query1);    
                                    $rowattend=mysqli_fetch_array($attendance,MYSQL_ASSOC)  ;
                                    $attend=$rowattend['count(hours)'];
                                    include('db_connection.php');
                                    $query2="  select max(hours) from Attend where subcode_fk='$sub'";
                                    $maxhour=mysqli_query($dbHandle,$query2);
                                    $maxrow=mysqli_fetch_array($maxhour,MYSQL_ASSOC);
                                    $max=$maxrow['max(hours)'];
                                    if($max!=0)
                                        $percentage=round(($attend/$max)*100,2);
                                    else
                                        $percentage=0;
                                    print" <td class='text-center'>$percentage </td>";
                                        echo "</tr>";
                                        }
                                    
                                ?>  

                                </tr>
                            </table>
                        </div>
                    </div>  

                </div>

                                
            <div class="container">


              <h2 style="margin-top:50px;background:#E0E0E0; padding:20px;" class="text-center">ASSIGNMENT SUBMISSION </h2>

             <form  enctype="multipart/form-data" <?php print" action='saveassignment.php?usn=$usn&sem=$sem&sec=$sec'"; ?>  method="POST" style="margin-top:30px;" class="form-horizontal col-sm-12" role="form">
                            <div class="form-group">
                                <label for="name" class="control-label col-md-2 col-sm-2">Assignment title: </label>
                                <div class="col-md-6 col-sm-10">
                                    <input required type="text" id="name" name="title" class="form-control"/>
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="usn" class="control-label col-md-2 col-sm-2">No: </label>
                                <div class="col-md-6  col-sm-10">
                                    <input required type="text" id="usn" name="no" class="form-control"/>
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="phone" class="control-label col-md-2 col-sm-2">Subcode: </label>
                                <div class="col-md-6  col-sm-10">
                                    <input required type="text" id="phone" name="subcode" class="form-control"/>
                                </div>
                            </div>
                             <input type="hidden" name="MAX_FILE_SIZE" value="200000" /> 
                               <div class="form-group">
                                <label for="assign" class="control-label col-md-2 col-sm-2">Upload: </label>
                                <div class="col-md-6  col-sm-10">
                                      <input  type="file" name="filefield" />
                                </div>
                            </div>
                          
                                            
                             
                           
                            <div class="form-group">
                                <div class="col-md-offset-2 col-sm-offset-2 col-md-2"  >
                                    <button type="submit" value="Upload!" class="btn btn-success btn-block">Upload</button>
                                </div>
                            </div>
                         
                    </form>
          

            </div>


                                    
            <div class="container">


              <h2 style="margin-top:50px;background:#E0E0E0; padding:20px;" class="text-center">ASSIGNMENTS SUBMITTED </h2>
            <table>
                <?php  
                     print"<table style='width:100%;color:black;' id='table-fill' class='table-fill'>";
                    print"<thead> ";
                    print"<tr>";
                    print" <th  id='theading' class='text-center'>Sl. </th>";
                    print" <th  id='theading'class='text-center'>Title </th>";
                     print" <th id='theading' class='text-center'>No. </th>";
                      print" <th  id='theading'class='text-center'>Subject </th>";
                       print" <th id='theading' class='text-center'>Submission Date</th>";
                       print" <th id='theading' class='text-center'>Status </th>";
                     print"</tr></thead>";
                    print"<tbody>";
                    
                    $query="select * from assignments where usnfk='$usn'";
                     $flag = mysqli_query($dbHandle,$query);
                     $i=1;
                       while($row=mysqli_fetch_array($flag))
                      {
                          $title=$row['title'];
                          $date=$row['date'];
                          $no=$row['number'];
                          $subcode=$row['subcode_fk'];
                          $grade=$row['grade'];
                          $s=substr($subcode,01,10);
                            print"<tr id='trr'> ";
                        print" <td id='rows' class='text-center'>$i </td>";
                        print" <td  id='rows' class='text-center'>$title </td>";
                        print" <td   id='rows' class='text-center'>$no </td>";
                        print" <td  id='rows' class='text-center'>$s </td>";
                        print" <td  id='rows' class='text-center'>$date </td>";
                        if($grade==0){
                             print" <td  id='rows' class='text-center'>Not graded yet.</td>";
                        }else
                         print" <td  id='rows' class='text-center'>$grade</td>";
                           print"</tr>";
                        $i=$i+1;
                      }
                       print"</tbody>";
                    print"</table>";
                    ?>
             
          

            </div>

            <div style="height:100px;">
            </div>
           

         <div class="footer">
            <div class="container">
            <a style="color:#D5D5D5;" href="/pages/about.html">About</a> | 
            <a style="color:#D5D5D5" href="/pages/term.html">Terms</a> | 
            <a  style="color:#D5D5D5;"href="/pages/privacy.html">Privacy Policy</a> | 
            <a style="color:#D5D5D5;" href="/pages/licence.html">Licence information</a> | 
            <a  style="color:#D5D5D5;"href="/pages/contact.html">Contact</a> | 
            <spanstyle="color:#D5D5D5;"  >@copyright 2015 All-free-download.com</span>
         </div>

    </div>

        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    
    </body>
</html>