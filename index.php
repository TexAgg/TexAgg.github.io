<?php 
	$pageTitle = "Matt Gaikema";
	$section = null;
	include("inc/header.php");
?>
<div class="header">
	<div class="wrapper">
		<!--<h1 class="branding-title"><a href="./">Matt Gaikema</a></h1>-->
		<ul class="nav">
   			<li class="about"<?php if ($section=="about"){echo " on";} ?>"><a href="about.php">About me</a></li>
			<li class="projects"<?php if ($section=="projects"){echo " on";} ?>"><a href="projects.php">Projects</a></li>
			<li class="skills"<?php if ($section=="skills"){echo " on";} ?>"><a href="skills.php">Skills</a></li>
			<li class="resume"<?php if ($section=="resume"){echo " on";} ?>"><a href="resume.php">Resume</a></li>
		</ul>
	</div>
</div>
<?php
	include("inc/footer.php");
?>	