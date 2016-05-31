<?php
header('Content-Type: text/html; charset=utf-8'); 
//including the database connection file
include_once("config.php");
//fetching data in descending order (lastest entry first)
$result = mysql_query("SELECT * FROM users ORDER BY id DESC");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>	
	<title>Домашня сторінка</title>
</head>

<body>
<a href="add.html">Додати нові дані</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Ім'я</td>
		<td>Прізвище</td>
		<td>Логін</td>
		<td>Країна</td>
		<td>Email</td>
		<td>Пароль</td>
		<td>Обновити</td>
	</tr>
	<?php 
	if($result)
	{
	while($res = mysql_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['surname']."</td>";
		echo "<td>".$res['login']."</td>";
		echo "<td>".$res['country']."</td>";
		echo "<td>".$res['email']."</td>";	
		echo "<td>".$res['password']."</td>";
		echo "<td><a href=\"edit.php?id=$res[id]\">Змінити</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Ви впевнені, що бажаєте видалити даного користувача?')\">Видалити</a></td>";		
	}
	}
	else
	{
		echo 'Invalid'. mysql_error()."/n";
	}
	?>
	</table>
</body>
</html>