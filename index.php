<?php 
	$pageTitle = "Matt Gaikema";
	$section = null;
	include("inc/header.php");
?>
<!--<div class="header">
	<div class="wrapper">
		<ul class="nav">
   			<li class="about"<?php if ($section=="about"){echo " on";} ?>"><a href="about.php">About me</a></li>
			<li class="projects"<?php if ($section=="projects"){echo " on";} ?>"><a href="projects.php">Projects</a></li>
			<li class="skills"<?php if ($section=="skills"){echo " on";} ?>"><a href="skills.php">Skills</a></li>
			<li class="resume"<?php if ($section=="resume"){echo " on";} ?>"><a href="resume.php">Resume</a></li>
		</ul>
	</div>
</div>-->
<ul class="nav nav-tabs">
  <li role="presentation" class="about"<?php if ($section=="about"){echo " on";} ?>"><a href="about.php">About me</a></li>
  <li role="presentation" class="projects"<?php if ($section=="projects"){echo " on";} ?>"><a href="projects.php">Projects</a></li>
  <li role="presentation" class="skills"<?php if ($section=="skills"){echo " on";} ?>"><a href="skills.php">Skills</a></li>
  <li role="presentation" class="resume"<?php if ($section=="resume"){echo " on";} ?>"><a href="resume.php">Resume</a></li>
</ul>
<?php
	include("inc/footer.php");
?>	