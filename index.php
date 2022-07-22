<?php
    include("./DataBase.php");
    $db = new DB;
    $lastStr = $db->getLastStr();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/default.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Сокращатель ссылок</title>
</head>
<body>
    <div class="container">
        <h1>Сократить ссылку</h1>
        <input type="url" name="link" id="link" placeholder = "Введите URL в формате http://... или https://...">
        <button id="btn" name="btn">Сократить</button>
        <?php include('./js/ajax.php')?><br>
        <div id="text" class="text"></div>
    </div>
</body>
</html>