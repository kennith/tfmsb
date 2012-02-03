<?php
require_once 'core.php';

$currentFMID = getCurrentFMID();
$currentFMDate = getCurrentFMDate($currentFMID);

?>
<!DOCTYPE html> 
<html> 
	<head> 
		<title><?php echo $gTitlePrefix; ?> Home</title> 
		
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
				<h1>提摩太團</h1>
			</div>
			
			
			<div data-role="content" class="">
				<div class="content-primary">
					<div id="tf-banner">
						<img src="img/tf.png" />
						
						<div><a href="<?php echo $gWebsite; ?>">Official Website</a></div>
						
					</div>
					<ul data-role="listview" data-inset="true"  data-divider-theme="a">
						<li data-role="list-divider">
							.
						</li>
						<li>
							<a href="song-of-the-week.php?fmid=<?php echo $currentFMID; ?>" rel="external" data-prefetch>本週詩歌:  <?php echo $currentFMDate; ?></a>
						</li>
						<li>
							<a href="#fv">團訓</a>
						</li>
						<li>
							<a href="#fs">團歌</a>
						</li>
					</ul>
					
					<ul data-role="listview" data-inset="true" class="ui-listview" data-divider-theme="a" data-theme="">
						<li data-role="list-divider">
							資源
						</li>
												
						<li>
							<a href="song-book.php">歌書 <span class="tf-annot">experiential</span></a>
						</li>
						
						<li>
							<a href="#qr" data-rel="dialog">QR</a>
						</li>
					</ul>
				</div>
				
			</div>
			
			<div data-role="footer">
				<h5>TF use only.</h5>
			</div>
			
		</div>
		
		<div data-role="page" id="fv">

			<div data-role="header">
				<h1>團訓</h1>
			</div><!-- /header -->
		
			<div data-role="content">	
				<h2>羅馬書 15:13</h2>
				
				<p>但 願 使 人 有 盼 望 的 神 ， 因 信 將 諸 般 的 喜 樂 、 平 安 充 滿 你 們 的 心 ， 使 你 們 藉 著 聖 靈 的 能 力 大 有 盼 望 。</p>	
				
			</div><!-- /content -->
			
			<div data-role="footer">
				<h4><?php echo $gFooterMessage; ?></h4>
			</div><!-- /footer -->
		</div><!-- /fv -->
		
		<?php
		$fs = getSongDisplay($gTFSongID, 'fs');
		echo $fs;
		?>
		
		<div data-role="page" id="qr">

			<div data-role="header">
				<h1>QR Code</h1>
			</div><!-- /header -->
		
			<div data-role="content" data-rel="back" class="tf-align-center">
				<img src="<?php echo $gQRImgUrl; ?>" />
			</div><!-- /content -->
			
			<div data-role="footer">
				<h4><?php echo $gFooterMessage; ?></h4>
			</div><!-- /footer -->
		</div><!-- /fs -->
		
	</body>
</html>