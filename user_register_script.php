<?php 
session_start();
$pageowner=$_GET['pageowner'];
include_once( "./connect_db.inc");
$connection = db_connect();

	if ( ! $connection ) 
        {
		print( "cannot connect to database" );
		exit;
	}


$name = $_POST['name'];
$email = $_POST['email'];
$uname = $_POST['uname'];
$password = $_POST['password'];
$contact = $_POST['contact'];

$sql = "insert into blogging(name,email,uname,pwd,cnct) values( '$name', '$email', '$uname', '$password', '$contact')";

$result=mysql_query($sql,$connection);

if(!$result)
{
	echo "error";
}
else
{
	$_SESSION['uid']=$email;
	header("location:user_register.php");
}
	
?>