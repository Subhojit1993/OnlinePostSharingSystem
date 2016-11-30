<?php
session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="js/jquery-2.1.4.js"></script>
<script type="text/javascript" src="js/ajSlider.min.js"></script>
<title>|Create Profile|</title>
<link href="Home3.css" rel="stylesheet">
<style>
body {
	margin: 0;
	color: rgb(255, 255, 255);
	font-family:ZagReg;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,300,600,700,800' rel='stylesheet' type='text/css'>
<link href="style/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>
<div class="header1">



		<a href="Blogs.php" style="border:none;">BLOGS </a> <a href="logout.php">LOGOUT </a> <a
			href="home.php" id="login">HOME </a>
	</div>
    

<div class="pro-imgbg">
<center><h2>NEW PROFILE?</h2></center>		
          
          <table width="730" border="0" align="left" cellpadding="2" cellspacing="2" class="crontrolpanelHead">
				 <tr>
						
                           
					   
					    <td align="center" valign="middle">
						  <div class="crontrolpanel">
							<a href="edit_profile.php" class="text_link">
								<div align="center"><img src="images/users_edit.png" border="0" /></div>
								<div align="center">Create/Edit your Profile </div>
						    </a>						
                         </div>
                        </td>
					
               
                 <td align="center" valign="middle">
						  <div class="crontrolpanel">
							<a href="validate.php" class="text_link">
								<div align="center"><img src="images/home_alt.png" border="0" /></div>
								<div align="center">Take me to my  Home Page </div>
						    </a>						
                         </div>
                        </td>
                </tr>
               
					  
	</table>
          
          
          
      
          
      </div>
</div>



<?php include("include/footer.php");?>
</body>
</html>
