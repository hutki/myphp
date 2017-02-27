<!DOCTYPE html>
<head lang="ru">
    <meta charset="UTF-8">
    <title>Функции встроенные в PHP</title>
        <meta name="description" content="">
        <meta name="keywords" content="Регистрал">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
        function square($a)
        {
           $result = $a*$a;
           return $result;
        }
        $new = 80;
        echo "Квадрат $new равен - ";

        $h = square($new);

        echo $h;

        function linkh($link,$title)
        {
            echo "<a href='$link'>$title</a>";
        }
        echo "<br>";
 linkh('http://test.loc','Главная');

$name[] = "Александр";
$name[] = "Наполеон";
$name[] = "Джорж";

$w = " Ноутбук ";
$w = trim($w);
echo $w;


echo "<br>в массиве  name найдено ".count($name)." элементов.";


    ?>
</body>
</html>