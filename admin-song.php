<?php
require_once 'core.php';

$gSongID = $_GET['songID'];
$gSongID = mysql_real_escape_string($gSongID);

$stanzas = getStanza($gSongID);

echo '{';
echo '"title": "'.getSongTitle($gSongID).'",';
echo '"first_letter": "'.getSongFirstLetter($gSongID).'",';

echo '"stanza": {';

for($i=0; $i<count($stanzas); $i++) {
	echo '"'.($i+1).'": "'.str_replace(array("\n\r", "\n", "\r"), ' ', $stanzas[$i]).'"';

	if($i+1 < count($stanzas)) {
		echo ',';
	}
}
echo '},';

#echo '"chorus": "me m fsjfkjs <br />",';
echo '"chorus": "'.str_replace(array("\n\r", "\n", "\r"), ' ', getChrous($gSongID)).'",';
echo '"bridge": "'.str_replace(array("\n\r", "\n", "\r"), ' ', getBridge($gSongID)).'",';
echo '"songid": "'.$gSongID.'"';
echo '}';
?>
