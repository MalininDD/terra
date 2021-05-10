<?php 
	$content = filter_var(trim($_POST['goal']), FILTER_SANITIZE_STRING);

	$user_id = (isset ($_COOKIE['user_id'])) ? $_COOKIE['user_id'] : 0;
	if ($user_id == 0) {
		exit();
	}
	require "../blocks/connect.php";

	$mysql->query("INSERT INTO `goalsOfTheDay` (`content`, `user_id`) 
		VALUES('$content', '$user_id')") ;

	$mysql->close();

	header('Location: /');
?>