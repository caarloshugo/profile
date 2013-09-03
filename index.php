<?php
	$data = $_POST;
	$msg  = "false"; 
	
	if(isset($data["name"]) and isset($data["email"]) and isset($data["message"]) and isset($data["subject"])) {
		if($data["name"] != "" and $data["email"] != "" and $data["message"] != "" and $data["subject"] != "") {
			$msg	  = "successful";
			$to       = "carlos.hugo.gonzalez.castell@gmail.com";
			$subject  = $data["subject"] . " - caarloshugo.info";
			$message  = $data["name"] . ", "  . $data["message"];
			$from     = "info@caarloshugo.info";
			$headers  = "From:" . $from;
			
			mail($to, $subject, $message, $headers);
		} else {
			$msg = "error";
		}
	}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Carlos Hugo Gonzalez Castell</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet" />
		<script src="js/jquery-1.9.1.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
		<!--[if lte IE 7]><link rel="stylesheet" href="css/ie7.css" /><![endif]-->
	</head>
	<body>

		<!-- Nav -->
			<nav id="nav">
				<ul>
					<li><a href="#top">Who?</a></li>
					<li><a href="#work">Work</a></li>
					<li><a href="#portfolio">Portfolio</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</nav>

		<!-- Home -->
			<div class="wrapper wrapper-style1 wrapper-first">
				<article class="container" id="top">
					<div class="row">
						<div class="4u">
							<span class="me image image-full"><img src="images/profile.png" alt="Carlos Hugo - image profile" /></span>
						</div>
						<div class="8u">
							<header>
								<h1>Hi. I'm <strong>Carlos Hugo Gonzalez</strong>.</h1>
							</header>
							<p>
								Developer, chess player and Linux user.<br/>
								I currently work in 
								<a target="_blank" href="http://fundar.org.mx" title="Fundar, Centro de Análisis e Investigación">
									Fundar, Centro de Análisis e Investigación
								</a><br/>
								
								Skills: <strong>PHP</strong>, JavaScript, jQuery, CSS3, HTML5, <strong>D3.js</strong>, 
								<strong>Mapbox</strong>, MySQL, Amazon Web Services, <strong>PostgreSQL</strong> & BigData
							</p>
							
							<a href="#work" class="button button-big">Learn about what I do</a>
						</div>
					</div>
				</article>
			</div>

		<!-- Work -->
			<div class="wrapper wrapper-style2">
				<article id="work">
					<header>
						<h2>What I do</h2>
						<span>Just do what I like</span>
					</header>
					<div class="container">
						<div class="row">
							<div class="4u">
								<section class="box box-style1">
									<span class="icon featured-icon icon-coffee"></span>
									<h3>Build ideas</h3>
									<p>Build customer ideas into innovative solutions to the most appropriate technology.</p>
								</section>
							</div>
							<div class="4u">
								<section class="box box-style1">
									<span class="icon featured-icon icon-map-marker"></span>
									<h3>Visualizations</h3>
									<p>I like to make interactive maps and visualizations to represent the data in the best way.</p>
								</section>
							</div>
							<div class="4u">
								<section class="box box-style1">
									<span class="icon featured-icon icon-github-alt"></span>
									<h3>Open source projects</h3>
									<p>I contributed to open source projects like <a href="https://github.com/caarloshugo/ZanPHP" title="ZanPHP">ZanPHP</a>, 
									<a href="https://github.com/organizations/opendatamx" title="OpenDataMX">OpenDataMX</a> and others initiatives.</p>
								</section>
							</div>
						</div>
					</div>
					
					<footer>
						<a href="#portfolio" class="button button-big">See some of my recent work</a>
					</footer>
				</article>
			</div>

		<!-- Portfolio -->
			<div class="wrapper wrapper-style3">
				<article id="portfolio">
					<header>
						<h2>Awesome work makes happy clients.</h2>
						<span>Some of my recent work like websites, maps, visulizations, open source projects and others below</span>
					</header>
					<div class="container">
						<div class="row">
							<div class="12u">
							</div>
						</div>
						<div class="row">
							
							<div class="4u">
								<article class="box box-style2">
									<a href="http://a.tiles.mapbox.com/v3/caarloshugo.map-chfohwsn/page.html#3.00/0.00/0.00" class="image image-full">
										<img src="images/portfolio01.jpg" alt="" />
									</a>
									
									<h3><a href="http://a.tiles.mapbox.com/v3/caarloshugo.map-chfohwsn/page.html#3.00/0.00/0.00">Make Budgets Public</a></h3>
									<p>Map of the "Make Budgets Public Now!".</p>
								</article>
							</div>
							
							<div class="4u">
								<article class="box box-style2">
									<a href="http://zanphp.com" class="image image-full">
										<img src="images/portfolio02.jpg" alt="" />
									</a>
									<h3><a href="http://zanphp.com">ZanPHP</a></h3>
									<p>ZanPHP is a framework written in PHP5.</p>
								</article>
							</div>
							
							<div class="4u">
								<article class="box box-style2">
									<a href="http://www.publicidadoficial.com.mx" class="image image-full">
										<img src="images/portfolio03.jpg" alt="" />
									</a>
									
									<h3><a href="http://www.publicidadoficial.com.mx">Publicidad oficial</a></h3>
									<p>Is a site that seeks to publicly available information on spending and regulation of advertising.</p>
								</article>
							</div>
						</div>
						
						<div class="row">
							<div class="4u">
								<article class="box box-style2">
									<a class="image image-full">
										<img src="images/portfolio04.jpg" alt="" />
									</a>
									
									<h3><a>Lux / Spa & Boutique</a></h3>
									<p>Website of "Lux / Spa & Boutique" company.</p>
								</article>
							</div>
							
							<div class="4u">
								<article class="box box-style2">
									<a href="http://a.tiles.mapbox.com/v3/fundarmexico.po_comparado/page.html" class="image image-full">
										<img src="images/portfolio05.jpg" alt="" />
									</a>
									
									<h3><a href="http://a.tiles.mapbox.com/v3/fundarmexico.po_comparado/page.html">Map Pubicidad Oficial</a></h3>
									<p>Map of level regulation compared.</p>
								</article>
							</div>
							
							<div class="4u">
								<article class="box box-style2">
									<a class="image image-full">
										<img src="images/portfolio06.jpg" alt="" />
									</a>
									
									<h3><a>Subsidios al campo en México</a></h3>
									<p>Is the first website in Latin America that aims to provide information on the fate of subsidies and targeted financial support to the agricultural sector in the country</p>
								</article>
							</div>
						</div>
					</div>
					<footer>
						<a href="#contact" class="button button-big">Get in touch with me</a>
					</footer>
				</article>
			</div>

		<!-- Contact -->
			<div class="wrapper wrapper-style4">
				<article id="contact">
					<header>
						<a name="msg"></a>
						<h2>Want to hire me? Get in touch!</h2>
						<?php if($msg == "successful") { ?>
							<span>Thank you. I will contact you</span>
						<?php } elseif($msg == "error") { ?>
							<span>An error occurred, please try again</span>
						<?php } ?>
					</header>
					<div>
						<div class="row">
							<div class="12u">
								<form method="post" action="/#msg">
									<div>
										<div class="row">
											<div class="6u">
												<input type="text" name="name" id="name" placeholder="Name" value="<?php echo (isset($data["name"])) ? $data["name"] : ""; ?>" />
											</div>
											<div class="6u">
												<input type="text" name="email" id="email" placeholder="Email" value="<?php echo (isset($data["email"])) ? $data["email"] : ""; ?>"/>
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<input type="text" name="subject" id="subject" placeholder="Subject" value="<?php echo (isset($data["subject"])) ? $data["subject"] : ""; ?>"/>
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<textarea name="message" id="message" placeholder="Message"></textarea>
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<a href="#" class="button form-button-submit">Send Message</a>
												<a href="#" class="button button-alt form-button-reset">Clear Form</a>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="row row-special">
							<div class="12u">
								<h3>Find me on ...</h3>
								<ul class="social">
									<li class="twitter"><a href="http://twitter.com/caarloshugo" class="icon icon-twitter"><span>Twitter</span></a></li>
									<li class="skype"><a href="skype:caarloshugo?call" class="icon icon-skype"><span>Skype</span></a></li>
									<li class="linkedin"><a href="http://www.linkedin.com/pub/carlos-hugo-gonzalez-castell/25/b72/a10" class="icon icon-linkedin"><span>LinkedIn</span></a></li>
									<li class="tumblr"><a href="http://www.flickr.com/photos/caarloshugo/" class="icon icon-flickr"><span>Flickr</span></a></li>
									<li class="googleplus"><a href="http://gplus.to/caarloshugo" class="icon icon-google-plus"><span>Google+</span></a></li>
									<li class="github"><a href="http://github.com/caarloshugo" class="icon icon-github"><span>Github</span></a></li>
									<!--
									<li class="rss"><a href="#" class="icon icon-rss"><span>RSS</span></a></li>
									<li class="instagram"><a href="#" class="icon icon-instagram"><span>Instagram</span></a></li>
									<li class="foursquare"><a href="#" class="icon icon-foursquare"><span>Foursquare</span></a></li>
									<li class="skype"><a href="#" class="icon icon-skype"><span>Skype</span></a></li>
									<li class="soundcloud"><a href="#" class="icon icon-soundcloud"><span>Soundcloud</span></a></li>
									<li class="youtube"><a href="#" class="icon icon-youtube"><span>YouTube</span></a></li>
									<li class="blogger"><a href="#" class="icon icon-blogger"><span>Blogger</span></a></li>
									<li class="flickr"><a href="#" class="icon icon-flickr"><span>Flickr</span></a></li>
									<li class="vimeo"><a href="#" class="icon icon-vimeo"><span>Vimeo</span></a></li>
									-->
								</ul>
							</div>
						</div>
					</div>
					<footer>
						<p id="copyright">
							&copy; 2013 <a href="http://twitter.com/caarloshugo" title="Carlos Hugo Gonzalez Castell">@caarloshugo</a> | Design: <a href="http://html5up.net/">HTML5 UP</a>
						</p>
					</footer>
				</article>
			</div>


	</body>
</html>
