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
			<div data-role="header">
				<h1>Summer Retreat</h1>
			</div>

			<div data-role="content" style="text-align: center;">
				<div><img src="img/2012-summer-retreat-map.gif" /></div>
				<div><a href="https://maps.google.com/maps?client=ubuntu&channel=cs&q=4431+Meridian+Ave+Oxnard+CA&ie=UTF-8&hq=&hnear=0x80e84e02141fdc01:0x90f81b5f03a20460,4431+Meridian+Ave,+Oxnard,+CA+93035&gl=us&ei=vH3rT7_NJ_G42QXpwpWlAQ&ved=0CAgQ8gEwAA">4431 Meridian Ave, Oxnard CA</a></div>
			</div>

			<div data-role="footer">
				<h1>Direction</h1>
			</div>
		</div>
	</body>
</html>
