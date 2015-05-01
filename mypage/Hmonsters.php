<?php
$pdo = new PDO("mysql:host=localhost; dbname=rorensu",'root','pass');
$pdo->query("CREATE TABLE Hmonsters(
	id INTEGER,
	name VARCHAR(32))");
?>