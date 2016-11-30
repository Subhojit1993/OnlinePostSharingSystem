<?php
session_start();
error_reporting(0);
$pageowner=$_GET['pageowner'];
include "./connect_db.inc";
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="js/jquery-2.1.4.js"></script>
<script type="text/javascript" src="js/ajSlider.min.js"></script>
<title>COMELY</title>
<link href="Home.css" rel="stylesheet">
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

<script language="javascript">
<!--//

 function changelink(varName){
	
document.getElementById('midframe').src=varName+'.php?orguser=<?php echo $orguser ?>&pageowner=<?php echo $pageowner ?>';

	//}
}

//-->
</script>

<script language="javascript">
function reloadIframe()
	{
				document.getElementById('midframe').contentWindow.location.reload(); 

	}
</script>
<script>
function time_get()
		{
			d = new Date();
			mon = d.getMonth()+1;
			time = d.getDate()+"-"+mon+"-"+d.getFullYear()+" "+d.getHours()+":"+d.getMinutes();
			posting_txt.txt_post_time.value=time;
		}
</script>
</head>

<body>

<div class="header1">



		<a href="logout.php" style="border:none;">LOGOUT </a> <a href="edit_profile.php">EDIT PROFILE </a> <a
			href="validate.php" id="login">HOME </a>
	</div>
    
     <?php
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

	$action=$_GET['action'];

	if ( $action == "m" )
	{
		$feedtext=$_POST['feedtext'];	
		$feeddate = date( 'Y-m-d H:i:s');

		$sql="insert into livef ( fromuser , touser , text , feeddate ) values ( '$orguser', '$pageowner' , '$feedtext', '$feeddate')";
		
		mysql_query($sql,$connection);
		$fquery="select * from blogging where uname='$orguser'  ";	
		
							$fresult=mysql_query($fquery,$connection);
							$i=0;
                			$fromusername=mysql_result($fresult,$i,"name");
							
		$query="select * from blogging where uname='$uname'  ";	
		
								$result=mysql_query($query,$connection);
							
								$i=0;
                				
								$feed_id=mysql_result($result,$i,"feed_id");
								$blogger_id=mysql_result($result,$i,"blogger_id");
								$name=mysql_result($result,$i,"name");
								$address=mysql_result($result,$i,"address");
								$email=mysql_result($result,$i,"email");
								$photo=mysql_result($result,$i,"photo");
								$stat=mysql_result($result,$i,"postedstat");
		
				$to=$email;
				$to2="scriptonova@gmail.com";



				$subject = "$fromusername Has posted on your Page !!! ";
				$body =       "Hello $name ,\r\n\r\n";
				$body= $body. "You have got the following message from $fromusername : \r\n\r\n ";
				$body= $body. "\"$feedtext\"";

				$body= $body. "Regards,\r\n ";
				$body= $body. "Support Team\r\n ";
				$body= $body. "OnlineBlogging\r\n ";


				$headers = "From: OnlineBlogging\n";
				
	}
	
	$query="select * from blogging where uname='$uname'  ";
	
								$result=mysql_query($query,$connection);
							
								$i=0;
                				
								//$feed_id=mysql_result($result,$i,"feed_id");
								$blogger_id=mysql_result($result,$i,"blogger_id");
								$name=mysql_result($result,$i,"name");
								$address=mysql_result($result,$i,"address");
								$email=mysql_result($result,$i,"email");
								$photo=mysql_result($result,$i,"photo");
								//$stat=mysql_result($result,$i,"postedstat");
	?>
    
    <?php include("include/status.php");?>
    
    <div class="mainbg">
    
		<?php include("live.php");?>
        </div>

</body>
</html>