<?php

/**@var Resumo */
$resumoBusiness = Resumo::getInstance();

/** busca dados da tabela resumo no banco*/
$dadosResumo = $resumoBusiness->buscar();

/** Recebe o formulario */
$form = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if($url->posicaoExiste(1) && $url->getURL(1) == 'lerResumos'){ 
    /** Include da pagina do resumo */   
    include_once("pages/pg{$url->getURL(1)}.php");
    
/** Insere a notificação no banco */    
}else if(isset($form['salvar'])){
    $dados = array(
        "notificacao" => $form["content"],
        "dataNotificacao" => date('Y-m-d')
    );
        
    $resumoBusiness->editar($dados);
        
    /** Include da pagina de resumos para correção */
    include_once("pages/pgresumosCorrecao.php");
} else {
    /** Include da pagina de resumos para correção */
    include_once("pages/pgresumosCorrecao.php");
}  
