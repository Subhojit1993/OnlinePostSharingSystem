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
<title>| REGISTER |</title>
<link href="style/home3.css" rel="stylesheet">
<style>
body {
	margin: 0;
	color: rgb(255, 255, 255);
	font-family:ZagReg;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,300,600,700,800' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
 <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/modern-business.css" rel="stylesheet">
  <link href="register.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>
<div class="header1">



		<a href="Blogs.php" style="border:none;">BLOGS </a> <a href="RemoveBlogs.php">REMOVE </a> <a
			href="login.php" id="login">BACK </a>
	</div>
    
<form name="registration" action="user_register_script.php" method="post">
<div class="homebg" id="home-log">
		<div class="home">
        <div class="home-right">
<div class="formbg" id="home-reg">
            				<h6>Register Here!</h6>
                            <form name="registration" action="registration-script.php" method="post"> 
                    		 
                    		<input type="text" placeholder="Name" class="contform" name="name">
                            <br></br>
                            <input type="text" placeholder="Email*" class="contform" name="email">
                            <br></br>
                            <input type="text" placeholder="Create Your Username*" class="contform" name="uname">
                            <br></br>
                            <input type="password" placeholder=" Create Your Password*" class="contform" name="password">
                            <br></br>
                            <input type="number" placeholder="put your contact no." class="contform" name="contact"/>
                            <br></br>
                            <input type="submit" name="submit" value="Submit" class="formbg-butt"/>
                            
                            <!--<input type+"submit" name="show" value="show" class="formbg-butt"/>-->
                            </form>
                            
                            
                  
            </div>
		</div>
        </div>
        </div>
        
<?php include("include/footer.php");?>
</body>
</html>