<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BayaNiJuan</title>
	<script src="js/jquery.min.js"></script>
	<link rel="stylesheet" href="css/jquery.fullPage.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
	<script src="js/vendors/jquery.easings.min.js"></script>
	<script src="js/vendors/jquery.slimscroll.min.js"></script>
	<script src="js/jquery.fullPage.js"></script>
	<script src="js/app.js"></script>
</head>
<body>
<div class="fullpage">
	<div class="section active">
	<div class="slide">
	<section class="home_page_wrapper">		
			<section id="content_wrapper_1">
				<article id="content">
					<figure>
						<img src="images/bayanijuan_logo.png" alt="BayaniJuan Logo">
					</figure>
					<div class="inside_content">
						 <span>	
							<h1>Passion <b>+</b> Service <b>+</b> Excellence</h1>
							<h2>We harness technology for Nation Building</h2>
						 </span>
						<span>
							<p>BayaniJuan is a team of highly passionate web weavers on a mission to build the nation one step at a time by harnessing the power of technology, particurlarly the cloud and the web, to create robust and creative solutions.</p>
						</span>
					</div>
				</article>
			</section> 		
	</section>
	</div>
	<div class="slide">
	<section class="team_page_wrapper">		 		
		<section id="content_wrapper_2">
			<section class="inside_content two">
				<span>
					<h1>The Juan Cause for Juan Nation</h1>
					<h2>Meet the modern day of Juan(s) for good</h2>
				</span>
			</section>
			<section id="flip_section">
				<section class="flip_container">
					<section class="flipper">
						<article class="front">
							<img src="images/raven.png" alt="Raven photo">
						</article>
						<article class="back">
							<img src="images/raven2.png" alt="Raven photo wacky">
						</article>
					</section>
				</section>
				<article class="desc">
					<h2 class="team_name">Raven G. Duran</h2>
					<h2 class="team_position">Project Manager</h2>
					<p>Raven is the Team Leader of a starting Web Development Agency <a href="http://www.webnified.com">Webnified&trade;</a>, consequently he is also a Student leader and a President of Various Organization(ICTS,SSC). An Ayala Young Leaders Alumni. With a highly passionate attitude towards technology for community</p>
				</article>
				<div class="clear">	</div>
				<section class="flip_container">
					<section class="flipper">
						<article class="front">
							<img src="images/edsil.png" alt="Edsil photo">
						</article>
						<article class="back">
							<img src="images/edsil2.png" alt="Edsil photo wacky">
						</article>
					</section>
				</section>
				<article class="desc">
					<h2 class="team_name">Edsil R. Basadre</h2>
					<h2 class="team_position">Web Designer</h2>
					<p>Edsil is the front end specialist of the team BayaNiJuan. He works on stuffs that would make the web a personal and awesome experience to have. He is also a freelance frontend web designer</p>
				</article>
				<div class="clear">	</div>
				<section class="flip_container">
					<section class="flipper">
						<article class="front">
							<img src="images/geoff.png" alt="Geoff photo">
						</article>
						<article class="back">
							<img src="images/geoff2.png" alt="Geoff photo wacky">
						</article>
					</section>
				</section>
				<article class="desc">
					<h2 class="team_name">Geoff D. Diaz</h2>
					<h2 class="team_position">Web Developer</h2>
					<p>Geoff is a Junior Backend Web Developer at <a href="http://www.webnified.com">Webnified&trade;</a>, he tinkers to anything related to programming specially the technologies that exists in the web. He is always lookout for challenging problems on programming to solve. While he works to implements the interactivity and complexity stuffs on BayaNiJuan</p>
				</article>
				<div class="clear">	</div>
			</section>	
		</section>		
	</section>
	</div>	
	<div class="slide">
		<section id="form_wrapper">
			<section class="inside_content two">
					<span>
						<h1 class="form_h1">Up for Projects? Inquiry? Partner?</h1>
						<h2 class="form_h2">Contact us, We're always up for something cool.</h2>
					</span>
				</section>
				<section class="form_main">
					<form action="send.php" method="POST">
						<p class="name">
	       			    <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" />
	                    </p>
	      
					    <p class="email">
					     <input name="email" type="text" class="validate[required,custom[email]] feedback-input email" placeholder="Email" />
					    </p>

					    <p class="name">
					    <input name="subject" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input email" placeholder="Subject" />
					    </p>
	      
				        <p class="text">
				        <textarea name="message" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Message"></textarea>
				        </p>
						<div class="submit">
					      <input type="submit" value="SEND" name="submit" id="button-blue"/>
					      <div class="ease"></div>
					    </div>
					</form>	
				</section>
			</section>
	</div>
	</div>
</div>
 <div class="clear"></div>
	<footer>
		<nav>
			<ul>
				<li class="mission firstSlide buttons" id="active"><a href="#Mission" class="block"><span><img src="images/philippine_logo.png" alt="Philippine logo"></span>Our Mission</a></li>
				<li class="team extend secondSlide buttons"><a href="#TeamWebnified" class="block"><span><img src="images/team_logo.png" alt="Team logo"></span>The Team</a></li>
				<li class="reach extend thirdSlide buttons"><a href="#ReachUs" class="block"><span><img src="images/mail_logo.png" alt="Mail logo"></span>Reach Us</a></li>
				<li id="webnified">From <a href="http://www.webnified.com" class="link">Webnified&trade;</a> with love <a href="www.webnified.com"><img src="images/webnified_logo.png" alt="webnified logo"></a></li>
			</ul>
		</nav>
	</footer>
</body>	
</html>
