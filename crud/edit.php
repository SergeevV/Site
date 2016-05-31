<?php
header('Content-Type: text/html; charset=utf-8'); 
// including the database connection file
include_once("config.php");
if(isset($_POST['update']))
{	
	$id = mysql_escape_string($_POST['id']);
	$name = mysql_escape_string($_POST['name']);
	$surname = mysql_escape_string($_POST['surname']);
	$login = mysql_escape_string($_POST['login']);
	$country = mysql_escape_string($_POST['country']);
	$email = mysql_escape_string($_POST['email']);
	$password = mysql_escape_string($_POST['password']);	
	
	// checking empty fields
	if(empty($name) || empty($surname) || empty($login) || empty($country) || empty($email) || empty($password)) 
	{
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($surname)) {
			echo "<font color='red'>Surname field is empty.</font><br/>";
		}
		
		if(empty($login)) {
			echo "<font color='red'>Login field is empty.</font><br/>";
		}
		
		if(empty($country)) {
			echo "<font color='red'>Country field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		if(empty($password)) {
			echo "<font color='red'>Password field is empty.</font><br/>";
		}
	} 
	else {	
		//updating the table
		$result = mysql_query("UPDATE users SET name='$name',surname='$surname',login='$login',country='$country',email='$email',password='$password' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];
//selecting data associated with this particular id
$result = mysql_query("SELECT * FROM users WHERE id=$id");
if (!$result){
	mysql_error();
}
else{
while($res = mysql_fetch_array($result))
{
	$name = $res['name'];
	$surname = $res['surname'];
	$login = $res['login'];
	$country = $res['country'];
	$email = $res['email'];
	$password = $res['password'];
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>	
	<title>Змінити дані</title>
</head>

<body>
	<a href="index.php">Домашня сторінка</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Ім'я</td>
				<td><input type="text" name="name" value=<?php echo $name;?>></td>
			</tr>
			<tr> 
				<td>Прізвище</td>
				<td><input type="text" name="surname" value=<?php echo $surname;?>></td>
			</tr>
			<tr> 
				<td>Логін</td>
				<td><input type="text" name="login" value=<?php echo $login;?>></td>
			</tr>
			<tr> 
				<td>Країна</td>
				<td><input type="text" name="country" value=<?php echo $country;?>></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value=<?php echo $email;?>></td>
			</tr>
			<tr> 
				<td>Пароль</td>
				<td><input type="text" name="password" value=<?php echo $password;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Змінити"></td>
			</tr>
		</table>
	</form>
</body>
</html>