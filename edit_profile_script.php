<?php
session_start();
include "./connect_db.inc";
$connection = db_connect();

if ( ! $connection ) 
{
	print( "cannot connect to database" );
	exit;
}
	
	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="js/jquery-2.1.4.js"></script>
<script type="text/javascript" src="js/ajSlider.min.js"></script>
<title>CoMeLy</title>
<link href="home1.css" rel="stylesheet">
<style>
body {
	margin: 0;
	color: #2F5BD3(255, 255, 255);
	font-family: Impact, Haettenschweiler, "Franklin Gothic Bold", "Arial Black", sans-serif;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,300,600,700,800' rel='stylesheet' type='text/css'>
<link href="style/editeprofile.css" rel="stylesheet" type="text/css" media="screen" />
</head>


<body>
<div class="header1">



		<a href="logout.php" style="border:none;">LOGOUT </a> <a href="create_profile.php">BACK </a> <a
			href="homepath.php" id="login">HOME </a>
	</div>
<div class="pro-imgbg">
    
<?php


$timestamp=time();
error_reporting(0);
$photo= $_FILES['photo']['name'];
$avatar=$_POST['avatar'];
$pic=0;
if ( strlen ( $photo ) > 0)
{
$pic=1;
$ary=explode("." , $photo);
$newfilename=$timestamp.".".$ary[1];
copy($_FILES["photo"]["tmp_name"],
      "upload/" . $newfilename);
}
if ( strlen ( $avatar ) > 0 && $pic == 0 )
$newfilename=$avatar;
// interests
$i=1;
$delights="";
while ( $i <=63 )
{
$var="c".$i;
$intr=$_POST[$var];

if ( strlen($intr)!=0)
{
	$delights=$delights." , ". $intr;
}

$i++;
}

// meeting 

$i=1;
$forum="";
while ( $i <=3 )
{
$var="p".$i;
$meet=$_POST[$var];

if ( strlen($meet)!=0)
{
	$forum=$forum." , ". $meet;
}

$i++;
}
	
	
//status
$i=1;
$post="";
while ( $i <=3 )
{
$var="k".$i;
$stat=$_POST[$var];

if ( strlen($stat)!=0)
{
	$post=$post." , ". $stat;
}

$i++;
}

$delights=substr($delights,3);
$forum=substr($forum,3);
$post=substr($post,3);

$uname=$_SESSION['uid'];


if (strlen($newfilename)>0)
{
$sql="update blogging set delights='$delights' , forum = '$forum' , post='$post' , photo='$newfilename' , room='1'  where uname='$uname' ";
}
else
{
$sql="update blogging set delights='$delights' , forum = '$forum' , post='$post' , room='1'  where uname='$uname' ";
}


$result=mysql_query($sql,$connection);



echo "<center><h2>Profile Successfully Updated</h2><center><h2>ENJOY Posting Blogs NOW</h2><br><center><h3>PLease click </h3><h2><a href='validate.php'>HERE</a></h2><h3> to go to your Home</h3><center>";


?>
                    
 </div>
</div>



<?php include("include/footer.php");?>
</body>
</html>
