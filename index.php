<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lanchonete Da Tia</title>
        <link rel="stylesheet" href="css/style3.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        
        ?>
        <div id="caixa-topo" class="center">
            <div class="logo"><img src="img/logo.png" width="120px"/></div>
            <!-- logo -->
                <div class="menu"> 
                    <a href="index.php">Home</a>
                    <a href="cardapio2.php">Cardápio</a>
                    <a href="sobre.php">Sobre</a>
                    <a href="cadastro.php">Cadastro/Prato</a>
                </div>
                <!--menu-->
        </div>
        <header>
            <div class="center">
            </div><!-- center -->
        </header>
        <?php
           
        ?>
        <section class="sobre">
            <div class="extras">
                <img id="img1" src="img/img2.png"/>
            </div><!--extras-->
            <div class="center">
                <div class="texto-sobre">
                    <h1>Restaurante e<br/>Lanchonete</h1>
                    <p>O melhor da região.</p>
                    <button style='margin-top: 10%;'><a href="cardapio.php">Especial do Dia!</a></button>
                </div><!-- texto-sobre -->
            </div><!--center-->
        </section>
        <footer>
        <?php
    require 'includes/rodape.php';
