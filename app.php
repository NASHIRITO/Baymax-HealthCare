<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

include('configure.php');

// get the post records
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username= $_POST['username'];
$email = $_POST['email'];
$number = $_POST['number'];
$docname=$_POST['docname'];
$hospname=$_POST['hospname'];
$date=$_POST['date'];



// database insert SQL code
$sql = "INSERT INTO `tbl_book` ( `firstname`, `lastname`, `username`,`email`,`number`,`docname`,`hospname`,`date`) VALUES ( '$firstname', '$lastname', '$username','$email','$number','$docname','$hospname','$date')";

// insert in database 
$rs = mysqli_query($conn, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}
header("Location:index.html")
?>