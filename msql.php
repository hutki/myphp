<!DOCTYPE html>
<head lang="ru">
    <meta charset="UTF-8">
    <title>Соединение с БД</title>
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

        $result = mysql_query("SELECT * FROM firma", $db);
        $myrow = mysql_fetch_array($result);
        
        do
        {
        printf("Сотрудник № - %s<br>%s<br>%s<br>%s<br><br>",$myrow['id'],$myrow['name'],$myrow['lastname'],$myrow['dol']);
        }
        while ($myrow = mysql_fetch_array($result)); 




    ?>
</body>
</html>