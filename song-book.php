<?php
require_once 'core.php';
?>
<!DOCTYPE html> 
<html> 
	<head> 
		<title><?php echo $gTitlePrefix; ?> 歌書</title> 
		
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<meta charset="utf-8" />
	
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" />
		<link rel="stylesheet" href="css/core.css" />
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</head> 

	<body> 
		<div data-role="page">
			<div data-role="header">
				<h1>歌書</h1>
			</div>
			
			<div data-role="content" class="content">
				<?php
				$q = 'select song_id, song_title from song order by song_title';
				$r = mysql_query($q) or exit(mysql_error());
				
				for($i=0; $row = mysql_fetch_array($r); $i++) {
					echo '<div><a href="song-display.php?songID='.$row['song_id'].'">'.$row['song_title'].'</a></div>';
				}
				?>
				
				<hr />
				
				<ul data-role="listview">
					<?php
					$q = 'select `song_first_letter` from `song` group by `song_first_letter` order by `song_first_letter`';
					$r = mysql_query($q) or exit(mysql_error());
					
					while($row=mysql_fetch_array($r)) {
						echo '<li>'.$row['song_first_letter'].'</li>';
					}
					?>
				</ul>
				
				<hr />
				
				
				<div class="ui-grid-b">
					<?php
					$set = Array('a', 'b', 'c');
					
					$q = 'select `song_first_letter` from `song` group by `song_first_letter` order by `song_first_letter`';
					$r = mysql_query($q) or exit(mysql_error());
					
					for($i=0; $row=mysql_fetch_array($r); $i++) {
						echo '<div class="ui-block-'.$set[$i%3].'">
							<div class="ui-bar ui-bar-c tf-bar">
							'.$row['song_first_letter'].'
							</div>
						</div>';
					}
					?>
				</div>
			</div>
			
			<div data-role="footer">
				<h4><?php echo $gFooterMessage; ?></h4>
			</div>
		</div>
	</body>
</html>