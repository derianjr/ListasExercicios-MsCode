<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php
    /*
        Primeiro o if verifica se a lista contém mais de 2 elementos, se não houver o segundo
        maior número retorna null. Depois utiliza 'rsort' para colocar o array de forma
        decrescente e em seguida retorna o index 1 do array que será o resultado do 
        segundo maior número.
    */
  function segundoMaiorNumero($lista) {
    if (count($lista) < 2) {
        return null; 
    }
    rsort($lista);

    return $lista[1];
}

$listaNumeros = [15, 3, 11, 8, 9, 3, 7];
$segundoMaior = segundoMaiorNumero($listaNumeros);
echo "O segundo maior número na lista é: " . $segundoMaior;
    ?>
</body>
</html>