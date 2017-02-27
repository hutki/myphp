<!DOCTYPE html>
<head lang="ru">
    <meta charset="UTF-8">
    <title>Функция isset</title>
        <meta name="description" content="">
        <meta name="keywords" content="Регистрал">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<a href="index.php">На главную</a>
    <?php
    	$c = 35;

        if (isset($c)) {
        	echo "Пременная с существует и ее значение: $c";
        }
        else {
        	echo "Переменная c не существует";
        }

        $v = 10;
        
        unset($v);

    ?>
</body>
</html>