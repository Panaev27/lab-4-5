<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Панаев Семён Пи-323</title>
</head>
<body>
	<H2>Регистрация на сайте:</H2>
	<form action="save_newP.php" metod="get">
	 Название: <input name="name" size="50" type="text">
	<br>разряд: <input name="razryad" size="20" type="text">
	<br>Разработчик: <input name="devolper" size="20" type="text">
	<br>Количество пользователей: <input name="user_count" size="30" type="text">
	<br>тип: <textarea name="type" rows="4" cols="40">
	</textarea>
	<p><input name="add" type="submit" value="Добавить">
	<input name="b2" type="reset" value="Очистить"></p>
	</form>
	<p>
	<a href="Proc.php"> Вернуться к списку пользователей </a>
</body>
</html>