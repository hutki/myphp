<!DOCTYPE html>
<head lang="ru">
    <meta charset="UTF-8">
    <title>Конструкция Switch</title>
        <meta name="description" content="">
        <meta name="keywords" content="Регистрал">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<a href="index.php">На главную</a>
     <?php
        $sposob = "Банк";

        switch ($sposob) 
        {
            case "Банк":
                echo "<p>Чтобы оплатить через банк...</p>";
                break;

            case "Почта":
                echo "<p>Чтобы оплатить через почту...</p>";
                break;

            case "Карточка":
                echo "<p>Чтобы оплатить через карточтку...</p>";
                break;
            default:
                echo "<p>ЧВыберете способ оплаты</p>";
                break;
        }
     ?>
</body>
</html>