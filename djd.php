
<!DOCTYPE html>
<html>
   <head>
      <link href="https://nineleapss.000webhostapp.com/bootstrap/css/bootstrap.css" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
            <style>
               table {
               margin-left: 170px;
               margin-top: 50px;
               margin-bottom: 50px;
               font-family: "Oswald,sans-serif";
               font-size: 12px;
               }
               h1 {
               margin: 25px auto 0;
               text-align: center;
               text-transform: uppercase;
               font-size: 20px;
               }
               table td {
               transition: all .5s;
               }
               /* Table */
               .data-table {
               border-collapse: collapse;
               font-size: 20px;
               min-width: 537px;
               }
               .data-table th,
               .data-table td {
               border: 1px solid #e1edff;
               padding: 7px 10px;
               }
               .data-table caption {
               margin: 7px;
               }
               /* Table Header */
               .data-table thead th {
               background-color: #508abb;
               color: #FFFFFF;
               border-color: #6ea1cc !important;
               text-transform: uppercase;
               }
               /* Table Body */
               .data-table tbody td {
               color: #353535;
               }
               .data-table tbody td:first-child,
               .data-table tbody td:nth-child(4),
               .data-table tbody td:last-child {
               text-align: left;
               }
               .data-table tbody tr:nth-child(odd) td {
               background-color: #f4fbff;
               }
               .data-table tbody tr:hover td {
               background-color: #CAFDFE;
               border-color: #CAFDFE;
               }
            </style>
         </head>
         <body>
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <img class="navbar-brand" style="margin-left:25px;" class="nine" src="http://13.229.25.59/assets/img/logo.png" alt="Nineleaps" align="middle">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto" style="padding-right:35px;">
                    <li class="nav-item active">
                        <a class="nav-link" style="padding-right:20px; padding-left:20px;" href="home.html">HOME </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="padding-right:20px; padding-left:20px;" href="tab.php">TABLE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="padding-right:20px; padding-left:20px;" href="secondpage.php">LIST</a>
                    </li>
                    </ul>
                </div>
            </nav>
            <div class="container" style="margin-top:20px;">
                <div class="container">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.html">Home</a></li>
                    <li class="breadcrumb-item active">Table View</li>
                    </ol>
                </div>
                <br>
                <div class="container">
                    <h3 class="float-left">All Employees</h3>
                    <a class="btn btn-primary btn-lg float-right" href="add.php">+Add New</a>
                </div>
            </div>
                <?php
                include('connection.php');
                $sql = 'SELECT * 
                        FROM Employee_details';
                
                $query = mysqli_query($dbHandle, $sql);
                
                if (!$query) {
                    die ('SQL Error: ' . mysqli_error($conn));
                }
                ?>
            <table class="data-table" align="left" width="800">
               <thead>
                  <tr>
                     <th>E_ID</th>
                     <th>NAME</th>
                     <th>DESIGNATION</th>
                     <th>MANAGER</th>
                     <th>VIEW</th>
                  </tr>
               </thead>
               <tbody>
                  <?php
                     while ($row = mysqli_fetch_array($query))
                     {
                     
                     	echo '<tr>
                     			<td>'.$row['E_id'].'</td>
                     			<td>'.$row['ename'].'</td>
                     			<td>'.$row['designation'].'</td>
                     			<td>'.$row['manager'].'</td>
                     			<td><a href="edit.php?eid='.$row['E_id'].'">VIEW</a></td>
                     		</tr>';
                     
                     }?>
               </tbody>
            </table>
            <hr class="last">
            <footer class="page-footer font-small blue">
                <!-- Copyright -->
                <div class="footer-copyright text-center py-3" style="font-size: 16px;font-family:'Nunito Sans', sans-serif;  ">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 ">
                                <p style="font-family: Nunito,sans-serif;text-align: left;margin-bottom: 0px; ">© 2018 Nineleaps Technology Solutions</p>
                                <p style="text-align: left; "><a style="font-family: Nunito,sans-serif; " href="https://www.nineleaps.com/"> Privacy policy</a></p>
                            </div>
                            <div class="col-md-3 offset-md-5">
                                <img style="" src="http://13.229.25.59/assets/img/logo-full.png" title="Nineleaps Technology Solutions Pvt. Ltd.">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Copyright -->
            </footer>
    </body>
</html>