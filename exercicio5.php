<?php
$nome_servidor = "localhost";
$nome_usuario = "root";
$senha = "";
$nome_BD = "exercicio5";


// conexão

$conexao = new mysqli($nome_servidor,$nome_usuario,$senha,$nome_BD);
if ($conexao->connect_error){
    die("Conexão Falho:" .$conexao->connect_error);  
}else {
    echo "Conexão Funcionou !!";
}

// criando tabela 'produtos'
$cria_tabela = "CREATE TABLE produtos (
    id INT(6),
    titulo VARCHAR(30) NOT NULL,
    pagamento VARCHAR(30) NOT NULL,
    valor INT(10)
)";

// inserindo valor na tabela criada
// inserindo valor na tabela criada
$insere_valor = "INSERT INTO produtos (id,titulo,pagamento,valor)
VALUES 
(1, 'celular', '2023-07-28', 4200),
(2, 'computador', '2023-07-27', 6200),
(3, 'televisao', '2023-07-26', 2000),
(4, 'maquina de lavar', '2023-07-25', 1500),
(5, 'mesa de cozinha', '2023-07-24', 350),
(6, 'fogao', '2023-07-23', 1000)";

if ($conexao->query($insere_valor) === TRUE){
    echo "A consulta foi realizadas com sucesso";
}else {
    echo "Erro durante a consulta: " .$conexao->error;
}
$conexao->close();

?>