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
        
        $d = NULL;
        $f = NULL;
        $g = 3;

        echo $d ?? $f ??$g;
        echo "<br>";
        
        $a = 10;
        echo $a++;
        echo "<br>";
        echo $a++;
        echo "<br>"; 
        echo $a--;
        echo "<br>";
        echo $a--;
        echo "<br>"; 
        echo --$a;
        echo "<br>";
        echo ++$a;
        echo "<br>"; 
        
        $resultado = (10 + 3) /2;
        echo $resultado
              
    ?>

</body>

</html>