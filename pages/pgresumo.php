<link rel='stylesheet' type='text/css' href='css/resumo.css'>
<section id="resumo">
    <form method="POST" id="resumo">
        <?php if($existeResumo == false) {?>
            <h2 id="tituloCapitulo"><?php echo "Resumo";?></h2>
            <h2 id="tituloCapitulo"><?php echo $capituloSelecionado[0]['titulo'] . "| " . $capituloSelecionado[0]['subtitulo']; ?></h2>
            <input type="hidden" name="tipo" value="novo" />
            <textarea name="resumo" class="textArea"></textarea>
            <input type="submit" name="salvar" class="novo" value="Salvar">
        <?php } else {?>
            <h2 id="tituloCapitulo">Resumo Enviado!</h2>
            <h3 id="subtituloCapitulo">Aguarde uma notificação!</h3>
        <?php } ?>        
    </form> 
</section>