<?php 
	$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
	$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
	$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

	if ((mb_strlen($login) < 5)|| (mb_strlen($login) > 90))  {
		echo "длина логина недопустимая";
		exit();
	} else if ((mb_strlen($password) < 6)|| (mb_strlen($password) > 90))  {
		echo "длина пароля недопустимая";
		exit();
	} else if ((mb_strlen($name) < 2)|| (mb_strlen($name) > 90))  {
		echo "длина имени недопустимая";
		exit();
	}

	$password = md5($password."asdasd4323");
	require "../blocks/connect.php";
	
	$mysql->query("INSERT INTO `users` (`name`, `login`, `password`) 
		VALUES('$name', '$login', '$password')") ;

	$mysql->close();

	header('Location: /');

?>