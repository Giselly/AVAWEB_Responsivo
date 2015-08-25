<link rel='stylesheet' type='text/css' href='css/cadastroDeUsuarios.css'>

<section class="listagemCadastro">
    <div class="camposSection">
        <?php //echo $erroExcluir; ?>
        <table class="listagem">
            <form method="post" name="frmPesquisa" id="frmPesquisa">
            <input type="text" placeholder="Pesquisa" class="pesquisa" id="filtro" name="filtro" value="<?php echo (isset($form['filtro']) ? $form['filtro'] : ""); ?>"/>
            </form>
            <tr>
                <th>Nome Completo</th>
                <th>Data</th>
                <th>Capítulo</th>
                <th>Notificação</th>
                <th>Ler</th>
                <th>Excluir</th>
            </tr>
            <?php
            if(isset($dadosResumo)){
                if (count($dadosResumo)) {
                    foreach ($dadosResumo as $resumo) {
                        echo "
                        <tr>
                            <td class='align-left'>{$resumo['nome']}</td>
                            <td class='align-left'>{$resumo['dataAtual']}</td>
                            <td class='align-left'>Capitulo {$resumo['capitulo']}</a></td>";
                            $notificacaoTxt = '';
                                if(isset($resumo['notificacao'])){
                                    $notificacaoTxt = $resumo['notificacao'];
                                }
                            if($notificacaoTxt != ''){
                                if(strlen($notificacaoTxt) > 28) {
                                    $notificacaoTxt = substr($notificacaoTxt,0, 28). "...";
                                }                             
                                echo "<td class='align-left'><a href='{$url->getURL(0)}/lerNotificacao/{$resumo['id']}'>{$notificacaoTxt}</a></td>";  
                            } else {
                                echo "<td class='align-left'>Nenhuma notificação enviada!</td>"; 
                            }
                            
                        echo "
                            <td id='ler'><a href='{$url->getURL(0)}/lerResumos/{$resumo['id']}'>Ler</a></td>
                            <td id='excluir'><a class='exluirFuncionario' href='{$resumo['id']}'>Excluir</a></td>
                        </tr>
                    ";
                    }
                } else {
                    echo "<tr><td colspan='6'>Nenhum resumo encontrado.</td></tr>";
                }
            }
            ?>

        </table>
    </div>
    <a href='#frmExcluir' name='frmExcluir' rel='leanModal' id='btnExcluir'></a>
</section>

<div id="frmExcluir" class="caixaComentarios">
    <form action="" class="frmComentarios">
        <div id="cabecalho-excluir">
            <p>Excluir funcionario</p>
            <a class="modal_close"></a>
        </div>
        <div class="txt-excluir">
            <p>Você deseja realmente excluir este resumo?</p>
            <input type="button" value="Excluir" id="confirmarExcluir" />
            <input type="hidden" id="idUsuarioExcluido" />
            <input type="button" class="modal_close" value="Cancelar" id="cancelar" />
        </div>
    </form>
</div>
