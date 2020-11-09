<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Fale conosco</title>
    <link rel="stylesheet" href="css/estilo.css">
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
        <h4>Nome:</h4>
        <input type="text" style="width: 400px;">
        <h4>Mensagem:</h4>
        <textarea style="width: 400px;"></textarea>

        <button type="submit">Enviar</button>
    </form>
    <!--Fim do formulário-->

    <!--Alinhamento--> 
    <br> <br> <br> <br> <br>
    <br> <br> <br> <br> <br>

   
    <footer id="rodape">
        <p id="Formas_de_Pagamento"><b>Formas de Pagamento:</b></p>
        <img src="imagens/Pagamento.png" alt="Formas de pagamento">
        <p>&copy;Recode Pro</p>
        </footer>
</body>
</html>