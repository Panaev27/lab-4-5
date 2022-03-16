<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Панаев Семён Пи-323</title>
</head>
<body>
	<?php
define ("HOST", "localhost");
	define ("USER", "a0646621_os");
	define ("PASS", "root");
	define ("DB", "a0646621_os"); // установление соединения с сервером
	 // подключение к базе данных:
	 $mysqli = mysqli_connect(HOST, USER, PASS, DB) or die ("Невозможно
	подключиться к серверу");
	 $mysqli->query('SET NAMES UTF-8');
	 $rows=$mysqli->query("SELECT name, url FROM digital_stores WHERE
	id_store=".$_GET['id_store']);
	 while ($st = mysqli_fetch_array($rows)) {
	 $id_store=$_GET['id_store'];
	 $name = $st['name'];
	 $url = $st['url'];
	 }
	print "<form action='save_editStore.php' metod='get'>";
	print "Название: <input name='name' size='50' type='text'
	value='".$name."'>";
	print "<br>Ссылка: <input name='url' size='20' type='text'
	value='".$url."'>";
	print "<input type='hidden' name='id_store' value='".$id_store."'> <br>";
	print "<input type='submit' name='' value='Сохранить'>";
	print "</form>";
	print "<p><a href=\"Proc.php\"> Вернуться к списку
	пользователей </a>";
	?>
</body>
</html>