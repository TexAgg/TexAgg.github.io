<?php
	$pageTitle = "Projects";
	$section = "projects";
	include("inc/header.php");
?>

<div id='projects' class="container">
	<h2><?php echo $pageTitle;?></h2>
	
	<div class="panel-group">
		
		<div id='gaikbot' class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title"><a data-toggle="collapse" href="#gaikbot-body">GaikBot</a></h4>
			</div>
			<div id="gaikbot-body" class="panel-body">
				<p>
				<a href='https://bitbucket.org/gaikema/gaikbot/wiki/Home'>GaikBot</a> is a chatbot, 
				sort of like the "sequel" to Dank Sinatra.
				He is written in C#, and uses the Microsoft Bot Framework to integrate him with various channels, including SMS, Facebook, and Telegram.
				</p>
				<iframe src="https://webchat.botframework.com/embed/gaikbot?s=_kROGLOlwLY.cwA.KSI.dyBYCR7BCGOtIE5qj0kSN3V1BWreyDC1oxhn_vAtEG0" style="height: 502px; max-height: 502px;"></iframe>
			</div>
		</div>
		
		<div id='pme' class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title"><a data-toggle="collapse" href="#pme-body">Math Club</a></h4>
			</div>
			<div id="pme-body" class="panel-body collapse">
				<p>
				Official webmaster for Math Club, the umbrella organization for all undergraduate societies within 
				the Mathematics Departament at Texas A&M.
				I was unanimously elected, and I created the first website for the club from scratch.
				</p>
			</div>
		</div>
		
		<div id="polyroot" class='panel panel-default'>
			<div class="panel-heading">
				<h4 class="panel-title"><a data-toggle="collapse" href="#polyroot-body">PolyRoot</a></h4>
			</div>
			<div id="polyroot-body" class="panel-body collapse">
				<p>
					PolyRoot is a Mathematica library which impliments various 
					<a href="https://en.wikipedia.org/wiki/Root-finding_algorithm">root-finding algorithms</a>.
					The source code can be found <a href="https://github.com/TexAgg/PolyRoot">here</a>.
				</p>
			</div>
		</div>
		
		<div id='acc' class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title"><a data-toggle="collapse" href="#projects-body">Aggie Coding Club Website</a></h4>
			</div>
			<div id="projects-body" class="panel-body collapse">
				<p>
				I helped design and implement the website for <a href='http://aggiecodingclub.com/'>
				Aggie Coding Club.</a>
				I worked with a group of about 10 other students.
				</p>
			</div>
		</div>
		
		<div id='flap' class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title"><a data-toggle="collapse" href="#flap-body">Flap God 2</a></h4>
			</div>
			<div id="flap-body" class="panel-body collapse">
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
		</div>
		
		<div id='triangle' class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title"><a data-toggle="collapse" href="#triangle-body">Triangle Calculator</a></h4>
			</div>
			<div id="triangle-body" class="panel-body collapse">
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
		</div>
		
		<div id='bubble' class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title"><a data-toggle="collapse" href="#bubble-body">Bubble</a></h4>
			</div>
			<div id="bubble-body" class="panel-body collapse">
				<p>
				Bubbles will float around aimlessly, heading the opposite direction whenever colliding with a wall or another bubble.
				Works best on Google Chrome.
				</p>
				<a href='https://dl.dropboxusercontent.com/u/222607174/Bubble/index.html'>
				<img id='bubble_img' class='proj' src='media/bubbles.PNG'></img>
				</a>
				<p>Click <a href='https://github.com/TexAgg/Bubble'>here</a> for the source code.</p>
			</div>
		</div>
		
		<div id='dank' class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title"><a data-toggle="collapse" href="#dank-body">Dank Sinatra</a></h4>
			</div>
			<div id="dank-body" class="panel-body collapse">
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
				<img class='proj' src='media/fb_icon_325x325.png'></img></a>
				</a>
			</div>
		</div>
	
	</div>
	
</div>

<?php
	include("inc/footer.php");
?>	