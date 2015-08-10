<?php

/** @var Capitulo */
$capituloBusiness = Capitulo::getInstance();

/** @var Topico */
$topicoBusiness = Topico::getInstance();

/** @var Resumo */
$resumoBusiness = Resumo::getInstance();

/** Dados dos capitulos cadastrados */
$capitulos = $capituloBusiness->buscar();

$capituloSelecionado = $capituloBusiness->buscarPorID($url->posicaoExiste(1) ? $url->getURL(1) : 1);

if ($url->posicaoExiste(3)) {
    /** @var array dados do topico atual */
    $topicoAtual = $topicoBusiness->buscarPorID($url->getURL(3));
    
    /** Indica que o botão exercicio e resumo não foram clicados */
    $exercicioSelecionado = "";
    $resumoSelecionado = "";
} elseif ($url->posicaoExiste(2)) {
    
    /** Verifica se o botão exercicio ou o botão resumo foram clicados */
    $exercicioSelecionado = ($url->getURL(2) == "exercicio") ? "id='clicado'" : "";
    $resumoSelecionado = ($url->getURL(2) == "resumo") ? "id='clicado'" : "";
    
    /** Nenhum topico foi selecionado */
    $topicoAtual[0]['id'] = 0;
} else {
    /** Seleciona o primeiro topico */
    $topicoAtual = $topicoBusiness->buscarPorID(1);
    
    /** Indica que o botão exercicio e resumo não foram clicados */
    $exercicioSelecionado = "";
    $resumoSelecionado = "";
}

/** Include a pagina home */
include_once('pages/pgtreinamento.php');
