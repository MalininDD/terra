<?php 
	setcookie('user_id', $user['id'], time() - 3600, "/");
	header('Location: /');
?>