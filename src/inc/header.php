<html lang="en">
<head>
	<title><?php echo($pageTitle);?></title>
	<meta name='author' content='Matt Gaikema'></meta>
	<meta name='description' content='Mathematician and Computer Scientist'></meta>
	<meta name='keywords' content='Matt,Gaikema,Math,Computers,competent,smart,hirable'></meta>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<link rel='icon' href='https://media.licdn.com/mpr/mpr/shrinknp_400_400/p/5/005/092/2c5/35c85cc.jpg'></link>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	
	<link rel='stylesheet' type='text/css' href='styles/style.css'></link>

	<!-- ClipppyJS
	https://jsfiddle.net/djprmf/qCuH6/ -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/clippy.js/1.0/clippy.min.css">
	<script src="//cdn.jsdelivr.net/clippy.js/1.0/clippy.min.js"></script>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-73392139-1', 'auto');
	  ga('send', 'pageview');

	</script>	
</head>

<body>
	
	<div class="jumbotron bar">
		<header>
			<h1>Matt Gaikema</h1>
			<h2>Mathematician & Programmer</h2>
		</header>
	</div><!--jumbotron-->
	<nav class="navbar navbar-default" role="navigation">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div><!--navbar-header-->
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav nav-tabs">
				<li id="index-nav-li" role="presentation" class="about<?php if ($section=="about"){echo " on active";}?>"><a href="index">About me</a></li>
				<li id="projects-nav-li" role="presentation" class="projects<?php if ($section=="projects"){echo " on active";}?>"><a href="projects">Projects</a></li>
				<li id="skills-nav-li" role="presentation" class="skills<?php if ($section=="skills"){echo " on active";}?>"><a href="skills">Skills</a></li>
				<li id="resume-nav-li" role="presentation" class="resume<?php if ($section=="resume"){echo " on active";}?>"><a href="resume">Resume</a></li>
				<li id="contact-nav-li" role="presentation" class="resume<?php if ($section=="connect"){echo " on active";}?>"><a href="connect">Contact me</a></li>
			</ul>
		</div><!--navbar-collapse-->
	</nav>