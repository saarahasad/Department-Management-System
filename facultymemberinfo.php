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
              
background:white;
                 background-size: cover;
                color:black;
            font-family: 'Lato', sans-serif;
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

            border-radius:3px;
            background:#b5b5b7;
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
            border-bottom:1px solid white;
            border-right: 1px solid white;
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
        color:black;
        font-size:16px;
        font-weight:normal;
        text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
        }
        
        /*tr:hover td,  #sub:hover{
        
        color:white!important;
        /*border-top: 1px solid #22262e;*/
        }
      /*  td:hover{
             opacity:0.8;
        background:#9E9E9E;
        color:#FFFFFF;
        cursor:pointer;
        }*/

      /*  #sub:hover{
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
        background:#b5b5b7;
        }
        
      /*  tr:nth-child(odd):hover td {
        background:#9E9E9E;

        }*/

        tr:last-child td:first-child {
        border-bottom-left-radius:3px;
        }
        
        tr:last-child td:last-child {
        border-bottom-right-radius:3px;
        }
        
        td   {
        height:100%;
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
          @media(min-width:800px){
        #innertable{
            width:700px;
        }
          }
          #selectable:hover td{
              background:#252839!important;
              cursor:pointer;
              color:white;

          }
          #selectcolor:hover{
              background:#616161!important;
              cursor:pointer;
              color:white;

          }
</style>

    </head>
    <body>
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
                    <ul class="nav navbar-nav">
                    <li  ><a  href="home.html">HOME</a></li>
                    <li ><a  href="studentlogin.php">STUDENT </a></li>
                       <li ><a  href="facultylogin.php">FACULTY </a></li>
                    <li class="dropdown active"><a style="color:#76323F!important;"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ADMIN <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                          <li><a href="adminhome.php">Admin Home</a></li>
                        <li><a href="facultydetails.php">Faculty Details</a></li>
                        <li><a href="studentdetails.php">Class Details</a></li>
                        <li><a href="manage.php">Manage</a></li>
                    
                    </ul>
                    
                    </li>


                    <li><a href="#">ABOUT</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li style="margin-top:10px; color:white;     font: normal 19px 'Cookie', cursive;">Welcome <?php echo $login_session; /*echo $login_id ;*/?></p> 

                        <li><a href = "logout.php">Sign Out</a></li>
                    
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
        
          <!-- -->
          <div style=" margin-top:90px;">
          
          </div>
      <a href="adminhome.php" style="margin-left:40px;" class="btn btn-default btn-lg">
          <span class="glyphicon glyphicon-menu-left"></span> Back 
        </a>



    <div class="footer" >
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
</script>    </body>
</html>
