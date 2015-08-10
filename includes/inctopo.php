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

/** Inclue a pagina do topo */
include_once('pages/pgtopo.php');
