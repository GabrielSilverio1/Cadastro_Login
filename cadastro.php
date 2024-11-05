<?php
$nome = $_POST['nome'];
$datanasc = $_POST['datanasc'];
$funcao = $_POST['funcao'];
$salario = $_POST['salario'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

include "conexao.php";
$sql = "INSERT INTO `funcionarios`(`nome`, `data_nasc`, `funcao`, `salario`, `usuario`, `senha`)
VALUES ('$nome', '$datanasc', '$funcao', '$salario', '$usuario', '$senha')";
if (mysqli_query($con, $sql)){
    echo "Você foi cadastrado com sucesso!";
    header('location: index.html');
} else {
    echo "Erro no cadastro!";
}
