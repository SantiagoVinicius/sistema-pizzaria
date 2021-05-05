<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'bd_clientes';

$conexao = mysqli_connect($senha, $usuario, $senha, $banco);

if(!$conexao){
    die("<br>Não conectou!! Erro:" . mysqli_connect_error());
}else{
    echo "conectado";
}
?>