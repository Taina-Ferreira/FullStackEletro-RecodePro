<?php

function connect(){
    return mysqli_connect("localhost","root","","fullstackeletro");
}


function inserirPedido ($nome_cliente,$endereco,$telefone,$idproduto,$valor_unitario,$quantidade){
    //Criando a conexão com o banco de dados 
    $conn = connect();

    //Verificando a conexão
    if (!$conn) {
        die ("A conexão falhou" . mysqli_connect_error());
    }

    $sql = "insert into pedidos (nome_cliente,endereco,telefone,idproduto,valor_unitario,quantidade,valor_total) " .
            "values ('$nome_cliente','$endereco','$telefone',$idproduto,$valor_unitario,$quantidade,$quantidade*$valor_unitario)";

    if ($conn->query($sql)){
        return true;
    }
    else {
        return mysqli_error($conn);
    }
}

function buscarPedido ($idPedido) {
    $conn = connect();
    if (!$conn) {
        die ("A conexão falhou" . mysqli_connect_error());
    }
    
    $sql = "select * from pedidos where idPedido = $idPedido";

    if ($dados = $conn->query($sql)){
        return $dados;
    }
    else {
        return mysqli_error($conn);
    }

}

function buscarPedidos () {
    $conn = connect();
    if (!$conn) {
        die ("A conexão falhou" . mysqli_connect_error());
    }
    
    $sql = "select * from pedidos";

    if ($dados = $conn->query($sql)){
        return $dados;
    }
    else {
        return mysqli_error($conn);
    }

}

function buscarProdutos(){
    $conn = connect();
    if (!$conn) {
        die ("A conexão falhou" . mysqli_connect_error());
    }
    
    $sql = "select * from produtos";

    if ($dados = $conn->query($sql)){
        return $dados;
    }
    else {
        return mysqli_error($conn);
    }
}


function buscarProdutosCategoria($categoria){


    $conn = connect();
    if (!$conn) {
        die ("A conexão falhou" . mysqli_connect_error());
    }
    
    $sql = "select * from produtos where categoria = '$categoria'";

    if ($dados = $conn->query($sql)){
        return $dados;
    }
    else {
        return mysqli_error($conn);
    }
}


function inserirProduto($categoria,$descricao,$preco,$preco_com_desconto,$imagem){


    $conn = connect();
    if (!$conn) {
        die ("A conexão falhou" . mysqli_connect_error());
    }
    
    $sql = "insert into produtos (categoria,descricao,preco,preco_com_desconto,imagem) values ('$categoria','$descricao',$preco,$preco_com_desconto,'$imagem')";

    if ($conn->query($sql)){
        return true;
    }
    else {
        return mysqli_error($conn);
    }
}

?>