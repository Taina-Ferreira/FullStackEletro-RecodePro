<?php
    include_once('./php/conexaosql.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Full Stack Eletro</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <script src="js/funcoes.js"></script>
</head>

<body>
    <!--Menu-->
    <?php 
        include_once('menu.html');
    ?>

    <header>
        <h2>Produtos</h2>
    </header>
    <hr>

    <main class="main_produtos">
        <section class="categorias">
            <h3>Categorias</h3>
            <ul>
                <li onclick="exibirTodos()">Todos</li>
                <li onclick="exibirCategorias('Geladeira')">Geladeira</li>
                <li onclick="exibirCategorias('Fogão')">Fogão</li>
                <li onclick="exibirCategorias('Micro-ondas')">Micro-ondas</li>
                <li onclick="exibirCategorias('Lavadora de roupas')">Lavadora de Roupas</li>
                <li onclick="exibirCategorias('Lava Louças')">Lava-louças</li>
            </ul>
        </section>


        <section class="produtos">

            <?php
                $produtos = buscarProdutos();
                if($produtos->num_rows){
                    while ($row = $produtos->fetch_assoc()) {
                        ?>
                            <div class="card" id="<?php echo $row['categoria']; ?>">
                                <img src="<?php echo $row['imagem']; ?>"onmouseover="destaque(this)" onmouseout="destaque(this)">
                                <p><?php echo $row['descricao']; ?></p>
                                <hr>
                                <p>R$ <?php echo $row['preco']; ?></p>
                                <p>R$ <?php echo $row['preco_com_desconto']; ?></p>
                            </div>
                        <?php
                    }
                }
            ?>

        </section>
    </main>

    <br> <br> <br> <br> <br>
    <br> <br> <br> <br> <br>


    <footer id="rodape">
        <p id="Formas_de_Pagamento"><b>Formas de Pagamento:</b></p>
        <img src="imagens/Pagamento.png" alt="Formas de pagamento">
        <p>&copy;Recode Pro</p>
    </footer>
</body>

</html>