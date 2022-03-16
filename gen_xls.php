<?

header('Content-Type: application/vnd.ms-excel; format=attachment;');
header('Content-Disposition: attachment; filename= Лаба4.xls');
header('Expires: Mon, 18 Jul 1998 01:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');

define ("HOST", "localhost");
	define ("USER", "a0646621_os");
	define ("PASS", "root");
	define ("DB", "a0646621_os"); // установление соединения с сервером
	 // подключение к базе данных:
	 $mysqli = mysqli_connect(HOST, USER, PASS, DB) or die ("Невозможно
	подключиться к серверу");

?>

<meta http-equiv="content-type" content="text/html; charset=utf-8">

<table>

<tr>

<th>№ п/п</th>
<th>Название</th>
<th>тип оборудования</th> 
<th>Разрядность</th> 
<th>Разработчик</th> 
<th>Количество пользователей</th>
</tr>
<?php 
$procs=$mysqli->query("SELECT id_proc, proc_name, type, razryad, devolper, user_count
	FROM proces"); 
$rows = "";
$count= 0;
while ($row=mysqli_fetch_array($procs)) {
	$count++;
	echo "<tr>";
	echo "<td>". $count ."</td>";
	echo "<td>". $row['proc_name'] ."</td>";
	echo "<td>". $row['type'] ."</td>";
	echo "<td>". $row['razryad'] ."</td>";
	echo "<td>". $row['devolper'] ."</td>";
	echo "<td>". $row['user_count'] ."</td>";
	echo "</tr>";
};
 ?>


</table>