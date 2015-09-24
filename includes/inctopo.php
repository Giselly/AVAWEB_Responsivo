<?php
/** @var string */
$arqJS = "";

/** @var string */
$arqCSS = "";

/* * Verifica se o arquivo de js da pagina atual existe */
if (file_exists("js/{$url->getURL(0)}.js")) {
    $arqJS = "<script src='js/{$url->getURL(0)}.js'></script>";
}

/* * Verifica se o arquivo de css da pagina atual existe */
if (file_exists("css/{$url->getURL(0)}.css")) {
    $arqCSS = "<link rel='stylesheet' type='text/css' href='css/{$url->getURL(0)}.css'>";
}

/** @var Resumo */
$resumoBusiness = Resumo::getInstance();

/** busca dados da tabela resumo no banco*/
$dadosResumo = $resumoBusiness->buscar();
$visualizar = 0;
$visualizarResumo = 0;
$aprovacao = 0;
foreach ($dadosResumo as $resumo) {
        if($resumo['idUsuario'] == $idUsuario && $resumo['notificacaoVisualizada'] == 0 && ($resumo['notificacao'] != NULL || $resumo['notificacao'] != '')){
            $visualizar++;
        }
        if($resumo['resumoVisualizado'] == 0 ) {
           $visualizarResumo++; 
        }
        if($resumo['resumoVisualizado'] == 0 && $resumo['aprovacao'] == 0){
            $aprovacao++;
        }
}

/** Inclue a pagina do topo */
include_once('pages/pgtopo.php');
