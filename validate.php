<?php
session_start();
include_once( "./connect_db.inc");
if ( strlen($_SESSION['uid'])==0)
{
header("location:homepath.php?code=1");
}
else
{
	$connection = db_connect();

	if ( ! $connection ) 
        {
		print( "cannot connect to database" );
		exit;
	}
	$uname=$_SESSION['uid'];
	$_SESSION['iframepage']="live.php";
	$query="select * from blogging where uname='$uname'  ";
							
								
				    		$result=mysql_query($query,$connection);
							
							$i=0;
                				
								$room=mysql_result($result,$i,"room");
								if ( $room == "1" )
								header("location:homepath.php?pageowner=$uname");
                                else
								header("location:edit_profile.php");
}

?>


