<!DOCTYPE html>
<head lang="ru">
    <meta charset="UTF-8">
    <title>Цикл while</title>
        <meta name="description" content="">
        <meta name="keywords" content="Регистрал">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<a href="index.php">На главную</a>
     <?php
     $a = 0;
       while ($a <= 10) {
           echo "$a<br>";
           $a = $a +1;
       }

$sum = 0;
$i = 1;
while ( $i <= 100) {
    $sum = $sum + $i;
    $i++;
}
echo "Сумма всех чисел от 1 до 100 равна $sum ";
     ?>
</body>
</html>