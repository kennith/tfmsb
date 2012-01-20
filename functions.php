<?php
function getSongTitle($songID) {
	$q = 'select `song_title` from song where song_id="'.$songID.'"';	
	$r = mysql_query($q) or exit(mysql_error());
	
	$row = mysql_fetch_array($r);
	
	return $row['song_title'];
}

function getStanza($songID) {
	$stanza = Array();
	
	$q = 'select `stanza` from `stanza` where `song_id` = "'.$songID.'" order by stanza_order';
	$r = mysql_query($q) or exit(mysql_error());
	
	while($row = mysql_fetch_array($r)) {
		array_push($stanza, nl2br($row['stanza']));
	}
	
	return $stanza;
}

function getChrous($songID) {
	$q = 'select `chrous` from `chrous` where `song_id` = "'.$songID.'"';
	$r = mysql_query($q) or exit(mysql_error());
	
	$row = mysql_fetch_array($r);
	
	return nl2br($row['chrous']);	
}

function getBridge($songID) {}

function getSongDisplay($songID) {
	$title = getSongTitle($songID);
	$stanza = getStanza($songID);
	$chrous = getChrous($songID);
	$bridge = getBridge($songID);
	
	$sd = '
	<div data-role="page" id="s'.$songID.'" class="content-song">

		<div data-role="header">
			<h1>'.$title.'</h1>
		</div><!-- /header -->
	
		<div data-role="content">';
	
	for($i=0; $i<count($stanza); $i++) {
		$sd .= ($i+1).'<br />';
		$sd .= $stanza[$i];
		if($i==0 && $chrous != '') {
			$sd .= '<br /><hr />';
			$sd .= 'Chrous:<br />';
			$sd .= $chrous;
			
		}
		$sd .= '<hr />';
	}
	
	
	$sd .= '</div><!-- /content -->
		
		<div data-role="footer">
			<h4>TF use only</h4>
		</div>
		<!-- /footer -->
		
	</div>
	<!-- /page two -->
	';
	
	return $sd;
}

function getCurrentFMID() {
	$q = 'select `fm_id` from `fm` order by `fm_id` desc';
	$r = mysql_query($q) or exit(mysql_error());
	
	$row = mysql_fetch_array($r);
	
	return $row['fm_id'];
}

function getCurrentFMDate($fmid) {
	$q = 'select `fm_date` from `fm` where `fm_id` = "'.$fmid.'"';
	$r = mysql_query($q) or exit(mysql_error());
	
	$row = mysql_fetch_array($r);
	
	return $row['fm_date'];
}

function getCurrentFMSongs($fmid) {
	$songs = Array();
	
	$q = 'select `song_id` from `fm_song` where `fm_id`="'.$fmid.'"';
	$r = mysql_query($q) or exit(mysql_error());
	
	while($row=mysql_fetch_array($r)) {
		array_push($songs, $row['song_id']);
	}
	
	return $songs;
}

function getFMWorshipLeader($fmid) {
	$q = 'select `fm_song_leader` from fm where `fm_id`="'.$fmid.'"';
	$r = mysql_query($q) or exit(mysql_error());
	$row = mysql_fetch_array($r);
	
	return $row['fm_song_leader'];
}

function getFMVerse($fmid) {
	$q = 'select `fm_verse` from `fm_verse` where `fm_id` = "'.$fmid.'"';
	$r = mysql_query($q) or exit(mysql_error());
	$row = mysql_fetch_array($r);
	
	return $row['fm_verse'];
}

function getFMVerseTitle($fmid) {
	$q = 'select `fm_verse_title` from `fm_verse` where `fm_id` = "'.$fmid.'"';
	$r = mysql_query($q) or exit(mysql_error());
	$row = mysql_fetch_array($r);
	
	return $row['fm_verse_title'];
}
?>