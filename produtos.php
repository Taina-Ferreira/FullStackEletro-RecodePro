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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <!--Menu-->
    <?php 
        include_once('menu.html');
    ?>
    <div class="container-fluid">
        <div class="row">
            <header>
                <h2>Produtos</h2>
            </header>
        </div>
    </div>
    <hr class="my-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
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
            </div>

            <div class="col-10">
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
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>            

    <footer id="rodape">
        <p id="Formas_de_Pagamento"><b>Formas de Pagamento:</b></p>
        <img src="imagens/Pagamento.png" alt="Formas de pagamento">
        <p>&copy;Recode Pro</p>
    </footer>
</body>

</html>