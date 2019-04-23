<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <script type="text/javascript" src="vendor/jquery-1.11.3.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
        <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
        <link rel="stylesheet" href="vendor/login/css/style.css">
        <script  src="vendor/login/js/index.js"></script>

        <style>
            body{
                    background-image: url("image/login-bg.jpg");
                    background-size: cover;
            }
            .navbar{
                background-color: black;
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
                position: absolute;
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
        <div style="margin-top:150px;" class="module form-module">
            <div class="toggle">           
            </div>
            <div class="form" action="index2.php" method="POST"/>
                <h2>Student Login</h2>
                <form action="sample.php" method="POST" role="form">
                <div class="form-group">
                    <input type="text" placeholder="Full Name" name="name" />
                </div>
                <div class="form-group">
                    <input required type="text" placeholder="USN" name="usn"/>
                </div>        
                 <button type="submit" class="btn btn-default" name="submit">Login</button>

                </form>
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
    
    </body>
</html>