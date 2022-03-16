<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Панаев Семён Пи-323</title>
</head>
<body>
	<H2>Регистрация на сайте:</H2>
	<form action="save_newKey.php" metod="get">
	 Дата приобретения: <input name="data_purchase" size="50" type="date">
	<br>Дата окончания: <input name="data_end" size="20" type="date">
	<br>
	ID OC:
	<?php 
 	define ("HOST", "localhost");
	define ("USER", "a0646621_os");
	define ("PASS", "root");
	define ("DB", "a0646621_os"); // установление соединения с сервером
	 // подключение к базе данных:
	 $mysqli = mysqli_connect(HOST, USER, PASS, DB) or die ("Невозможно
	подключиться к серверу");
	 $mysqli->query('SET NAMES UTF-8');
	 $rows=$mysqli->query("SELECT id_proc, proc_name FROM proces");
	echo "<select name='id_OC'>";
		while ($row = mysqli_fetch_array($rows)) {
		    echo "<option value='" . $row['id_proc'] ."'>" . $row['proc_name'] ."</option>";
		}
		echo "</select>";
		 ?>
	<br>ID цифрового магазина: 
	<?php 
	 $rows=$mysqli->query("SELECT id_store, name FROM digital_stores");
	echo "<select name='id_store'>";
		while ($row = mysqli_fetch_array($rows)) {
		    echo "<option value='" . $row['id_store'] ."'>" . $row['name'] ."</option>";
		}
		echo "</select>";
		 ?>
	<br>цена: <input name="cost" rows="4" cols="40">
	<br>Ключ: <input name="kluch" rows="4" cols="40">
	<p><input name="add" type="submit" value="Добавить">
	<input name="b2" type="reset" value="Очистить"></p>
	</form>
	<p>
	<a href="Proc.php"> Вернуться к списку пользователей </a>
</body>
</html>