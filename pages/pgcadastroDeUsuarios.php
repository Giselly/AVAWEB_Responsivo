<link rel='stylesheet' type='text/css' href='css/cadastroDeUsuarios.css'>

<section class="listagemCadastro">
    <div class="camposSection">
        <?php echo $erroExcluir; ?>
        <table class="listagem">
            <input name="enviar" class="novo" type="submit" value="Novo Usuário" onclick="window.location = '<?php echo $url->getURL(0); ?>/novo';"/>
            <form method="post" name="frmPesquisa" id="frmPesquisa">
                <input type="text" placeholder="Pesquisa" class="pesquisa" id="filtro" name="filtro" value="<?php echo (isset($form['filtro']) ? $form['filtro'] : ""); ?>"/>
            </form>
            <tr>
                <th>Nome Completo</th>
                <th>E-mail</th>
                <th>Status</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
            <?php
            if (count($dadosUsuarios)) {
                foreach ($dadosUsuarios as $usuario) {
                    echo "
                    <tr>
                        <td class='align-left'>{$usuario['nome']}</td>
                        <td class='align-left'>{$usuario['email']}</td>
                        <td id='status'><input type='checkbox' disabled='disabled' " . (($usuario['status']) ? "checked='checked'" : "") . " /></td>
                        <td id='editar'><a href='{$url->getURL(0)}/editar/{$usuario['id']}'><img src='imagens/editar.png' title='Editar''/></a></td>
                        <td id='excluir'><a class='exluirFuncionario' href='{$usuario['id']}'><img src='imagens/lixeira.gif' title='Excluir'/> </a></td>
                    </tr>
                ";
                }
            } else {
                echo "<tr><td colspan='6'>Nenhum usuário encontrado.</td></tr>";
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
            <p>Você deseja realmente excluir este funcionário?</p>
            <input type="button" value="Excluir" id="confirmarExcluir" />
            <input type="hidden" id="idUsuarioExcluido" />
            <input type="button" class="modal_close" value="Cancelar" id="cancelar" />
        </div>
    </form>
</div>