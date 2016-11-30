<!DOCTYPE>
<html>
<head>
<style type="text/css">
@font-face {
    font-family: ZagReg;
    src: url(ZagRegular.woff);
}
@font-face {
    font-family: calibri light;
    src: url(calibri light.woff);
}

.l {
	background: linear-gradient(45deg, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.5)),
		url("Images/map.jpg");
}

.contact  li:nth-child(1) a {
	padding: 50px;
	background: url("Images/dim.png") no-repeat left center;
}

.contact  li:nth-child(2) a {
	padding: 40px;
	background: url("Images/4925851-pen-wallpapers.png") no-repeat left center;
}

.contact  li:nth-child(3) a {
	padding: 40px;
	background: url("Images/g+.png") no-repeat left center;
}

.contact  li:nth-child(4) a {
	padding: 40px;
	background: url("Images/4925862-pen-wallpapers.png") no-repeat left center;
}
.contact  li:nth-child(5) a {
	padding: 40px;
	background: url("Images/4925884-pen-wallpapers.png") no-repeat left center;
}

#ajSlider span{
color:#fff;
font-size:100px;
font-weight:normal;	
text-shadow:0px 2px 8px #222;
}

</style>
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="js/jquery-2.1.4.js"></script>
<script type="text/javascript" src="js/ajSlider.min.js"></script>
<title>Home | Blog Your Lines</title>
<link href="Home.css" rel="stylesheet">
<style>
body {
	margin: 0;
	color: rgb(255, 255, 255);
	font-family:ZagReg;
}
</style>
<meta charset="utf-8">
<script type="text/javascript">
	$(document).ready(function() {
		$('#ajSlider').ajSlider(3000, {
			"width" : "100%",//width of slider
			"height" : "100%",//height of slider
			"textPosition" : "30%",//position of text from top
			"textSize" : "50px"//font size of the text
		});
	});

</script>

<!--<title>Untitled Document</title>-->
</head>

<body>
<ul class="top-bottom">
	<li><a href="#" class="back-to-top"><i class="fa fa-caret-up" aria-hidden="true"></i></a></li>
    <li><a href="#" class="back-to-bottom"><i class="fa fa-caret-down" aria-hidden="true"></i></a></li>
    </ul>
	
	<div class="header1">



		<a href="Blogs.php" style="border:none;">BLOGS </a> <a href="help.php">HELP </a> <a
			href="Login.php" id="login">LOGIN </a>
	</div>
    <div id="ajSlider">
		<img src="Images\slide3.jpg" /> <img src="Images\slide2.jpg" /> <img
			src="Images\slide4.jpg" /> <img src="Images\slide5.jpg" /> <img
			src="Images\slide1.jpg" /> <img
			src="Images\slide6.jpg" /> <img
			src="Images\slide7.jpg" /><a><span>সময়</span><br>আশার মাঝে...</a> <a><span>POEMS</span><br>THOUGHTS FROM HOPE</a> <a><span>STORIES</span><br>WORDS OF WORLD</a> <a><span>LINES</span><br>FAITH AND DESTINY</a> <a><span>BIOGRAPHY</span><br>MEMORIES TOGETHER</a><a><span>কিছু কথা</span><br>আজ কাল পরশু...</a><a><span>ARTICLES</span><br>MYTHS OF LIFE</a>

	
	</div>
    
<div style="position:absolute;top:0;left:0;width:100%;height:100%;background:rgba(50,50,50,0.4);">
<!--<button class="booking" background:"rgba(50,50,20,0.4)" color="#20AD10;">FAMOUS POSTS</button>-->
<!--<hr style="position:absolute;top:400px;left:140px;background:#20AD10;width:800px;">-->
</div>


    <script src="JQuery/Home.js"></script>
<script src="js/Script.js"></script>
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push([ '_setAccount', 'UA-36251023-1' ]);
		_gaq.push([ '_setDomainName', 'jqueryscript.net' ]);
		_gaq.push([ '_trackPageview' ]);

		(function() {
			var ga = document.createElement('script');
			ga.type = 'text/javascript';
			ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl'
					: 'http://www')
					+ '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(ga, s);
		})();
		
		
		$(document).ready(function(){
			   var amount1=1200;
			   var counter1 = 1000;
			   var interval1 = setInterval(function(){
			      $('#drives').text(counter1++);
			      if (counter1 > amount1){
			        clearInterval(interval1);
			      }
			   },5); // the value 100 is the time delay between increments to the counter
			   
			   var amount2=1000;
			   var counter2 = 800;
			   var interval2 = setInterval(function(){
			      $('#cust').text(counter2++);
			      if (counter2 > amount2){
			        clearInterval(interval2);
			      }
			   },5);
			   
			   var amount4=378;
			   var counter4 = 100;
			   var interval4 = setInterval(function(){
			      $('#driver').text(counter4++);
			      if (counter4 > amount4){
			        clearInterval(interval4);
			      }
			   },5);
			   
			   var amount3=145;
			   var counter3 = 0;
			   var interval3 = setInterval(function(){
			      $('#city').text(counter3++);
			      if (counter3 > amount3){
			        clearInterval(interval3);
			      }
			   },5);
			   
			   
			});
		
		$(window).scroll(function() {

			if ($(this).scrollTop() > 250) {
				$('.top-bottom').fadeIn();

			} else {
				$('.top-bottom').fadeOut();
			}
		});
		$('.back-to-top').click(function(event) {
			event.preventDefault();
			$('html,body').animate({
				scrollTop : 0
			}, 1000);
			return false;
		});
		
				$('.back-to-bottom').click(function(event) {
			event.preventDefault();
			$('html,body').animate({
				scrollTop : 5000
			}, 1000);
			return false;
		});
		
var clicked=false;
			$('.hamburger').click(function(){
				
				if(clicked==false){
					$('#menuScreen1').css({'width':'50%','left':'0'},300);
					$('#menuScreen2').css({'width':'50%','left':'50%'},300);
					$('.lst').addClass('active');
					clicked=true;
				}
				else if(clicked==true){
					$('#menuScreen1').css({'width':'0%','left':'50%'},300);
					$('#menuScreen2').css({'width':'0%','left':'100%'},300);
					$('.lst').removeClass('active');
					clicked=false;
				}
				});
			
			

	</script>

</body>
</html>