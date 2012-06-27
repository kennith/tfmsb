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

			<div data-role="content">
				<ul data-role="listview" data-inset="">
					<li><a href="#song-kleung">Kennith</a></li>
					<li><a href="#song-achen">Aron</a></li>
					<li><a href="#song-skwok">Suki</a></li>
				</ul>
			</div>
		</div>

		<div data-role="page" id="song-kleung">
			<div data-role="header">
				<a href="2012-summer-retreat.php" data-icon="home" data-iconpos="notext"  title="Home"></a>
				<h1>Lead by Kennith</h1>
			</div>
			<div data-role="content">
				<ul data-role="listview" data-inset="">
					<li><a href="#s27">沒有你，那有我</a></li>
					<li><a href="#s17">主喜悅的事</a></li>
					<li><a href="#s15">Once Again</a></li>
				</ul>
			</div>
			<div data-role="footer">
			</div>
		</div>

		<div data-role="page" id="song-achen">
			<div data-role="header">
				<a href="2012-summer-retreat.php" data-icon="home" data-iconpos="notext"  title="Home"></a>
				<h1>Lead by Aron</h1>
			</div>
			<div data-role="content">
				<ul data-role="listview" data-inset="">
					<li><a href="#s37">一生不枉過</a></li>
					<li><a href="#s38">只因愛</a></li>
					<li><a href="#s35">十架的冠冕</a></li>
					<li><a href="#s39">在你跟前</a></li>
				</ul>
			</div>
			<div data-role="footer">
			</div>
		</div>

		<div data-role="page" id="song-skwok">
			<div data-role="header">
				<a href="2012-summer-retreat.php" data-icon="home" data-iconpos="notext"  title="Home"></a>
				<h1>Lead by Suki</h1>
			</div>
			<div data-role="content">
				<ul data-role="listview" data-inset="">
					<li><a href="#s40">榮美真光</a></li>
					<li><a href="#s41">沿路因你伴我走</a></li>
					<li><a href="#s42">請差遣我</a></li>
					<li><a href="#s43">How Great is Our God</a></li>
				</ul>
			</div>
			<div data-role="footer">
			</div>
		</div>

		<?php
		$s = Array(27, 17, 15, 
			37, 38, 35, 39,
			40, 41, 42, 43	);

		foreach($s as $i=>$v) {
			$sd = getSongDisplay($v);
			echo $sd;
		}
		?>
	</body>
</html>
