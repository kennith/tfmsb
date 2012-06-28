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
		<?php
		date_default_timezone_set('America/Los_Angeles');
		$d = date('Ymd');
		($d < 20120629) ? $d = 20120629 : '';
		$d = '#p'.$d;
		?>
		<div data-role="page">
			<div data-role="header">
				<h1>Summer Retreat</h1>
			</div>

			<div data-role="content">
				<div style="text-align: center;">
					<div>
						<img src="img/worship.jpg" />
					</div>
					<div>
						<p>R & R</p>
						<p>First Step to Unity in Our Holy Hope</p>
					</div>
				</div>
				<?php
				//echo date_default_timezone_get();
				//echo $d;
				?>
				<div class="content-primary">
					<ul data-role="listview" data-inset="true"  data-divider-theme="a">
						<li data-role="list-divider">
							Summer Retreat 2012
						</li>
						<li>
							<a href="2012-summer-retreat-schedule.php<?php echo $d; ?>" rel="external">Schedule</a>
						</li>

						<li>
							<a href="2012-summer-retreat-topics.php" rel="external">Topic</a>
						</li>

						<li>
							<a href="2012-summer-retreat-songs.php" rel="external">Singspiration</a>
						</li>

						<li>
							<a href="2012-summer-retreat-devotion.php<?php echo $d; ?>" rel="external">Devotion</a>
						</li>
					</ul>

					<ul data-role="listview" data-inset="true"  data-divider-theme="a">
						<li data-role="list-divider">
							Information
						</li>

						<li>
							<a href="2012-summer-retreat-direction.php">Direction</a>
						</li>


					</ul>

				</div>
			</div>
		</div>

	</body>
</html>

