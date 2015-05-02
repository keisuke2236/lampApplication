<?php
$name = $_POST['name'];
// $name = 'rorensu';
// $id = 4;
$pdo = new PDO("mysql:host=localhost; dbname=rorensu",'root','pass');
$test1 = sprintf("DELETE FROM member WHERE name='%s'", $name);
$pdo->exec($test1);
echo "メンバーから $name を削除しました"
?>