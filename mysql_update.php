<!DOCTYPE html>
<head lang="ru">
    <meta charset="UTF-8">
    <title>Insert</title>
        <meta name="description" content="">
        <meta name="keywords" content="Регистрал">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<a href="index.php">На главную</a>
<br>
    <?php
        $db = mysql_connect("localhost", "vit", "");
        mysql_select_db("firstbd", $db);

        $result = mysql_query("UPDATE firma SET name='Егор', lastname='Егоров' WHERE id='6'"); 
        if ($result == 'true') {
            echo "Информация в базе обновлена успешно";

        }
        else
        {
            echo "Информация в базу не добавлена";
        }



    ?>
</body>
</html>