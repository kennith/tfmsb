<?php
require_once 'core.php';
$gSongID = $_GET['songID'];
//$gSongID = 2;

$songTitle = getSongTitle($gSongID);
$stanza = getStanza($gSongID);
$chrous = getChrous($gSongID);
$bridge = getBridge($gSongID);
?>

<!DOCTYPE html> 
<html> 
	<head> 
		<title>Page Title</title> 
		
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<meta charset="utf-8" />
	
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" />
		<link rel="stylesheet" href="css/core.css" />
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>
	</head> 

	<body> 
		<!--
		<div data-role="page">
			<div data-role="header">
				<h1><?php echo $songTitle; ?></h1>
			</div>
			
			<div data-role="content" class="content-song">
		-->
				<?php
				
				$sd = getSongDisplay($gSongID);
				echo $sd;
				
				/*
				for($i=0; $i<count($stanza); $i++) {
					echo ($i+1).'<br />';
					echo $stanza[$i];
					if($i==0 && $chrous != '') {
						echo '<br /><hr />';
						echo 'Chrous:<br />';
						echo $chrous;
						
					}
					echo '<hr />';
				}
				*/
				?>
			<!--</div>
			
			<div data-role="footer">
				<h4><?php echo $gFooterMessage; ?></h4>
			</div>
			
		</div>
		-->
	</body>
</html>