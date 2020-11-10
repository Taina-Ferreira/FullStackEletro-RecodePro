<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Fale conosco</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <!--Menu-->
    <?php 
        include_once('menu.html');
    ?>

    <h2>Fale conosco</h2>
    <hr>  

        <section class="contatos">
            <div width="50%" align="center">
                <img src="imagens/email.jpg" width="40px">
               contato@fullstackeletro.com
            </div>

            <div width="50%" align="center">
                <img src="imagens/whats.jpg" width="40px">
                (11) 99999-9999
            </div>
        </section>
    <!--Fim de Imagens e dados do setor de contato-->

    <!--Inicio do formulário-->
    
    <form>
    <div class form-group>
        <label for="Nome">Digite seu nome</label>
        <input type="text" class="form-control" id="nome" aria-describedby="nome" placeholder="Ex: James">
    </div>

    <div class form-group>
        <label for="email">Digite seu email</label>
        <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="eusoujames@provedor.com">
    </div>   

    <div class form-group>
        <label for="Mensagem">Digite aqui sua mensagem.</br> Entraremos em contato o mais breve possível.</label>
        <input type="text" class="form-control" id="mensagem" aria-describedby="mensagem">
    </div> 
        <button type="submit"class="btn btn-primary">Enviar</button>
    </form>
    
    <!--Fim do formulário-->

    <!--Alinhamento--> 
    <br> <br> <br> <br> <br>
    <br> <br> <br> <br> <br>

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