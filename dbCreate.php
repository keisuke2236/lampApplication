<?php
	$pdo = new PDO("mysql:host=localhost; dbname=rorensu",'root','pass');
	$pdo->query("CREATE TABLE member(
	id INTEGER AUTO_INCREMENT,
	name VARCHAR(32),
	rank VARCHAR(50),
	hyper VARCHAR(500),
	comment VARCHAR(1000),
	PRIMARY KEY(id))");
?>


