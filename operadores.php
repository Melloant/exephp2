<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testes Com Operadores PHP</title>
</head>

<body>

    <?php 
        $nome = "Antonio ";
        echo $nome . " Mello";
        echo "<br/>";
        
        $nome .= " programação";
        echo $nome;
        echo "<br/>";

        $valorTotal = 0;
        $valorTotal += 100;
        $valorTotal += 25;
        $valorTotal -= 12;
        $valorTotal *= .1;
        print $valorTotal;
        
        echo "<br/>";
        echo "<br/>";
        
        $a = 10;
        $b = 2;

        echo $a + $b;
        echo "<br/>";
        echo $a - $b;
        echo "<br/>";
        echo $a * $b;
        echo "<br/>";
        echo $a / $b;
        echo "<br/>";
        echo $a % $b;
        echo "<br/>";
        echo $a ** $b;
        echo "<br/>";
        echo "<br/>"; 
    
    ?>

</body>

</html>