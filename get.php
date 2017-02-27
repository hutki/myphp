<!DOCTYPE html>
<head lang="ru">
    <meta charset="UTF-8">
    <title>Метод GET</title>
        <meta name="description" content="">
        <meta name="keywords" content="Регистрал">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<a href="index.php">На главную</a>
    <?php
    	
        $a = $_GET['a'];
        $b = $_GET['b'];

        $c = $a + $b;

        echo "<br>Сумма переменных через адресную строку $c";

        echo "<br><a href='http://test.loc/get.php?a=15&b=20';>Привет</a>"

    ?>
</body>
</html>