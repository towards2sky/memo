<?php
error_reporting(0);
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Not connected : ' . mysql_error());
}

// make foo the current db
$db_selected = mysql_select_db('memory', $link);

?>