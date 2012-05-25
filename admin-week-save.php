<?php
require_once 'core.php';

$gWeek = $_POST['week'];
$gSongLeader = $_POST['songLeader'];
$gSongIDs = $_POST['songIDs']; 


//echo $gWeek;
//echo $gSongLeader;
//print_r($gSongIDs);

checkFM($gWeek);
addFM($gWeek, $gSongLeader, $gSongIDs);

header('Location: admin-song-list.php'); exit;
?>
