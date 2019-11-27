<?php
 include_once 'dbh.inc.php' ;
 
 $deid = $_POST['deid'];
 
 $dename = $_POST['dename'];
 
 $sql = "INSERT INTO DIEASE (deid, dename) VALUES ('$deid',' $dename' )
 mysqli_query($con,$sql);
 
