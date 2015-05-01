<?php
	$pdo = new PDO("mysql:host=localhost; dbname=rorensu",'root','pass');
	$pdo->query('DROP TABLE IF EXISTS member')
?>