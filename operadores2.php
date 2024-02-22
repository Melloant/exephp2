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
        echo "<br/>";
        
        $a = 30;
        $b = 51;

        var_dump($a > $b); // a  maior que  b
        echo "<br/>";
        var_dump($a < $b); // a   menor que  b
        echo "<br/>";
        var_dump($a == $b);  // igual
        echo "<br/>";
        var_dump($a === $b);  //  identico
        echo "<br/>";
        var_dump($a != $b);  // diferente
        echo "<br/>";
        var_dump($a !== $b);  //não identico
        echo "<br/>";
        echo "<br/>"; 

       print "Operador spaceship <=>";
       echo "<br/>";
        echo "<br/>"; 

    $a = 5;
    $b = 10;

    echo $a <=> $b; # exibe -1 poque a é menor que b
    echo "<br/>";
    $c = 15;
    $d = 10;

    echo $c <=> $d; # exibe 1 poque c é maior que d
    echo "<br/>";
    
    $e = 20;
    $f = 20;

    echo $e <=> $f; # exibe 0 poque e & f são iguais
    echo "<br/>"; 
      
    ?>

</body>

</html>