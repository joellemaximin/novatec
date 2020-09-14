<?php
	$username = 'root';

	$db = new PDO('mysql:host=localhost;dbname=novatec_test', $username);
	
	foreach($db->query('SELECT * from clients') as $row) {
	//	echo("success");
	}
	
	
	
?>
