<?

if(!isset($_POST['sub'])&&trim(file_get_contents('sc_admin/sc_db/setup.php')) == ''){
	header('Location: sc_install.php');
}else{
	require "sc_includes/assets/orms/rb.php";
	
	$data = "<?php
	session_start();
	R::setup( 'mysql:host=".$_POST['host'].";dbname=".$_POST['db']."','".$_POST['login_db']."','". $_POST['pass_db']."');
	L::setup( '".$_POST['host']."','".$_POST['db']."','".$_POST['login_db']."','". $_POST['pass_db']."');
	R::ext('xdispense', function( \$type ){ 
        return R::getRedBean()->dispense( \$type ); 
    });
	";
	file_put_contents('sc_admin/sc_db/setup.php', $data);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Логин, Пароль для входа в админ панель</title>
</head>
<body>
	<form action="sc_admin/sc_admin.php" method="post">
		<input type="text" name="login" placeholder="Login for admin Panel" required><br><br>
		<input type="password" name="pass" placeholder="Pass for admin Panel" required><br><br>
		<input type="submit" name="sub2">
	</form>
</body>
</html>