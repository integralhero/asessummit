<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $page_title; ?></title>
	<meta name = "description" content="Home of ASES Summit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/jquery.countdown.css"> 

</head>
<body>
	<?php include('nav.php'); ?>	
		<div class="container-fluid wrapper">
		<div class ="row-fluid">
			<div id="contact" class="span2">
				<ul class="socialList">
					<li><a href="http://www.facebook.com/asessummit"><img src="img/facebook.png" class="social"></a></li>
					<li><a href="https://twitter.com/asesofficial"><img src="img/twitter.png" class="social"></a></li>
				</ul>
			</div>
			<div class="span10">
			<header class="page-header">
				<h1><?php echo $page_name; ?> <BR> 
				<small><?php echo $page_desc; ?></small>
				</h1>
			</header>