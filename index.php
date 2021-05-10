<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Форма регистрации</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css ">
</head>
<body>
	<div class="container mt-4">
		<?php 
			if($_COOKIE['user_id'] == ''):
		?>
		<div class="row">
			<div class="col">
				<h1>Форма регистрации</h1>
				<form action="validation-form/check.php" method="post">
					<input type="text" class="form-control" name="login" id="login" 
					placeholder="Input login"><br>
					<input type="text" class="form-control" name="name" id="name" 
					placeholder="Input name"><br>
					<input type="password" class="form-control" name="password" id="password " 
					placeholder="Input password"><br>
					<button type="submit" class="btn btn-success">Зарегистрироваться</button>
				</form>
			</div>
			<div class="col">
				<h1>Форма авторизации</h1>
				<form action="validation-form/
				auth.php" method="post">
					<input type="text" class="form-control" name="login" id="login" 
					placeholder="Input login"><br>
					<input type="password" class="form-control" name="password" id="password" 
					placeholder="Input password"><br>
					<button type="submit" class="btn btn-success">Авторизоваться</button>
				</form>
			</div>
		</div>
		<?php else: ?>
			<p>Id: <?=$_COOKIE['user_id'] ?>. Чтобы выйти нажмите <a href="/exit.php">выйти</a>. </p>
			<p>Добавьте ваши цели на день!</p>
			<form action="validation-form/sendgoals.php" method="post">
				<input type="text" class="form-control" name="goal" id="goal" 
				placeholder="Input goal">
				<button type="submit" class="btn btn-success">Добавить</button>
			</form>
		<?php endif; ?>
	</div>
	
</body>
</html>