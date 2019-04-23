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

         

</style>

    </head>
    <body>
        
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
          <div style=" margin-top:50px;">
          </div>
        <?php
            include('db_connection.php');
            $sem=$_GET['sem'];
             $sec=$_GET['sec'];
            ?>
        <div class="wrapper">
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
             <div id="content">

                <nav  style="background:#E0E0E0;" class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="navbar-btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                         <p class="text-center" style="text-transform:uppercase;font-family: 'Montserrat', sans-serif;color:#424242;font-weight:600; font-size:30px;margin-top:15px;">Students List</p>

                </nav>
                <div style="height:20px;"></div>
            <?php
                 include('db_connection.php');
                    $sem=$_GET['sem'];
                    $sec=$_GET['sec'];
                
                $query2="Select usn,name from Students where sem=$sem and sec=$sec; ";
                    $list=mysqli_query($dbHandle,$query2);                  
                    if(!$list){
                                die("Could not connect".mysql_error());
                            }
                    $i=1;
                    while($rows=mysqli_fetch_array($list,MYSQL_ASSOC))
                    {
                        $usn=$rows['usn'];    
                        $name=$rows['name'];  
                        print "<div class='container'>";
                        print"<div class='row center'>";
                        print"<a href='studentinfo.php?usn=$usn&sem=$sem&sec=$sec' ><div style='cursor: pointer;' class='col-md-3  text-center'>";
                        print"<div class='circular-image'><img  src='studentimage/$usn.png' />";
                        print" <figcaption style='padding-bottom:50px;font-size:20px;color:black;'>$name - $usn</figcaption></div>";
                        print"</div></a>";
                        if($rows=mysqli_fetch_array($list,MYSQL_ASSOC)){
                            $usn=$rows['usn'];    
                            $name=$rows['name'];  
                            print" <a href='studentinfo.php?usn=$usn&sem=$sem&sec=$sec' ><div  style='cursor: pointer;' class='col-md-3  text-center'>";
                            print"<div class='circular-image'><img src=' studentimage/$usn.png'/> ";
                            print" <figcaption  style='padding-bottom:50px;font-size:20px;color:black;'>$name - $usn</figcaption></div>";
                            print"</div></a>";
                        }
                            if($rows=mysqli_fetch_array($list,MYSQL_ASSOC)){
                            $usn=$rows['usn'];    
                            $name=$rows['name'];  
                    
                            print"<a href='studentinfo.php?usn=$usn&sem=$sem&sec=$sec' > <div style='cursor: pointer;' class='col-md-3  text-center'>";
                            print"<div class='circular-image'><img src=' studentimage/$usn.png'/> ";
                            print" <figcaption  style='padding-bottom:50px;font-size:20px;color:black;'>$name - $usn</figcaption></div>";
                            print"</div></a>";
                    }
                        if($rows=mysqli_fetch_array($list,MYSQL_ASSOC)){
                            $usn=$rows['usn'];    
                            $name=$rows['name'];  
                    
                            print"<a href='studentinfo.php?usn=$usn&sem=$sem&sec=$sec' > <div  onclick='location.href='facultydetails.php';' style='cursor: pointer;' class='col-md-3  text-center'>";
                            print"<div class='circular-image'><img src=' studentimage/$usn.png'/> ";
                            print" <figcaption  style='padding-bottom:50px;font-size:20px;color:black;'>$name - $usn</figcaption></div>";
                            print"</div></a>";
                    }
                        print"    </div>";
                        print" </div>";
                            }
                        
?>     
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

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                     $(this).toggleClass('active');
                 });
             });
</script>

    </body>
</html>