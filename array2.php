<!DOCTYPE html>
<head lang="ru">
    <meta charset="UTF-8">
    <title>Ассоциативные массивы</title>
        <meta name="description" content="">
        <meta name="keywords" content="Регистрал">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<a href="index.php">На главную</a>
<br>
     <?php
         $capital ["Russia"] = "Москва";
         $capital ["Belarus"] = "Минск";
         $capital ["USA"] = "Нью-Йорк";
         $capital ["Polland"] = "Варшава";
         $capital ["Ukraine"] = "Киев";

         echo $capital["USA"];

         echo "<br>";

        $capitali = array("Russia" => "Москва", "Belarus"  => "Минск");  
        echo $capitali["Russia"];  

          $auto ['BMW'] = array('color' => 'red', 'year' => '2005', 'pr' => '2500' );
          $auto ['AUDI'] = array('color' => 'black', 'year' => '2016', 'pr' => '6400' );
          echo "<br>год БМВ -".$auto['BMW']['year'];
     ?>

</body>
</html>