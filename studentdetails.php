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
        <script type="text/javascript" src="vendor/jquery-1.11.3.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
        <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
        <link rel="stylesheet" href="vendor/login/css/style.css">
        <script  src="vendor/login/js/index.js"></script>
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">

        <style>
        
            body{    
                background-image: url("image/ruled.jpg");
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

		.flip-container, .front, .back {
			width: 100%;
			height: 70px;
    margin-bottom: 30px!important;		}

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
			height:100%;
			z-index: 2;
		}

		.back {
			background: white;
  
      height:100%;
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
<style>

        @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100);

        body {
        
        font-family: "Roboto", helvetica, arial, sans-serif;
        font-weight: bold;
        text-rendering: optimizeLegibility;
        }

        div.table-title {
        display: block;
        margin: auto;
        max-width: 600px;
        width: 100%;
        }

        .table-title h3 {
        color: #fafafa;
        font-size: 30px;
        font-weight: 400;
        font-style:normal;
        font-family: "Roboto", helvetica, arial, sans-serif;
        text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
        text-transform:uppercase;
        }
        table{
        }

        /*** Table Styles **/

        .table-fill {
            background: transparent;
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
        
        th {
            color:white;
            border-right: 1px solid #343a45;
            font-size:19px;
            font-weight: 400;
            padding:24px;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
            vertical-align:middle;: 
        }

        th:first-child {
            border-top-left-radius:3px;
        }
        
        th:last-child {
        border-top-right-radius:3px;
        border-right:none;
        }
        
        tr {
        border-top: 1px solid #C1C3D1;
        border-bottom-: 1px solid #C1C3D1;
        color:black;
        font-size:16px;
        font-weight:normal;
        text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
        }
        
      /*  tr:hover td,  #sub:hover{
             opacity:0.6;
        background:#424242!important;
        color:#FFFFFF!important;
        /*border-top: 1px solid #22262e;
        }*/
      /*  td:hover{
             opacity:0.6;
        background:#9E9E9E;
        color:#FFFFFF;
        cursor:pointer;
        }*/

       /* #sub:hover{
            opacity:0.7;
        color:#FFFFFF!important;
        /*border-top: 1px solid #22262e;
        }*/

        tr:first-child {
        border-top:none;
        }

        tr:last-child {
        border-bottom:none;
        }
        
        tr:nth-child(odd) td {
         background-image: transparent!important;
        }
       

        tr:last-child td:first-child {
        border-bottom-left-radius:3px;
        }
        
        tr:last-child td:last-child {
        border-bottom-right-radius:3px;
        }
        
        td   {
        height:100%;
            background-image: transparent!important;
        padding:20px;
        text-align:left;
        vertical-align:middle;
        font-weight:300;
        font-size:18px;
        text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
        border-right: 1px solid #C1C3D1;
        }
         #backflip   {
        height:100%;
        padding:20px;
        text-align:left;
        vertical-align:middle;
        font-weight:300;
        font-size:18px;
        text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
        border-right: 1px solid #C1C3D1;
        }


        td:last-child {
        border-right: 0px;
        }

        th.text-left {
        text-align: left;
        }

        th.text-center {
        text-align: center;
        }

        th.text-right {
        text-align: right;
        }

        td.text-left {
        text-align: left;
        }

        td.text-center {
        text-align: center;
        }

        td.text-right {
        text-align: right;
        }

        table{
        background-color:rgba(0, 0, 0, 0);
        color:black;
        }
         #selectable:hover{
              opacity:0.6;
            background:#424242!important;
            color:#FFFFFF!important;
              cursor:pointer;
              color:white;

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
        </div>
          <!-- -->
          <div style=" margin-top:90px;">
          
          </div>
        <div>
                <a href="adminhome.php" style="margin-left:40px;" class="btn btn-default btn-lg">
                    <span class="glyphicon glyphicon-menu-left"></span> Back 
                </a>
                <h2 style="font-weight:bold; color:#76323F; margin-top:-20px;"  class="text-center"> CLASS INFORMATION</h2>
        </div>
  <div style=" margin-top:10px;">
          
          </div>
    
    <?php
    include('db_connection.php');
    print "<div class='table-title'>";
    print "</div>";
    print"<div class='container'>";
    print"<table class='table-fill' >";
    print"<thead> ";
    print"<tr>";
    
    print"<th  style='font-weight:bold; color:#76323F; width:50%; ' class='text-center'> CLASSES</th>";
    print"<th style='font-weight:bold; color:#76323F;  width:50%; ' class='text-center'>CLASSES</th>";
    

    print"</tr></thead>";
        print"</table>";
        print"<div style='height:20px;margin-bottom:20px:'></div>";
     
        print"<table class='table-fill'> ";
          print"<thead style=' background:transparent'>  ";
       
        print "<tr>";
        print"<td  id='selectable'   class='clickable-row text-center'  data-href='studentlist.php?sem=1&sec=1' style='font-weight:bold;width: 50%;'>Sem 1 - Sec 1</td>";
        print"<td    class='clickable-row text-center' id='selectable'   data-href='studentlist.php?sem=1&sec=2' style='font-weight:bold;width: 50%; ' >Sem 1 - Sec 2</td>";
        print"</tr>";
         print "<tr>";
        print"<td    class='clickable-row text-center'  id='selectable'    data-href='studentlist.php?sem=3&sec=1' style='font-weight:bold;width: 50%;'>Sem 3 - Sec 1</td>";
        print"<td   class='clickable-row text-center' id='selectable'    data-href='studentlist.php?sem=3&sec=2' style='font-weight:bold;width: 50%; ' class='text-center'>Sem 3 - Sec 2</td>";
        print"</tr>";
         print "<tr>";
        print"<td    class='clickable-row text-center'  id='selectable'   data-href='studentlist.php?sem=5&sec=1'   style='font-weight:bold;width: 50%;'>Sem 5 - Sec 1</td>";
        print"<td   class='clickable-row text-center'  id='selectable'   data-href='studentlist.php?sem=5&sec=2' style='font-weight:bold;width: 50%; ' >Sem 5 - Sec 2</td>";
        print"</tr>";
         print "<tr>";
        print"<td    class='clickable-row text-center'  id='selectable'   data-href='studentlist.php?sem=7&sec=1' style='font-weight:bold;width: 50%;' >Sem 7 - Sec 1</td>";
        print"<td    class='clickable-row text-center'  id='selectable'   data-href='studentlist.php?sem=7&sec=2' style='font-weight:bold;width: 50%; '>Sem 7 - Sec 2</td>";
        print"</tr>";



  
    print"</thead>";
     print"</table>";
  
   
    
    
    print" </div>";
?>
<br/><br/><br/><br/><br/>



    <div class="footer" style="position:fixed;">
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
