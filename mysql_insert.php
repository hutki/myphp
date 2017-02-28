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

        if (isset($_POST['name'])) {
           $name = $_POST['name'];
        }
        if (isset($_POST['lastname'])) {
           $lastname = $_POST['lastname'];
        }
        if (isset($_POST['dol'])) {
           $dol = $_POST['dol'];
        }


    	$db = mysql_connect("localhost", "vit", "");
        mysql_select_db("firstbd", $db);

        $result = mysql_query("INSERT INTO firma (name,lastname,dol) VALUES ('$name','$lastname','$dol')"); 
        if ($result == 'true') {
            echo "Информация в базу занесена успешно";

        }
        else
        {
            echo "Информация в базу не добавлена";
        }



    ?>
</body>
</html>