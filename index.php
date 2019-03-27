<?php
require 'sc_includes/assets/orms/rb.php';
require 'sc_includes/assets/orms/gb.php';
require 'sc_admin/sc_db/setup.php';

if(isset($_COOKIE['login'])):
	echo "Hello Administrator";
else:
$user = L::readAll('sc_posts',1000);
$user2 = R::findone('sc_tems','id = 1');
$shift = $user[10];
$id = $shift['id']; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<style>
<?php echo file_get_contents($user2->css); ?>
</style>
	<script src="<? echo $user2->js ?>"></script>
</head>
<body>
	<header></header>
	<nav></nav>
	<div class="body">
		<p class="posts"><? echo $shift['post'];?><a href="post.php?id=<? echo $id ?>">Почитать</a></p>	
	</div>
	<footer></footer>
</body>
</html>


<?php
endif;
?>