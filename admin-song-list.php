<?php
require_once 'core.php';
isLogin();
?>
<!doctype html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="css/admin-core.css" />
	</head>

	<body>

		<div id="tf-container">
			<div>
			<a href="admin-song-add.php">Add Song</a>
			<a href="admin-week-add.php">Fellowship meeting</a>
			<a href="index.php">Site</a>
			</div>
			<div id="tf-song-list-container">
				<?php
				$q = 'select * from `song` order by `song_title`';
				$r = mysql_query($q) or exit(mysql_error());

				while($row = mysql_fetch_array($r)) {
					echo '<div class="tf-song-list-row" data-song-id="'.$row['song_id'].'">'.$row['song_title'].'</div>';
				}
				?>
			</div>
			<div id="tf-song-action-container">
				action here
			</div>
			<div id="tf-song">
				content here
			</div>
		</div>
	
	</body>
</html>
<script type="text/javascript" src="<?php echo $gJQ; ?>"></script>
<script>
$(function() {
	//window.alert('ready');
	$('.tf-song-list-row').eq(3).click();
});

$('.tf-song-list-row').click(function() {
	var songID = $(this).data('song-id');
	/*
	$.ajax({
		url: 'admin-song.php?songID=' + data('song-id');
	}).done(function() {
		console.log('done');
	}).always(function() {
		console.log('always');
	}).fail(function() {
	});
	*/

	try {
	$.getJSON('admin-song.php?songID='+songID+'', function(data) {
		var bridge = data.bridge;
		var chorus = data.chorus;
		var firstLetter = data.first_letter;
		var stanza = data.stanza;
		var title = data.title;

		$('#tf-song').html('');
		$('#tf-song').append('<div>' + title + songID + '</div>');

		$.each(stanza, function(key, value) {
			$('#tf-song').append('<div>' + key + '</div>');
			$('#tf-song').append('<div>' + value + '</div>');
		});

		$('#tf-song').append('<div>Chorus</div>');
		$('#tf-song').append('<div>' + chorus + '</div>');
		$('#tf-song').append('<div>Bridge</div>');
		$('#tf-song').append('<div>' + bridge + '</div>');

		//console.log(stanza.length);
		//console.log(stanza[0]);

		//console.log(stanza.getString());
		//console.log(stanza[1]);

		/*
		$.each(stanza, function(key, value) {
			console.log(key + ' ' + value);
		});
		*/

	});
	} catch(e) {
		console.log(e);
	}

});

//jqxhr.done(function { console.log('test');} );
</script>
