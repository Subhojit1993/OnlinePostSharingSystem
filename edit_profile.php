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
</head>

<body>
<div class="header1">



		<a href="logout.php" style="border:none;">LOGOUT </a> <a href="create_profile.php">BACK </a> <a
			href="validate.php" id="login">HOME </a>
	</div>

<div class="pro-imgbg">


    
    <form name="bcsprofile" action="edit_profile_script.php" method="post" enctype="multipart/form-data"><br />
    
    <table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td width="100%">

    
    <TABLE width="100%" height="292" border=0 cellPadding=2 cellSpacing=2>
        <TBODY>
        <TR>
          <TD colSpan=2 height="10" class="mover-headernew" align="center"><h2>Create Your Attractive Profile<h2></TD></TR>
         <TR>
           <TD width="20%" height="41" align=right valign="top" class="text-pane0l2"><g>Profile Picture :</g></TD>
           <TD width="40%" align=left><input class="input1" type="file" size="35" name="photo"/></TD>
         </TR>
		<TR>
          <TD height="32"></TD>
          <TD align=left><f>&nbsp; &nbsp; PIC. SIZE should be less then 1 MB, if it's not choose from below --></f><br />
          
          <table>
         <tr>
          <?php 
          $z=1;
          while ( $z <= 33 )
		  {
		  $pvar="a".$z.".jpg";
		  echo "<td><img src='upload/$pvar' width='30' height='32'><br><input type='radio' name='avatar' value='$pvar'> </td>";
		  if ( $z % 10 == 0 )
		  echo "</tr><tr>";
		  $z++;
		  }
		  
		  ?>
          
          </tr>

          </table>
          
          
          </TD>
        </TR>
         <TR>
          <TD height="26" align=right valign="top" class="text-panel"><g>Delights :</g></TD>
          <TD align=left>
		  
		  
		  <table>
		  
		  
		  <tr>
 <?php    
	$uname=$_SESSION['uid'];
	$query="select * from blogging where uname='$uname'  ";
	//echo $query;						
								
				    		$result=mysql_query($query,$connection);
							$i=0;
                				$delights=mysql_result($result,$i,"delights");
								$mydelights = explode(",", $delights);
								foreach ($mydelights as &$value) 
								{
    								$value = trim($value);
								}

								
								
								
							
								


	
	 $sql="SELECT * FROM delights";
    
	$result=mysql_query($sql,$connection);
	$num=mysql_num_rows($result);
							$i=0;
							
                			while ( $i < $num )
	           				{	
								    
									
									$delight=mysql_result($result,$i,"delight");
								     $var="c".($i+1);	   
          
       if ( in_array( $delight, $mydelights)) 
	   {
      echo "<td> <input type='checkbox' checked name='$var' value='$delight'/>$delight</td>";
	   }
	   else
	   {
		   echo "<td> <input type='checkbox' name='$var' value='$delight'/>$delight</td>";
	   }
	   
      if ( (($i+1) % 3 )==0) 
	  {
	  echo "</tr><tr>";
	
	  }
	  $i++;
							}
      
		  
		  ?>
          
		</tr>  
		  
		  
		  
		  
		  </table>




</TD>
        </TR>
       
         <TR>
          <TD height="34" align=right valign="top" class="text-pane0l2"><g>Interested in forum :</g></TD>
          <TD align=left>
          
          	  
		  <table>
		  
		  
		  <tr>
 <?php         
        
	$query="select * from blogging where uname='$uname'  ";
	//echo $query;						
								
				    		$result=mysql_query($query,$connection);
							$i=0;
                				$delights=mysql_result($result,$i,"forum");
								$mydelights = explode(",", $delights);
								foreach ($mydelights as &$value) 
								{
    								$value = trim($value);
								}

								
								
								
							
								


	
	 $sql="SELECT * FROM forum";
    
	$result=mysql_query($sql,$connection);
	$num=mysql_num_rows($result);
							$i=0;
							
                			while ( $i < $num )
	           				{	
								    
									
									$delight=mysql_result($result,$i,"forum");
								     $var="p".($i+1);	   
          
       if ( in_array( $delight, $mydelights)) 
	   {
      echo "<td> <input type='checkbox' checked name='$var' value='$delight'/>$delight</td>";
	   }
	   else
	   {
		   echo "<td> <input type='checkbox' name='$var' value='$delight'/>$delight</td>";
	   }
	   
      if ( (($i+1) % 3 )==0) 
	  {
	  echo "</tr><tr>";
	
	  }
	  $i++;
							}
      
		  
		  ?>
          
		</tr>  
		  
		  
		  
		  
		  </table>


        
        
        
        
        
        
        </TR>
         <TR>
          <TD height="34" align=right valign="top" class="text-pane0l2"><g>Post :</g></TD>
          <TD align=left>
          
         	  
		  <table>
		  
		  
		  <tr>
 <?php         
        
	$query="select * from blogging where uname='$uname'  ";
	//echo $query;						
								
				    		$result=mysql_query($query,$connection);
							$i=0;
                				$delights=mysql_result($result,$i,"post");
								$mydelights = explode(",", $delights);
								foreach ($mydelights as &$value) 
								{
    								$value = trim($value);
								}

								

	 $sql="SELECT * FROM post";
    
	$result=mysql_query($sql,$connection);
	$num=mysql_num_rows($result);
							$i=0;
							
                			while ( $i < $num )
	           				{	
								    
									
									$delight=mysql_result($result,$i,"status");
								     $var="k".($i+1);	   
          
       if ( in_array( $delight, $mydelights)) 
	   {
      echo "<td> <input type='checkbox' checked name='$var' value='$delight'/>$delight</td>";
	   }
	   else
	   {
		   echo "<td> <input type='checkbox' name='$var' value='$delight'/>$delight</td>";
	   }
	   
      if ( (($i+1) % 3 )==0) 
	  {
	  echo "</tr><tr>";
	
	  }
	  $i++;
							}
      
		  
		  ?>
          
		</tr>  
		  
		  
		  
		  
		  </table>


          
          
          
          
          </TD>
        </TR>
		 
       
          <TD height="59" colSpan=2 align="center" ><INPUT type="submit" id="submit" name="submit" value="Submit" class="formbg-butt">&nbsp;&nbsp;
          </TD></TR></TABLE>
          
    </td>
  </tr>
</table>
          
          </form>
          
   </div>
</div>

<?php include("include/footer.php");?>
</body>
</html>