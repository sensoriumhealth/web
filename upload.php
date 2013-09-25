<?php
 $name  = $_POST['name'];
 $location  = $_POST['location'];
 $datetime = $_POST['datetime'];
 $datalog = $_POST['datalog'];

 error_log("Name = '" . $name . "', location = '" . $location . "'.");

 //EMAIL TO SOMEWHERE 
 $msg = "Name:". $name . "\r\nLocation:" . $location . "\r\nDate:" . $datetime . "\r\n" . $datalog;
 mail('intothemist@gmail.com','Bright Hearts', $msg);

 print $_POST['id'];
?>
