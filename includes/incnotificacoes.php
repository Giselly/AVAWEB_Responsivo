<?php
/** @var Resumo */
$resumoBusiness = Resumo::getInstance();

/** busca dados da tabela resumo no banco*/
$dadosResumo = $resumoBusiness->buscar();

if($url->posicaoExiste(1) && $url->getURL(1) == 'lerNotificacao' && $url->getURL(0) == 'resumosCorrecao' ){
    
    /** Include notificacao */   
    include_once("pages/pg{$url->getURL(1)}.php");
    
    /** Busca uma notificação específica */
    if($url->posicaoExiste(2)){
    $resumoBuscarPorId = $resumoBusiness->buscarPorId($url->getURL(2));    
    }
} else {
    include_once('pages/pgnotificacoes.php');
}
