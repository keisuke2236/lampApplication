<?php
error_reporting(0);
$pdo = new PDO("mysql:host=localhost; dbname=rorensu",'root','pass');
$stmt = $pdo->query("SELECT * FROM member");

while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
	$rows[] = $row;
}
	echo json_encode($rows,JSON_UNESCAPED_UNICODE);

?>