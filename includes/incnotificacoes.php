<?php
/** @var Notificacao */
$notificacaoBusiness = Notificacao::getInstance();

/** busca dados da tabela resumo no banco*/
$dadosNotificacao = $notificacaoBusiness->buscar();

if($url->posicaoExiste(1) && $url->getURL(1) == 'lerNotificacao' && $url->getURL(0) == 'resumosCorrecao' ){
    
    /** Include notificacao */   
    include_once("pages/pg{$url->getURL(1)}.php");
    
    /** Busca uma notificação específica */
    if($url->posicaoExiste(2)){
    $notificacaoBuscarPorId = $notificacaoBusiness->buscarPorId($url->getURL(2));    
    }
} else {
    include_once('pages/pgnotificacoes.php');
}
