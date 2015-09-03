<?php

/** Verifica se o usuario logado possui permissão de professor */
isProfessor($professor);

/**@var Resumo */
$resumoBusiness = Resumo::getInstance();

/** busca dados da tabela resumo no banco*/
$dadosResumo = $resumoBusiness->buscar();

/** Recebe o formulario */
$form = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if($url->posicaoExiste( 1) && $url->getURL(1) == 'lerResumos'){ 
    /** Include da pagina do resumo */   
    include_once("pages/pg{$url->getURL(1)}.php");
    
/** Insere a notificação no banco */    
}else {
    /** Include da pagina de resumos para correção */
    include_once("pages/pgresumosCorrecao.php");
}

if(isset($form['salvar'])){
    $dados = array(
        "id" => $url->getURL(2),
        "notificacao" => $form["content"],
        "dataNotificacao" => date('Y-m-d'),
        "aprovacao"=> $form["aprovacao"]
    );
        
        
    $resumoBusiness->editar($dados);
     
    //$host = is_string($_SERVER["HTTP_HOST"]) ? $_SERVER["HTTP_HOST"] : "" ; 
     echo "<script>window.location = '" . RAIZ . "{$url->getURL(1)}';</script>";
    //echo "<script>window.location(http://{$host}/AvaWeb/pgresumosCorrecao.php)</script>";
} 

/** Executa a exclusão de um resumo */
    try {
        if($url->getURL(1) == 'Excluir') {
        $resumoBusiness->excluir($url->getURL(2));
        echo "<script>window.location = '" . RAIZ . "{$url->getURL(0)}';</script>";
        }
    } catch (Exception $ex) {
       
        //echo "<script>window.location = '" . RAIZ . "{$url->getURL(0)}/erro/{$url->getURL(2)}';</script>";
    }

    exit;
