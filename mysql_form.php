<!DOCTYPE html>
<head lang="ru">
    <meta charset="UTF-8">
    <title>Форма MSQL</title>
        <meta name="description" content="">
        <meta name="keywords" content="Регистрал">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<a href="index.php">На главную</a>
<br>
   
    	<form action="mysql_insert.php" method="post" name="form">
        <p>Введите имя сотрудника</p><input name="name" type="text" size="20" maxlenght="40">
        <p>Введите фамилию</p><input name="lastname" type="text" size="20" maxlenght="40">
        <p>Введите должность</p><input name="dol" type="text" size="20" maxlenght="40">
        <button type="submit" name="submit">Занести нового сотрудника в базу</button>
        </form>




   
</body>
</html>