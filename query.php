<?php
//database connection code
 //$con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','db_connect');

// get the post records
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$email= $_POST['email'];
$question=$_POST['question'];

// database insert SQL code
$sql = "INSERT INTO `tbl_question` (`firstname`, `lastname`,`username`,`email`,`question`) VALUES ('$firstname', '$lastname','$username','$email','$question')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Query Submitted";
}
header("Location:about.html")
?>

