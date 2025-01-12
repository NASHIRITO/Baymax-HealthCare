<?php
//database connection code
 //$con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','db_connect');

// get the post records
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$feedback = $_POST['feedback'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`firstname`, `lastname`,`username`,`feedback`) VALUES ('$firstname', '$lastname','$username','$feedback')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Feedback Given";
}
header("Location:contact.html")
?>

