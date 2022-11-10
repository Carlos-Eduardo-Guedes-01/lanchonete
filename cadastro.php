    <?php
    include 'includes/cabecalho.php';
    ?>
    <h1 class="cadastro">Cadastro de Pratos</h1>
    <div class="cadastro">
        <form action="informacao_cadastro.php" method="post" id="form-cad">
		<fieldset>
            <label>Nome:</label><input type="text" name="Tnome" placeholder="Nome do produto"/><br/>
            <label>Preço:</label><input type="text" name="Tpreco" placeholder="Preço do produto"/><br/>
            <label>Detalhes:</label><input type="text" name="Tdetalhes" placeholder="Detalhes do produto"/><br/>
            <label>Imagem do Prato:</label><input type="file" name="Timg_prato" placeholder="Imagem do prato"/>
        </fieldset>
                <button class="cardapio">Registrar Prato</button>
            </form>
        </div>
        <footer>
        <?php
    require 'includes/rodape.php';