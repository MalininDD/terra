<?php 
	$content = filter_var(trim($_POST['goal']), FILTER_SANITIZE_STRING);

	$user_id = (string)$_COOKIE['id'];
	echo $user_id;
	require "../blocks/connect.php";

	$mysql->query("INSERT INTO `goalsOfTheDay` (`content`, `user_id`) 
		VALUES('$content', '$user_id')") ;

	$mysql->close();
?>