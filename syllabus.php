
<!DOCTYPE html>
<html lang="en">
<head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Vollkorn+SC" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Marcellus+SC" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Marmelad" rel="stylesheet">
        <script type="text/javascript" src="vendor/jquery-1.11.3.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
        <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
        <link rel="stylesheet" href="vendor/login/css/style.css">
        <script  src="vendor/login/js/index.js"></script>

        <style>
            body{
            	background-color: white;
                  

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
      
	 
              td, th {border: 1.8px solid }
              tr:hover {background-color: #ebebe0;
              cursor:pointer;}
             </style>
            </head>
             <body>
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
                    <li  ><a  href="studentlogin.php">STUDENT </a></li>
                       <li ><a  href="facultylogin.php">FACULTY </a></li>
                    <li><a  href="admin.php">ADMIN </a>
                    
                    
                    </li>
                    <li class="active"  ><a href="syllabus.php">SYLLABUS</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    </ul>
                      </div>

        
                </div><!-- /.navbar-collapse -->
            </div>
          

        </nav>
	<h1 style="text-align: center;margin-top: 60px;font-family: 'Marmelad', sans-serif;font-size: 60px;color:#4C4C4C;">SYLLABUS</h1>
	<br /><br />
 <form action="" method="POST" role="form">
 <div class="form-group" style="text-align: center;margin-top: -25px;font-family: 'Marcellus SC', serif;font-size: 15px;">
 ENTER THE SEMESTER: <select name="sem" style="width: 7%;">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
  </select>
  </div>
  <div style="text-align: center;">
   <button type="submit" class="btn btn-default"  name="submit" value="submit">SUBMIT</button>
</div>
</form>

<div style=" margin-top: -40px;" class="tab-pane  center" id="two">
                <div class="form"  style="padding:25px;" actiion="" method="POST">
                <table style="height: 470px;width:100%;background-color: white!important;border-radius: 15px;margin-top: 50px;">
                    
<?php 

  include('db_connection.php');
  if(isset($_POST['submit']))
  {
      print"<tr style='background-color:#999966;margin-bottom:20px!important; width:100%; height: 50px; font-family: 'Vollkorn SC', serif;
                font-family: 'Oswald', sans-serif;color:white;font-size: 18px;';>
                        
                        <th  style='height:50px!important;' class='text-center' style='width: 40%;'>SUBCODE</th>
                        <th class='text-center' style='width: 60%;'>SUBJECT NAME</th>
                     
                        
                     </tr>";
 $sem=$_POST['sem'];
 $sql= "select sub_name,subcode from Subjects where subcode like '11%' and substring(subcode,6,1)='$sem'";

//print $sql;

 $objlist = mysqli_query($dbHandle,$sql);
 
if (!$objlist)
  {
    print "Error: " . mysql_error();
  }

 

while($row=mysqli_fetch_array($objlist))
 {
    
   
        
         $subc=$row['subcode'];

    $subn=$row['sub_name'];
    $s="$subc";
    $a=substr($s,1,10);
   echo "<tr data-href='$subc.pdf'>";
 
  echo "<td  align='center'>$a</td>";

 
 echo "<td align='center' >$subn</td>";
 

 echo "</tr>";

 }
 }
 ?>  

                </table>
                </div>
                </div>  
         </div>

         <br /><br /><br />
         <div id="pdf"></div>
 
         <div class="footer" style="margin-bottom: 0px;">
        <div class="container">
            <a style="color:#D5D5D5;" href="/pages/about.html">About</a> | 
            <a style="color:#D5D5D5" href="/pages/term.html">Terms</a> | 
            <a  style="color:#D5D5D5;"href="/pages/privacy.html">Privacy Policy</a> | 
            <a style="color:#D5D5D5;" href="/pages/licence.html">Licence information</a> | 
            <a  style="color:#D5D5D5;"href="/pages/contact.html">Contact</a> | 
            <spanstyle="color:#D5D5D5;"  >@copyright 2015 All-free-download.com</span>
         </div>

    </div>
    

   
     <script>$('tr[data-href]').on('click', function(){
         
    window.location =  $(this).data('href');
    $i++;
});</script>

</body>
</html>