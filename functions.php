<?php
function isLogin() {
	if(!isset($_SESSION['userName'])) {
		header('Location: admin-login.php'); exit;
		echo 'not login, exiting'; 
	}
}

function isLoginVerified($name, $password) {
	$name = mysql_real_escape_string($name);
	$password = mysql_real_escape_string($password);

	$q = 'select user_id from user where `user_name` = "'.$name.'" and `user_password` = "'.$password.'"';
	$r = mysql_query($q) or exit(mysql_error());

	return mysql_num_rows($r);
}

function getSongTitle($songID) {
	$q = 'select `song_title` from song where song_id="'.$songID.'"';	
	$r = mysql_query($q) or exit(mysql_error());
	
	$row = mysql_fetch_array($r);
	
	return $row['song_title'];
}

function getSongFirstLetter($songID) {
	$songID = mysql_real_escape_string($songID);
	$q = 'select `song_first_letter` from song where song_id="'.$songID.'"';	
	$r = mysql_query($q) or exit(mysql_error());
	
	$row = mysql_fetch_array($r);
	
	return $row['song_first_letter'];
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

function getBridge($songID) {
	$q = 'select `bridge` from `bridge` where `song_id` = "'.$songID.'"';
	$r = mysql_query($q) or exit(mysql_error());
	
	$row = mysql_fetch_array($r);
	
	return nl2br($row['bridge']);	
}

function getSongDisplay($songID, $htmlTagID='') {
	$title = getSongTitle($songID);
	$stanza = getStanza($songID);
	$chrous = getChrous($songID);
	$bridge = getBridge($songID);
	
	if($htmlTagID=='') {
		$htmlTagID = 's'.$songID.'';
	}
	
	$sd = '
	<div data-role="page" id="'.$htmlTagID.'" class="content-song">

		<div data-role="header">
			<h1>'.$title.'</h1>
		</div><!-- /header -->
	
		<div data-role="content">';
	
	for($i=0; $i<count($stanza); $i++) {
		$sd .= '<div class="tf-stanza-number">'.($i+1).'</div>';
		$sd .= $stanza[$i];
		if($i==0 && $chrous != '') {
			$sd .= '<br /><hr />';
			$sd .= '<div class="tf-stanza-number">Chrous:</div>';
			$sd .= $chrous;
			
		}
		$sd .= '<hr />';
	}
	
	if($bridge) {
		$sd .= '<div class="tf-stanza-number">Bridge:</div>';
		$sd .= $bridge;
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

function getCurrentFMSongLeader($fmid) {
	$q = 'select `fm_song_leader` from `fm` where `fm_id` = "'.$fmid.'"';
	$r = mysql_query($q) or exit(mysql_error());
	
	$row = mysql_fetch_array($r);
	
	return $row['fm_song_leader'];
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

function checkFM($week) {
	$q = 'select `fm_id` from `fm` where `fm_week`='.$week.'';
	$r = mysql_query($q) or exit(mysql_error());

	if(mysql_num_rows($r) > 0) {
		//echo 'already inserted for this week, remove, then proceed';
		$q = 'delete from `fm` where `fm_week` = '.$week.'';
		$r = mysql_query($q) or exit(mysql_error());
	} else {
		//echo 'proceed';
	}
}

function addFM($week, $songLeader, $songIDs) {
	$week = mysql_real_escape_string($week);
	$songLeader = mysql_real_escape_string($songLeader);

	$q = 'insert into `fm` (`fm_week`, `fm_song_leader`) values ("'.$week.'", "'.$songLeader.'")';
	$r = mysql_query($q) or exit(mysql_error());

	$fmID = mysql_insert_id();

	foreach($songIDs as $songID) {
		$songID = mysql_real_escape_string($songID);
		$q = 'insert into `fm_song` (`fm_id`, `song_id`) values ("'.$fmID.'", "'.$songID.'")';
		$r = mysql_query($q) or exit(mysql_error());
	}
}
?>
