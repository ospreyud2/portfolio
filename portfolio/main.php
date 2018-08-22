<!DOCTYPE html>
<html>
	<head>
		<?php
			$message = "";
			if($_SERVER['REQUEST_METHOD'] == "POST")
			{
				$subject = $_POST['fsubject'];
				$fname = $_POST['fname'];
				$femail = $_POST['femail'];
				$fmessage = $_POST['fmessage'];
				$cmsg = "";
				$cmsg = $cmsg . "Name: " . $fname . "\n";
				$cmsg = $cmsg . "Email: " . $femail . "\n";
				$cmsg = $cmsg . "Message: " . $fmessage;
				$to_mail = 'ospreyud2@gmail.com';
				mail($to_mail,$subject,$cmsg);
				$message = "$fname, mail sent!";
			}
		?>
		<link rel="stylesheet" href="./css/test.css" type="text/css">
		<link rel="stylesheet" href="./css/animate.css" type="text/css">
		<title>Abhishek || Painter/Artist</title>
		<script type="text/javascript" src="./scripts/jquery-3.3.1.min.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function() {
				var navinitpos=jQuery("#navigation").offset().top;
				jQuery("#navigation").wrap('<div class "nav-placeholder"></div>');
				jQuery(".nav-placeholder").height(jQuery("#navigation").outerHeight);

				jQuery(window).scroll(function () {
					
					var scrollpos=jQuery(window).scrollTop();
					
					
					if (scrollpos > navinitpos ) {
					
						jQuery("#navigation").addClass("fixed");
					}
					else {
						jQuery("#navigation").removeClass("fixed");
					}
				});
				
				$("#all").click(function(){
        			//alert("hello");
        			jQuery(".water-cat").removeClass("hideall");        			
        			jQuery(".sketch-cat").removeClass("hideall");
        			jQuery(".pastel-cat").removeClass("hideall");
        			
        			jQuery(".oil-cat").removeClass("hideall");
        			
        			
        	  	});
				$("#oil").click(function(){
        			//alert("hello");
        			jQuery(".water-cat").addClass("hideall");        			
        			jQuery(".sketch-cat").addClass("hideall");
        			jQuery(".pastel-cat").addClass("hideall");
        			
        			jQuery(".oil-cat").removeClass("hideall");
        			
        			
        	  });
        	  
        	  $("#pastel").click(function(){
        			//alert("hello");
        			jQuery(".water-cat").addClass("hideall");        			
        			jQuery(".sketch-cat").addClass("hideall");
        			jQuery(".oil-cat").addClass("hideall");
        			
        			jQuery(".pastel-cat").removeClass("hideall");
        			
        			
        	  });	
        	  
        	  $("#water").click(function(){
        			//alert("hello");        			
        			jQuery(".pastel-cat").addClass("hideall");
        			jQuery(".sketch-cat").addClass("hideall");
        			jQuery(".oil-cat").addClass("hideall");
        			
        			jQuery(".water-cat").removeClass("hideall");
        			
        			
        	  });	
        	  
        	  $("#sketch").click(function(){
        			//alert("hello");
        			jQuery(".water-cat").addClass("hideall");        			
        			jQuery(".pastel-cat").addClass("hideall");
        			jQuery(".oil-cat").addClass("hideall");
        			
        			jQuery(".sketch-cat").removeClass("hideall");
        			
        			
        	  });
 				
 			  $(".video-thumbnail a").click(function(e){
 			  	
 			  		e.preventDefault();
 			  		$("#player").attr("src", $(this).attr("href"));
 			  });
				
				
			});
		</script>
	</head>
	<body>
	
	<nav id="navigation">
		<div id="name">
			Abhishek
			<!--<img src="./images/name-logo.png" alt="">-->
		</div>
		<div id="menu">
			<ul>
				<li><a href="#about-me">About Me</a></li>
				<li><a href="#about-me">Skills</a></li>
				<li><a href="#experience">Experience</a></li>
				<li><a href="#portfolio">Portfolio</a></li>
				<li><a href="#services">Services</a></li>
				<li><a href="#blog">Blog</a></li>
				<li><a href="#contacta">Contact</a></li>
			</ul>
		</div>
	</nav>
	<div id="personal-image-wrapper">	
		<div id="personal-image" class="wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
			<div id="personal-message">
				<!--<p><h1>ABHISHEK LAKRA</h1></p>
				<p><h3>Painter/animation artist</h3></p>-->
			</div>
		</div>
	</div>
	
	<div id="about-me">
	
		<div class="container">
			
			<!--<div id="image-thumbnail" class="wow bounceInLeft" data-wow-delay="400ms" data-wow-duration="1000ms">-->
			<div id="image-thumbnail">
				<img src="./images/1-thumb.jpg" alt=""></img>
			</div>
			<div id="personal-about" class="wow fadeIn" data-wow-delay="500ms" data-wow-duration="1000ms">
				<h1><span class="highlight-heading">ABOUT</span> ME </h1>
				<div id="about-me-hr">
					<hr class="hr1">
					<hr class="hr2">
				</div>				
				
				
				<p class="sub-content">
				Lorem ducimus asperiores quia dolore asperiores Atque ut 
				modi eos molestiae quaerat praesentium Deserunt excepturi minima 
				quasi sit voluptatum? Quidem ipsam labore sequi velit accusantium!
				Ullam tempora modi eaque quam?
				</p>
				<div id="personal-info">
					<div id="info">
						<h3>INFO</h3>
						<p><span>Name:</span><span class="sub-content">Abishek lakra</span></p>
						<p><span>Birthday:</span><span class="sub-content">14 Nov</span><p>
						<p><span>Phone:</span><span class="sub-content">011-8919891</span></p>
						<p><span>Email:</span><span class="sub-content">abhi@gmail.com</span></p>
					</div>
					<div id="skills">
						<h3>SKILLS</h3>
						<p class="sub-content">Video Editing</p>
						<p class="sub-content">Animation</p>
						<p class="sub-content">Painting</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="experience">
		<div class="container">
					
			<h1 class="title">MY<span class="highlight-heading"> EXPERIENCE</span> </h1>
			<div class="short-hr">
					<hr class="hr1">
					<hr class="hr2">
				</div>
			
			<div class="title-description">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam.</p>
			</div>
			<div id="experience-wrapper">
				<div id="ex-1" class="wow flipInX" data-wow-duration="1000ms" data-wow-delay="450ms">
					<img src="./images/painting-icon.png" alt="">
					<h3>I Did Painting</h3>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing 
						elitsed eiusmod tempor enim minim veniam.
					</p>
				</div>
		
				<div id="ex-2" class="wow flipInX" data-wow-duration="1000ms" data-wow-delay="450ms">
					<img src="./images/animation-icon.png" alt="">
					<h3>I Did Movie Animaiton</h3>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing 
						elitsed eiusmod tempor enim minim veniam.
					</p>
				</div>
		
				<div id="ex-3" class="wow flipInX" data-wow-duration="1000ms" data-wow-delay="450ms">
					<img src="./images/video-editing-icon.png" alt="">
					<h3>I Did Video Editing</h3>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing 
						elitsed eiusmod tempor enim minim veniam.
					</p>
				</div>
			</div>
		</div>
	</div>
	
	<div id="portfolio">
	 <div class="container">
		<h1><span class="highlight-heading">MY</span> PORTFOLIO</h1>
			<div id="portfolio-menu">
				<nav>
					<ul class="sub-content">
						<li id="all">All</li>
						<li class="sub-content" id="oil">Oil</li>
						<li  id="pastel">Pastel</li>
						<li id="water">Water Color</li>
						<li id="sketch">Sketch</li>
					</ul>
				</nav>
			</div>
			
			<!--oil category-->
			<div id="gallery-wrapper">
				<div class="gallery oil-cat">
					<img src="./images/painting/oil/train_digital.jpg"  alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/oil/train_digital.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>
				<div class="gallery oil-cat">
					<img src="./images/painting/oil/train_oilpainting_1.jpg"  alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/oil/train_oilpainting_1.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>
				<div class="gallery oil-cat">
					<img src="./images/painting/oil/train_oilpainting.jpg"  alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/oil/train_oilpainting.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>
			
				<!--pastel category-->
				<div class="gallery pastel-cat">
					<img src="./images/painting/pastel/train_aclyric.jpg" alt="">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/pastel/train_aclyric.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>

				<!--water category-->
				<div class="gallery water-cat">
					<img src="./images/painting/water/re-journey.jpg" alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/water/re-journey.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>
				<div class="gallery water-cat">
					<img src="./images/painting/water/Brando_watercolor_1.jpg" alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/water/Brando_watercolor_1.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>
				<div class="gallery water-cat">	
			
					<img src="./images/painting/water/bullet_watercolor_1.jpg" alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/water/bullet_watercolor_1.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>
				<div class="gallery water-cat">	
			
					<img src="./images/painting/water/bullet_watercolor_2.jpg" alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/water/bullet_watercolor_2.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>
				<div class="gallery water-cat">	
			
					<img src="./images/painting/water/car_watercolor.jpg" alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/water/car_watercolor.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>

				<div class="gallery water-cat">	
			
					<img src="./images/painting/water/car_watercolor_1.jpg" alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/water/car_watercolor_1.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>
				<div class="gallery water-cat">	
			
					<img src="./images/painting/water/countryside_watercolor_1.jpg" alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/water/countryside_watercolor_1.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>
				<div class="gallery water-cat">	
			
					<img src="./images/painting/water/Finalgoodbuy_watercolor_1.jpg" alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/water/Finalgoodbuy_watercolor_1.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>

				<div class="gallery water-cat">	
			
					<img src="./images/painting/water/Handsup_watercolor_2.jpg" alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/water/Handsup_watercolor_2.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>
				<div class="gallery water-cat">	
			
					<img src="./images/painting/water/station_watercolor.jpg" alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/water/station_watercolor.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>
				<div class="gallery water-cat">	
			
					<img src="./images/painting/water/Still_vantage_watercolor.jpg" alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/water/Still_vantage_watercolor.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>
				<div class="gallery water-cat">	
			
					<img src="./images/painting/water/thegate_watercolor_1.jpg" alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/water/thegate_watercolor_1.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>
				<div class="gallery water-cat">	
			
					<img src="./images/painting/water/tractor_watercolor_3.jpg" alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/water/tractor_watercolor_3.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>
				<div class="gallery water-cat">	
			
					<img src="./images/painting/water/train_watercolor.jpg" alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/water/train_watercolor.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>
				<div class="gallery water-cat">	
			
					<img src="./images/painting/water/train_watercolor_1.jpg" alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/water/train_watercolor_1.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>
				<div class="gallery water-cat">	
			
					<img src="./images/painting/water/train_watercolor_2.jpg" alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/water/train_watercolor_2.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>
				<div class="gallery water-cat">	
			
					<img src="./images/painting/water/train_watercolor_3.jpg" alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/water/train_watercolor_3.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>
				<div class="gallery water-cat">	
			
					<img src="./images/painting/water/Star_watercolor_2.jpg" alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/water/Start_watercolor_2.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>
				<div class="gallery water-cat">	
			
					<img src="./images/painting/water/mighty_chitrkoot.jpg" alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/water/mighty_chitrkoot.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>
					<div class="gallery water-cat">	
			
					<img src="./images/painting/water/painting_chitrkoot.jpg" alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/water/painting_chitrkoot.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>
					<div class="gallery water-cat">	
			
					<img src="./images/painting/water/painting_chitrkoot_v01.jpg" alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/water/painting_chitrkoot_v01.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>
				<div class="gallery water-cat">	
			
					<img src="./images/painting/water/royal.jpg" alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/water/royal.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>
				<div class="gallery water-cat">	
			
					<img src="./images/painting/water/T800.jpg" alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/water/T800.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>
				<div class="gallery water-cat">	
			
					<img src="./images/painting/water/the_nomadic.jpg" alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/water/the_nomadic.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>

				<!--sketch category-->
				<div class="gallery sketch-cat">	
			
					<img src="./images/painting/sketch/Aprilla_sketch.jpg" alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/sketch/Aprilla_sketch.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>
				<div class="gallery sketch-cat">	
			
					<img src="./images/painting/sketch/Arnold_sketch.jpg" alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/sketch/Arnold_sketch.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>
				<div class="gallery sketch-cat">	
			
					<img src="./images/painting/sketch/car_sketch.jpg" alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/sketch/car_sketch.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>
				<div class="gallery sketch-cat">	
			
					<img src="./images/painting/sketch/Disaster_sketch.jpg" alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/sketch/Disaster_sketch.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>
				<div class="gallery sketch-cat">	
			
					<img src="./images/painting/sketch/Distopia_sketch.jpg" alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/sketch/Distopia_sketch.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>
				<div class="gallery sketch-cat">	
			
					<img src="./images/painting/sketch/Flyinghood_sketch.jpg" alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/sketch/Flyinghood_sketch.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>
				<div class="gallery sketch-cat">	
			
					<img src="./images/painting/sketch/Godfather_sketch.jpg" alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/sketch/Godfather_sketch.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>
				<div class="gallery sketch-cat">	
			
					<img src="./images/painting/sketch/Horse_sketch.jpg" alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/sketch/Horse_sketch.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>
					<div class="gallery sketch-cat">	
			
					<img src="./images/painting/sketch/lifeled_sketch.jpg" alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/sketch/lifeled_sketch.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>
					<div class="gallery sketch-cat">	
			
					<img src="./images/painting/sketch/lone_sketch.jpg" alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/sketch/lone_sketch.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>
				<div class="gallery sketch-cat">	
			
					<img src="./images/painting/sketch/Pirates_sketch.jpg" alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/sketch/Pirates_sketch.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>
				<div class="gallery sketch-cat">	
			
					<img src="./images/painting/sketch/RD350_sketch.jpg" alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/sketch/RD350_sketch.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>
					<div class="gallery sketch-cat">	
			
					<img src="./images/painting/sketch/simplelife_sketch.jpg" alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/sketch/simplelife_sketch.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>
					<div class="gallery sketch-cat">	
			
					<img src="./images/painting/sketch/Starwars_sketch.jpg" alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/sketch/Starwars_sketch.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>
				<div class="gallery sketch-cat">	
			
					<img src="./images/painting/sketch/ZERO_sketch.jpg" alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/sketch/ZERO_sketch.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>

				<div class="gallery sketch-cat">	
			
					<img src="./images/painting/sketch/Cliff_sketch.jpg" alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/sketch/Cliff_sketch.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>

				<div class="gallery sketch-cat">	
			
					<img src="./images/painting/sketch/train_sketch.jpg" alt="" class="wow fadeInLeft" data-wow-delay="600ms">
			
					<div class="cover">
						<div class="cover-wrapper">
							<p>View Work</p>
							<a href="./images/painting/sketch/train_sketch.jpg" target="_blank"><img src="./icon/zoom-icon.png" alt="" style="width: 60px;height: 60px;"></a>
				
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div id="services">
	 <div class="container">
			
			<div id="service-title">
			<h1>WHAT <span class="highlight-heading">I </span>DO</h1>
				<div class="short-hr">
					<hr class="hr1">
					<hr class="hr2">
				</div>
			</div>
			
			
				<div id="service-wrapper">
					<div id="service-video-editing" class="wow flipInX" data-wow-delay="600ms" data-wow-duration="1000ms">
						<img src="./images/video-editing-icon.png" alt="">
						<h3>Video Editing</h3>
						<p>
							Amet illo quos cumque reiciendis vitae 
							dolorum Quas delectus corporis nihil omnis
							nam labore excepturi error.
						</p>
					</div>
					<div id="service-painting" class="wow flipInX" data-wow-delay="600ms" data-wow-duration="1000ms">
						<img src="./images/painting-icon.png" alt="">
						<h3>Painting</h3>
						<p>
							Amet illo quos cumque reiciendis vitae 
							dolorum Quas delectus corporis nihil omnis
							nam labore excepturi error.
						</p>
					</div>
					<div id="service-graphics-animation" class="wow flipInX" data-wow-delay="600ms" data-wow-duration="1000ms">
						<img src="./images/animation-icon.png" alt="">
						<h3>Graphics And Animation</h3>
						<p>
							Amet illo quos cumque reiciendis vitae 
							dolorum Quas delectus corporis nihil omnis
							nam labore excepturi error.
						</p>
					</div>
				</div>
		
	  </div>
	</div>
	
	<div id="blog">
	  <div class="container">
	  		<h1 class="title"> MY <span class="highlight-heading">ART</span> BLOG </h1>
	  			<div class="short-hr">
					<hr class="hr1">
					<hr class="hr2">
				</div>
		<div id="blog-title" class="title-description">
			<p class="sub-content">latestpost: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
		</div>
		<div id="blog-wrapper">
			<div id="blog-1" class="wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1000ms">
				<img src="./images//blog-post/mighty_chitrkoot.jpg" alt="">
				<h2 class="blog-h2">August Post </h2>
				<p class="sub-content">Summary: Lorem ipsum dolor sit amet, consectetur 
				adipisicing elit. Ipsam ipsum maxime recusandae 
				repudiandae similique. 
				</p>
			</div>
			
			<div id="blog-2" class="wow fadeInDown" data-wow-delay="500ms" data-wow-duration="1000ms">
				<img src="./images/blog-post/painting_chitrkoot.jpg" alt="">
				<h2 class="blog-h2">August Post</h2>
				<p class="sub-content">Summary: Lorem ipsum dolor sit amet, consectetur 
				adipisicing elit. Ipsam ipsum maxime recusandae 
				repudiandae similique. 
				</p>
			</div>
			
			<div id="blog-3" class="wow fadeInRight" data-wow-delay="500ms" data-wow-duration="1000ms">
				<img src="./images/blog-post/painting_chitrkoot_v01.jpg" alt="">
				<h2 class="blog-h2">August Post</h2>
				<p class="sub-content">Summary: Lorem ipsum dolor sit amet, consectetur 
				adipisicing elit. Ipsam ipsum maxime recusandae 
				repudiandae similique. 
				</p>
			</div>
		</div>
	  </div>	
	</div>
	
	
	<div id="videos">
	  <div class="container">
	  		<h1 class="title">MY<span class="highlight-heading"> VIDEO </span>GALLERY</h1>
			<div class="short-hr">
					<hr class="hr1">
					<hr class="hr2">
			</div>
			<div class="title-description">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam.</p>
			</div>
			
			
	  		<div id="watch-wrapper">
	  			<iframe width="1155" height="600" src="https://www.youtube.com/embed/S7yi1YicNV0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	  		</div>
	  		
	  		<div id="thumbnail-title">
	  			<p><h3>Videos</h3></p>
	  		</div>
	  		<!--using youtube video embedded links.other links dont work-->
	  		<div id="thumbnail-wrapper">
	  			<!--painting aeroplane-->
	  			<div class="video-thumbnail" style="background: url(./images/t1.png);background-size: cover;"  >
					<a  href="https://www.youtube.com/embed/1OdDOMFvL0w" target="player"><img  src="./images/play-icon.png" alt=""></a>
	  			</div>
	  			
	  			<!--water color painting rey-->
	  			<div class="video-thumbnail" style="background: url(./images/t2.png);background-size: cover;"  >
					<a  href="https://www.youtube.com/embed/wqccwKrPLIw" target="player"><img src="./images/play-icon.png" alt=""></a>
	  			</div>
	  			
	  			<!--painting chitrkoot-->
	  			<div class="video-thumbnail" style="background: url(./images/t3.png);background-size: cover;"  >
					<a  href="https://www.youtube.com/embed/S7yi1YicNV0" target="player"><img id="vid-1" src="./images/play-icon.png" alt=""></a>
	  			</div>
	  			
	  			
	  		</div>
	  		
	  		
	  	

	  		
	  </div>
	</div>	

	<div id="contacta">
	  <div class="container" >
	  		<h1 class="title"> WRITE <span class="highlight-heading"> TO</span> ME</h1>
	  			<div class="short-hr">
					<hr class="hr1">
					<hr class="hr2">
				</div>
	  		<div class="title-description">
	  			<p  id="write-to-me-desc" class="sub-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
	  		</div>
	  		<form id="contact" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	  			<input name="fname" class="ibox wow bounceInLeft" placeholder="Name"  data-wow-delay="300ms" data-wow-duration="1000ms" required>
	  			<br>
	  			<input name="femail" class="ibox wow bounceInLeft" placeholder="Email" type="email"  data-wow-delay="350ms" 
data-wow-duration="1000ms" required><br>
	  			<input name="fsubject" class="ibox wow bounceInLeft" placeholder="Subject" data-wow-delay="400ms" data-wow-duration="1000ms" required><br>
	  			<textarea name="fmessage" id="message-box" class="wow bounceInLeft" placeholder="" data-wow-delay="450ms" data-wow-duration="1000ms" required></textarea><br>
	  			<button id="submit" class="ibox wow bounceInLeft" data-wow-delay="500ms" data-wow-duration="1000ms">Submit</button>
	  			<p id="fmessage"><?php echo $message; ?></p>
	  		</form>
		</div>
		
		<div id="div1">
			<div class="contact-content" id="address-contact">
				<img src="./images/address-icon.png" alt="">
				<h2 class="contact-h2">Address</h2>
				<div class="short-hr">
					<hr class="hr1">
					<hr class="hr2">
				</div>
				<p class="contact-sub"> 46 k.m road,<br>
					near mary amrit bagh
					colony,<br>ranchi
				</p>
			</div>
			<div class="contact-content">
				<img src="./images/email-icon.png" alt="">
				<h2 class="contact-h2">Email</h2>
				<div class="short-hr">
					<hr class="hr1">
					<hr class="hr2">
				</div>
				<p class="contact-sub"> abhisheklakra@gmail.com
				</p>
			</div>
			<div class="contact-content">
				<img src="./images/phone-icon.png" alt="">
				<h2 class="contact-h2">Phone</h2>
				<div class="short-hr">
					<hr class="hr1">
					<hr class="hr2">
				</div>
				<p class="contact-sub"> 97078392922
				</p>
			</div>
			<div class="contact-content" id="portfolio-contact">
				<img src="./images/portfolio-icon.png" alt="">
				<h2 class="contact-h2">Portfolio</h2>
				<div class="short-hr">
					<hr class="hr1">
					<hr class="hr2">
				</div>
				<p class="contact-sub"> www.abhishek.info
				</p>
			</div>
		</div>
		
		<div id="div2">
			<div id="div2-wrapper">
				<div id="copyright">Copyright @ 2018 Ritu Raj Lakra</div>
				<div id="social-media">
					<img src="./images/facebook-icon-small.png" alt="">
					<img src="./images/twitter-icon-small.png" alt="">
					<img src="./images/pinterest-icon-small.png" alt="">
					<img src="./images/Instagram-icon-small.png" alt="">
				</div>
			</div>
		</div>	
   </div>
		
	<script src="./sdf.js"></script>
    <script>
          new WOW().init();
    </script>
	</body>
</html>
