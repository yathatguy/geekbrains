<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Генератор паролей</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="content">
    <?php
    include "menu.php"
    ?>
</div>

<div class="contentWrap">
    <div class="content">
        <div class="center">
            <h1>Генератор паролей</h1>
            <div class="box">

                <?php
                $alphabet = ["0", "1", "2", "3", "4", "5", "6", "6", "7", "8", "9", "a", "A", "b", "B", "c", "C", "d", "D", "e", "E", "f", "F", "g", "G", "h", "H", "i", "I", "j", "J", "k", "K", "l", "L", "m", "M", "n", "N", "o", "O", "p", "P", "q", "Q", "r", "R", "s", "S", "t", "T", "u", "U", "v", "V", "w", "W", "x", "X", "y", "Y", "z", "Z"];

                if (isset($_GET["userAnswer"])) {
                    $len = $_GET["userAnswer"];
                    $password = "";

                    for ($i = 0; $i < $len; $i++) {
                        $password = $password . $alphabet[array_rand($alphabet)];
                    }
                    echo $password;
                }

                ?>

                <form method="get">

                    <p>Сгенерировать новый пароль. Какой длины?</p>
                    <input type="number" name="userAnswer">
                    <br>
                    <input type="submit" value="Сгенерировать" name="">

            </div>
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