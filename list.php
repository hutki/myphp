<!DOCTYPE html>
<head lang="ru">
    <meta charset="UTF-8">
    <title>Функция list</title>
        <meta name="description" content="">
        <meta name="keywords" content="Регистрал">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
        $box = array('персик', 'огурец' );
        list($fruit,$vegetables) = $box;

        echo "<br>$fruit<br>$vegetables";


    ?>
</body>
</html>