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
	<!--<a href='media/resume.pdf'><img id='resume_img' class='proj' src='media/resume.png'></img></a>-->
	<a href='https://www.dropbox.com/s/4ewaxn9swmk8zm7/resume.pdf?dl=0'><img id='resume_img' class='proj' src='media/resume.png'></img></a>
	<br></br>		
	To download a copy of my resume, click 
	<a href='https://dl.dropboxusercontent.com/s/4ewaxn9swmk8zm7/resume.pdf?dl=0' download='MattGaikemaResume'>here.</a>
	</p>
</div>

<?php
	include("inc/footer.php");
?>