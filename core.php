<?php
session_start();
require_once 'config.php';
require_once 'functions.php';

mysql_connect($db_host, $db_user, $db_password);
mysql_select_db($db_name);

mb_language('uni');
mb_internal_encoding('UTF-8');
mysql_query("SET CHARACTER SET utf8");
mysql_query('set names "utf8"');
?>
