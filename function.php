<!DOCTYPE html>
<head lang="ru">
    <meta charset="UTF-8">
    <title>Функции</title>
        <meta name="description" content="">
        <meta name="keywords" content="Регистрал">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
        function square($a)
        {
           $result = $a*$a;
           echo $result;
        }
        $new = 80;
        echo "Квадрат $new равен - ";

        square($new);

        function linkh($link,$title)
        {
            echo "<a href='$link'>$title</a>";
        }
        echo "<br>";
 linkh('http://test.loc','Главная');
    ?>
</body>
</html>