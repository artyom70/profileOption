<?php

	$link = mysql_connect('localhost', 'root', '');
	if(!$link) {
		die('Could not connection' . mysql_error());
	}
	
	mysql_select_db('project', $link);
	
	
?>
