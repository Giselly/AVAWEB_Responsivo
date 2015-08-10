<?php

/**@var Resumo */
$resumoBusiness = Resumo::getInstance();

/** Recebe o formulario */
$form = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(isset($form['salvar'])){
    
    $dados = array(
       "idUsuario" =>  $idUsuario,
       "idCapitulo" => $url->getURL(1),
       "resumo" => $form['resumo'],
       "dataAtual" => date('Y-m-d')
    );
    
    /** cadastra os dados no banco*/
    $resumoBusiness->cadastrar($dados);
    
    echo '<h2 id="tituloCapitulo">Resumo Enviado!</h2>';
    echo '<h3 id="subtituloCapitulo">Aguarde uma notificação!</h3>';
} else {
    
    /** Busca dados da tabela resumo no banco */
    $dadosResumo = $resumoBusiness->buscar();
    
    /** Verifica se há algum resumo do capitulo atual feito pelo usuário que está logado no banco de dados */
    $existeResumo = false;
    foreach ($dadosResumo as $resumo){
        if(($resumo["idCapitulo"] == $url->getURL(1)) && ($resumo["idUsuario"] == $idUsuario)){
                $existeResumo = true;
        } 
    }
    include_once('pages/pgresumo.php');
}
