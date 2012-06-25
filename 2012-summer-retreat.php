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

			<div data-role="content">
				<div class="content-primary">
					<ul data-role="listview" data-inset="true"  data-divider-theme="a">
						<li data-role="list-divider">
							Summer Retreat 2012
						</li>
						<li>
							<a href="2012-summer-retreat-schedule.php">Schedule</a>
						</li>

						<li>
							<a href="">Topic</a>
						</li>

						<li>
							<a href="2012-summer-retreat-devotion.php">Devotion</a>
						</li>
					</ul>

					<ul data-role="listview" data-inset="true"  data-divider-theme="a">
						<li data-role="list-divider">
							Information
						</li>

						<li>
							<a href="">Location</a>
						</li>


					</ul>

				</div>
			</div>
		</div>

	</body>
</html>

