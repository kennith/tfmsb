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
	
		<link rel="stylesheet" href="<?php echo $gJQCSS; ?>" />
		<link rel="stylesheet" href="css/core.css" />
		<script type="text/javascript" src="<?php echo $gJQ; ?>"></script>
		<script type="text/javascript" src="<?php echo $gJQJS; ?>"></script>
	</head> 

	<body> 
		
		<div data-role="page">
			<div data-role="header">
				<h1>本週詩歌</h1>
			</div>
			
			<div data-role="content" class="content">
				
				<p>領詩: <?php echo $worshipLeader; ?></p>
				
				<?php
				if($verseTitle) {
					echo '<p>'.$verseTitle.': <br />'.$verse.'</p>';
				}
				?>
				
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