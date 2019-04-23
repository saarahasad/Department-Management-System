<?php
    $host='localhost';
    $username='root';
    $password='';
    $dbHandle=  mysqli_connect($host,$username,$password);
    if(!$dbHandle){
        die("Could not connect".mysql_error());
    }
    mysqli_select_db($dbHandle,'DMS');
?>