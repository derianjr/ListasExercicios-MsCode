<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio2 da lista</title>
</head>
<body>
    <?php
    /*
        Nesse exercicio foi utilizado o o construtor 'foreach' onde o mesmo
        vai iterar sobre o array e vai pegar apenas os números ímpares e 
        multiplica-los. 

    */

    function multiplicandoImpares(array $valores){
        $produto = 1;
        foreach ($valores as $valores) {
          if ($valores % 2 != 0) {
            $produto *= $valores;
          }
        }
        return $produto;
    }
    $resultado = multiplicandoImpares([1,2,3,4,5,6,7,8,9,10]);
    echo $resultado;
     
    ?>    
</body>
</html>