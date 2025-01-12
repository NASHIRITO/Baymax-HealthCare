<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

include('configure.php');

// get the post records
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username= $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$number = $_POST['number'];

// database insert SQL code
$sql = "INSERT INTO `tbl_regis` ( `firstname`, `lastname`, `username`, `password`,`email`,`number`) VALUES ( '$firstname', '$lastname', '$username', '$password','$email','$number')";

// insert in database 
$rs = mysqli_query($conn, $sql);

if($rs)
{
	echo "user registered";
}
header("Location:login.html")
?>