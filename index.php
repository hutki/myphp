<!DOCTYPE html>
<head lang="ru">
    <meta charset="UTF-8">
    <title>Регистрал</title>
        <meta name="description" content="">
        <meta name="keywords" content="Регистрал">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<a href="index.php">На главную</a>
<br>
    <?php
        $name  = "Виталик";
        $age = 37;
        echo "$name";
        echo '<br>dfgsg';
        echo "<br> Моего друга зовут $name, ему $age лет";
        $n = 10;

        $c = $age + $n;

        echo "<br>Александру через 10 лет будет $c лет";


    ?>
    <br>
    <a href="if.php">if</a>
    <br>
    <a href="while.php">while</a>
    <br>
    <a href="for.php">for</a>
    <br>
    <a href="switch.php">Switch</a>
    <br>
    <a href="array.php">Массивы</a>
    <br>
    <a href="array2.php">Ассоциативные массивы</a>
</body>
</html>