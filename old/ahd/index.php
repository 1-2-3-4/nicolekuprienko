<?php
//load page content based on id in the url
$page = $_GET['id'];
    
    if (empty($page)) {
        $page = "home";
    }

$img = $_GET['img'];

?>

<!DOCTYPE HTML>
<html>
<head>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<title>Art and Paint Studio</title>
	<link type="text/css" rel="stylesheet" href="css/main.css" />
    <link rel="icon" href="favicon.gif" />
	<meta name="description" content="Art and Paint Studio">
	<meta name="keywords" content="Art and Paint Studio, Decorative Painting">
	<meta name="author" content="Nicole Kuprienko">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<style type="text/css">
		body { background-image: url('images/<?php 
		if ($page == "work") {
			echo $img;
		} else {
			echo $page; 
		}
		?>.jpg'); }
	</style>
</head>
<body>
	<div id="wrapper">
	<div id="content">
	<?php require('_nav.php'); ?>	
	<?php require('_'.$page.'.php'); ?>
	</div> <!-- close content div -->
	<footer>
<p>&copy; 2014 ANIA WASILEWKSA &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;DEVELOPED BY <a href="http://www.nicolekuprienko.com/" target="_blank">NICOLE KUPRIENKO</a></p>
	</footer>
	</div><!-- close wrapper div -->
</body>
</html>