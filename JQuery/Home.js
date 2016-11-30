
		jQuery(window).scroll(function() {
			if (jQuery(this).scrollTop() > 500) {
				if (jQuery('.emptitle').hasClass('visible') == false) {
					jQuery('.emptitle').stop().animate({
						left : '100px'

					}, 1000, function() {
						jQuery('.emptitle').addClass('visible')
					});
				}
			}

			if (jQuery('.doclogo').hasClass('visible') == false) {
				jQuery('.doclogo').stop().animate({
					right : '50px'

				}, 1000, function() {
					jQuery('.doclogo').addClass('visible')
				});

			}

			if (jQuery(this).scrollTop() > 1200) {
				if (jQuery('.service').hasClass('visible') == false) {
					jQuery('.service').stop().animate({
						top : '80px',
						opacity : '1'

					}, "slow", function() {
						jQuery('.service').addClass('visible')
					});

				}

				if (jQuery('.servlist').hasClass('visible') == false) {
					jQuery('.servlist').stop().animate({
						top : '250px',
						opacity : '1'

					}, "slow", function() {
						jQuery('.servlist').addClass('visible')
					});
				}
				if (jQuery('.ambu').hasClass('visible') == false) {
					jQuery('.ambu').stop().animate({
						top : '-50px',

					}, 2500, function() {
						jQuery('.ambu').addClass('visible')
					});
				}

			}
			if (jQuery(this).scrollTop() > 1500)
				$('.srv').addClass('fixed');
			else
				$('.srv').removeClass('fixed');

			if (jQuery(this).scrollTop() > 1800) {
				if (jQuery('.dept').hasClass('visible') == false) {
					jQuery('.dept').stop().animate({
						opacity : '1'

					}, 1500, function() {
						jQuery('.dept').addClass('visible')
					});

				}
			}

			if (jQuery(this).scrollTop() > 2500) {
				if (jQuery('.pointer').hasClass('visible') == false) {
					jQuery('.pointer').stop().animate({
						top : '425px'

					}, 1500, function() {
						jQuery('.pointer').addClass('visible')
					});
					jQuery('.triangle').stop().animate({
						top : '500px'
					}, 1500, function() {
						jQuery('.pointer').addClass('visible')
					});
				}
			}

		});

		$(document).ready(function() {

			$(window).scroll(function() {

				if ($(this).scrollTop() > 250) {
					jQuery('.back-to-top').fadeIn();

				} else {
					$('.back-to-top').fadeOut();
				}
			});
			$('.back-to-top').click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop : 0
				}, 1000);
				return false;

			});
			var clicked=false;
			$('.hamburger').click(function(){
				
				if(clicked==false){
					$('#menuScreen1').animate({'width':'50%','left':'0'},300);
					$('#menuScreen2').animate({'width':'50%','left':'50%'},300);
					$('.lst').addClass('active');
					clicked=true;
				}
				else if(clicked==true){
					$('#menuScreen1').animate({'width':'0%','left':'50%'},300);
					$('#menuScreen2').animate({'width':'0%','left':'100%'},300);
					$('.lst').removeClass('active');
					clicked=false;
				}
				});
			
			   
		        	$('.login').click(function(){
		        		$('.logSelect').animate({top:'160px'},"fast");
		        		$('.logPanel').css({'left':'100%','width':'0%'});
		        	});
		        	
		        	$('.cross').click(function(){
		        		$('.logSelect').animate({top:'-380px'},"fast");
		        		
		        	});
		       
		        	$('.click').click(function(){
		        		
		        		$('.logPanel').animate({'left':'0%','width':'100%'},"fast");
		        		var n=($(this).text());
		        		
		        		
		        		$('.logPanel label').text(n.slice(1).toUpperCase());
		        		
		        	});
	
						$('.back').click(function(){
		        		
		        		$('.logPanel').animate({'left':'100%','width':'0%'},"fast")
		        	});
						
						
						var toggleSlide = function(){
							  $(".navbar li.active").removeClass()
							   .next().add(".navbar li:first").last().addClass("active");
							}
							setInterval(toggleSlide, 6000);
		});
		
