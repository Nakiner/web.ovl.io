<!DOCTYPE html>
<html>
    <head>
        <title>Zadanie 2</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <form>
            <input type="text" id="name" required autofocus placeholder="ФИО"><br>
            <input type="text" id="age"  placeholder="Возраст"><span id="group"></span><br>
            <input type="date" id="born" ><br>
        </form>
        <button id="send">Стартуем</button>
        <div id="result"></div>
        <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous">
        </script>
        <script src="script.js"></script>
    </body>
</html>
