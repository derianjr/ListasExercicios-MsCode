<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio1 da Lista</title>
</head>
<body>
    <?php
        /*
            Olhando a documentação do php, nesse exercício foi utilizado
            a função "preg_match" para verificar se existe espaço vazio na string,
            e o padrão '/\s/' que representa caractere de espaço em branco.Logo em seguida
            foi feito um if e else para verificar a string inserida na função principal e imprimir
            uma frase na tela. 
        
        */
        function verificarEspaço(string $str) {
            return preg_match('/\s/', $str) > 0;
          }

    $string1 = "Olá, estou verificando se tem espaço entre os caracteres";
    $string2 = "Essaquivoufazertudojunto";

    if (verificarEspaço($string2)){
        echo "Essa string1 contém espaço";
    } else {
        echo "A string não contém espaço";
    }
    ?>
</body>
</html>