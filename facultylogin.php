
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
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow" rel="stylesheet">

        <style>
            body{
                    background-image: url("image/faculty-bg.jpg");
                    background-size: cover;
                    background-repeat:no;
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
            
            #body {
                padding:10px;
            padding-bottom:50px;   /* Height of the footer */
            }
            .row {
    margin-right: -15px;
    margin-left: -15px;
}
            #footer {
            bottom:0;
            width:100%;
            background:#6cf;
            }

            p{
            color: white; 
            font-size: 20px;
            margin: 10px 0 0 10px;
            white-space: nowrap;
            font-family: 'Josefin Sans', sans-serif;

            overflow: hidden;
            width:100%;
            animation: type 4s steps(60, end); 
            }

            p:nth-child(2){
            animation: type2 8s steps(60, end);
            }

            p:nth-child(3){
            animation: type2 16s steps(60, end);
            }

            p:nth-child(4){
            animation: type2 30s steps(60, end);
            }

            p a{
            color: white;
            text-decoration: none;
            }

            span{
            animation: blink 1s infinite;
            }

            @keyframes type{ 
            from { width: 0; } 
            } 

            @keyframes type2{
            0%{width: 0;}
            50%{width: 0;}
            100%{ width: 100; } 
            } 

            @keyframes blink{
            to{opacity: .0;}
            }

            
        </style>
    </head>
    <body>
     <div id="body">
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
                       <li  class="active" ><a  href="facultylogin.php">FACULTY </a></li>
                    <li><a  href="admin.php">ADMIN </a>
                    
                    
                    </li>
                    <li><a href="syllabus.php">SYLLABUS</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    </ul>
                      </div>

        
                </div><!-- /.navbar-collapse -->
            </div>
          

        </nav>
        <div class="row">
            <div class="col-sm-8">
                <p  style="font-family:font-family: 'Archivo Narrow', sans-serif; font-size:50px;margin-top:150px;" >Department Management System</p>
                <p>We need technology in every classroom and in every student and </p>
                <p>  teacher’s hand, because it is the pen and paper of our time, and </p>
                <p>it is the lens through which we experience much of our world.</p> 
            </div>
            <div class="col-sm-4">
                <div style="margin-top:110px;" class="module form-module">
                    <div class="toggle">           
                    </div>
                    <div class="form" action="login.php" method="POST">
                        <h2>Faculty Login</h2>
                    
                        <form action="login.php" method="POST" role="form">
                            <div class="form-group">
                                <input type="text" placeholder="Username" name="username"/>
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Password" name="password"/>
                            </div>
                            
                            <button type="submit" class="btn btn-default">Submit</button>

                            </div>               
                        </form>
                    </div>
                </div>
            </div>
        </div>
          

</div>
 <div id="footer" style="margin-top:400px;">
    <div  class="footer" >
        <div class="container">
            <a style="color:#D5D5D5;" href="/pages/about.html">About</a> | 
            <a style="color:#D5D5D5" href="/pages/term.html">Terms</a> | 
            <a  style="color:#D5D5D5;"href="/pages/privacy.html">Privacy Policy</a> | 
            <a style="color:#D5D5D5;" href="/pages/licence.html">Licence information</a> | 
            <a  style="color:#D5D5D5;"href="/pages/contact.html">Contact</a> | 
            <spanstyle="color:#D5D5D5;"  >@copyright 2015 All-free-download.com</span>
         </div>

    </div>
   </div> 
    </body>
</html>