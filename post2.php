<!DOCTYPE html>
<head lang="ru">
    <meta charset="UTF-8">
    <title>Метод POST 2</title>
        <meta name="description" content="">
        <meta name="keywords" content="Регистрал">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<a href="index.php">На главную</a>
    <?php
    	 $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        echo "<br>Имя введенное на предыдущей странице: $name 
        <br>фамилия $lastname";

    ?>
</body>
</html>