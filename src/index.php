<?php 
$pageTitle = "Matt Gaikema";
$section = "about";
include("inc/header.php");
?>

<div id='about' class="container panel panel-default">
	<div class="panel-heading">
		<h2><?php echo $pageTitle;?></h2>
	</div>

	<div class="media">
		<div class="media-left">
			<img class="media-object"  id="me" src='media/me.jpg'></img>
		</div><!--media-left-->
		<div class="media-body">
			<h3 class="media-heading">About me</h3>
			I am a junior studying Computer Science and Applied Mathematics
			at Texas A&M.
			I am fascinated by the close connection between mathematics and computer science,
			especially mathematical algorithms.
			I mostly program in C++, JavaScript, and R, but I have recently been doing a lot with Mathematica and C#.	
		</div><!--media-body-->
	</div><!--media-->

</div><!--About-->

<?php
include("inc/footer.php");
?>		