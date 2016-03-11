<?php
	$name = "Matt";
?>
<!Doctype html>
<!--
	Since most math professors seem to have websites with 
	extremely basic HTML, a less flashy website is my way of
	subliminally convincing visitors I am good at math.
-->
<!--
	To-do:
	1. Seperate into different pages
	2. Improve style
-->
<html>
<head>
	<title>Matt Gaikema</title>
	<meta name='author' content='Matt Gaikema'></meta>
	<meta name='description' content='My website'></meta>
	<meta name='keywords' content='Matt,Gaikema,Math,Computers,competent,smart,hirable'></meta>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<link rel='icon' href='https://media.licdn.com/mpr/mpr/shrinknp_400_400/p/5/005/092/2c5/35c85cc.jpg'></link>
	<link rel='stylesheet' type='text/css' href='styles/style.css'></link>
	<link rel='stylesheet' href='http://bootswatch.com/superhero/bootstrap.css'></link>
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
	
	<header>
		<h1>Matt Gaikema</h1>
		<h2>Mathematician & Programmer</h2>
	</header>
	
	<hr></hr>
	
	<div id='about'>
		<h4>About me<?php echo $name ?></h4>
		<img id='me' src='https://media.licdn.com/mpr/mpr/shrinknp_400_400/p/5/005/092/2c5/35c85cc.jpg'></img>
		<p id='about_txt'>
		I am a sophomore studying Computer Science and Applied Mathematics
		at Texas A&M.
		I am fascinated by the close connection between mathematics and computer science,
		especially mathematical algorithms.
		</p>
	</div>
	
	<hr></hr>
	
	<div id='projects'>
		<h4>Projects</h4>
		<div id='acc'>
			<h5>Aggie Coding Club Website</h5>
			<p>
			I helped design and implement the website for <a href='http://aggiecodingclub.com/'>
			Aggie Coding Club.</a>
			I worked with a group of about 10 other students.
			</p>
		</div>
		<div id='pme'>
			<h5>Pi Mu Epsilon</h5>
			<p>
			Official Webmaster for Pi Mu Epsilon, the mathematics honor society at my school.
			</p>
		</div>
		<div id='flap'>
			<h5>Flap God 2</h5>
			<p>
			Based on <a href='https://github.com/TexAgg/FlapGod'>Flap God,</a> Flap God 2
			is a game about <a href='https://en.wikipedia.org/wiki/Pancake_sorting'>pancake sorting.</a>
			The object of the game is to get the pancakes sorted from smallest to largest in as few flips
			as possible.
			Works best on Google Chrome.
			</p>
			<a href='https://dl.dropboxusercontent.com/u/222607174/flap_god2/index.html' target='_blank'>
			<img id='pancakes' class='proj' src='media/pancakes.PNG'></img>
			</a>
			<p>Click <a href='https://github.com/TexAgg/Flap-God-2'>here</a> for the source code.</p>
		</div>
		<div id='triangle'>
			<h5>Triangle Calculator</h5>
			<p>
			Enter three sides of the triangle and, using
			Heron's formula, this will calculate the area and
			draw the triangle. 
			</p>
			<a href='https://dl.dropboxusercontent.com/u/222607174/triangle_calculator/index.html' target='_blank'>
			<img id='triangle_img' class='proj' src='media/triangle.PNG'></img>
			</a>
			<p>Click <a href='https://github.com/TexAgg/TriangleCalculator'>here</a> for the source code.</p>
		</div>
		<div id='bubble'>
			<h5>Bubble</h5>
			<p>
			Bubbles will float around aimlessly, heading the opposite direction whenever colliding with a wall or another bubble.
			Works best on Google Chrome.
			</p>
			<a href='https://dl.dropboxusercontent.com/u/222607174/Bubble/index.html'>
			<img id='bubble_img' class='proj' src='media/bubbles.PNG'></img>
			</a>
			<p>Click <a href='https://github.com/TexAgg/Bubble'>here</a> for the source code.</p>
		</div>
		<div id='dank'>
			<h5>Dank Sinatra</h5>
			<p>
			<a href='https://www.facebook.com/profile.php?id=100010461758967&fref=ts'>Dank Sinatra</a> is a Facebook chatbot.
			He is written in JavaScript (using Node.js) and a smidgen of Python.
			Type '\help' to see a list of his available commands.
			He also pushes relevant messages to a database, sends me email updates,
			and posts weather updates every 3 hours,
			but new features are constantly being added.
			I hope to one day make him a full-on source of information, such as Siri (only not as good).
			Unfortunately, the source code is currently unavailable, 
			but will be posted when this changes.
			</p>
			<a href='https://www.facebook.com/profile.php?id=100010461758967&fref=ts'>
			<img class='proj' src='https://www.facebook.com/images/fb_icon_325x325.png'></img></a>
			</a>
		</div>
	</div>
	
	<hr></hr>

	<div id='skills'>
		<h4>Skills</h4>
		<ul><u>Proficient in:</u>
			<li>C/C++</li>
			<li>Microsoft Excel</li>
			<li>R</li>
			<li>LaTeX</li>
			<li>Maple</li>
		</ul>
		<ul><u>Familiar with:</u>
			<li>JavaScript</li>
			<li>HTML</li>
			<li>CSS</li>
			<li>Java</li>
			<!--<li>Sage</li>-->
			<li>Matlab</li>
			<li>C#</li>
		</ul>
	</div>
	
	<hr></hr>
	
	<div id='resume'>
		<h4>Resume</h4>
		<p>
		<a href='media/resume.pdf'><img id='resume_img' class='proj' src='media/resume.png'></img></a>
		<br></br>		
		To download a copy of my resume, click 
		<a href='media/resume.pdf' download='MattGaikemaResume'>here.</a>
		</p>
	</div>
	
	<hr></hr>

	<div id='exams'>
		<h4>Examinations</h4>
		<p>Passed Actuarial Exam P (Probability). Final score not yet received.</p>
	</div>
	
	<hr></hr>
	
	<div id='connect'>
		<h4>Contact me!</h4>
		<ul>
			<li><a href='https://www.linkedin.com/in/matthew-gaikema-2607b9a3'>Linkedin</a></li>
			<li><a href='https://github.com/TexAgg'>GitHub</a></li>
			<li>
			<a href='mailto:mgaikema1@gmail.com'>mgaikema1@gmail.com</a>
			or
			<a href='mailto:matt.gaikema@tamu.edu'>matt.gaikema@tamu.edu</a>
			</li>
			<li>Phone: 832-683-9857</li>
		</ul>
	</div>
	
	<footer>
		<a href='https://www.facebook.com/matt.gaikema'><img id='fb' src='https://www.facebook.com/images/fb_icon_325x325.png'/></a>
		<p>&copy 2016 Matthew Gaikema</p>
		
		<!--PayPal donate button-->
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
		<input type="hidden" name="cmd" value="_s-xclick">
		<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
		">
		<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
		<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
		</form>
		<!--		https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=mgaikema1%40gmail%2ecom&lc=US&item_name=Matt%20Gaikema&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted
		-->
		
	</footer>
	
</body>
</html>