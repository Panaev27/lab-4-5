<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Панаев Семён Пи-323</title>
</head>
<body>
	<?php
	 // Подключение к базе данных:
	define ("HOST", "localhost");
	define ("USER", "a0646621_os");
	define ("PASS", "root");
	define ("DB", "a0646621_os"); // установление соединения с сервером
	 // подключение к базе данных:
	 $mysqli = mysqli_connect(HOST, USER, PASS, DB) or die ("Невозможно
	подключиться к серверу");
	 $mysqli->query('SET NAMES UTF-8'); // Тип кодировки
	 // Строка запроса на добавление записи в таблицу:
	 $sql_add = "INSERT INTO user SET user_name='" . $_GET['name']
	."', user_login='".$_GET['login']."', user_password='"
	.$_GET['password']."', user_e_mail='".$_GET['e_mail'].
	"', user_info='".$_GET['info']. "'";
	 $mysqli->query($sql_add); // Выполнение запроса
	 if (mysqli_affected_rows($mysqli)>0) // если нет ошибок при выполнении запроса
	 { print "<p>Спасибо, вы зарегистрированы в базе данных.";
	 print "<p><a href=\"index.php\"> Вернуться к списку
	пользователей </a>"; }
	 else { print "Ошибка сохранения. <a href=\"index.php\">
	Вернуться к списку книг </a>"; }
	?>
</body>
</html>