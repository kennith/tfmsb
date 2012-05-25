<?php
require_once 'core.php';
$week = date('W');

?>
<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="css/admin-core.css" />
		<title>Weekly Add</title>
	</head>
	<body>
		<div id="tf-container">
			<form action="admin-week-save.php" method="post">
				<input type="hidden" name="week" value="<?php echo $week; ?>" />
				Week: <?php echo $week; ?>

				<div>Song Leader:</div>
				<div><input type="text" name="songLeader" value="" /></div>

				<div>Song</div>

				<div id="tf-song-choose-container">
					<?php
					$q = 'select song_title, `song_id` from `song` order by `song_first_letter`';
					$r = mysql_query($q) or exit(mysql_error());
					while($row = mysql_fetch_array($r)) {
						?>
						<div class="tf-song-choose"><input type="checkbox" name="songIDs[]" value="<?php echo $row['song_id']; ?>" /><?php echo $row['song_title']; ?></div>
						<?php
					}
						//
					?>

				</div>
				<div><input type="submit" value="Save" /></div>
			</form>
		</div>
	</body>
</html>
