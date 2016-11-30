<?php 
session_start();
error_reporting(0);
$pageowner=$_GET['pageowner'];
include "./connect_db.inc";
$connection = db_connect();

if ( ! $connection ) 
{
	print( "cannot connect to database" );
	exit;
}
$uname=$_POST['uname'];
$password=$_POST['password'];

$sql="SELECT uname,pwd FROM blogging WHERE uname='$uname' and pwd='$password'";

$result=mysql_query($sql,$connection);

$num=mysql_numrows($result);

if($num==1)
{  	
	$_SESSION['uid']=$uname;
	header("location: create_profile.php");
}
else
{
  echo "Invalid UserName or Password";
}  
?>
