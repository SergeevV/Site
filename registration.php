<?php 
header('Content-Type: text/html; charset=utf-8'); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Онлайн книжковий магазин</title>
<meta name="keywords" content="Book Store Template, Free CSS Template, CSS Website Layout, CSS, HTML" />
<meta name="description" content="Book Store Template, Free CSS Template, Download CSS Website" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="templatemo_container">
    <?php
	include("menu.php");
	include("header.php");
	?>
    
    <div id="templatemo_content">
    	
        <div id="templatemo_content_left">
        	<?php
			include_once("content_left.php");
			?>
        </div> <!-- end of content left -->
<?php
	$connect = mysql_connect('localhost','root','') or die (mysql_error());
	mysql_select_db('serg');
	
	if (isset ($_POST['submit']))
	{
		$name = mysql_escape_string($_POST['name']);
		$surname = mysql_escape_string($_POST['surname']);
		$login = mysql_escape_string($_POST['login']);
		$country = mysql_escape_string($_POST['country']);
		$email = mysql_escape_string($_POST['email']);
		$password = mysql_escape_string($_POST['password']);
		$r_password = mysql_escape_string($_POST['r_password']);
		if ($password == $r_password)
		{
			$password = md5($password);
			$query = mysql_query("INSERT INTO users VALUES ('','$name','$surname','$login','$country','$email','$password')");
			echo '<center><label><FONT size="4" color=yellow face="times new roman">Ви успішно зареєстровані!</label></font><center>';
		}
		else
		{
			echo '<center><label><FONT size="4" color=yellow face="times new roman">Паролі не співпадають!</label></font><center>';
		}
	}
	else 
	{
		echo'<div id="content" class="float_r">
	    <h1>Реєстрація</h1>
		<form method="POST" action="registration.php">
		<font color=yellow><table width="70%" cellspacing="0" cellpadding="5">
		<tr> 
		<td align="right" width="100">Ім*я</td>
		<td><input type="text" name="name" placeholder="Введіть ім*я" maxlength="50" size="20" required></td>
		</tr>
		<tr> 
		<td align="right" width="100">Прізвище</td>
		<td><input type="text" name="surname" placeholder="Введіть прізвище" maxlength="50" size="20" required></td>
		</tr>
		<tr> 
		<td align="right" width="100">Логін</td>
		<td><input type="text" name="login" placeholder="Введіть логін" maxlength="50" size="20" required></td>
		</tr>
		<tr> 
		<td align="right" width="100">Країна</td>
		<td><select name="country" required>
		<option disabled>Оберіть країну</option>
		<option value="Ukraine">Україна</option>
		<option value="Russia">Росія</option>
		</td>
		</tr>
		<tr> 
		<td align="right">E-mail</td>
		<td><input type="text" name="email" placeholder="Введіть email" maxlength="50" size="20" required></td>
		</tr>
		<tr> 
		<td align="right">Пароль</td>
		<td><input type="password" name="password" maxlength="50" size="20" required></td>
		</tr>
		<tr> 
		<td align="right">Повторіть пароль</td>
		<td><input type="password" name="r_password" maxlength="50" size="20" required></td>
		</tr>
		</table>
		<div>
			<label for="message">Отримувати повідомлення з сайту:</label>
			<input type="checkbox" name="lan1" value="yes"
			                                   checked>Так
			<input type="checkbox" name="lan2" value="no"
			                                   checked>Ні
		</div>		
		<div>
			<label for="delivery">Пріоритетний тип доставки:</label>
			<input type="radio" name="mail" value="courier service"
			                                   >Кур*єрська служба 
			<input type="radio" name="mail" value="postage"
			                                   >Поштова пересилка
		</div></font>
		<div>
			<input type="submit" name="submit" value="Зареєструватися" />
		</div>
		</form>
		</div>';
	}
?>
  <div class="cleaner_with_height">&nbsp;</div>
        </div> <!-- end of content right -->
    	<div class="cleaner_with_height">&nbsp;</div>
      <div id="templatemo_footer">
	       <a href="index.php">Домашня сторінка</a> | <a href="index.php">Пошук</a> | <a href="#">Зв'язатися з нами</a><br />
        Copyright © 2016 <a href="#"><strong>Books Company</strong></a> 
	</div> <!-- end of footer -->
</div> <!-- end of container --></body>
</html>