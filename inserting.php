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

    $orguser=$_SESSION['uid'];
	if ( strlen( $pageowner ) ==0 )
	$uname=$orguser;
	else
	$uname=$pageowner;

$feedtext=$_POST['feedtext'];	
$feeddate = date( 'Y-m-d H:i:s');

$sql="insert into livef ( fromuser , touser , text , feeddate ) values ( '$orguser', '$pageowner' , '$feedtext', '$feeddate')";
		
mysql_query($sql,$connection);

if(!$result)
{
	echo "error";
}
else
{
	$_SESSION['uid'] = $orguser;
	//$_SESSION['uid']=$email;
	header("location:homepath.php");
}

?>