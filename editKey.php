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
	 $rows=$mysqli->query("SELECT data_purchase, data_end,
	id_OC, id_store, cost, kluch FROM digital_keys WHERE
	id_key=".$_GET['id_key']);
	 $OC=$mysqli->query("SELECT id_proc, proc_name FROM proces");
	 $stores=$mysqli->query("SELECT id_store, name FROM digital_stores");
	 while ($st = mysqli_fetch_array($rows)) {
	 $id=$_GET['id_key'];
	 $data_purchase = $st['data_purchase'];
	 $data_end = $st['data_end'];
	 $id_OC = $st['id_OC'];
	 $id_store = $st['id_store'];
	 $cost = $st['cost'];
	 $kluch = $st['kluch'];
	 }
	print "<form action='save_editKey.php' metod='get'>";
	print "Дата покупки: <input name='data_purchase' size='50' type='text'
	value='".$data_purchase."'>";
	print "<br>Дата окончания: <input name='data_end' size='20' type='text'
	value='".$data_end."'>";
	echo "<br> ID OC:<select name='id_OC'>";
		while ($row = mysqli_fetch_array($OC)) {
			if ($id_OC == $row['id_proc']) {
				echo "<option value='" . $row['id_proc'] ."' selected='selected'>" . $row['proc_name'] ."</option>";
			} else {echo "<option value='" . $row['id_proc'] ."'>" . $row['proc_name'] ."</option>";}
		}
		echo "</select>";

	echo "<br>ID цифрового магазина: <select name='id_store'>";
		while ($row = mysqli_fetch_array($stores)) {
			if ($id_store == $row['id_store']) {
				echo "<option value='" . $row['id_store'] ."' selected='selected'>" . $row['name'] ."</option>";
			} else {echo "<option value='" . $row['id_store'] ."'>" . $row['name'] ."</option>";}
		}
		echo "</select>";
	print "<br>Цена: <input name='cost' rows='4'
	cols='40' value='".$cost."'>";
	print "<br>ключ: <input name='kluch' rows='4'
	cols='40' value='".$kluch."'>";
	print "<input type='hidden' name='id_key' value='".$id."'> <br>";
	print "<input type='submit' name='' value='Сохранить'>";
	print "</form>";
	print "<p><a href=\"Proc.php\"> Вернуться к списку
	пользователей </a>";
	?>
</body>
</html>