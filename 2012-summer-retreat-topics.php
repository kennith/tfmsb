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
				<ul data-role="listview">
					<li><a href="#jason">by Jason</a></li>
					<li><a href="#alice">by Alice</a></li>
					<li><a href="#cat">by Cat</a></li>
				</ul>
			</div>

			<div data-role="footer">
				<h4><?php echo $gFooterMessage; ?></h4>
			</div>
		</div>

		<div data-role="page" id="cat">
			<div data-role="header">
				<h1>Summer Retreat</h1>
			</div>

			<div data-role="content">
				<h4>修身, 齊家, 治國, 平天下 by Cat</h4>
				<h4>Unity from a fellowship's perspective</h4>


				<p>哥林多前書 12:12-31</p>

				<p>12 要知道，正如身體雖然是一個，卻有很多部分，而身體的各部分雖然有很多，卻是一個身體；基督也是如此。 13 實際上，我們受洗也都是藉著一位聖靈成為一個身體——無論是猶太人或外邦人，無論是奴隸或自由人——並且我們都是受了一位聖靈的澆灌</p>
				 
				 <p>14 這樣，身體也不是只有一個部分，而是有很多部分。 15 如果腳說：「因為我不是手，我就不屬於身體」，難道它因此就不屬於身體嗎？ 16 如果耳朵說：「因為我不是眼睛，我就不屬於身體」，難道它因此就不屬於身體嗎？ 17 如果整個身體是個眼睛，那麼聽覺在哪裡呢？如果整個身體是個耳朵，那麼嗅覺在哪裡呢？ 18 所以現在神照著自己的意願，把各部分一一安置在身體上了。 19 如果全都是一個部分，那麼身體在哪裡呢？ 20 但如今，身體的各部分雖然很多，身體卻是一個。21 所以眼睛不能對手說：「我不需要你！」頭也不能對兩腳說：「我不需要你們！」</p>
				  
				  <p>22 相反，身體上那些所謂比較軟弱的部分，難道不更是必要的嗎？ 23 並且身體上那些我們認為不太受尊重的部分，我們加添給它們格外的尊重；這樣我們不俊美的部分，就有了格外的俊美。 24 至於我們那些俊美的部分，就不需要加添什麼了；而神搭配了身體，把格外的尊重賜給那有缺乏的，</p>
				   
				   <p>25 免得身體中有分爭，好讓各部分彼此之間都有同樣的關顧。 26 如果一個部分受苦，所有的部分就一同受苦；如果一個部分得榮耀，所有的部分就一同歡樂。</p>
				    
				    <p>27 你們就是基督的身體，而且是各個部分中的一個。 28 在教會中，神所安排的：首先是使徒，第二是做先知傳道的，第三是教師，然後是有大能的；隨後是使人痊癒的恩賜、幫助的恩賜、管理的恩賜、各種殊言的恩賜。29 難道都是使徒嗎？都是做先知傳道的嗎？都是教師嗎？都是有大能的嗎？30 都有使人痊癒的恩賜嗎？都說殊言嗎？都翻譯殊言嗎？31 其實你們要渴慕那些更大的恩賜；而我還要把極其高超的道指示給你們。</p>

				    <div style="text-align: center;"><a href="http://www.youtube.com/watch?v=AOBthOPuw2U"><img src="http://img.youtube.com/vi/AOBthOPuw2U/hqdefault.jpg" /></a></div>
			</div>

			<div data-role="footer">
				<h4><?php echo $gFooterMessage; ?></h4>
			</div>
		</div>
	</body>
</html>
