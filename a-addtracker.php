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
 <script src="https://use.fontawesome.com/231cc9d61d.js"></script>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="style5.css">

        <style>
            body{
                background:white;
                   background-image: url("image/bg4.jpeg");
                    background-size: cover;
                font-family: 'Lato', sans-serif;
                font-weight:bold;
                }
            .navbar{
                background-color: black;
                color:white;
                font-family: 'Montserrat', sans-serif;
                    padding: 0px;

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
</style>
<style>

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100);

body {
  
   font-family: 'Lato', sans-serif;
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


/*** Table Styles **/

.table-fill {
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
  color:black;
    border-top:4px solid black;
  border-bottom:4px solid black;
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
  border-top: 1px solid black;
  border-bottom: 1px solid black;
  color:#666B85;
  font-size:16px;
  font-weight:normal;
  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
}
 
tr:hover td {
  background:#9E9E9E!important;
  color:#FFFFFF!important;
  cursor:pointer;
  /*border-top: 1px solid #22262e;*/
}
td:hover{
   background:#9E9E9E;
  color:#FFFFFF;
}

#sub:hover{
  background:#9E9E9E;
  color:#FFFFFF!important;
  /*border-top: 1px solid #22262e;*/
}
 
tr:first-child {
  border-top:none;
}

tr:last-child {
  border-bottom:none;
}
 
tr:nth-child(odd) td {
}
 
tr:nth-child(odd):hover td {

}

tr:last-child td:first-child {
  border-bottom-left-radius:3px;
}
 
tr:last-child td:last-child {
  border-bottom-right-radius:3px;
}
 
td {
  color:black;
  padding:10px;
  text-align:left;
  vertical-align:middle;
  font-size:18px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
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
  opacity:0.9;
}
@import "compass/css3";

.table-editable {
  position: relative;
  
  .glyphicon {
    font-size: 20px;
  }
}

.table-remove {
  color: #700;
  cursor: pointer;
  
  &:hover {
    color: #f00;
  }
}

.table-up, .table-down {
  color: #007;
  cursor: pointer;
  
  &:hover {
    color: #00f;
  }
}

.table-add {
  color: #070;
  cursor: pointer;
  position: absolute;
  top: 8px;
  right: 0;
  
  &:hover {
    color: #0b0;
  }
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
    align-items: stretch;
    perspective: 1500px; /* Define how many pixels the sidebar is placed from the view. */
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
        </div>
          <!-- -->
          <div style=" margin-top:50px;">
          
          </div>
          <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header text-center">
                    <i class="fa fa-user-circle-o fa-3x" aria-hidden="true"></i>
                    <h3>Administrator</h3>
                </div>

                <ul class="list-unstyled components">
                <li>
                        <a href="manage.php"> <i class="fa fa-info-circle" aria-hidden="true"></i> Features</a>
                       
                    </li>
                      <li>
                        <a href="a-addteacher.php"> <i class="fa fa-university" aria-hidden="true"></i> Add/Remove Faculty</a>
                       
                    </li>
                     <li>
                       <a href="a-addsubject.php"> <i  class="fa fa-book"  aria-hidden="true"></i> Add/Remove Subject</a>
                       
                    </li>
                    
                    <li>
                        <a href="a-addstudent.php"> <i class="fa fa-graduation-cap fa-1x"aria-hidden="true"></i> Add/Remove Student</a>
                       
                    </li>
                     <li class="active">
                        <a href="a-addtracker.php"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Student tracker</a>
                       
                    </li>
                  
                </ul>

                 <ul class="list-unstyled CTAs">
                    <li><a href="adminhome.php" class="article">Back</a></li>
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div  style="width:100%;" id="content">

                <nav style="background:white;" class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="navbar-btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                          <p class="text-center" style="text-transform:uppercase;font-family: 'Montserrat', sans-serif;color:#424242;font-weight:600; font-size:30px;margin-top:15px;">Tracker</p>
                        

                </nav>
              
                   
                <?php
                    include('db_connection.php'); 
                    print"<table  style='width:100%;'class='table-fill'>";
                    print"";
                    print"<thead> ";
                    print"<tr>";
                    print"<th class='text-center'>SL. </th>";
                     print"<th class='text-center'>USN</th>";
                      print"<th class='text-center'>NAME</th>";
                        print"<th class='text-center'>SEM</th>";
                        print"<th class='text-center'>SEC</th>";
                    print"<th class='text-center'>1</th>";
                    print"<th class='text-center'>2</th>";
                     print"<th class='text-center'>3</th>";
                      print"<th class='text-center'>4</th>";
                    print"<th class='text-center'>5</th>";
                     print"<th class='text-center'>6</th>";
                       print"<th class='text-center'>7</th>";
                         print"<th class='text-center'>8</th>";


                    // print"<th></th>";
                    print" <th> </th>";
                
                    print"</tr></thead>";
                     $query1="SELECT * FROM Students;";
                    $f=mysqli_query($dbHandle,$query1);
                    $i=1;
                    while($row=mysqli_fetch_array($f,MYSQL_ASSOC))
                    
                    {
                        $usn=$row['usn'];
                        $name=$row['name'];
                        $sem=$row['sem'];
                         $sec=$row['sec'];
                          $query2="SELECT fksubcode,sub_name FROM Tracker,Subjects where subcode=fksubcode and fkusn='$usn';";
                    $s=mysqli_query($dbHandle,$query2);
                    $rowsub=mysqli_fetch_array($s,MYSQL_ASSOC);
                    $sub1=$rowsub['sub_name'];
                       $rowsub=mysqli_fetch_array($s,MYSQL_ASSOC);
                    $sub2=$rowsub['sub_name'];
                       $rowsub=mysqli_fetch_array($s,MYSQL_ASSOC);
                    $sub3=$rowsub['sub_name'];
                         $rowsub=mysqli_fetch_array($s,MYSQL_ASSOC);
                    $sub4=$rowsub['sub_name'];
                   $rowsub=mysqli_fetch_array($s,MYSQL_ASSOC);
                    $sub5=$rowsub['sub_name'];
                      $rowsub=mysqli_fetch_array($s,MYSQL_ASSOC);
                    $sub6=$rowsub['sub_name'];
                      $rowsub=mysqli_fetch_array($s,MYSQL_ASSOC);
                    $sub7=$rowsub['sub_name'];
                           $rowsub=mysqli_fetch_array($s,MYSQL_ASSOC);
                    $sub8=$rowsub['sub_name'];
                        print "<tr  class='clickable-row' data-href='a-edittracker.php?usn=$usn&name=$name&s1=$sub1&s2=$sub2&s3=$sub3&s4=$sub4&s5=$sub5&s6=$sub6&s7=$sub7&s8=$sub8' >";
                        print"<td class='text-center'>$i</td>";
                        print"<td id='sub' style='font-size:15px;' class='text-center'>$usn</td>";
                         print"<td id='sub'   style='font-size:15px;' class='text-center'>$name</td>";
                        print"<td id='sub'  style='font-size:15px;'  class='text-center'>$sem</td>";
                     print"<td id='sub'  style='font-size:15px;'   class='text-center'>$sec</td>";
                      
                        print"<td id='sub'  style='font-size:13px;' class='text-center'>$sub1</td>";
                      
                        print"<td id='sub'  style='font-size:13px;' class='text-center'>$sub2</td>";
                       
                        print"<td id='sub'  style='font-size:13px;' class='text-center'>$sub3</td>";
                         
                        print"<td id='sub'  style='font-size:13px;' class='text-center'>$sub4</td>";
                        
                      print"<td id='sub' style='font-size:13px;'  class='text-center'>$sub5</td>";
                      
                      print"<td id='sub'  style='font-size:13px;' class='text-center'>$sub6</td>";
                      
                      print"<td id='sub'  style='font-size:13px;' class='text-center'>$sub7</td>";
                 
                      print"<td id='sub'  style='font-size:13px;' class='text-center'>$sub8</td>";
                          print" <td><a href='a-deletetracker.php?usn=$usn'><span class='table-remove glyphicon glyphicon-remove'></span></a></td>";
                          print"</tr>";
                          $i=$i+1;
                    }
  print"</table>";
                ?>

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

    
     <script>

jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
});
</script>
    <script>
    var $TABLE = $('#table');
var $BTN = $('#export-btn');
var $EXPORT = $('#export');

$('.table-add').click(function () {
  var $clone = $TABLE.find('tr.hide').clone(true).removeClass('hide table-line');
  $TABLE.find('table').append($clone);
});

$('.table-remove').click(function () {
  $(this).parents('tr').detach();
});

$('.table-up').click(function () {
  var $row = $(this).parents('tr');
  if ($row.index() === 1) return; // Don't go above the header
  $row.prev().before($row.get(0));
});

$('.table-down').click(function () {
  var $row = $(this).parents('tr');
  $row.next().after($row.get(0));
});

// A few jQuery helpers for exporting only
jQuery.fn.pop = [].pop;
jQuery.fn.shift = [].shift;

$BTN.click(function () {
  var $rows = $TABLE.find('tr:not(:hidden)');
  var headers = [];
  var data = [];
  
  // Get the headers (add special header logic here)
  $($rows.shift()).find('th:not(:empty)').each(function () {
    headers.push($(this).text().toLowerCase());
  });
  
  // Turn all existing rows into a loopable array
  $rows.each(function () {
    var $td = $(this).find('td');
    var h = {};
    
    // Use the headers from earlier to name our hash keys
    headers.forEach(function (header, i) {
      h[header] = $td.eq(i).text();   
    });
    
    data.push(h);
  });
  
  // Output the result
  $EXPORT.text(JSON.stringify(data));
});
</script>
    </body>
</html>
