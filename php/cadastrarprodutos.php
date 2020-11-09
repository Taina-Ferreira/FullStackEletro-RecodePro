<?php

include_once('conexaosql.php');

//Buscando as informações do formulário
$categoria = $_POST['categoria'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$preco_com_desconto = $_POST['preco_com_desconto'];
$imagem = $_POST['imagem'];

//Tratando
$imagem = "imagens/$imagem";
$preco = str_replace(",",".",$preco);
$preco_com_desconto = str_replace(",",".",$preco_com_desconto);

inserirProduto($categoria,$descricao,$preco,$preco_com_desconto,$imagem);

echo "<script>alert('Produto cadastrado com sucesso!');window.location.href = '/FullStackEletro-RecodePro/admin/cadastrarProdutos.html';</script>";

?>
