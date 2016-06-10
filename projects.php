<?php
	$pageTitle = "Projects";
	$section = "projects";

	$xml = simplexml_load_file("resources/config.xml");
	//var_dump($xml);
	$projects = $xml->projects->item;
	//var_dump($projects);

	include("inc/header.php");
?>

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
				//echo "<a data-toggle='collapse' href='#".$id."-body'>";
				echo $projects[$i]->name;
				//echo "</a>";
				echo "</h4>";
				// End heading.
				echo "</div>";

				echo "<div id='".$id."' class='panel-body'>";
				echo "<p>".$projects[$i]->about."</p>";
				echo $projects[$i]->display;

				echo "</div>";
			}
		?>
	</div><!--Panel-group-->
	
</div><!--Projects-->

<?php
	include("inc/footer.php");
?>	