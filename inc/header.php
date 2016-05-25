<html lang="en">
<head>
	<title><?php echo($pageTitle);?></title>
	<meta name='author' content='Matt Gaikema'></meta>
	<meta name='description' content='My website'></meta>
	<meta name='keywords' content='Matt,Gaikema,Math,Computers,competent,smart,hirable'></meta>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<link rel='icon' href='https://media.licdn.com/mpr/mpr/shrinknp_400_400/p/5/005/092/2c5/35c85cc.jpg'></link>
	<link rel='stylesheet' type='text/css' href='styles/style.css'></link>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	
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
	
	<!--<a href="index.php">-->
	<header>
		<h1>Matt Gaikema</h1>
		<h2>Mathematician & Programmer</h2>
	</header>
	<!--</a>-->
	<nav class="navbar navbar-default" role="navigation">
		<ul class="nav nav-tabs">
			<li role="presentation" class="about<?php if ($section=="about"){echo " on active";}?>"><a href="index.php">About me</a></li>
			<li role="presentation" class="projects<?php if ($section=="projects"){echo " on active";}?>"><a href="projects.php">Projects</a></li>
			<li role="presentation" class="skills<?php if ($section=="skills"){echo " on active";}?>"><a href="skills.php">Skills</a></li>
			<li role="presentation" class="resume<?php if ($section=="resume"){echo " on active";}?>"><a href="resume.php">Resume</a></li>
			<li role="presentation" class="resume<?php if ($section=="connect"){echo " on active";}?>"><a href="connect.php">Contact me</a></li>
		</ul>
	</nav>