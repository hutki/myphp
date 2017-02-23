<!DOCTYPE html>
<head lang="ru">
    <meta charset="UTF-8">
    <title>If -else</title>
        <meta name="description" content="">
        <meta name="keywords" content="Регистрал">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<a href="index.php">На главную</a>
     <?php
        $a = 2;
        $b = 2;
        $c = 7;
        $d = 7;
        $cat = "juli";
        $dog = "hart";
        if ($a == $b and $c == $d)
        {
            echo "Все переменные равны!";
            if ($cat != $dog) {
                echo "<br>В переменных cat и dog разные имена";
            }
        }

        else 
        {
            echo "Переменные не равны";
        }

     ?>
</body>
</html>