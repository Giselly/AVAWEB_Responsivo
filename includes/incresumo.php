<?php

/**@var Resumo */
$resumoBusiness = Resumo::getInstance();

/** Recebe o formulario */
$form = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(isset($form['salvar'])){
    $dados = array(
       "idUsuario" =>  $idUsuario,
       "capitulo" => $url->getURL(1),
       "resumo" => str_replace("../../tinymce/js/tinymce/plugins/emoticons", "tinymce/js/tinymce/plugins/emoticons", $form['content']),
       "dataAtual" => date('Y-m-d')
    );
    
    /** cadastra os dados no banco*/
    $resumoBusiness->cadastrar($dados);
    
    //$destinatario = "jlarteedesign@gmail.com";
    $destinatario = "giselly.reboucas@iteva.org.br";
    $nomeDestinatario = "João Lucas"; 
    $assunto = "Novos Resumos!";
    $res = strlen($form['content']) > 20 ? substr($form['content'], 0, 20)."..." : $form['content'];
    $mensagem = "<strong>Um novo resumo foi recebido. Você pode visualizá-lo no AVAWEB!</strong></br>"
            . "Nome: {$apelido}</br>"
            . "Capítulo {$url->getURL(1)}</br>"
            . "<i>{$res}</i>";
              
    require_once("functions/funcEnviarEmail.php"); 
    echo '<h2 id="tituloCapitulo">Resumo Enviado!</h2>';
    echo '<h3 id="subtituloCapitulo">Aguarde uma notificação!</h3>';
} else {
   
    /** Busca dados da tabela resumo no banco */
    $dadosResumo = $resumoBusiness->buscar();
    
    /** Verifica se há algum resumo do capitulo atual feito pelo usuário que está logado no banco de dados */
    $existeResumo = false;
    foreach ($dadosResumo as $resumo){
        if(($resumo["capitulo"] == $url->getURL(1)) && ($resumo["idUsuario"] == $idUsuario)){
            $existeResumo = true;
        } 
    }
    include_once('pages/pgresumo.php');
}
