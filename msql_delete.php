<!DOCTYPE html>
<head lang="ru">
    <meta charset="UTF-8">
    <title>DELETE</title>
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

        $result = mysql_query("DELETE FROM firma WHERE id='3'"); 
        if ($result == 'true') {
            echo "Информация из базы удалена";

        }
        else
        {
            echo "Информация из базы не удалена";
        }



    ?>
</body>
</html>