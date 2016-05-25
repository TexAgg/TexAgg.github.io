<?php
	$pageTitle = "Projects";
	$section = "projects";
	include("inc/header.php");
?>

<div id='projects' class="container">
	<h3>Projects</h3>
	<div id='acc'>
		<h4>Aggie Coding Club Website</h4>
		<p>
		I helped design and implement the website for <a href='http://aggiecodingclub.com/'>
		Aggie Coding Club.</a>
		I worked with a group of about 10 other students.
		</p>
	</div>
	<div id='pme'>
		<h4>Pi Mu Epsilon</h4>
		<p>
		Official Webmaster for Pi Mu Epsilon, the mathematics honor society at my school.
		</p>
	</div>
	<div id='flap'>
		<h4>Flap God 2</h4>
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
		<h4>Triangle Calculator</h4>
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
		<h4>Bubble</h4>
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
		<h4>Dank Sinatra</h4>
		<p>
		<a href='https://www.facebook.com/profile.php?id=100010461758967&fref=ts'>Dank Sinatra</a> is a Facebook chatbot.
		He is written in JavaScript (using Node.js) and a smidgen of Python.
		Type '\help' to see a list of his available commands.
		He also pushes relevant messages to a database, sends me email updates,
		and posts weather updates every 3 hours,
		but new features are constantly being added.
		I hope to one day make him a full-on companion, such as Siri or Watson (albiet not as realistic).
		For more information, see <a href="https://bitbucket.org/gaikema/danksinatra/wiki/Home">here.</a>
		</p>
		<a href='https://www.facebook.com/profile.php?id=100010461758967&fref=ts'>
		<img class='proj' src='https://www.facebook.com/images/fb_icon_325x325.png'></img></a>
		</a>
	</div>
	<div id='gaikbot'>
		<h4>GaikBot</h4>
		<p>
		<a href='https://bitbucket.org/gaikema/gaikbot/wiki/Home'>GaikBot</a> is another chatbot, 
		sort of like the "sequel" to Dank Sinatra.
		He uses the Microsoft Bot Framework to integrate him with various channels, including SMS, Facebook, and Telegram.
		</p>
		<iframe src="https://webchat.botframework.com/embed/gaikbot?s=_kROGLOlwLY.cwA.KSI.dyBYCR7BCGOtIE5qj0kSN3V1BWreyDC1oxhn_vAtEG0" style="height: 502px; max-height: 502px;"></iframe>
	</div>
</div>

<?php
	include("inc/footer.php");
?>	