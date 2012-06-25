<?php
require_once 'core.php';

?>
<!DOCTYPE html> 
<html> 
	<head> 
		<title><?php echo $gTitlePrefix; ?> Summer Retreat</title> 
		
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<meta charset="utf-8" />
	
		<link rel="stylesheet" href="<?php echo $gJQCSS; ?>" />
		<link rel="stylesheet" href="css/core.css" />
		<script type="text/javascript" src="<?php echo $gJQ; ?>"></script>
		<script type="text/javascript" src="<?php echo $gJQJS; ?>"></script>
	</head> 

	<body> 
		<div data-role="page">
			<div data-role="header" data-position="fixed">
				<div data-role="navbar">
					<ul>
						<li><a href="a.html">6/29</a></li>
						<li><a href="b.html">6/30</a></li>
						<li><a href="c.html">7/1</a></li>
					</ul>
				</div><!-- /navbar -->

			</div><!-- /header -->

			<?php
			$i=0;
			while($i < 50) {
				echo "<div>test</div>";
				$i++;
			}; 
			?>

		</div>
	</body>
</html>
