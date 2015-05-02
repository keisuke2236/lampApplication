<?php
$name = $_POST['name'];
$id = $_POST['id'];
// $name = 'rorensu';
// $id = 4;
$pdo = new PDO("mysql:host=localhost; dbname=rorensu",'root','pass');
$test1 = sprintf("DELETE FROM Hmonsters WHERE id=%s AND name='%s'", $id, $name);
$pdo->exec($test1);
echo "297リストから $id の $name を削除しました"
?>