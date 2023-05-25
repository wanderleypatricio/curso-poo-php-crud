<?php

$objDAO = new ProdutoDAO();
$obj = new Produto();

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$estoque = $_POST['estoque'];

$obj->setNome($nome);
$obj->setDescricao($descricao);
$obj->setPreco($preco);
$obj->setEstoque($estoque);

$objDAO->insert($obj);

header('Location:./index.php?pg=produtos');