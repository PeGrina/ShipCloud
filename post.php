<?php
require 'sc_includes/assets/orms/rb.php';
require 'sc_includes/assets/orms/gb.php';
require 'sc_admin/sc_db/setup.php';

if(isset($_COOKIE['login'])):
	echo "Hello Administrator";
else:
$user = L::readAll('sc_posts',1000);
$user2 = R::findone('sc_tems','id = 1');
$shift = $user[(int)$_GET['id'] - 1];
$id = $shift['id']; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><? echo $shift['post'] ?></title>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<style type="text/css">
<? echo file_get_contents(substr($user2->css,1)) ?>
</style>
	<script>
		<? echo file_get_contents(substr($user2->js,1)) ?>
	</script>
</head>
<body>
	<h1><? echo $shift['post']?></h1>
	<p><? echo $shift['text'] ?></p>
</body>
</html>
<?php
endif;
?>