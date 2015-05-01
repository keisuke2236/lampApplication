<?php
	$pdo = new PDO("mysql:host=localhost; dbname=rorensu",'root','pass');
	
	// id name rank hyper　主キー（ID)　をクライアントから受け取る
	$id = $_POST['id'];
	$name = $_POST['monster'];
	
	//データベースにデータを転送する
	$test1 = sprintf("INSERT INTO Hmonsters (id, name) VALUES ('%s','%s')",  $id, $name);
	$pdo->exec($test1);
	echo("297リストに $id $name を追加しました");
?>