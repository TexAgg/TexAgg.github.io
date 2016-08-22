<?php
$pageTitle = "Resume";
$section = "resume";
include("inc/header.php");
?>

<div id='resume' class="container panel panel-default">
	<div class="panel-heading">
		<h2><?php echo $pageTitle;?></h2>
	</div>

	<p>
	<!-- https://www.dropbox.com/s/p2rpwhtxd8yghaf/main.pdf?dl=0 -->
	<iframe id="resume-iframe" class="embed-responsive-item" src='media/resume/main.html' width='595' height='842'></iframe>
	<br></br>		
	To download a PDF copy of my resume, click 
	<a href='media/resume/main.pdf' download='MattGaikemaResume'>here.</a>
	</p>
</div>

<?php
include("inc/footer.php");
?>