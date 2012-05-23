<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
<?php //header( 'Content-Type: text/html; charset=utf-8' ); ?>
<?php
require_once 'core.php';

$gTitle = $_POST['title'];
$gStanzas = $_POST['stanzas'];
$gChrous = $_POST['chrous'];
$gBridge = $_POST['bridge'];

//echo $gTitle;
//$t = mb_split(' ', $gTitle);
//$t = mb_str_split($gTitle);

$gSongID = addSong($gTitle);
addStanzas($gStanzas, $gSongID);
addChrous($gChrous, $gSongID);
addBridge($gBridge, $gSongID);
header('Location: admin-song-list.php'); exit;

//echo $gStanzas;

/**
 * This function split the unicode string correctly.
 */
function mb_str_split( $string ) { 
    # Split at all position not after the start: ^ 
    # and not before the end: $ 
    return preg_split('/(?<!^)(?!$)/u', $string ); 
} 

function addSong($title) {
	$firstLetter = mb_str_split($title);
	$firstLetter = $firstLetter[0];

	$title = mysql_real_escape_string($title);
	$firstLetter = mysql_real_escape_string($firstLetter);
	
	//mysql_query("SET CHARACTER SET utf8");
	/**
	 * This 2 lines are needed to take care of the unicode
	 */
	mysql_query('SET character_set_client=utf8');
	mysql_query('SET character_set_connection=utf8');
	
	$q = 'insert into `song` (`song_title`, `song_first_letter`) values ("'.$title.'", "'.$firstLetter.'")';
	$r = mysql_query($q) or exit(mysql_error());

	return mysql_insert_id();
}

function addStanzas($stanzas, $songID) {
	for($i=0; $i<count($stanzas); $i++) {
		if($stanzas[$i] != '') {
			$stanza = mysql_real_escape_string($stanzas[$i]);
			/**
			 * This 2 lines are needed to take care of the unicode
			 */
			mysql_query('SET character_set_client=utf8');
			mysql_query('SET character_set_connection=utf8');
			$q = 'insert into `stanza` (`song_id`, `stanza`, `stanza_order`) values ("'.$songID.'", "'.$stanza.'", "'.($i+1).'")';
			$r = mysql_query($q) or exit(mysql_error());
		}
	}

	return true;
}

function addChrous($chrous, $songID) {
	$chrous = mysql_real_escape_string($chrous);
	if($chrous != '') {
		/**
		 * This 2 lines are needed to take care of the unicode
		 */
		mysql_query('SET character_set_client=utf8');
		mysql_query('SET character_set_connection=utf8');
		$q = 'insert into `chrous` (`song_id`, `chrous`) values ("'.$songID.'", "'.$chrous.'")';
		$r = mysql_query($q) or exit(mysql_error());
	}

	return true;
}

function addBridge($bridge, $songID) {
	$bridge = mysql_real_escape_string($bridge);
	if($bridge != '') {
		/**
		 * This 2 lines are needed to take care of the unicode
		 */
		mysql_query('SET character_set_client=utf8');
		mysql_query('SET character_set_connection=utf8');
		$q = 'insert into `bridge` (`song_id`, `bridge`) values ("'.$songID.'", "'.$bridge.'")';
		$r = mysql_query($q) or exit(mysql_error());
	}
	return true;
}

?>
