<!DOCTYPE html>
<html>
	<head>
		<?php
			$message="";
			if($_SERVER['REQUEST_METHOD'] == "POST")
			{
				$fname=$_POST['fname'];
				$femail=$_POST['femail'];
				$fsubject=$_POST['fsubject'];
				$fmessage=$_POST['fmessage'];
				$cmsg="";
				$cmsg=$cmsg . "Name: " . $fname . "\n";
				$cmsg=$cmsg . "Email Address: " . $femail . "\n";
				$cmsg=$cmsg . "Message: " . $fmessage . "\n";
				$to_mail="ospreyud2@gmail.com";
				mail($to_mail,$fsubject,$cmsg);
				$message="Mail sent sucessfully!";
			}
		?>
		<title>Portfolio Website</title>
		<meta name="viewport" content="width=device-width initial-scale=1.0">
		<script src="http://code.jquery.com/jquery-1.7.0.min.js"></script><!-- script required for changing number feature -->
		<script src="jquery.color.min.js"></script> <!-- script required for changing number feature -->
		<script src="./scripts/jquery.animateNumber.min.js"></script> <!-- script required for changing number feature -->
		
		<script>
			var $j = jQuery.noConflict();
		</script>

		<script type="text/javascript" src="./scripts/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="./scripts/jquery-3.3.1.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

		<link rel="stylesheet" href="./css/lightbox.min.css" type="text/css"><!-- image gallery with lightbox css file-->
		<link rel="stylesheet" href="./css/styles.css" type="text/css"><!-- main styling css file -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- font awesome css file -->

		<script type="text/javascript">
            $(window).load(function(){
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200)
                    {
                    }
                };
                xhttp.open("GET", "./log.php", true);
                xhttp.send();

                $("body").removeClass("stop-scrolling");
                $(".before-load").removeClass("flex-center");
                $(".before-load").css("height", "0px");
                $(".before-load").css("display", "none");
               	$(".after-load").css("display", "block");
			});
		</script>

		<script type="text/javascript">
			$(document).ready(function() {
				var count=1;
				var navinitpos=jQuery("#nav-desktop").offset().top;
			
				
				jQuery(window).scroll(function () {
					
					var scrollpos=jQuery(window).scrollTop();
					
					// $("#scrollpos").text(scrollpos);
					if(scrollpos >= 2223)
					{
						// alert("code active");
					
						if(count == 1)
						{
							$j('#ach-uploaded').animateNumber({number: 991},4000);
							$j('#ach-paintings').animateNumber({number: 65},4000);
							$j('#ach-videos').animateNumber({number: 9},4000);
							$j('#ach-followers').animateNumber({number: 110},4000);
							count++;

						}
					}
					
					if (scrollpos > navinitpos ) {
					
						jQuery("#nav-desktop").css("background-color","#25201f");
					}
					else {
						jQuery("#nav-desktop").css("background-color","");
					}
				});
				$(".play-icon").click(function(){
					
					$('html, body').animate({scrollTop: $("#player").offset().top}, 500);
				});

				$("#toggle").click(function(){
					$(".nav-mob-menu").toggle();
				});
				
				$("#all").click(function(){
        			//alert("hello all");
        			jQuery(".water-cat").removeClass("hideall");        			
        			jQuery(".sketch-cat").removeClass("hideall");
        			jQuery(".pastel-cat").removeClass("hideall");
        			
        			jQuery(".oil-cat").removeClass("hideall");
        			
        			
        	  	});
				$("#oil").click(function(){
        			//alert("hello oil");
        			jQuery(".water-cat").addClass("hideall");        			
        			jQuery(".sketch-cat").addClass("hideall");
        			jQuery(".pastel-cat").addClass("hideall");
        			
        			jQuery(".oil-cat").removeClass("hideall");
        			
        			
        	  });
        	  
        	  $("#pastel").click(function(){
        			//alert("hello pastel");
        			jQuery(".water-cat").addClass("hideall");        			
        			jQuery(".sketch-cat").addClass("hideall");
        			jQuery(".oil-cat").addClass("hideall");
        			
        			jQuery(".pastel-cat").removeClass("hideall");
        			
        			
        	  });	
        	  
        	  $("#water").click(function(){
        			//alert("hello water");        			
        			jQuery(".pastel-cat").addClass("hideall");
        			jQuery(".sketch-cat").addClass("hideall");
        			jQuery(".oil-cat").addClass("hideall");
        			
        			jQuery(".water-cat").removeClass("hideall");
        			
        			
        	  });	
        	  
        	  $("#sketch").click(function(){
        			//alert("hello sketch");
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
	<body class="">
		<div class="before-load flex-center">
			<img src="./images/loading.gif">
		</div>
		<div class="after-load">
			<!----------------- NAVIGATION MENU ---------------->
			<nav id="nav-mobile" class="clearfix wrapper dark-bg white-heading">
				<div class="nav-container clearfix center">
					<div id="logo">
						<!-- <img src="./images/logo.png"> -->
						<img src="./images/logo-light.png">
					</div>
					<div id="navigation-icon-wrapper">
						<label for="toggle" style="font-size: 26px;">&#9776</label>
						<input type="checkbox" id="toggle"/>
					</div>
				</div>
				<div class="nav-mob-menu f1">
					<a id="first-menu" href="#about-me">About</a>
					<a href="#experience">Experience</a>
					<a href="#image-gallery">Portfolio</a>
					<a href="#services">Services</a>
					<a href="#blog">Blog</a>
					<a href="#contact">Contact</a>
				</div>
			</nav>
			<nav id="nav-desktop" class="clearfix wrapper white-heading">
				<div class="nav-container clearfix center">
					<div id="logo">
						<!-- <img src="./images/logo.png"> -->
						<img src="./images/logo-light.png">
					</div>
					<div id="nav-desk-menu" class="f1" >
						<ul>
							<li><a href="#about-me">About</a></li>
							<li><a href="#experience">Experience</a></li>
							<li><a href="#image-gallery">Portfolio</a></li>
							<li><a href="#services">Services</a></li>
							<li><a href="#blog">Blog</a></li>
							<li><a href="#contact">Contact</a></li>
							<!-- <span id="scrollpos">0</span> -->
						</ul>
					</div>
				</div>
			</nav>

			<!----------------- BANNER ---------------->
			<div id="banner" class="clearfix">
				<div id="banner-cover">	
					<h1 class="f2">Abhishek</h1>
					<!-- <h2>Painter/Artist</h2> -->
					<h3 class="f1">Painter/Artist</h3>
					<h3 class="f1">Painting with pride and passion for 15 years...enjoy viewing</h3>
					<div class="slider-button f2">
						<a class="slide-btn" href="#contact">CONTACT ME</a>
		            </div>
		        </div>
			</div>

			<!----------------- ABOUT ME ---------------->
			<div class="wrapper clearfix">
				<div id="about-me" class="container clearfix text-color">
					<div class="about-me-inner-container">	
						<div id="profile-image-desktop">
							<img  src="./images/profile-pic.jpg">
						</div>
						<div id="profile-image-mobile">
							<img src="./images/profile-pic-mob.png">
						</div>
						<div id="info">
							<div class="heading-title">
								<h1><span class="colored-heading">ABOUT</span><span class="dark-heading"> ME</span></h1>
								<hr class="hr1 colored-heading">
								<hr class="hr2 dark-heading">
							</div>
							<p class="about-me-heading f2">
								I began drawing and painting as a child growing up.I was compelled to create my impressions of the things i saw arround me everyday.My work evoloved as i grow older and became more focused on the interraction between color,texture and contrast.
							</p>
							<p class="about-me-heading f2">
								Hi there! I'm Abhishek...I'm a painter,videographer and animation artist.Painting is my passion and iv'e been doing it passionately since 15 years.Besides painting i do have experience in video editing and animation works.You can always reach me at "abhisheklakra@gmail.com".
							</p>
							<p class="about-me-heading f2">
								I paint when i can between work and other hobbies and hiatuses of varying lengths,with a tendency to produce more ruined canvases than finished paintings.
							</p>
							<p class="about-me-heading f2">
								So, with all that said, I want to let you know that in case any of you would like to hire me – I am all yours! I am up for creating any kind of an artwork for either a movie poster, a video game or a brand identity… Oh, and by the way, I also love to write my blog entries here! That’s because passing the knowledge on to the next generations of graphic artists is what I have always dreamt of doing!
							</p>
							<p class="about-me-heading-end f2">
								Abhishek 25th march,2018
							</p>
						</div>
					</div>
				</div>
			</div>

			<!----------------- EXPERIENCE ---------------->
			<div class="wrapper clearfix b-img-2">
				<div class="semi-transparent">
					<div id="experience" class="container clearfix">
						<div class="heading-title">
							<h1><span>MY</span><span class="colored-heading"> EXPERIENCE</span></h1>
							<hr class="hr1 colored-heading center">
							<hr class="hr2 center">
						</div>
						<p class="heading-description f1">A brief note about my experience level in various fields</p>
						<div class="boxes-wrapper clearfix center f1">
							<div class="box-outer">
								<div class="box">
									<img class="box-icon" src="./images/video-editing-icon.png">
									<h3>Editing</h3>
									<p>Amet illo quos cumque reiciendis vitae dolorum Quas delectus corporis nihil omnis nam labore excepturi error. </p>
								</div>
							</div>
							<div class="box-outer">
								<div class="box mid-box">
									<img class="box-icon" src="./images/painting-icon.png">
									<h3>Painting</h3>
									<p>Amet illo quos cumque reiciendis vitae dolorum Quas delectus corporis nihil omnis nam labore excepturi error. </p>
								</div>
							</div>
							<div class="box-outer">
								<div class="box">
									<img class="box-icon" src="./images/animation-icon.png">
									<h3>Animation</h3>
									<p>Amet illo quos cumque reiciendis vitae dolorum Quas delectus corporis nihil omnis nam labore excepturi error. </p>
								</div>
							</div>
						</div>
					</div>
				</div>		
			</div>

				<!----------------- BLOG ---------------->
			<div class="wrapper clearfix text-color">
				<div id="blog" class="container clearfix">
					<div class="heading-title">
						<h1><span class="dark-heading">MY</span><span class="colored-heading"> ART</span><span class="dark-heading"> BLOG</span></h1>
						<hr class="hr1 colored-heading center">
						<hr class="hr2 center">
					</div>
					<p class="heading-description f1">Here's a selection of my recently done artwork/paintings</p>
					<div class="boxes-wrapper clearfix center">
						<div class="blog-outer">
							<div class="blog-box">
								<img class="blog-img" src="./images//blog-post/mighty_chitrkoot.jpg" alt="">
								<div class="blog-date" style="width: 80px;height: 40px;position: relative;;top: -44px;">
									<div class="f1" style="width: 50%;height: 40px;background-color: #fe4918;color: white;float: left;padding-top: 10px">
										Wed
									</div>
									<div class="f1" style="width: 50%;height: 40px;background-color:white;float: left;padding-top: 10px;">
										19
									</div>
								</div>
								<h2>January Post</h2>
								<p class="f1">Water color painting done right infront of the India's biggest waterfall "Chitrakoot Waterfall".</p>

							</div>
						</div>
						<div class="blog-outer">
							<div class="blog-box">
								<img class="blog-img" src="./images//blog-post/train_aclyric.jpg" alt="">
								<div class="blog-date" style="width: 80px;height: 40px;position: relative;;top: -44px;">
									<div class="f1" style="width: 50%;height: 40px;background-color: #fe4918;color: white;float: left;padding-top: 10px">
										Fri
									</div>
									<div class="f1" style="width: 50%;height: 40px;background-color:white;float: left;padding-top: 10px;">
										08
									</div>
								</div>
								<h2>August Post</h2>
								<p class="f1">Trains are my favourite theme in painting and this one is a unquie artwork of a steam engine with some great details of colors.</p>
							</div>
						</div>
						<div class="blog-outer">
							<div class="blog-box">
								<img class="blog-img" src="./images//blog-post/the_nomadic.jpg" alt="">
								<div class="blog-date" style="width: 80px;height: 40px;position: relative;;top: -44px;">
									<div class="f1" style="width: 50%;height: 40px;background-color: #fe4918;color: white;float: left;padding-top: 10px">
										Mon
									</div>
									<div class="f1" style="width: 50%;height: 40px;background-color:white;float: left;padding-top: 10px;">
										27
									</div>
								</div>
								<h2>September Post</h2>
								<p class="f1">Another steam engine painted in water color titled "The Nomadic",This has it's own simplicity and uniqueness to it.</p>
							</div>
						</div>
						
					</div>
				</div>
			</div>

			


			<!----------------- ACHIEVEMENTS ---------------->
			<div id="achievements" class="wrapper clearfix  b-img-3 f1" style="background-color: green;">
				<div class="semi-transparent flex-container mob-display">
					<div class="ach-box flex-center">
						<i class="fa fa-cloud-upload nomartop nomartop-medium ach-icon"></i>
						<div class="timer" id="ach-up" id="item1" data-to="991" data-speed="5000"><span id="ach-uploaded">8</span></div>
						<hr>
						<h5>Files Uploaded</h5>
					</div>
					<div class="ach-box flex-center">
						<i class="fa fa-check nomartop-medium"></i>
						<div class="timer" id="ach-pa" data-to="65" data-speed="5000"><span id="ach-paintings">4</span></div>
						<hr>
						<h5>Paintings</h5>
					</div>
					<div class="ach-box flex-center">
						<i class="fa fa-video-camera"></i>
						<div class="timer" id="ach-vi" data-to="09" data-speed="5000"><span id="ach-videos">1</span></div>
						<hr>
						<h5>Videos edited</h5>
					</div>
					<div class="ach-box flex-center">
						<i class="fa fa-male"></i>
						<div class="timer" id="ach-fl" data-to="187" data-speed="5000"><span id="ach-followers">10</span></div>
						<hr>
						<h5>Followers</h5>
					</div>
					
				</div>

			</div>

			<!----------------- GALLERY ---------------->
				<div class="wrapper clearfix">
				<div id="image-gallery" class="container clearfix">
					<h1><span class="colored-heading">MY</span><span> PORFOLIO</span></h1>
					<ul class="heading-description text-color">
						<li id="all">All</li>
						<li id="oil">Oil</li>
						<li id="pastel">Pastel</li>
						<li id="water">Water Color</li>
						<li id="sketch">Sketch</li>
					</ul>
					<!--oil category-->
					
					<div class="flex-box">
						<div class="gallery oil-cat">
						<a href="./images/painting/water/Still_vantage_watercolor.jpg" data-lightbox="gallery"><img class="gallery-img" src="./images/painting/compressed/still_vantage_watercolor.jpg"  alt="" class="wow fadeInLeft" data-wow-delay="600ms"></a>
						
						</div>
						<div class="gallery oil-cat">
							<a href="./images/painting/oil/train_oilpainting_1.jpg" data-lightbox="gallery"><img class="gallery-img" src="./images/painting/compressed/train_oilpainting_1.jpg"  alt="" class="wow fadeInLeft" data-wow-delay="600ms"></a>

						</div>
						<div class="gallery oil-cat">
							<a href="./images/painting/water/train_watercolor.jpg" data-lightbox="gallery"><img class="gallery-img" src="./images/painting/compressed/train_watercolor.jpg"  alt="" class="wow fadeInLeft" data-wow-delay="600ms"></a>

						</div>
					
						<div class="gallery oil-cat">
							<a href="./images/painting/water/station_watercolor.jpg" data-lightbox="gallery"><img class="gallery-img" src="./images/painting/compressed/station_watercolor.jpg"  alt="" class="wow fadeInLeft" data-wow-delay="600ms"></a>

						</div>
						<div class="gallery oil-cat">
							<a href="./images/painting/water/Finalgoodbuy_watercolor_1.jpg" data-lightbox="gallery"><img class="gallery-img" src="./images/painting/compressed/finalgoodbuy_watercolor_1.jpg"  alt="" class="wow fadeInLeft" data-wow-delay="600ms"></a>

						</div>
						<div class="gallery oil-cat">
							<a href="./images/painting/water/countryside_watercolor_1.jpg" data-lightbox="gallery"><img class="gallery-img" src="./images/painting/compressed/countryside_watercolor_1.jpg"  alt="" class="wow fadeInLeft" data-wow-delay="600ms"></a>

						</div>
						<!--water-->
						<div class="gallery water-cat">
							<a href="./images/painting/water/car_watercolor.jpg" data-lightbox="gallery"><img class="gallery-img" src="./images/painting/compressed/car_watercolor.jpg"  alt="" class="wow fadeInLeft" data-wow-delay="600ms"></a>

						</div>
						<div class="gallery water-cat">
							<a href="./images/painting/water/tractor_watercolor_3.jpg" data-lightbox="gallery"><img class="gallery-img" src="./images/painting/compressed/tractor_watercolor_3.jpg"  alt="" class="wow fadeInLeft" data-wow-delay="600ms"></a>

						</div>
						<div class="gallery water-cat">
							<a href="./images/painting/water/Brando_watercolor_1.jpg" data-lightbox="gallery"><img class="gallery-img" src="./images/painting/compressed/Brando_watercolor_1.jpg"  alt="" class="wow fadeInLeft" data-wow-delay="600ms"></a>

						</div>
						<div class="gallery water-cat">
							<a href="./images/painting/water/bullet_watercolor_1.jpg" data-lightbox="gallery"><img class="gallery-img" src="./images/painting/compressed/bullet_watercolor_1.jpg"  alt="" class="wow fadeInLeft" data-wow-delay="600ms"></a>

						</div>
						<div class="gallery water-cat">
							<a href="./images/painting/water/bullet_watercolor_2.jpg" data-lightbox="gallery"><img class="gallery-img" src="./images/painting/compressed/bullet_watercolor_2.jpg"  alt="" class="wow fadeInLeft" data-wow-delay="600ms"></a>

						</div>
						<!-- sketch -->
						<div class="gallery sketch-cat">
							<a href="./images/painting/sketch/lone_sketch.jpg" data-lightbox="gallery"><img class="gallery-img" src="./images/painting/compressed/lone_sketch.jpg"  alt="" class="wow fadeInLeft" data-wow-delay="600ms"></a>

						</div>
						<div class="gallery sketch-cat">
							<a href="./images/painting/sketch/car_sketch.jpg" data-lightbox="gallery"><img class="gallery-img" src="./images/painting/compressed/car_sketch.jpg"  alt="" class="wow fadeInLeft" data-wow-delay="600ms"></a>

						</div>
						<div class="gallery sketch-cat">
							<a href="./images/painting/sketch/Arnold_sketch.jpg" data-lightbox="gallery"><img class="gallery-img" src="./images/painting/compressed/Arnold_sketch.jpg"  alt="" class="wow fadeInLeft" data-wow-delay="600ms"></a>

						</div>
						<div class="gallery water-cat">
							<a href="./images/painting/sketch/Aprilla_sketch.jpg" data-lightbox="gallery"><img class="gallery-img" src="./images/painting/compressed/Aprilla_sketch.jpg"  alt="" class="wow fadeInLeft" data-wow-delay="600ms"></a>

						</div>
					</div>
					<button class="view-more f2">View More</button>
							
				</div>
			</div>


			<!----------------- SERVICES ---------------->
			<div class="heading-title services-head flex-center white-bg clearfix">
							<h1><span>WHAT</span><span class="colored-heading"> I</span><span> DO</span></h1>
							<hr class="hr1 center colored-heading">
							<hr class="hr2 center white-heading">
							<p class="heading-description f1">A brief note on what i do as a professional or an hobbyist</p>
			</div>
			<div class="wrapper dark-bg clearfix">
		
					<div id="services" class="clearfix">
						
						<div class="boxes-wrapper-max clearfix center f1">
							<img class="box-outer-serv box-outer-serv-image" src="./images/l1.jpg">
							<div class="box-outer-serv box-outer-serv-content">
								<div class="arrow leftarrow">
								</div>
								<div class="box-serv">
									<img class="box-icon" src="./images/painting-icon.png">
									<h3 style="font-size: 21px;">Painting</h3>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam.</p>
									<p>No wonder selecting an appropriate transportation vehicle, be it a truck or a van, is a highly important task. In this article James Roth, the Head of our Logistics Department, will unveil some of the key principles you should know about when selecting a vehicle for transportation purposes.</p>
									<a style="text-decoration: none;color:white;padding: 5px;border:1px solid white;margin-top: 10px;display: block;width: 120px;margin-left: auto;margin-right: auto;">Read More</a>
								</div>
							</div>

							<img src="./images/l3.jpg" class="box-outer-serv box-outer-serv-image">
							<div class="box-outer-serv box-outer-serv-content mid-mob">
								<div class="arrow leftarrow">
								</div>
								<div class="box-serv mid-box">
									<img class="box-icon" src="./images/animation-icon.png">
									<h3 style="font-size: 21px;">Animation</h3>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam.</p>
									<p>No wonder selecting an appropriate transportation vehicle, be it a truck or a van, is a highly important task. In this article James Roth, the Head of our Logistics Department, will unveil some of the key principles you should know about when selecting a vehicle for transportation purposes.</p>
									<a style="text-decoration: none;color:white;padding: 5px;border:1px solid white;margin-top: 10px;display: block;width: 120px;margin-left: auto;margin-right: auto;">Read More</a>
								</div>
							</div>
							
							<div class="box-outer-serv">
								<div class="box-serv box-outer-serv-content">
									<div class="arrow rightarrow">
									</div>
									<img class="box-icon" src="./images/video-editing-icon.png">
									<h3 style="font-size: 21px;">Editing</h3>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam.</p>
									<p>No wonder selecting an appropriate transportation vehicle, be it a truck or a van, is a highly important task. In this article James Roth, the Head of our Logistics Department, will unveil some of the key principles you should know about when selecting a vehicle for transportation purposes.</p>
									<a style="text-decoration: none;color:white;padding: 5px;border:1px solid white;margin-top: 10px;display: block;width: 120px;margin-left: auto;margin-right: auto;">Read More</a>
								</div>
							</div>
							<img src="./images/l2.jpg" class="box-outer-serv box-outer-serv-image">
						</div>
					</div>
				</div>



			
			

			

			
			<!----------------- VIDEO BLOG ------------------>
			<div class="wrapper clearfix text-color">
				<div id="blog" class="container clearfix">
					<div class="heading-title">
						<h1><span class="dark-heading">MY</span><span class="colored-heading"> VIDEO</span><span class="dark-heading"> BLOG</span></h1>
						<hr class="hr1 colored-heading center">
						<hr class="hr2 center">
					</div>
					<p class="heading-description f1">Have a look at my recently done painting video editings</p>
					<div class="boxes-wrapper clearfix center">
						<div class="blog-outer">
							<div class="blog-box">
								<img class="blog-img" src="./images/video-blog-post/chitrkoot.jpg" alt="">
								<div class="blog-date" style="width: 80px;height: 40px;position: relative;;top: -44px;">
									<div class="f1" style="width: 50%;height: 40px;background-color: #fe4918;color: white;float: left;padding-top: 10px">
										Fri
									</div>
									<div class="f1" style="width: 50%;height: 40px;background-color:white;float: left;padding-top: 10px;">
										27
									</div>
								</div>
								<h2>July Post</h2>
								<p class="f1">A travel and art journal video adoring one of the biggest waterfall in India "Mighty Chitrakoot" and also important info about chitrakoot waterfall.</p>

							</div>
						</div>
						<div class="blog-outer">
							<div class="blog-box">
								<img class="blog-img" src="./images/video-blog-post/aeroplane.jpg" alt="">
								<div class="blog-date" style="width: 80px;height: 40px;position: relative;;top: -44px;">
									<div class="f1" style="width: 50%;height: 40px;background-color: #fe4918;color: white;float: left;padding-top: 10px">
										Wed
									</div>
									<div class="f1" style="width: 50%;height: 40px;background-color:white;float: left;padding-top: 10px;">
										15
									</div>
								</div>
								<h2>August Post</h2>
								<p class="f1">Painting of one of the greatest plane of world war 2 "The Avro Lancaster" watercolor and gouache painting</p>
							</div>
						</div>
						<div class="blog-outer">
							<div class="blog-box">
								<img class="blog-img" src="./images/video-blog-post/rey.jpg" alt="">
								<div class="blog-date" style="width: 80px;height: 40px;position: relative;;top: -44px;">
									<div class="f1" style="width: 50%;height: 40px;background-color: #fe4918;color: white;float: left;padding-top: 10px">
										Thu
									</div>
									<div class="f1" style="width: 50%;height: 40px;background-color:white;float: left;padding-top: 10px;">
										09
									</div>
								</div>
								<h2>August Post</h2>
								<p class="f1">Painting of one of the many mysterious journey of ren, watercolor and gouache painting.</p>
							</div>
						</div>
						
					</div>
				</div>
			</div>

			<!----------------- VIDEO GALLERY ---------------->
			<div class=" wrapper clearfix b-img-1">
				<div class="semi-transparent-dark v-wrapper">
					<div id="videos" class="container clearfix">
						<div class="heading-title">
							<h1><span class="white-heading">MY</span><span class="colored-heading"> VIDEO</span><span class="white-heading"> GALLERY</span></h1>
							<hr class="hr1 center colored-heading">
							<hr class="hr2 white-heading center">
						</div>
						<p class="heading-description f1">A collection of my videos featuring my art/painting works,Subscribe my youtube channel if you enjoyed watching them.</p>
						
			  			<iframe id="player" name="player" src="https://www.youtube.com/embed/1OdDOMFvL0w" allow="autoplay; encrypted-media" allowfullscreen="" width="1200" height="600" frameborder="0">
			  			</iframe>
			  			<div id="video-thumbnails-wrapper" class="clearfix f2">
			  				<h3><span style="color: #fe4918;">V</span>ideos</h3>
			  				<div class="v-outer clearfix">
			  					<div class="v-bg-wrapper" style="background: url(./images/videos/vt1-aeroplane.jpg);background-size: cover;">
				  					<div class="vlink">
											<a href="https://www.youtube.com/embed/1OdDOMFvL0w" target="player"><img class="play-icon" src="./images/play-icon.png" alt=""></a>
									</div>
								</div>
								<hr>
								<div class="flex-center v-description-wrapper">
									<h5 class="v-description">painting aeroplane</h5>
									<h6 class="v-category">Oil Category</h6>
								</div>
				  			</div>
				  			<div class="v-outer">
				  				<div class="v-bg-wrapper" style="background: url(./images/videos/vt2-chitrkoot.jpg);background-size: cover;">
					  				<div class="vlink">
											<a href="https://www.youtube.com/embed/S7yi1YicNV0" target="player"><img class="play-icon" src="./images/play-icon.png" alt=""></a>
									</div>
								</div>
								<hr>
								<div class="flex-center v-description-wrapper">
									<h5 class="v-description">painting chitrkoot</h5>
									<h6 class="v-category">Water Category</h6>
								</div>
				  			</div>
				  			<div class="v-outer">
				  				<div class="v-bg-wrapper" style="background: url(./images/videos/vt3-rey.jpg);background-size: cover;">
					  				<div class="vlink">
											<a href="https://www.youtube.com/embed/wqccwKrPLIw" target="player"><img class="play-icon" src="./images/play-icon.png" alt=""></a>
									</div>
								</div>
								<hr>
								<div class="flex-center v-description-wrapper">
									<h5 class="v-description">painting rey</h5>
									<h6 class="v-category">Sketch Category</h6>
								</div>
				  			</div>
				  			<div class="v-outer">
				  				<div class="v-bg-wrapper" style="background: url(./images/videos/vt4-steam.jpg);background-size: cover;">
					  				<div class="vlink">
											<a href="https://www.youtube.com/embed/qebIpfPXi7Q" target="player"><img class="play-icon" src="./images/play-icon.png" alt=""></a>
									</div>
								</div>
								<hr>
								<div class="flex-center v-description-wrapper">
									<h5 class="v-description">painting train</h5>
									<h6 class="v-category">Pastel Category</h6>
								</div>
				  			</div>
				  			<div class="v-outer">
				  				<div class="v-bg-wrapper" style="background: url(./images/videos/vt5-vespa.jpg);background-size: cover;">
					  				<div class="vlink">
											<a href="https://www.youtube.com/embed/UtCCXLO2kBQ" target="player"><img class="play-icon" src="./images/play-icon.png" alt=""></a>
									</div>
								</div>
								<hr>
								<div class="flex-center v-description-wrapper">
									<h5 class="v-description">painting vespa</h5>
									<h6 class="v-category">Water Category</h6>
								</div>
				  			</div>
				  			<div class="v-outer">
				  				<div class="v-bg-wrapper" style="background: url(./images/videos/vt6-cloud.jpg);background-size: cover;">
					  				<div class="vlink">
											<a href="https://www.youtube.com/embed/fYorFwIJyMc" target="player"><img class="play-icon" src="./images/play-icon.png" alt=""></a>
									</div>
								</div>
								<hr>
								<div class="flex-center v-description-wrapper">
									<h5 class="v-description">painting life</h5>
									<h6 class="v-category">Water Category</h6>
								</div>
				  			</div>
			  			</div>
			  		</div>
			  	</div>
			</div>


			<!----------------- CONTACT ---------------->
			<div class="wrapper clearfix">
				<div id="contact" class="container clearfix text-color">
					<div class="heading-title">
						<h1><span class="dark-heading">WRITE</span><span class="colored-heading"> TO</span><span class="dark-heading"> ME</span></h1>
						<hr class="hr1 colored-heading center">
						<hr class="hr2 dark-heading center">
					</div>
					<p class="heading-description f1">Drop in your request and feedbacks at my mailbox and stay updated with more upcoming contents </p>
					<form id="contact-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
						<input name="fname" id="iname" class="ibox center imargin" type="text"  placeholder="Name" required>
						<input name="femail" id="iemail" class="ibox center imargin" type="text"  placeholder="email" type="email" required>
						<input name="fsubject" id="isubject" class="ibox center imargin" type="text"  placeholder="Subject" required>
						<textarea name="fmessage" id="message" class="center imargin" placeholder=" Message" required></textarea>
						<button id="submit" class="dark-bg white-heading">Submit</button>
						<p id="fmessage" style="padding: 15px 0px;"><?php echo $message ?> 
					</form>

					<div id="contact-banner" >
						<div class="contact-box bottom-margin">
							<img src="./images/address-icon.png" alt="">
							<h2 class="contact-h2">Address</h2>
							<hr class="hr1 center">
							<hr class="hr2 white-heading center">
							<p class="contact-sub f1"> 46 k.m road,<br>
								near mary amrit bagh
								colony,<br>ranchi
							</p>
						</div>
									
						<div class="contact-box bottom-margin">
							<img src="./images/email-icon.png" alt="">
							<h2 class="contact-h2">Email</h2>
							<div class="short-hr">
								<hr class="hr1 center">
								<hr class="hr2 white-heading center">
							</div>
							<p class="contact-sub f1"> abhisheklakra@gmail.com
							</p>
						</div>
						<div class="contact-box bottom-margin">
							<img src="./images/phone-icon.png" alt="">
							<h2 class="contact-h2">Phone</h2>
							<div class="short-hr">
								<hr class="hr1 center">
								<hr class="hr2 white-heading center">
							</div>
							<p class="contact-sub f1"> 97078392922
							</p>
						</div>
						<div class="contact-box">
							<img src="./images/portfolio-icon.png" alt="">
							<h2 class="contact-h2">Portfolio</h2>
							<div class="short-hr">
								<hr class="hr1 center">
								<hr class="hr2 white-heading center">
							</div>
							<p class="contact-sub f1"> www.abhishek.info
							</p>
						</div>
					</div>
				</div>
			</div>

			<!----------------- FOOTER ---------------->
			<footer id="footer" class="dark-bg text-color">
				<div class="end-notes flex-container container mob-display">
					<div class="end-notes-box">
						<h4 class="f2">what's<span class="colored-heading"> n</span>ext</h4>
						<div class="end-note-short-hr"></div>
						<p class="end-notes-content f1">
							Upcoming projects are going to be more intersting.Iv'e been currently planning on exploring some more beautiful places across India and portraying their beauty in my upcoming art works.So....Stay tuned and updated for more amazing upcoming contents. 
						</p>
					</div>

					<div class="end-notes-box">
						<h4 class="f2">latest tweets</h4>
						<div class="end-note-short-hr"></div>

						<div class="end-notes-content">
							<p class="f1"><i class="fa fa-twitter"></i><span><a href="" class="colored-heading">@Raja</a></span> I'm glad you really enjoyed my works,thanks.</p>
							<span class="tweets-time f1">2 hours ago.</span>
							<div class="divider"></div>
							<p class="f1"><i class="fa fa-twitter"></i><span><a href="" class="colored-heading">@Raja</a></span> I'll keep posting some unique artwork...stay updated.</p>
							<span class="tweets-time f1">2 hours ago.</span>
						</div>
					</div>

					<div class="end-notes-box">
						<h4 class="f2">upcoming projects</h4>
						<div class="end-note-short-hr"></div>
						<div class="end-notes-content flex-container upcoming-images">
							<img src="./images/painting/upcoming/bullet_watercolor_2.jpg">
							<img src="./images/painting/upcoming/countryside_watercolor_1.jpg">
							<img src="./images/painting/upcoming/Handsup_watercolor_2.jpg">
							<img src="./images/painting/upcoming/lone_sketch.jpg">
							<img src="./images/painting/upcoming/Still_vantage_watercolor.jpg">
							<img src="./images/painting/upcoming/thegate_watercolor_1.jpg">
							<img src="./images/painting/upcoming/train_sketch.jpg">
							<img src="./images/painting/upcoming/train_watercolor_1.jpg">
							
						</div>
					</div>

					<div class="end-notes-box">
						<h4 class="f2">get in touch</h4>
						<div class="end-note-short-hr"></div>
						<p class="end-notes-content f1">
							Join my mailing list to stay up to date and get notices about our new releases!
						</p>
					</div>
				</div>
				<div class="container clearfix footer-main f1">
					<hr class="footer-hr">
					<p class="copyright">Copyright @ 2018 Ritu, All Rights Reserved </p>
					<div id="social-links">
						<a href="https://www.facebook.com/raja.lakra.1029" title="" data-tool-tip="follow on facebook" target="_blank"><img class="social-icon" src="./images/facebook-icon-small.png" alt="follow on facebook"></a>

						<a href="https://www.youtube.com/channel/UCAK0PIpLTa0QJZarpozGBUA?view_as=subscriber" data-tool-tip="follow on youtube" title="" target="_blank"><img class="social-icon" src="./images/youtube-icon.png" alt="follow on youtube"></a>
						
						<a href="#" data-tool-tip="follow on twitter"><img class="social-icon" src="./images/twitter-icon-small.png" alt="follow on twitter"></a>
						
						<a href="https://www.instagram.com/raja.painting.thinkhead/" data-tool-tip="follow on instagram" title="" target="_blank"><img class="social-icon" src="./images/Instagram-icon-small.png" alt="follow on instagram"></a>
					</div>
				</div>
			</footer>
			
			<script src="./scripts/lightbox-plus-jquery.min.js">
			// Description: image gallery with lightbox script
			</script>
			
			<script type="text/javascript">
				// Description: smooth scrolling script
				// Select all links with hashes
				$('a[href*="#"]')
				  // Remove links that don't actually link to anything
				  .not('[href="#"]')
				  .not('[href="#0"]')
				  .click(function(event) {
				    // On-page links
				    if (
				      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
				      && 
				      location.hostname == this.hostname
				    ) {
				      // Figure out element to scroll to
				      var target = $(this.hash);
				      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
				      // Does a scroll target exist?
				      if (target.length) {
				        // Only prevent default if animation is actually gonna happen
				        event.preventDefault();
				        $('html, body').animate({
				          scrollTop: target.offset().top
				        }, 1000, function() {
				          // Callback after animation
				          // Must change focus!
				          var $target = $(target);
				          $target.focus();
				          if ($target.is(":focus")) { // Checking if the target was focused
				            return false;
				          } else {
				            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
				            $target.focus(); // Set focus again
				          };
				        });
				      }
				    }
				  });
		</script>		
	</div>
	</body>
</html>
