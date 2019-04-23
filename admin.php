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
                    background-image: url("image/admin-bg.jpeg");
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
                 background-color: #3b3b3d;
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

            #heading{
             background: rgba(0, 0, 0, 0.5);
                 margin: 10px 0 0 10px;
            white-space: nowrap;
            font-family: 'Josefin Sans', sans-serif;
            font-weight:700;

            color: white; 
           
            }
            @media (max-width:1200px){
                #heading{
                    font-size:22px!important;
                     font-weight:700;
                }
                #innerheading{
                     font-size:20px!important;
                }
            }
           /* p:nth-child(2){
            animation: type2 8s steps(60, end);
            }

            p:nth-child(3){
            animation: type2 16s steps(60, end);
            }

            p:nth-child(4){
            animation: type2 30s steps(60, end);
            }*/

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
            /* entire container, keeps perspective */

	
		.flip-container, .front, .back {
			height: 427px;
		}

		.flipper {
			-webkit-transition: 0.6s;
			-webkit-transform-style: preserve-3d;
			-ms-transition: 0.6s;

			-moz-transition: 0.6s;
			-moz-transform: perspective(1000px);
			-moz-transform-style: preserve-3d;
			-ms-transform-style: preserve-3d;

			transition: 0.6s;
			transform-style: preserve-3d;

			position: relative;
		}

		.front, .back {
			-webkit-backface-visibility: hidden;
			-moz-backface-visibility: hidden;
			-ms-backface-visibility: hidden;
			backface-visibility: hidden;

		    -webkit-transition: 0.6s;
		    -webkit-transform-style: preserve-3d;
		    -webkit-transform: rotateY(0deg);

		    -moz-transition: 0.6s;
		    -moz-transform-style: preserve-3d;
		    -moz-transform: rotateY(0deg);

		    -o-transition: 0.6s;
		    -o-transform-style: preserve-3d;
		    -o-transform: rotateY(0deg);

		    -ms-transition: 0.6s;
		    -ms-transform-style: preserve-3d;
		    -ms-transform: rotateY(0deg);

		    transition: 0.6s;
		    transform-style: preserve-3d;
		    transform: rotateY(0deg);

			position: absolute;
			top: 0;
			left: 0;
		}

		.front {
			-webkit-transform: rotateY(0deg);
			-ms-transform: rotateY(0deg);
			z-index: 2;
		}

		.back {
			-webkit-transform: rotateY(-180deg);
		    -moz-transform: rotateY(-180deg);
		    -o-transform: rotateY(-180deg);
		    -ms-transform: rotateY(-180deg);
		    transform: rotateY(-180deg);
         
		}

		.front .name {
			font-size: 2em;
			display: inline-block;
			background: rgba(33, 33, 33, 0.9);
			color: #f8f8f8;
			font-family: Courier;
			padding: 5px 10px;
			border-radius: 5px;
			bottom: 60px;
			left: 25%;
			position: absolute;
			text-shadow: 0.1em 0.1em 0.05em #333;
			display: none;

			-webkit-transform: rotate(-20deg);
			-moz-transform: rotate(-20deg);
			-ms-transform: rotate(-20deg);
			transform: rotate(-20deg);
		}

		.back-logo {
			position: absolute;
			top: 40px;
			left: 90px;
			width: 160px;
			height: 117px;
			background: url(logo.png) 0 0 no-repeat;
		}

		.back-title {
			font-weight: bold;
			color: #00304a;
			position: absolute;
			top: 180px;
			left: 0;
			right: 0;
			text-align: center;
			text-shadow: 0.1em 0.1em 0.05em #acd7e5;
			font-family: Courier;
			font-size: 22px;
		}

		.back p {
			position: absolute;
			bottom: 40px;
			left: 0;
			right: 0;
			text-align: center;
			padding: 0 20px;
			font-size: 18px;
		}

		/* vertical */
		.vertical.flip-container {
			position: relative;
		}

			.vertical .back {
				-webkit-transform: rotateX(180deg);
				-moz-transform: rotateX(180deg);
				-ms-transform: rotateX(180deg);
				transform: rotateX(180deg);
			}

			.vertical.flip-container .flipper {
				-webkit-transform-origin: 100% 213.5px;
				-moz-transform-origin: 100% 213.5px;
				-ms-transform-origin: 100% 213.5px;
				transform-origin: 100% 213.5px;
			}

			/*
			.vertical.flip-container:hover .flipper {
				-webkit-transform: rotateX(-180deg);
				-moz-transform: rotateX(-180deg);
				-ms-transform: rotateX(-180deg);
				transform: rotateX(-180deg);
			}
			*/

			/* START: Accommodating for IE */
			.vertical.flip-container:hover .back, .vertical.flip-container.hover .back {
			    -webkit-transform: rotateX(0deg);
			    -moz-transform: rotateX(0deg);
			    -o-transform: rotateX(0deg);
			    -ms-transform: rotateX(0deg);
			    transform: rotateX(0deg);
			}

			.vertical.flip-container:hover .front, .vertical.flip-container.hover .front {
			    -webkit-transform: rotateX(180deg);
			    -moz-transform: rotateX(180deg);
			    -o-transform: rotateX(180deg);
			    transform: rotateX(180deg);
            }
            
</style>
        <link rel="stylesheet" href="navbarstyle.css">

    </head>
    <body>
     <div id="body">
        <!--navbar-->
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
                    <li class="active"><a  href="admin.php">ADMIN </a>
                    
                    
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
                <div class="flip-container vertical" ontouchstart="this.classList.toggle('hover'); " >
                    <div class="flipper">
                        <div style="width: 100%;" class="front">
                             <div id="heading"  style="  height:300px;padding:15px;font-family:font-family: 'Archivo Narrow', sans-serif; font-size:50px;margin-top:150px;" >Department Management System<br/><div id="innerheading" style="white-space: initial;font-size:25px;">There can be infinite uses of the computer and of new age technology, but if teachers themselves are not able to bring it into the classroom and make it work, then it fails.</div></div>

                        </div>
                        <div style="width: 100%;" class="back">
                             <div id="heading"  style=" height:300px; background: rgba(0, 0, 0, 0.5); padding:15px;font-family:font-family: 'Archivo Narrow', sans-serif; font-size:50px;margin-top:150px;" >Department Management System<br/><div id="innerheading" style="white-space: initial;font-size:25px;"> Admin Features:<ul><li>View student attendance and marks for each subject</li><li>View class attendance for each subject</li><li>View classes taken for any subject</li><li>View topics covered by teachers for each subject</li></ul></div></div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-4">
                <div style="margin-top:150px;" class="module form-module">
                    <div class="toggle">           
                    </div>
                    <div class="form" action="adminlogin.php" method="POST">
                        <h2>Admin Login</h2>
                    
                        <form action="adminlogin.php" method="POST" role="form">
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