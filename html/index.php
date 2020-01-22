<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
</head>
<body>

<div class="content">
<?php
    include "menu.php"
?>

	<h1>Личный сайт студента GeekBrains</h1>

	<div class="center">
	<img src="img/thatguy.png">
		<div class="box_text">
            <p><b>Добрый день</b>. Меня зовут <a href="https://t.me/ya_thatguy">@thatguy</a>. Немного умею программировать (самообучение), но сайты на PHP делаю впервые.</p>

            <p>Для этого даже пришлось поднять свой сервер, настроить <a href="https://httpd.apache.org/">web server apache2</a> на нем =)</p>

			<p>В этом мне помог IT-портал <a href="https://geekbrains.ru">GeekBrains</a></p>

            <p>Ну и немного <a href="https://cloud.yandex.ru">Yandex.Cloud</a>!</p>

			<p>На этом сайте вы сможете сыграть в несколько игр, которые я написал: <br><br>
			<a href="index.php">Главная</a>,
			<a href="puzzle.php">Загадки</a>,
			<a href="guess.php">Угадайка</a>,
            <a href="generator.php">Генератор паролей</a>
			</p>
		</div>
	</div>
</div>
<footer>
    <?php
    include "footer.php"
    ?>
</footer>
</body>
</html>