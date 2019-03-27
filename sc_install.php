<?php
/*
* @package ShipCloud 
* @version 0.2
*/
if(!trim(file_get_contents('sc_admin/sc_db/setup.php')) == ''):
	header('Location: sc_admin/sc_admin.php');
else:
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<!-- Ru version -->
	<title>Install ShipCloud</title>
	<link rel="stylesheet" type="text/css" href="sc_includes/css/styles_for_cs.css" defer>
</head>
<body>
	<h3>Здравствуйте, вы находитесь в месте установки ShipCloud</h3>
	<form method="post" action="sc_process_install.php">
	<p>
		Напишите базу данных в которой будет хранится всё о вашем сайте.
	</p>
	<input type="text" name="db" required placeholder="DB">
	<p>
		Напишите свой логин для входа в базу данных.
	</p>
	<input type="text" name="login_db" required placeholder="login db">
	<p>
		Напишите свой пароль для входа в базу данных.
	</p>
	<input type="password" name="pass_db" placeholder="pass db">
	<p>
		Напишите хост базы данных.
	</p>
	<input type="text" name="host" required placeholder="host db">
	<input type="submit" name="sub">
	</form>
</body>
</html>
<?
endif;

?>