<?php
require_once 'core.php';
$gFirstLetter = $_GET['firstLetter'];
?>
<!DOCTYPE html> 
<html> 
	<head> 
		<title><?php echo $gTitlePrefix; ?> 歌書</title> 
		
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<meta charset="utf-8" />
	
		<link rel="stylesheet" href="<?php echo $gJQCSS; ?>" />
		<link rel="stylesheet" href="css/core.css" />
		<script type="text/javascript" src="<?php echo $gJQ; ?>"></script>
		<script type="text/javascript" src="<?php echo $gJQJS; ?>"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</head> 

	<body> 
		<div data-role="page">
			<div data-role="header">
				<h1>歌書</h1>
			</div>
			
			<div data-role="content" class="content">
				<ul data-role="listview">
					<?php

					mysql_query('SET NAMES "utf8"');
					$q = 'select `song_id`, `song_title` from `song` where `song_first_letter` = "'.$gFirstLetter.'"';
					$r = mysql_query($q) or exit(mysql_error());
					
					while($row=mysql_fetch_array($r)) {
						echo '<li><a href="song-display.php?songID='.$row['song_id'].'">'.$row['song_title'].'</a></li>';
					}

					?>
				</ul>
				

			</div>
			
			<div data-role="footer">
				<h4><?php echo $gFooterMessage; ?></h4>
			</div>
		</div>
	</body>
</html>