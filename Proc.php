<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=	, initial-scale=1.0">
	<title>Панаев Семен ПИ-323</title>
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
	?>
	<h2>Зарегистрированные пользователи:</h2>
	<table border="1">
	<tr> // Операционные системы
	 <th> id </th><th> Название </th> <th> тип </th><th> разрядность </th><th> разработчик </th><th> Кол-во пользователей </th>
	 <th> Редактировать </th> <th> Уничтожить </th> </tr>
	<?php
	$result=$mysqli->query("SELECT id_proc, proc_name, type, razryad, devolper, user_count
	FROM proces"); // запрос на выборку сведений о пользователях
	while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
	 echo "<tr>";
	 echo "<td >" . $row['id_proc'] . "</td>";
	 echo "<td >" . $row['proc_name'] . "</td>";
	 echo "<td >" . $row['type'] . "</td>";
	 echo "<td>" . $row['razryad'] . "</td>";
	 echo "<td>" . $row['devolper'] . "</td>";
	  echo "<td>" . $row['user_count'] . "</td>";
	 echo "<td><a href='editP.php?id_proc=" . $row['id_proc']
	. "' '>Редактировать</a></td>"; // запуск скрипта для редактирования
	 echo "<td><a href='deleteP.php?id_proc=" . $row['id_proc']
	. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
	 echo "</tr>";
	}
	print "</table>";
	$num_rows = mysqli_num_rows($result); // число записей в таблице БД
	print("<P>Всего ос: $num_rows </p>");
	?>
	<p> <a href="newP.php"> Добавить ос </a>
		<br>
	<h2>Магазины</h2>
	<table border="1">
	<tr> // Цифровые магазины
	 <th> id </th> <th> Название </th> <th> ссылка </th> <th> Редактировать </th> <th> Уничтожить </th></tr>
	<?php
	$result=$mysqli->query("SELECT id_store, name, url
	FROM digital_stores"); // запрос на выборку сведений о пользователях
	while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
	 echo "<tr>";
	 echo "<td >" . $row['id_store'] . "</td>";
	 echo "<td >" . $row['name'] . "</td>";
	 echo "<td >" . $row['url'] . "</td>";
	 echo "<td><a href='editStore.php?id_store=" . $row['id_store']
	. "' '>Редактировать</a></td>"; // запуск скрипта для редактирования
	 echo "<td><a href='deleteStore.php?id_store=" . $row['id_store']
	. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
	 echo "</tr>";
	}
	print "</table>";
	$num_rows = mysqli_num_rows($result); // число записей в таблице БД
	print("<P>Всего магазинов: $num_rows </p>");
	?>
	<p> <a href="newStore.php"> Добавить магазин </a>
		<br>
	<h2>Ключи</h2>

	<table border="1">
	<tr> // Цифровые ключи
	 <th> id </th><th> Дата приобретения </th> <th> дата окончания </th> <th> ID ОС </th> <th> ID цифрового магазина </th> <th> стоимость </th> <th> ключ </th> <th> Редактировать </th> <th> Уничтожить </th></tr>
	<?php
	$result=$mysqli->query("SELECT id_key, data_purchase, data_end, id_OC, id_store, cost, kluch
	FROM digital_keys"); // запрос на выборку сведений о пользователях
	while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
	 echo "<tr>";
	 echo "<td >" . $row['id_key'] . "</td>";
	 echo "<td >" . $row['data_purchase'] . "</td>";
	 echo "<td >" . $row['data_end'] . "</td>";
	 echo "<td >" . $row['id_OC'] . "</td>";
	 echo "<td >" . $row['id_store'] . "</td>";
	 echo "<td >" . $row['cost'] . "</td>";
	 echo "<td >" . $row['kluch'] . "</td>";
	 echo "<td><a href='editKey.php?id_key=" . $row['id_key']
	. "' '>Редактировать</a></td>"; // запуск скрипта для редактирования
	 echo "<td><a href='deleteKey.php?id_key=" . $row['id_key']
	. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
	 echo "</tr>";
	}
	print "</table>";
	$num_rows = mysqli_num_rows($result); // число записей в таблице БД
	print("<P>Всего ключей: $num_rows </p>");
	?>
	<p> <a href="newKey.php"> Добавить ключ </a>
		<br>
	<a href="gen_pdf.php">Сгенерировать пдф файл</a> <br>
	<a href="gen_xls.php">Сгенерировать xls файл</a>
</body>
</html>