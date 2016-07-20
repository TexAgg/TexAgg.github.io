<?php
$pageTitle = "Projects";
$section = "projects";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//require __DIR__ . '/../vendor/autoload.php';
require(__DIR__ . "/app/utils.php");

$params = App\getDbParams();

$con = new mysqli($params->host, $params->user, $params->password, $params->db_name, intval($params->port), $params->socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//var_dump($con);

$projects = mysqli_query($con, "SELECT * FROM `projects` WHERE 1 ORDER BY `id`") or die (mysqli_error($con));

include("inc/header.php");
?>

<!-- Sidebar menu.
http://jsfiddle.net/TT8uV/2/ -->
<div class="sidebar span4 hidden-phone">
	<ul id="sidebar-menu" class="nav nav-stacked list-group">
		<?php
		while($project = $projects->fetch_array())
		{
			echo "<li class='list-group-item'><a href='projects#" . $project["htmlId"] . "'>" . $project["projectName"] . "</a></li>";
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
		$projects->data_seek(0);
		while($project = $projects->fetch_array())
		{
			$id = $project["htmlId"];

			echo "<div id='".$id."' class='panel panel-default'>";
			
			// Heading.
			echo "<div class='panel-heading'>";
			// Title.
			echo "<h4 class='panel-title'>";
			//echo "<a data-toggle='collapse' href='#".$id."-body'>";
			echo $project["projectName"];
			//echo "</a>";
			echo "</h4>";
			// End heading.
			echo "</div>";

			echo "<div id='".$id."' class='panel-body'>";
			echo "<p>".$project["aboutProject"]."</p>";
			echo $project["display"];

			echo "</div>";
		}
		?>
	</div><!--Panel-group-->
	
</div><!--Projects-->

<?php
include("inc/footer.php");
?>	