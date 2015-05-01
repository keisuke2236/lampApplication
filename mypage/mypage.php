<?php
$id = $_GET['id'];
$pdo = new PDO("mysql:host=localhost; dbname=rorensu",'root','pass');
$usr = $pdo->query("SELECT * FROM member where id = $id");
$usrNamearray = $usr->fetchAll();
$usrName = $usrNamearray[0]['name'];
$usrComment = $usrNamearray[0]['comment'];
$stmt = $pdo->query("SELECT * FROM Hmonsters where id = $id");

?>

<html>
<head>
	<meta charset='utf-8'>
	<link rel='stylesheet' type='text/css' href='mypage.css'>
</head>
<script type='text/javascript'>
	document.addEventListener( 'DOMContentLoaded', function(){
		document.getElementById('add297button').addEventListener('click', add297func);
	});
	

	function add297func(){
		var newdata = 'monster=' + document.getElementById('add297').value + '& id=' + <?php echo $id; ?>;
		var addRequest = new XMLHttpRequest();
		addRequest.onreadystatechange=function(){
			if (addRequest.readyState==4 && addRequest.status==200){
				location.reload();
			}
		}
		addRequest.open( 'POST', 'add297.php', true );
		addRequest.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		addRequest.send( newdata );
	}
</script>

<body>	
	<p align='center'>
		<font size='5'>
			<?php echo $usrName; ?>さんの個人ページ
			<a href='../index.html'>
				戻る
			</a>
		</font>
	</p>
	<div id='Hmonsters'><table border=1><tr><th>297モンスター一覧</th></tr>
	<?php
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		echo "<tr><td>";
		echo($row['name']);
		echo "</td></tr>";
	}
	echo "</table>";
	?>
	<input type='text' id='add297' />
	<input type='button' value='297追加' id='add297button'>
	</div>
	<div id='free'>
		自由記入欄<br />
		<?php echo $usrComment; ?>
	</div>
	

</body>
</html>