<section id="conteudo">
    <?php include_once('pages/pgmenuLateral.php'); ?>
    <section id="capitulos">
        <ul id="menuCapitulos">
            <?php
            foreach ($capitulos as $capitulo) {
                if ($capitulo['ordem'] < $capituloAtual + 2) {
                    ?>
                    <li>
                        <h3><?php echo $capitulo['titulo']; ?></h3>
                        <ul class="subItens">
                            <?php
                            
                            foreach ($topicoBusiness->buscarPorCapitulo($capitulo['id']) as $topico) {
                                $selecionado = ($topicoAtual[0]['id'] == $topico['id']) ? "id='clicado'" : '';
                                echo "<li><a {$selecionado} href='treinamento/{$topico['idCapitulo']}/topico/{$topico['id']}'>{$topico['titulo']}</a></li>";
                            }
                            ?>
                            <li><a <?php echo ($url->getURL(1) == $capitulo['id']) ? $exercicioSelecionado : "" ; ?> href="<?php echo "treinamento/{$topico['idCapitulo']}/exercicio"; ?>">Exercício</a>        
                            <li><a <?php echo ($url->getURL(1) == $capitulo['id']) ? $resumoSelecionado : "" ; ?> href="<?php echo "treinamento/{$topico['idCapitulo']}/resumo"; ?>">Resumo</a></li>
                        </ul>
                    </li>
                    <?php
                }
            }
            ?>
        </ul>
    </section>
    <section id="conteudoTopico">
        <?php
            include_once("includes/inc{$url->getURL(2)}.php");
        ?>    
    </section>
</section>