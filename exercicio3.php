<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio3 da lista</title>
</head>
<body>
    <?php
    /*
        Para resolver esse exercício foi utilizado a subtração do soma dos números esperados
        con a soma dos números fornecido na lista, o return é a diferença de ambos que vai 
        ser o valor que está faltando na lista.
    */


    function numeroFaltando($lista) {
        $somaEsperada = 0;
        $somaReal = 0;
    
        for ($i = 1; $i <= 10; $i++) {
            $somaEsperada += $i;
        }
    
        foreach ($lista as $numero) {
            $somaReal += $numero;
        }
            return $somaEsperada - $somaReal;
    }
    
    $listaNumeros = [1, 3, 4, 5, 6, 7, 8, 9, 10];
    $numeroAusente = numeroFaltando($listaNumeros);
    echo "O número ausente na lista é: " . $numeroAusente;

    ?>
    
</body>
</html>