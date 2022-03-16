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
	 $rows=$mysqli->query("SELECT proc_name, razryad,
	devolper, user_count, type FROM proces WHERE
	id_proc=".$_GET['id_proc']);
	 while ($st = mysqli_fetch_array($rows)) {
	 $id=$_GET['id_proc'];
	 $name = $st['proc_name'];
	 $razryad = $st['razryad'];
	 $devolper = $st['devolper'];
	 $user_count = $st['user_count'];
	 $type = $st['type'];
	 }
	print "<form action='save_editP.php' metod='get'>";
	print "Имя: <input name='name' size='50' type='text'
	value='".$name."'>";
	print "<br>Логин: <input name='razryad' size='20' type='text'
	value='".$razryad."'>";
	print "<br>Пароль: <input name='devolper' size='20' type='text'
	value='".$devolper."'>";
	print "<br>Е-mail: <input name='user_count' size='30' type='text'
	value='".$user_count."'>";
	print "<br>Информация: <textarea name='type' rows='4'
	cols='40'>".$type."</textarea>";
	print "<input type='hidden' name='id_proc' value='".$id."'> <br>";
	print "<input type='submit' name='' value='Сохранить'>";
	print "</form>";
	print "<p><a href=\"Proc.php\"> Вернуться к списку
	пользователей </a>";
	?>
</body>
</html>