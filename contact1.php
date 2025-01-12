<?php
//database connection code
 //$con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','db_connect');

// get the post records
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$number = $_POST['number'];

// database insert SQL code
$sql = "INSERT INTO `tbl_regis` (`Id`, `firstname`, `lastname`,`email`,`number`) VALUES ('0', '$firstname', '$lastname','$email','$number')";

// insert in database 
$rs = mysqli_query($con, $sql);


?>