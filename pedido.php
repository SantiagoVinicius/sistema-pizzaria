<?php
if(isset($_GET['nome']) && $_GET['nome'] != ''){
    $pedido = [];

    $pedido['nome'] = $_GET['nome'];

    if(isset($_GET['endereco'])){
        $pedido['endereco'] = $_GET['endereco'];
    }else{
        $pedido['endereco'] = '';
    }

    if(isset($_GET['cidade'])){
        $pedido['cidade'] = $_GET['cidade'];
    }else{
        $pedido['cidade'] = '';
    }

    if(isset($_GET['estado'])){
        $pedido['estado'] = $_GET['estado'];
    }else{
        $pedido['estado'] = '';
    }

    if(isset($_GET['tamanho'])){
        $pedido['tamanho'] = $_GET['tamanho'];
    }else{
        $pedido['tamanho'] = '';
    }

    if(isset($_GET['sabor'])){
        $pedido['sabor'] = $_GET['sabor'];
    }else{
        $pedido['sabor'] = '';
    }

    if(isset($_GET['borda'])){
        $pedido['borda'] = $_GET['borda'];
    }else{
        $pedido['borda'] = '';
    }

    if(isset($_GET['pag'])){
        $pedido['pag'] = $_GET['pag'];
    }else{
        $pedido['pag'] = '';
    }

    if(isset($_GET['troco'])){
        $pedido['troco'] = $_GET['troco'];
    }else{
        $pedido['troco'] = '';
    }
}

include 'conexao.php';

if(isset($pedido)){
    $sqlInserir = "INSERT INTO tb_pedidos(
        nome,
        endereco,
        cidade,
        estado,
        tamanho,
        sabor,
        borda,
        pag,
        troco
        ) VALUES(
        '{$pedido['nome']}',
        '{$pedido['endereco']}',
        '{$pedido['cidade']}',
        '{$pedido['estado']}',
        '{$pedido['tamanho']}',
        '{$pedido['sabor']}',
        '{$pedido['borda']}',
        '{$pedido['pag']}',
        '{$pedido['troco']}'
        );";

        mysqli_query($conexao , $sqlInserir);}
include "tamplate.php";
?>