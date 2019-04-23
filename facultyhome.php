<?php
   include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <script type="text/javascript" src="vendor/jquery-1.11.3.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
        <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
        <link rel="stylesheet" href="vendor/login/css/style.css">
        <script  src="vendor/login/js/index.js"></script>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="carousel.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed" rel="stylesheet">

        <style>
        
            body{    
              
                background-image: url("image/bg4.jpeg");
                background-size: cover;
                color:black;
            }
            .navbar{
                background-color:black;
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
        }

.circular-image img {
               width: 250px;
               height: 250px;
               -webkit-border-radius: 150px;
               -moz-border-radius: 150px;
               -ms-border-radius: 150px;
               -o-border-radius: 150px;
                border-radius: 150px;
                /*border: 1px solid black;*/
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
                     
                    <li class="dropdown active"><a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">FACULTY <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                           <li><a href="facultyhome.php">Faculty Home</a></li>
                        <li><a href="internalmarks.php">IA Marks</a></li>
                        <li><a href="attendance.php"> Attendance</a></li>
                    
                    </ul>
                    
                    </li>
                      <li ><a  href="admin.php">ADMIN </a></li>

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
          <!-- -->
          <div style=" margin-top:50px;">
          
          </div>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img style="height:500px;width:100%;" src="image/ci2.jpg" alt="...">
      <div style="font-size:55px;font-family: 'Barlow Condensed', sans-serif;" class="carousel-caption">
          DEPARTMENT MANGEMENT SYSTEM
          
      </div>
    </div>
    <div class="item ">
        <img style="height:500px;width:100%;" src="image/carouselimg.jpg" alt="...">
        <div class="carousel-caption" style="color:black; font-size:30px; margin-bottom:110px; ">
            "Technology will never replace great teachers, but technology in the hands of great teachers is transformational "  
        </div>
    </div>
   
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
  </a>
</div>

  <div class="container text-center" style=" font-family: 'Barlow Semi Condensed', sans-serif;color:white;height: 700px; background: url('image/bg-notif.jpg'); background-size: 1200px 700px;  background-repeat: no-repeat;" >
        <?php

            
            include('db_connection.php');
           
              print"<table border='0' align='center' style='width:400px;margin-top:150px; font-size: 20px;font-family: 'Barlow Semi Condensed', sans-serif;'>";
               print"<tr>";
            print" <th class='text-center'>ANNOUNCEMENTS </th>";
            print"</tr>";
            print"</table>";

              $query1="SELECT * FROM announcements where type=2";
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


 <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
</br></br>
    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row center">
        <div class="col-lg-6 text-center">
        <div class="circular-image"><img src=" image/facultyicon.jpg"/> </div>   
       <h2>IA Marks</h2>
          <p>Allows teacher to insert, edit and view IA Marks marks and assignment marks.</p>
          <p><a class="btn btn-default" href="internalmarks.php" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-6 text-center">
            <div class="circular-image"><img src=" image/studenticon.jpg"/>
            </div>
          <h2>Attendance</h2>
          <p>Allows teacher to take, edit and view attendance for classes.</p>
          <p><a class="btn btn-default" href="attendance.php" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        
       
      </div><!-- /.row -->
      </div>
 <div class="container marketing" style="margin-top:50px;">

      <!-- Three columns of text below the carousel -->
      <div class="row center" >
       
          <div class="col-lg-6 text-center">
        <div class="circular-image"><img src=" image/a2.png"/> </div>   
       <h2>Student Announcement</h2>
          <p>Allows teacher to make annoucements for students.</p>
          <p><a class="btn btn-default" href="studentannouncements.php" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
          <div class="col-lg-6 text-center">
        <div class="circular-image"><img src=" image/assign.png"/> </div>   
       <h2>Assignments</h2>
          <p>Allows teacher to view and grade submitted assignments.</p>
          <p><a class="btn btn-default" href="facultyassignments.php" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
       
      </div><!-- /.row -->
      </div>

<br/><br/><br/>


    <div class="footer"style=" width: -webkit-fill-available;" >
        <div class="container">
            <a style="color:#D5D5D5;" href="/pages/about.html">About</a> | 
            <a style="color:#D5D5D5" href="/pages/term.html">Terms</a> | 
            <a  style="color:#D5D5D5;"href="/pages/privacy.html">Privacy Policy</a> | 
            <a style="color:#D5D5D5;" href="/pages/licence.html">Licence information</a> | 
            <a  style="color:#D5D5D5;"href="/pages/contact.html">Contact</a> | 
            <spanstyle="color:#D5D5D5;"  >@copyright 2015 All-free-download.com</span>
         </div>

    </div>
    <script>

jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
});
</script>  
  
    </body>
</html>
