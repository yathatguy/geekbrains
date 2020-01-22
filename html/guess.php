<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Угадайка</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">

        let answer = parseInt(Math.random()*100);
        let tryCount = 1;
        var maxTryCount = 3;

        function readUserInput() {
            var number = document.getElementById("userAnswer").value;
            return number;
        }

        function updateText(text) {
            document.getElementById("info").innerHTML=text;
        }

        function hideItem(id) {
            document.getElementById(id).style.displey = "none";
        }

        function guessNumber() {
            var userNum;
            if (tryCount % 2 == 1) {
                userNum = 1;
                tryCount++;
            } else {
                userNum = 2;
            }

            var userAnswer = readUserInput();
            if (userAnswer == answer) {
                updateText("Верно, пользователь " + userNum);
                hideItem("button");
                hideItem("userAnswer");
            } else if (userAnswer > answer) {
                updateText("Слишком много, пользователь " + userNum);
            } else if (userAnswer < answer) {
                updateText("Слишком мало, пользователь " + userNum);
            }
            if (tryCount >= maxTryCount) {
                updateText("Пользователь " + userNum + ", вы проиграли. Правильный ответ: " + answer);
                hideItem("button");
                hideItem("userAnswer");
            }
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
            <h1>Угадайка</h1>
            <div class="box">
                <p id="info">Угадайте число от 0 до 100</p>
                <input type="number" id="userAnswer">
                <br>
                <a href="#" onclick="guessNumber();" id="button">Угадать</a>
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