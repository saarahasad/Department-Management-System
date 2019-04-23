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
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

        <script  src="vendor/login/js/index.js"></script>
        <style>
            body{
                     background-image: url("image/bg4.jpeg");
                    background-size: cover;
                    color:black;
                    font-family: 'Lato', sans-serif;

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
                position: fixed;
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

            #exTab3 .tab-content {
                opacity:0.9;
            color : white;
            padding : 5px 15px;
            }
            .nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
                color: #fff;
                background-color: #212121;
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
                #red:after {
            width: 35px;
            height: 35px;
            border-radius: 20px;
            top: -6px;
            left: -3px;
            position: relative;
            background-color: #d1d3d1;
            content: '';
            display: inline-block;
            visibility: visible;
            border: 2px solid white;
            }
        
            #red:checked:after {
                width: 35px;
                height: 35px;
                border-radius: 20px;
                top: -6px;
                left: -3px;
                position: relative;
                background-color: #F44336;
                content: '';
                display: inline-block;
                visibility: visible;
                border: 2px solid white;
            }
                        #green:after {
                width: 35px;
                height: 35px;
                border-radius: 20px;
                top: -6px;
                left: -3px;
                position: relative;
                background-color: #d1d3d1;
                content: '';
                display: inline-block;
                visibility: visible;
                border: 2px solid white;
            }
            
            #green:checked:after {
                width: 35px;
                height: 35px;
                border-radius: 20px;
                top: -6px;
                left: -3px;
                position: relative;
                background-color: #558B2F;
                content: '';
                display: inline-block;
                visibility: visible;
                border: 2px solid white;
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
        <div class="container" style="height:80px;"><h2> </h2></div>

         <a href="attendance.php" style="margin-left:40px;" class="btn btn-default btn-lg">
          <span class="glyphicon glyphicon-menu-left"></span> Back 
        </a>
        <div id="exTab3" class="container">	
            
                <form   style="padding:25px;"  action="editattendancesave.php" method="POST">
                <table>
                     <tr style="border: solid 0px black!important;">
                        <div  style="opacity:0.8; margin-bottom:40px;padding:5px; color:black;">
                            <div  class="text-center"  style="color:black;border-radius: 0px;margin-bottom:20px; font-size:25px; font-weight:bold; text-transform: uppercase;border: solid 0px black!important;" id="sub">
                            <?php

                                $subcode=$_GET['subcode'];
                                $date=$_GET['date'];
                                $class=$_GET['classno'];

                                $s="$subcode";
                                include('db_connection.php');
                                $query1="Select sub_name from Subjects where subcode='$subcode' ";
                                $subname=mysqli_query($dbHandle,$query1);
                                $row=mysqli_fetch_array($subname,MYSQL_ASSOC);
                                print $row['sub_name'];
                                print"  </div>";  
                                print"<p class='text-center'> Class No: $class</p>";
                                print"<p class='text-center'> Date:  $date</p>";
                                if(strcmp(substr($s,5,1),1)==0)
                                {
                                    print"<p class='text-center'>Semester: 1</p>";
                                }
                                if(strcmp(substr($s,5,1),2)==0)
                                {
                                
                                     print"<p class='text-center'>Semester: 2</p>";
                                    
                                }
                                if(strcmp(substr($s,5,1),3)==0)
                                {
                                
                                      print"<p class='text-center'>Semester: 3</p>";
                                }
                                if(strcmp(substr($s,5,1),5)==0)
                                {
                                
                                      print"<p class='text-center'>Semester: 5</p>";
                                }
                            
                                if(strcmp(substr($s,0,1),"1")==0)
                                {
                                
                                      print"<p class='text-center'>Section: 1</p>";
                                }
                                else{
                                 print"<p class='text-center'>Section: 2</p>";
                                }


                            ?>  
                            </div>
                    </div>
                    
                    </tr>
                    <tr style="font-size:16px; background-color:#E0E0E0; padding:25px;margin-bottom:20px!important;  border-bottom:1pt solid black;border-top:1pt solid black;">
                    <th  style="padding:10px;" class="text-center">SL.</th>
                        <th class="text-center">USN</th>
                        <th class="text-center">NAME</th>
                        <th class="text-center">PRESENT</th>
                         <th class="text-center">ABSENT</th>
                        <!--<th class="text-center">TOTAL</th>-->    
                    </tr>
                     
                    <?php
                        include('db_connection.php');
                        $subcode=$_GET['subcode'];
                         $date=$_GET['date'];
                        $hours=$_GET['classno'];
                        $query="Select fkusn,name, date, attendance from Tracker, Students, Attend where usn=usn_fk and usn=fkusn  and fksubcode=subcode_fk and fksubcode='$subcode'  and date='$date' and hours=$hours ";
                        $objList=mysqli_query($dbHandle,$query);
                        

                        if(!$objList){
                            die("Could not connect".mysql_error());
                        }
                        $i=0;
                        while($row=mysqli_fetch_array($objList,MYSQL_ASSOC))
                        {
                           $tot=$i+1;
                            $usn=$row['fkusn'];
                            $name=$row['name'];
                            $attendance=$row['attendance'];
                           
                            print "<tr >";
                             print"<td class='text-center' id='rows'style='padding:10px; border-bottom:1pt solid black;'>$tot</td>";
                            print"<td class='text-center' id='rows'style='padding:10px;  border-bottom:1pt solid black;'>$usn</td>";
                            print"<td class='text-center' id='rows' style='padding:10px;  border-bottom:1pt solid black;'>$name</td>";
                           print"<input type='hidden' value='$subcode' name='subcode[]'/>";
                            print"<input type='hidden' value='$class' name='hour[]'/>";
                             print"<input type='hidden' value='$date' name='date[]'/>";

                            print" <label class='radio'>";
                            if($attendance=="P")
                                print"<td class='text-center' id='rows'  style=' border-bottom:1pt solid black;color:black;'> <input id='green' style='height:30px;   background-color: green;' value='P' type='radio' checked name='attendance[$i]'/></td>";
                            else
                                 print"<td class='text-center' id='rows'  style=' border-bottom:1pt solid black;color:black;'> <input id='green' style='height:30px;   background-color: green;' value='P' type='radio'  name='attendance[$i]'/></td>";
                            if($attendance=="A")
                                print"<td  class='text-center'id='rows'  style=' border-bottom:1pt solid black;color:black;'> <input style='height:30px;'  value='A'  id='red'  type='radio' checked name='attendance[$i]'/></td> ";
                            else
                                print"<td  class='text-center'id='rows'  style=' border-bottom:1pt solid black;color:black;'> <input style='height:30px;'  value='A'  id='red'  type='radio'  name='attendance[$i]'/></td> ";

                            print"</label>";
                        // print"<td class='text-center'  id='rows' style='color:black;'> <input style='height:30px;'  type='text'  name='total1[]'/></td>";
                            $i++;
                            /* print"<td> <a href='editcourse.php?id=$courseid'> Edit </a>";
                            print"&nbsp;|&nbsp; <a href='deletecourse.php?id=$courseid'> Delete </a></td>";*/
                            print"</tr>";
                        
                            /*print "<pre>";
                            print_r($row);
                            print "</pre>";*/
                        }
                    
                    ?>
                    <tr>              
                        <td class="text-center" colspan="7" ><button type='submit' name="submit" id="sub" class='btn btn-default'  style="width:300px; margin-top:40px;">Update</button></td>
                    </tr>
                </table>
                </form>
                
                <div style="margin-bottom:40px;">
                </div>	
                
    
  </div>
    <div style="height:200px;"></div>

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
      <script>

    jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
});
</script>
    
    </body>
</html>
