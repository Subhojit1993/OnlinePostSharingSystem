<?php
session_start();
//$pageowner=$_GET['pageowner'];
include "./connect_db.inc";
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="js/jquery-2.1.4.js"></script>
<script type="text/javascript" src="js/ajSlider.min.js"></script>
<title>| Login |</title>
<link href="Home.css" rel="stylesheet">
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
 <link href="bootstrap.min.css" rel="stylesheet">
  <link href="css/modern-business.css" rel="stylesheet">
  <link href="style/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>


<div class="header1">



		<a href="Blogs.php" style="border:none;">BLOGS </a> <a href="help.php">HELP </a> <a
			href="home.php" id="login">HOME </a>
	</div>
    

<div class="homebg" id="home-log">
		<div class="home">
        <div class="home-left">
        	<h2>Want to Blog?</h2>
            <h3>Login first!</h3>
           
            <p>Mind is a living Treasure. Thoughts, Hope, Faith, Decisions everything comes from here. Keep blogging your latest thoughts and watch others reaction on it. keep yourself published day-by-day, connect yourself with others, share your memories.</p>
        </div>
        
        <div class="home-right">
        		<div class="formbg">
                		     <form name="login" action="login_script.php" method="post">                       
                            <input type="text" placeholder="Username" class="contform" name="uname">
                            
                            <input type="password" placeholder="Password" class="contform" name="password">
                           
                            <input type="submit" name="Login" value="LOGIN" class="formbg-butt" />
                            
                           </form>

                            
                            
                  
            </div>
                  <br><br>
			<div class="formbg" id="home-reg">
            				<h6>New To Blog?</h6>
                           <div class="c"><img src="Images/4925686-pen-wallpapers.jpg" height="120" width="200"></div>
                            
                            </div>
                            </div>
                            </div>
                            </div>
                            <div id="leftpannel">
                       <ul type="none">
                           <li><a href="user_register.php">Register</a></li>
                           
                       </ul>
             </div> 
             
             <div class="aboutbg">
		<div class="about-left"><img src="images/We1.jpg" height="260" width="260"/>
        </div>
        
        
        <div class="about-right">
        <h3>Our Thoughts</h3>
        <p>Price is worthless, mind is fine,<br>
    Coins are hopeless, eyes are guide.<br>
    Little bit taste of Love gives health,<br>
    Shit of tasks are rounding up wealth!<br>
    Enormous guides of fight need rest,<br>
    Future of chaos is still at its best!<br>
    Untied bonds are again getting tied,<br>
    Unreal Justice is now verified….<br>
</p>
        </div>
</div>  

<div class="aboutbg">
		<div class="about-left"><img src="images/We2.jpg" height="260" width="260"/>
        </div>
        
        
        <div class="about-right">
        <h3>সময় যখন এগিয়ে চলে...</h3>
        <p>সকাল-দুপুর-বিকালবেলা,<br>
        চলছে শুধুই পাশার খেলা ।<br>
		ভবিষ্যতের আশায় বসে,<br>
		ক্লান্ত এ মন মিচকি হাসে ।<br>
		চলার পথে একটু আলো,<br>
		বলছে হেঁকে,“এগিয়ে চলো”!<br>
		রাত্রি এসে বলছে মাঝে,<br>
		“গতি বাড়াও, একটু থেমে”।<br>
</p>
        </div>
</div>
<?php include("include/footer.php");?>        
</body>
</html>