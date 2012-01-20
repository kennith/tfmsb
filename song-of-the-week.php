<?php
require_once 'core.php';

$gFMID = $_GET['fmid'];
$worshipLeader = getFMWorshipLeader($gFMID);
$songs = getCurrentFMSongs($gFMID);

$verseTitle = getFMVerseTitle($gFMID);
$verse = getFMVerse($gFMID);
?>
<!DOCTYPE html> 
<html> 
	<head> 
		<title><?php echo $gTitlePrefix; ?> 本週詩歌</title> 
		
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<meta charset="utf-8" />
	
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" />
		<link rel="stylesheet" href="css/core.css" />
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>
	</head> 

	<body> 
		
		<div data-role="page">
			<div data-role="header">
				<h1>本週詩歌</h1>
			</div>
			
			<div data-role="content" class="content">
				
				<p>領詩: <?php echo $worshipLeader; ?></p>
				<p><?php echo $verseTitle; ?>: <br /><?php echo $verse; ?></p>
				
				<hr />
				
				<ul data-role="listview">
					
				<?php
				for($i=0; $i<count($songs); $i++) {
					echo '<li><a href="#s'.$songs[$i].'">'.getSongTitle($songs[$i]).'</a></li>';
				}
				?>
				</ul>
				
			</div>
			
			<div data-role="footer">
				<h4><?php echo $gFooterMessage; ?></h4>
			</div>
		</div>
		
		<?php
		for($i=0; $i<count($songs); $i++) {
			echo getSongDisplay($songs[$i]);
		}
		?>
	</body>
</html>