<?php require_once 'core.php'; ?>
<?php isLogin(); ?>

<!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Add new song</title>
		<link rel="stylesheet" href="css/admin-core.css" />
	</head>

	<body>
		<div id="tf-container">
		<form action="admin-song-save.php" method="post">
			<div>
				<div>Title</div>
				<div><input type="text" name="title" placeholder="e.g. The Greatest One" value="" />
			</div>

			<div>
				<div>Stanza</div>
				<div id="x">
					<textarea rows="5" cols="80" name="stanzas[]" class="tf-stanza"></textarea>
				</div>

				<div>
					<input type="submit" id="tf-btn-add-stanza" value="Add Stanza" />
				</div>
			</div>

			<div>
				<div>Chrous</div>
				<div>
					<textarea rows="5" cols="80" name="chrous"></textarea>
				</div>
			</div>

			<div>
				<div>Bridge</div>
				<div>
					<textarea rows="5" cols="80" name="bridge"></textarea>
				</div>
			</div>
			
			<div>
				<input type="submit" value="Add" />
			</div>
		</form>					
		</div>
	</body>
</html>
<script type="text/javascript" src="<?php echo $gJQ; ?>"></script>
</script>
<script>
$(function() {
	$('#tf-btn-add-stanza').click(function() {
		//var temp = $('.tf-stanza').first();
		//$('.tf-stanza').first().after('<h3>test</h3>');
		//console.log(temp);
		$('.tf-stanza:first').clone().appendTo($('#x'));
		//$('.tf-stanza').last().after(temp);
		return false;
	});
});
</script>
