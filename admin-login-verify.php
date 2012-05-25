<?php
require_once 'core.php';

$gName = $_POST['name'];
$gPassword = $_POST['password'];
$gPassword = md5($gPassword);

if(isLoginVerified($gName, $gPassword)) {
	$_SESSION['userName'] = $gName;
	header('Location: admin-song-list.php'); exit;
} else {
	echo 'not correct, try again. ';
}
