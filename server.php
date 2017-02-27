<!DOCTYPE html>
<head lang="ru">
    <meta charset="UTF-8">
    <title>Server</title>
        <meta name="description" content="">
        <meta name="keywords" content="Регистрал">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<a href="index.php">На главную</a>
<br>
    <?php
    	echo "Ваш ip:".$_SERVER['HTTP_USER_AGENT'];

    ?>
</body>
</html>