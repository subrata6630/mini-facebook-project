<?php
	$link = mysql_connect("localhost:33306" , "root", "");
	
	if ($link == false) {
		echo "Error: can't connect to database server";
		exit;
	}
	
	if (mysql_select_db("minifacebook2", $link) == false) {
		echo "Error: can't connect to database";
		exit;
	}
?>