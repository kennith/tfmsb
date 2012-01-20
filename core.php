<?php
require_once 'config.php';
require_once 'functions.php';

mysql_connect($db_host, $db_user, $db_password);
mysql_select_db($db_name);

mysql_query("SET CHARACTER SET utf8");
?>