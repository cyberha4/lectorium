
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Adoption a Society & people Category Flat Bootstarp responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Adoption Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="../css/style.css" rel='stylesheet' type='text/css' />
<script src="../js/jquery-1.11.0.min.js"></script>
<!--start-smoth-scrolling-->
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
<!--start-smoth-scrolling-->
</head>
<body>
	<!--header-starts-->
	<div class="header" id="home">
		<div class="container">
			<div class="header-main">
				<div class="col-md-6 header-left">
					<a href="index.html"><h1>
					Лекторий</a><br>
					<a href="index.html">
					Заслуженных</a><br>
					<a href="index.html">
					Ученых</h1></a>
					
				</div>
				<div class="col-md-6 header-right">
					<ul>
						<li><a href="#"><h3>О проекте </h3></a></li>
						<li><a href="#"><h3>Участникам</h3></a></li>
						<li><a href="#"><h3>Партнерам</h3></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--header-ends--> 
	<!--banner-starts-->
	<div class="bnr">
		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider4">
			    <li>
					<div class="banner1">						
					</div>
				</li>
				<li>
					<div class="banner2">						
					</div>
				</li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!--banner-ends--> 
	<!--Slider-Starts-Here-->
				<script src="../js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!--End-slider-script-->
	<!--header-starts-->
	<div class="header-bottom">
	 <div class="fixed-header">
		<div class="container">
			<div class="top-menu">
					<span class="menu"><img src="images/menu-icon.png" alt="" /></span>
					<ul class="nav">
						<li><a class="active hvr-bounce-to-right" href="index.html">Мероприятия</a></li>
						<li><a href="about.html" class="hvr-bounce-to-right">Ученые</a></li>
						
					</ul>	
					<!-- script for menu -->
						<script>
						$( "span.menu" ).click(function() {
						  $( "ul.nav" ).slideToggle( "slow", function() {
							// Animation complete.
						  });
						});
					</script>
					<!-- script for menu -->
			</div>
			<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-bottom").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-bottom").addClass("fixed");
				}else{
					$(".header-bottom").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		</div>
	 </div>
	 </div>
	<!--header-ends-->

	<!--video-lecture-starts-->

	<!--video-lecture-ends-->
	<!--testimonials-starts-->
	<div class="testimonials">
		<div class="container">
			<div class="testimonials-top heading">
				<h3>О нас</h3>
				<br />
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</p>
			</div>
			
		</div>
	</div>
	<!--testimonials-end-->
	<!--testimonials-starts-->
	<div class="testimonials">
		<div class="container">
			<div class="testimonials-top heading">
				<h3>Наша миссия</h3>
				<br />
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</p>
			</div>
			
		</div>
	</div>
	<!--testimonials-end-->
	<!--testimonials-starts-->
	<div class="testimonials">
		<div class="container">
			<div class="testimonials-top heading">
				<h3>Послания новым поколениям</h3>

			</div>
			<div class="testimonials-bottom">
				<div class="col-md-4 testimonials-left">
					<div class="test-left">
						<img src="images/tereshkova.jpg" alt="" />
					</div>
					<div class="test-right">
						<p>Ребята, хочется много сказать, передать, но разглагольствовать не буду. Скажу лучше одно, верьте в себя, в своих друхей, в свою страну, тогда никакие беды не страшны.</p>
						<div class="tool2">
							<a class="tooltips2" href="#">
							<span></span></a>
						</div>
						<h4>Валентина Терешкова</h4>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-4 testimonials-left">
					<div class="test-left">
						<img src="images/grfather.jpg" alt="" />
					</div>
					<div class="test-right">
						<p>Ребята, хочется много сказать, передать, но разглагольствовать не буду. Скажу лучше одно, верьте в себя, в своих друхей, в свою страну, тогда никакие беды не страшны.</p>
						<div class="tool2">
							<a class="tooltips2" href="#">
							<span></span></a>
						</div>
						<h4>Сан Саныч </h4>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-4 testimonials-left">
					<div class="test-left">
						<img src="images/grfather.jpg" alt="" />
					</div>
					<div class="test-right">
						<p>Ребята, хочется много сказать, передать, но разглагольствовать не буду. Скажу лучше одно, верьте в себя, в своих друхей, в свою страну, тогда никакие беды не страшны.</p>
						<div class="tool2">
							<a class="tooltips2" href="#">
							<span></span></a>
						</div>
						<h4>Валентин Гордеев</h4>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--testimonials-end-->
	<!--footer-starts-->
	<div class="footer">
		<div class="container">
			<div class="footer-top">
				<div class="col-md-6 footer-left">
					<h3>Подписаться на рассылку</h3>
					<div class="letter">
						<form>
							<input type="text" value="Введите свой e-mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Email';}">
							<input type="submit" value="Подписаться">
						</form>
					</div>
				</div>
				<div class="col-md-3 footer-left">
					<h3>Overview</h3>
					<ul>
						<li><a href="#">Phasellus at lacus ultrices</a></li>
						<li><a href="#">Duis vestibulum porta lorem</a></li>
						<li><a href="#">Praesent laoreet quam nec purus</a></li>
						<li><a href="#">Suspendisse id tempus dolor</a></li>
						<li><a href="#">Morbi efficitur tincidunt</a></li>
						<li><a href="#">Sed eu erat vel ipsum fermentum</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-left">
					<h3>Навигация</h3>
					<ul>
						<li><a href="about.html">About</a></li>
						<li><a href="faq.html">Faqs</a></li>
						<li><a href="services.html">Services</a></li>
						<li><a href="gallery.html">Gallery</a></li>
						<li><a href="typo.html">Blog</a></li>
						<li><a href="contact.html">Contact</a></li>						
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="footer-text">
				<div class="col-md-6 ftr-left">
					<h4><a href="index.html">Лекторий</a></h4>
				</div>
				<div class="col-md-6 ftr-right">
					<p>© 2016 Лекторий заслуженных ученых. Все права защищены </p>
				</div>
				<div class="clearfix"></div>				
			</div>
		</div>
		<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
	<!--footer-end-->
</body>
</html>