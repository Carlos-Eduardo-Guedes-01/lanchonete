<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lanchonete Da Tia</title>
        <link rel="stylesheet" href="css/style3.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
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
        <!--<div style="height: 9000px; background-color: red"> </div>-->
        <section class="sobre">
            <div class="extras">
                <img id="img1" src="img/img2.png"/>
            </div><!--extras-->
            <div class="center">
                <div class="texto-sobre">
                    <h1>Sobre</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus id varius lectus. In tortor nulla, eleifend id massa sit amet, blandit faucibus nunc. Morbi efficitur nulla at dolor ornare fermentum. Nunc id molestie enim. Morbi semper nunc sagittis nibh pulvinar efficitur ut nec odio. Vivamus a interdum elit, non mollis lacus. Suspendisse quis ultricies ipsum, vitae elementum leo.</p>
                    <button><a href="cardapio.php">Especial do Dia!</a></button>
                </div><!-- texto-sobre -->
            </div><!--center-->
        </section>
        <footer>
        <?php
    require 'includes/rodape.php';
