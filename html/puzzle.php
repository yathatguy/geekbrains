<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Игра в загадки</title>
    <link rel="stylesheet" href="style.css">
    <script>
        let score = 0;

        function checkAnswer(inputId, answers) {
            let userAnswer = document.getElementById(inputId).value;
            userAnswer = userAnswer.toLowerCase();
            for (let i = 0; i < answers.length; i++) {
                if (userAnswer == answers[i]) {
                    score++;
                    break;
                }
            }
        }

        function checkAnswers() {
            checkAnswer("userAnswer1", ["сон", "сновидение"])
            checkAnswer("userAnswer2", ["морской", "укус акулы"])
            checkAnswer("userAnswer3", ["шахматный", "мертвый"])
            alert("Вы отгадали " + score + " загадок");
        }
    </script>
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
                        $userAnswer = $_GET["userAnswer1"];
                        if ($userAnswer == "сон" || $userAnswer == "сновидение") {
                            $score++;
                        }
                        $userAnswer = $_GET["userAnswer2"];
                        if ($userAnswer == "морской") {
                            $score++;
                        }
                        $userAnswer = $_GET["userAnswer3"];
                        if ($userAnswer == "мертвый" || $userAnswer == "шахматный") {
                            $score++;
                        }

                        echo "Вы угадали " . $score . " загадок";
                    }
                ?>


                <form method="get">

                    <p>Что можно увидеть с закрытыми глазами?</p>
                    <input type="text" name="userAnswer1">

                    <p>Какой болезнью никто не болеет на суше?</p>
                    <input type="text" name="userAnswer2">

                    <p>Какой конь не есть овса?</p>
                    <input type="text" name="userAnswer3">
                    <br>
                    <input type="submit" value="Ответить" name="">

                </form>

            </div>
        </div>
    </div>
</div>


<?php
include "footer.php"
?>


</body>
</html>