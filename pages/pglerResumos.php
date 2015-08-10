<link rel='stylesheet' type='text/css' href='css/resumo.css'>
<?php  $resumoBuscarPorId = $resumoBusiness->buscarPorId($url->getURL(2));  ?>
<section id="resumo">
    <h2 class="titulo"><?php echo "Resumo";?></h2>
    <h2 class="titulo"><?php echo $resumoBuscarPorId[0]['titulo'];?></h2>
    <h2 class="informacoesGerais">Nome: <?php echo $resumoBuscarPorId[0]['nome'];?></h2>
    <h2 class="informacoesGerais">Data: <?php echo $resumoBuscarPorId[0]['dataAtual'];?></h2>
    <textarea class="textArea"><?php echo $resumoBuscarPorId[0]['resumo'];?></textarea>
    <a href="#Notificacao" rel="leanModal"><input type="button" class="novo" value="Enviar Notificação"></a>
</section>
<!-- Lightbox -->
<div id="Notificacao" class="caixaLightBox">
    <form action="" method="post">
        <div id="cabecalhoNotificacao">
            <p>Notificação</p>
            <input type="text" name="assunto"/>
            <a class="modal_close"></a>
        </div>        
        <div class="txt-notificacao">
            <input type="hidden" name="idResumo" value="<?php echo $resumoBuscarPorId[0]['id']; ?>" />
            <input type="hidden" name="idUsuario" value="<?php echo $resumoBuscarPorId[0]['idUsuario']; ?>" />
            <textarea name="notificacao" id="comentario"></textarea>
            <button id="salvar-notificacao" name="salvar" type="submit">Salvar</button>
        </div>
    </form>
</div>
