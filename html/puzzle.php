<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Игра в загадки</title>
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
            <h1>Игра в Загадки</h1>
            <div class="box">

                <?php
                    if (isset($_GET["userAnswer1"]) || isset($_GET["userAnswer2"]) || isset($_GET["userAnswer3"])) {
                        $score = 0;
                        $userAnswer = strtolower($_GET["userAnswer1"]);
                        if ($userAnswer == "стул" || $userAnswer == "стульчик" || $userAnswer == "табурет" || $userAnswer == "табуретка") {
                            $score++;
                        }
                        $userAnswer = strtolower($_GET["userAnswer2"]);
                        if ($userAnswer == "blue" || $userAnswer == "голубое" || $userAnswer == "голубого") {
                            $score++;
                        }
                        $userAnswer = strtolower($_GET["userAnswer3"]);
                        if ($userAnswer == "дима" || $userAnswer == "dima" || $userAnswer == "димка" || $userAnswer == "дмитрий") {
                            $score++;
                        }
                        $userAnswer = strtolower($_GET["userAnswer4"]);
                        if ($userAnswer == "2020" || $userAnswer == "две тысячи двадцатый" || $userAnswer == "текущий") {
                            $score++;
                        }

                        echo "Вы угадали " . $score . " загадок";
                    }
                ?>


                <form method="get">

                    <p>Что носил за спиной Карбофос?</p>
                    <input type="text" name="userAnswer1">

                    <p>Какого цвета небо?</p>
                    <input type="text" name="userAnswer2">

                    <p>Как меня зовут?</p>
                    <input type="text" name="userAnswer3">

                    <p>Какой сейчас год?</p>
                    <input type="text" name="userAnswer4">
                    <br>
                    <input type="submit" value="Ответить" name="">

                </form>

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