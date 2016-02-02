<!DOCTYPE HTML>
<html>
	<head>
		<title>By Breese's Beard</title>
		<link rel="stylesheet" type="text/css" href="css/main.css" />
        <link rel="icon" href="favicon.gif" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		
		<script>

$(document).ready(function() {
//load home page content
    $("div#content_text").load("_home.html");   
//load page content for each link, add/remove styling classes for buttons
	$("a#home").click(function() {
		$("div#content_text").load("_home.html");
		$("nav div").removeClass("hot");
		$("div#dhome").addClass("hot");
	})
	$("a#how_to_hire").click(function() {
		$("div#content_text").load("_how_to_hire.html");
		$("nav div").removeClass("hot");
		$("div#dhow_to_hire").addClass("hot");
	})
	$("a#games").click(function() {
		$("div#content_text").load("_games.html");
		$("nav div").removeClass("hot");
		$("div#dgames").addClass("hot");
	})
	$("a#about_dms").click(function() {
		$("div#content_text").load("_about_dms.html");
		$("nav div").removeClass("hot");
		$("div#dabout_dms").addClass("hot");
	})
	$("a#event_photos").click(function() {
		$("div#content_text").load("_event_photos.html");
		$("nav div").removeClass("hot");
		$("div#deventphotos").addClass("hot");
	})
	$("a#blog").click(function() {
		$("nav div").removeClass("hot");
		$("div#dblog").addClass("hot");
	})


});
		</script>

	</head>
	<body>
	<div id="wrapper">
		<header>
			<img src="images/logo.png" />
			<div id="header_wrap">
				<h1><span>B</span>Y <span>B</span>REESE'S <span>B</span>EARD</h1>
				<p>contact: ken.breese@gmail.com</p>
			</div>
			<div class="clearfix"></div>
		</header>
	
		<nav>
			<a id="home" href="#"><div class="orange" id="dhome"><p>HOME</p></div></a>
			<a id="how_to_hire" href="#"><div class="rust" id="dhow_to_hire"><p>HOW TO HIRE US</p></div></a>
			<a id="games" href="#"><div class="blue" id="dgames"><p>GAMES ON OFFER</p></div></a>
			<a id="about_dms" href="#"><div class="orange" id="dabout_dms"><p><span class="text_14">ABOUT OUR DUNGEON MASTERS</span></p></div></a>
			<a id="event_photos" href="#"><div class="rust" id="deventphotos"><p>EVENT PHOTOS</p></div></a>
			<a id="blog" href="http://www.berlingsbeard.com/" target="_blank"><div class="blue" id="dblog"><p>BERLING'S BEARD</p></div></a>
		</nav>	
		
		<section class="content">
			<div id="content_text">
				<!-- AJAX Code will insert content text here -->
			</div>
		</section>	
		
		<section id="twitter_rail">
			<a class="twitter-timeline" href="https://twitter.com/BerlingsBeard" data-dnt="true" data-widget-id="387309326336917504" data-theme="light" data-link-color="#7392CB" width="275" height="580">Tweets by @BerlingsBeard</a>
<script type="text/javascript">// <![CDATA[
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
// ]]></script>
		</section>	
		<div class="clearfix"></div>
		<footer>
<p>&copy; 2014 Ken Breese&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;Developed By <a href="http://www.nicolekuprienko.com/">Nicole Kuprienko</a></p>
		</footer>
	</div> <!-- close wrapper div-->
	</body>

</html>