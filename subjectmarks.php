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
        <style>
            body{
                        background-image: url("image/bg4.jpeg");
                    background-size: cover;
    font-family: 'Montserrat', 'Helvetica Neue', Helvetica, Arial, sans-serif;     
           }
           small{
               font-size:20px;
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

            #exTab1 .tab-content {
            color : white;
                opacity:0.9;
            background-color: #77081f;
            padding : 5px 15px;
            }

            #exTab2 h3 {
            color : white;
                opacity:0.9;
            background-color: #77081f;
            padding : 5px 15px;
            }
            /* remove border radius for the tab */

            #exTab1 .nav-pills > li > a {
            border-radius: 0;
            }

            /* change border radius for the tab , apply corners on top*/

            #exTab3 .nav-pills > li > a {
            border-radius: 4px 4px 0 0 ;
            }
            td{
                border-top:2px solid #9ea7af;
            }
            #exTab3 .tab-content {
                opacity:0.9;
            color : white;
            padding : 5px 15px;
            }
            .nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
                color: #fff;
                background-color: ;
                opacity:0.8;
            }
            a {
                color: white;
                text-decoration: none;
            }
            table{
                width:100%;
            }
            td
            {
                padding:0 15px 0 15px;
                padding-top: .5em;
                padding-bottom: .5em;
            }
            tr.table {
            border-spacing: 5em;
            }
            #rows{
                padding-top:15px;
            }

            input,#sub
            {
            -moz-border-radius: 15px;
            border-radius: 15px;
                border:solid 1px black;
                padding:5px;
            }
            @media (max-width: 560px){
                #exTab3 .tab-content{
                    width: fit-content;
                }
            }
            th{
                padding:20px;
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


<div style="height:60px;"class="container"></div>
<div style="  text-transform:uppercase;"class="container page-header">
                <h1 style="padding-left:30px;display:inline;font-weight:700;color:black;"> 
                  <?php

                                $subcode=$_GET['subcode'];

                                $s="$subcode";
                                include('db_connection.php');
                                $query1="Select sub_name from Subjects where subcode='$subcode' ";
                                $subname=mysqli_query($dbHandle,$query1);
                                $row=mysqli_fetch_array($subname,MYSQL_ASSOC);
                                print $row['sub_name'];
                                print"</h1> ";
                                if(strcmp(substr($s,5,1),1)==0)
                                {
                                    print"<small style='color:black;' class='text-center'>Sem 1</small>";
                                }
                                if(strcmp(substr($s,5,1),2)==0)
                                {
                                
                                     print"<small class='text-center'>Sem 2</small>";
                                    
                                }
                                if(strcmp(substr($s,5,1),3)==0)
                                {
                                
                                      print"<small class='text-center'>Sem 3</small>";
                                }
                                if(strcmp(substr($s,5,1),5)==0)
                                {
                                
                                      print"<small class='text-center'>Sem 5</small>";
                                }
                                if(strcmp(substr($s,0,1),"1")==0)
                                {
                                
                                      print"<small class='text-center'> &nbsp;  Sec 1</small>";
                                }
                                else{
                                 print"<small class='text-center'> &nbsp;  Sec 2</small>";
                                }


                ?>  
        </div>


<div style="" id="exTab3" class="container">	
    <ul  style="color:black;" class="nav nav-pills">
        <li  class="active">  <a style="color: black;"   href="#one" data-toggle="tab">Internal Marks - 1</a></li>
        <li><a href="#two"  style="color: black;" data-toggle="tab">Internal Marks - 2</a></li>
        <li><a href="#three"  style="color: black;"  data-toggle="tab">Internal Marks - 3</a></li>
    </ul>
	<div  class="tab-content center clearfix">
		<div   style="border:15px solid #9ea7af; border-radius:30px;  box-shadow: 10px 10px 5px #888888; background-color:#F5F5F5; background-size: cover;color:black; margin-top:-7px; " class="tab-pane active center" id="one">
                <form   style="padding:25px;"  action="ia1.php" method="POST">
                <table>
                      <tr style="border: solid 0px black!important;"><div  class="text-center"  style=" border-radius: 0px;background-color:white;margin-bottom:20px; font-size:25px; font-weight:bold; text-transform: uppercase;border: solid 0px black!important;" id="sub">INTERNAL MARKS I
                      <?php  /*
                            $subcode=$_GET['subcode'];
                            include('db_connection.php');
                            $query1="Select sub_name from Subjects where subcode='$subcode' ";
                            $subname=mysqli_query($dbHandle,$query1);
                            $row=mysqli_fetch_array($subname,MYSQL_ASSOC);
                            print $row['sub_name'];*/

                        ?>
                    </div></tr>
                    <tr style="margin-bottom:20px!important;">
                        <th class="text-center">USN</th>
                        <th class="text-center">NAME</th>
                        <th class="text-center">INTERNAL MARKS</th>
                        <th class="text-center">ASSIGNMENT MARKS</th>
                        <!--<th class="text-center">TOTAL</th>-->    
                    </tr>
                    <?php
                        include('db_connection.php');
                        $subcode=$_GET['subcode'];
                        $query="Select fkusn,name from Tracker, Students where usn=fkusn and fksubcode='$subcode' ";
                        $objList=mysqli_query($dbHandle,$query);
                        

                        if(!$objList){
                            die("Could not connect".mysql_error());
                        }
                        while($row=mysqli_fetch_array($objList,MYSQL_ASSOC))
                        {
                            $usn=$row['fkusn'];
                            $name=$row['name'];
                        
                            print "<tr >";
                            print"<td class='text-center' id='rows'style='padding:10px;'>$usn</td>";
                            print"<td class='text-center' id='rows' style='padding:10px;'>$name</td>";
                           print"<input type='hidden' value='$subcode' name='subcode[]'/>";
                            print"<td class='text-center' id='rows'  style='color:black;'> <input style='height:30px;' type='text'  name='test1[]'/></td>";
                        
                            print"<td  class='text-center'id='rows'  style='color:black;'> <input style='height:30px;'  type='text'  name='assign1[]'/></td>";
                        // print"<td class='text-center'  id='rows' style='color:black;'> <input style='height:30px;'  type='text'  name='total1[]'/></td>";
                            
                            /* print"<td> <a href='editcourse.php?id=$courseid'> Edit </a>";
                            print"&nbsp;|&nbsp; <a href='deletecourse.php?id=$courseid'> Delete </a></td>";*/
                            print"</tr>";
                        
                            /*print "<pre>";
                            print_r($row);
                            print "</pre>";*/
                        }
                    
                    ?>
                    <tr>              
                        <td class="text-center" colspan="2" ><button type='submit' value="submit" name="submit" id="sub" class='btn btn-default'  style="width:300px; margin-top:40px;">Submit</button></td>
                        <td class="text-center" colspan="2" ><button type='submit'  value="update" name="update" id="sub" class='btn btn-default'  style="width:300px; margin-top:40px;">Update</button></td>

                    </tr>
                </table>
                </form>
                
                <div style="margin-bottom:40px;">
                </div>
		</div>
		<div   style="border:15px solid #9ea7af; border-radius:30px;  box-shadow: 10px 10px 5px #888888; background-color:#F5F5F5; background-size: cover;color:black; margin-top:-7px; " class="tab-pane  center" id="two">
                <form  style="padding:25px;" action="ia2.php" method="POST">
                <table>
                     <tr style="border: solid 0px black!important;"><div  class="text-center"  style=" border-radius: 0px;background-color:white;margin-bottom:20px; font-size:25px; font-weight:bold; text-transform: uppercase;border: solid 0px black!important;" id="sub">INTERNAL MARKS II
                      <?php  /*
                            $subcode=$_GET['subcode'];
                            include('db_connection.php');
                            $query1="Select sub_name from Subjects where subcode='$subcode' ";
                            $subname=mysqli_query($dbHandle,$query1);
                            $row=mysqli_fetch_array($subname,MYSQL_ASSOC);
                            print $row['sub_name'];*/

                        ?>
                    </div></tr>
                    <tr style="margin-bottom:20px!important;">
                        <th class="text-center">USN</th>
                        <th class="text-center">NAME</th>
                        <th class="text-center">INTERNAL MARKS</th>
                        <th class="text-center">ASSIGNMENT MARKS</th>
                        <!--<th class="text-center">TOTAL</th>-->    
                    </tr>
                    <?php
                        include('db_connection.php');
                        $subcode=$_GET['subcode'];
                        
                        $query="Select fkusn,name from Tracker, Students where usn=fkusn and fksubcode='$subcode' ";
                        $objList=mysqli_query($dbHandle,$query);
                        

                        if(!$objList){
                            die("Could not connect".mysql_error());
                        }
                        while($row=mysqli_fetch_array($objList,MYSQL_ASSOC))
                        {
                            $usn=$row['fkusn'];
                            $name=$row['name'];
                        
                            print "<tr >";
                            print"<td class='text-center' id='rows'style='padding:10px;'>$usn</td>";
                            print"<td class='text-center' id='rows' style='padding:10px;'>$name</td>";
                           print"<input type='hidden' value='$subcode' name='subcode[]'/>";
                            print"<td class='text-center' id='rows'  style='color:black;'> <input style='height:30px;' type='text'  name='test1[]'/></td>";
                        
                            print"<td  class='text-center'id='rows'  style='color:black;'> <input style='height:30px;'  type='text'  name='assign1[]'/></td>";
                        // print"<td class='text-center'  id='rows' style='color:black;'> <input style='height:30px;'  type='text'  name='total1[]'/></td>";
                            
                            /* print"<td> <a href='editcourse.php?id=$courseid'> Edit </a>";
                            print"&nbsp;|&nbsp; <a href='deletecourse.php?id=$courseid'> Delete </a></td>";*/
                            print"</tr>";
                        
                            /*print "<pre>";
                            print_r($row);
                            print "</pre>";*/
                        }
                    
                    ?>
                    <tr>              
                        <td class="text-center" colspan="2" ><button type='submit' value="submit" name="submit" id="sub" class='btn btn-default'  style="width:300px; margin-top:40px;">Submit</button></td>
                        <td class="text-center" colspan="2" ><button type='submit'  value="update" name="update" id="sub" class='btn btn-default'  style="width:300px; margin-top:40px;">Update</button></td>                    </tr>
                </table>
                </form>

                <div style="margin-bottom:40px;">
                </div>

        </div>
		<div   style="border:15px solid #9ea7af; border-radius:30px;  box-shadow: 10px 10px 5px #888888; background-color:#F5F5F5; background-size: cover;color:black; margin-top:-7px; " class="tab-pane  center" id="three">
                <form  style="padding:25px;" action="ia3.php" method="POST">
                <table>
                      <tr style="border: solid 0px black!important;"><div  class="text-center"  style=" border-radius: 0px;background-color:white;margin-bottom:20px; font-size:25px; font-weight:bold; text-transform: uppercase;border: solid 0px black!important;" id="sub">INTERNAL MARKS III
                      <?php  /*
                            $subcode=$_GET['subcode'];
                            include('db_connection.php');
                            $query1="Select sub_name from Subjects where subcode='$subcode' ";
                            $subname=mysqli_query($dbHandle,$query1);
                            $row=mysqli_fetch_array($subname,MYSQL_ASSOC);
                            print $row['sub_name'];*/

                        ?>
                    </div></tr>
                    <tr style="margin-bottom:20px!important;">
                        <th class="text-center">USN</th>
                        <th class="text-center">NAME</th>
                        <th class="text-center">INTERNAL MARKS</th>
                        <th class="text-center">ASSIGNMENT MARKS</th>
                        <!--<th class="text-center">TOTAL</th>-->    
                    </tr>
                    <?php
                        include('db_connection.php');
                        $subcode=$_GET['subcode'];
                        $query="Select fkusn,name from Tracker, Students where usn=fkusn and fksubcode='$subcode' ";
                        $objList=mysqli_query($dbHandle,$query);
                        

                        if(!$objList){
                            die("Could not connect".mysql_error());
                        }
                           

                        

                        if(!$objList){
                            die("Could not connect".mysql_error());
                        }
                        while($row=mysqli_fetch_array($objList,MYSQL_ASSOC))
                        {
                            $usn=$row['fkusn'];
                            $name=$row['name'];
                        
                            print "<tr >";
                            print"<td class='text-center' id='rows'style='padding:10px;'>$usn</td>";
                            print"<td class='text-center' id='rows' style='padding:10px;'>$name</td>";
                              print"<input type='hidden' value='$subcode' name='subcode[]'/>";

                            print"<td class='text-center' id='rows'  style='color:black;'> <input style='height:30px;' type='text'  name='test1[]'/></td>";
                        
                            print"<td  class='text-center'id='rows'  style='color:black;'> <input style='height:30px;'  type='text'  name='assign1[]'/></td>";
                        // print"<td class='text-center'  id='rows' style='color:black;'> <input style='height:30px;'  type='text'  name='total1[]'/></td>";
                            
                            /* print"<td> <a href='editcourse.php?id=$courseid'> Edit </a>";
                            print"&nbsp;|&nbsp; <a href='deletecourse.php?id=$courseid'> Delete </a></td>";*/
                            print"</tr>";
                        
                            /*print "<pre>";
                            print_r($row);
                            print "</pre>";*/
                        }
                    
                    ?>
                    <tr>              
                    
  <td class="text-center" colspan="2" ><button type='submit' value="submit" name="submit" id="sub" class='btn btn-default'  style="width:300px; margin-top:40px;">Submit</button></td>
                        <td class="text-center" colspan="2" ><button type='submit'  value="update" name="update" id="sub" class='btn btn-default'  style="width:300px; margin-top:40px;">Update</button></td>                    </tr>
                </table>
                </form>
              
                <div style="margin-bottom:40px;">
                </div>

	    </div> 
	</div>
  </div>
    <div style="height:200px;"></div>

<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

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
