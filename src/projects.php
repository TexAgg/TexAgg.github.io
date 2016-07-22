<?php
$pageTitle = "Projects";
$section = "projects";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/../vendor/autoload.php';
//echo phpversion();

$params = App\getDbParams();
//var_dump($params);
$db = new App\Firebase($params->url, $params->secret);
$db->getData("projects");

$xml = simplexml_load_file("resources/config.xml");
//var_dump($xml);
$projects = $xml->projects->item;
//var_dump($projects);

include("inc/header.php");
?>

<!-- Sidebar menu.
http://jsfiddle.net/TT8uV/2/ -->
<div class="sidebar span4 hidden-phone">
	<ul id="sidebar-menu" class="nav nav-stacked list-group">
		<?php
		for($i = 0; $i<count($projects); $i++)
		{
			echo "<li class='list-group-item'><a href='projects#" . $projects[$i]->id . "'>" . $projects[$i]->name . "</a></li>";
		}
		?>
		<!--<li class="list-group-item list-group-item-info"><a href="#">Top</a></li>-->
	</ul>
</div>

<!-- Display projects. -->
<div id='projects' class="container panel panel-default">
	<div class="panel-heading">
		<h2><?php echo $pageTitle;?></h2>
	</div>

	<div class="panel-group">	
		<?php
		for($i = 0; $i < count($projects); $i++)
		{
			$id = $projects[$i]->id;

			echo "<div id='".$id."' class='panel panel-default'>";
			
			// Heading.
			echo "<div class='panel-heading'>";
			// Title.
			echo "<h4 class='panel-title'>";
			echo $projects[$i]->name;
			echo "</h4>";
			// End heading.
			echo "</div>";

			echo "<div id='".$id."' class='panel-body'>";
			echo "<p>".$projects[$i]->about."</p>";
			echo $projects[$i]->display;
			echo "</div>"; // !Panel body.

			echo "</div>"; // !Panel default.
		}
		?>
	</div><!--!Panel-group-->
	
</div><!--!Projects-->

<?php
include("inc/footer.php");
?>	