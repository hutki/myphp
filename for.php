<!DOCTYPE html>
<head lang="ru">
    <meta charset="UTF-8">
    <title>Цикл for</title>
        <meta name="description" content="">
        <meta name="keywords" content="Регистрал">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<a href="index.php">На главную</a>
     <?php
     for ($i=0, $sum=0; $i <=1000 ; $i++) { 
      $sum = $sum + $i;
      
     }
     echo "Сумма всех чисел $sum";
     ?>
</body>
</html>