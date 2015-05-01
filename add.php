<?php
	$pdo = new PDO("mysql:host=localhost; dbname=rorensu",'root','pass');
	
	// id name rank hyper　主キー（ID)　をクライアントから受け取る
	$name = $_POST['name'];
	$rank = $_POST['rank'];
	$hyper = $_POST['hyper'];
	$comment = $_POST['comment'];
	
	//データベースにデータを転送する
	$test1 = sprintf("INSERT INTO member (name, rank, hyper, comment) VALUES ('%s','%s','%s','%s')",  $name, $rank, $hyper, $comment);
	$pdo->exec($test1);
	echo("データベースに $name のデータを登録しました");
?>