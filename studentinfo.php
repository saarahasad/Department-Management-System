<?php
   include('session.php');
?>

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


        <style>
               body{    
              
                 background-image: url("image/bg4.jpeg");
                    background-size: cover;
                color:white;
                 width: max-content;
    margin: auto!important;
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
        color:black;
        }

.circular-image img {
               width: 200px;
               height: 200px;
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


                 td, th {border-radius: 1px solid }
                 td, th {border: 1px solid }
            
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
                    <li  ><a  href="home.html">HOME</a></li>
                    <li ><a  href="studentlogin.php">STUDENT </a></li>
                       <li ><a  href="facultylogin.php">FACULTY </a></li>
                    <li class="dropdown active"><a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ADMIN <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                          <li><a href="adminhome.php">Admin Home</a></li>
                        <li><a href="facultydetails.php">Faculty Details</a></li>
                        <li><a href="studentdetails.php">Class Details</a></li>
                        <li><a href="manage.php">Manage</a></li>
                    
                    </ul>
                
                    </li>

                    <li><a href="syllabus.php">SYLLABUS</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    </ul>
                </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li style="margin-top:10px; color:white;     font: normal 19px 'Cookie', cursive;">Welcome <?php echo $login_session; /*echo $login_id ;*/?></p> 

                        <li><a href = "logout.php">Sign Out</a></li>
                    
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
        
 <?php
            include('db_connection.php');
            $sem=$_GET['sem'];
             $sec=$_GET['sec'];
            ?>
            <div class="wrapper" style="margin-top:50px;">
                <!-- Sidebar Holder -->
                <nav id="sidebar">
                    <div class="sidebar-header">
                        <h3><?php print"Semester $sem - Sec $sec";?></h3>
                    </div>

                    <ul class="list-unstyled components">
                        <li class="active">
                            <a <?php print"href='studentlist.php?sem=$sem&sec=$sec'"; ?>>Student list</a>
                            </li>
                        <li>
                            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Attendance <span style="margin-top:7px;float: right;"class="caret"></span></a>
                            <ul class="collapse list-unstyled" id="homeSubmenu">
                                <li><a style="font-size:13px; color: #BDBDBD;" <?php print"href='studentattendanceall.php?sem=$sem&sec=$sec'"; ?>>All</a></li>
                                <li><a style="font-size:13px; color: #BDBDBD;"<?php print"href='studentattendance75.php?sem=$sem&sec=$sec'"; ?>>Below 75%</a></li>
                                <li><a style="font-size:13px; color: #BDBDBD;"<?php print"href='studentattendance100.php?sem=$sem&sec=$sec'"; ?>>100 %</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Internal Marks <span style="margin-top:7px;float: right;" class="caret"></span></a>
                            <ul class="collapse list-unstyled" id="pageSubmenu">
                                <li><a style="font-size:13px; color: #BDBDBD;"<?php  print"href='studentiaall.php?sem=$sem&sec=$sec'"; ?>>All</a></li>
                                <li><a style="font-size:13px; color: #BDBDBD;"<?php  print"href='studentiabelowavg.php?sem=$sem&sec=$sec'"; ?>>Below Average</a></li>
                            </ul>
                        </li>
                    
                    </ul>

                    <ul class="list-unstyled CTAs">
                        <li><a href="studentdetails.php" class="article">Back</a></li>
                    </ul>
                </nav>

                <!-- Page Content Holder -->
                <div id="content" >

                    <nav style="background:#E0E0E0;" class="navbar navbar-default">
                        <div class="container-fluid">

                            <div class="navbar-header">
                                <button type="button" id="sidebarCollapse" class="navbar-btn">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                            <p class="text-center" style="font-family: 'Montserrat', sans-serif;color:#424242;font-weight:600; font-size:30px;margin-top:15px;">STUDENT INFORMATION</p>
                            

                    </nav>
                      <a <?php  print"href='studentlist.php?sem=$sem&sec=$sec'";  ?>style="margin-top:25px;" class="btn btn-default btn">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i> &nbsp; Back 
                         </a>
 
                    <div style="height:20px"></div>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <div class="circular-image"><img <?php  $usn=$_GET['usn']; print"src='studentimage/$usn.png'"; ?>/>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div style="  margin-top:40px; width: 100%" >     
                                    <div class="form"  style="padding:25px;" actiion="" method="POST">
                                        <table style="height: 35px;width:100%;background-color: white!important;margin-top: -40px;">
                                            <tr style=" width:100%; height: 30px;font-family: 'Vollkorn SC', serif;font-family: 'Oswald', sans-serif;font-size: 18px;">
                                                <th style="width:40%;"class="text-center">USN</th>  
                                                <!--<th class="text-center">TOTAL</th>-->    
                                                    <?php                      
                                                    include('db_connection.php');
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
                                        <table style="height: 35px;width:100%;font-family: 'Vollkorn SC', serif;font-family: 'Oswald', sans-serif;font-size: 18px;margin-top: -5px;">
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
                                    <table style="height: 35px;width:100%;;font-family: 'Vollkorn SC', serif;
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
                                        <table style="height: 35px;width:100%;font-family: 'Vollkorn SC', serif; font-family: 'Oswald', sans-serif;font-size: 18px;">
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
                            <table style="height: 270px;width:100%;background-color: white!important;border-radius: 15px;">
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
                                        print "Error: " . mysql_error();
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
                                        $percentage=($attend/$max)*100;
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
        
            </div>
            
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