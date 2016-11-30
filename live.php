<?php
include_once( "./connect_db.inc");
//$orguser=$_GET['orguser'];
//$pageowner=$_GET['pageowner'];
//echo "--------------$orguser---$pageowner";
?>


<html>
<head>
<link href="stylesheet/main.css" rel="stylesheet" type="text/css" />
<link href="stylesheet/navigation.css" rel="stylesheet" type="text/css" />
<link href="stylesheet/scroll.css" rel="stylesheet" type="text/css" />
<link href="stylesheet/face.css" rel="stylesheet" type="text/css" />
<script src="Home_js/home.js" language="javascript"></script>
</head>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td width="86%" align="left" valign="top" class="b1" style=" padding-top:5px"><h3 style="color:#14252f;">YOUR BLOGS</h3></td>
  </tr>
  </table>
 
<?php
$connection = db_connect();

	if ( ! $connection ) 
        {
		print( "cannot connect to database" );
		exit;
	}
	
	$query="select * from blogging m , livef f where m.uname= f.fromuser";
	//echo $query;
	$result=mysql_query($query,$connection);
	$num=mysql_num_rows($result);
							$i=0;
                			while ( $i < $num )
	           				{	
									
								    $memname=mysql_result($result,$i,"uname");
									$feedpicture=mysql_result($result,$i,"photo");
									$nameofpicture=mysql_result($result,$i,"name");
								    $feedtext=mysql_result($result,$i,"text");
									$statusmsg=mysql_result($result,$i,"postedstat");
									$feeddate=mysql_result($result,$i,"feeddate");
									


?>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
        <td style="border-bottom:1px solid #666666">
        
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="18%" align="left" valign="top" style="padding:5px 0 20px 0">
			  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><a href="homepath.php?pageowner=<?php echo $memname ?>" target="_parent"><img src="upload/<?php echo $feedpicture ?>" width="50" height="52" alt="" border="0" /></a></td>
  </tr>
  <tr><td class="status-msg"><?php echo $nameofpicture ?></td></tr>
</table>

			  </td>
              <td width="70%" align="left" valign="top" class="b1" style=" padding-top:5px"><?php echo $feedtext ?> </td>
               <td class="status-msg" width="100px"><?php 
			   
			   echo date('Y-m-d H:i:s', strtotime($feeddate) ); 
			   
			   
			   ?>
               
               </td>

          </tr>
          <tr style="color:#6D84C4;">
		<td >   </td>
        <?php

//$feed_id=mysql_result($result,$i,"feed_id");
if(isset($_POST['Like']))
	{
		$feed_id=intval($_POST['feed_id']);
		$blogger_id=intval($_POST['blogger_id']);
		mysql_query("insert into post_status(feed_id,blogger_id,status) values($feed_id,$blogger_id,'Like');");
	}
	if(isset($_POST['Unlike']))
	{
		$feed_id=intval($_POST['feed_id']);
		$blogger_id=intval($_POST['blogger_id']);
		mysql_query("delete from post_status where feed_id=$feed_id and blogger_id=$blogger_id;");
	}

?>  

        <?php
		 	$que_status=mysql_query("select * from post_status where feed_id=$feed_id and blogger_id=$blogger_id;");
			$que_like=mysql_query("select * from post_status where feed_id=$feed_id");
			$count_like=mysql_num_rows($que_like);
			$status_data=mysql_fetch_array($que_status);
			if($status_data[3]=="Like")
			{?>
            <td style="padding-top:15;">
		<form method="post">
		<input type="hidden" name="feed_id" value="<?php echo $feed_id; ?>">
		<input type="hidden" name="blogger_id" value="<?php echo $blogger_id; ?>">
		<input type="submit" value="Unlike" name="Unlike" style="border:#FFFFFF; background:#ECF3EA; font-size:15px; color:#6D84C4; font-weight:bolder; cursor:pointer;" onMouseOver="unlike_underLine(<?php echo $feed_id; ?>)" onMouseOut="unlike_NounderLine(<?php echo $feed_id; ?>)" id="unlike<?php echo $feed_id; ?>"></form><h bgcolor="#EDEFF4" style="width:9;" colspan="3"><img src="images/like.PNG"><span style="color:#6D84C4;"><?php echo $count_like; ?></span> like this. </h></td>
			<?php
			}
			else
			{?>
			<td style="padding-top:15;">
		<form method="post">
		<input type="hidden" name="feed_id" value="<?php echo $feed_id; ?>">
		<input type="hidden" name="blogger_id" value="<?php echo $blogger_id; ?>">
		<input type="submit" value="Like" name="Like" style="border:#FFFFFF; background:#ECF3EA; font-size:15px; color:#6D84C4; font-weight:bolder; cursor:pointer;" onMouseOver="like_underLine(<?php echo $feed_id; ?>)" onMouseOut="like_NounderLine(<?php echo $feed_id; ?>)" id="like<?php echo $feed_id; ?>"></form><h bgcolor="#EDEFF4" style="width:9;" colspan="3"><img src="images/like.PNG"><span style="color:#6D84C4;"><?php echo $count_like; ?></span> like this. </h></td>
        
			<?php
			}
		 ?>
      </tr>
      
        </table>
        </td>
              
      </table>
<?php
$i++;
							}
							
  ?>
  
      
      </body>
      </html>
      