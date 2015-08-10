<?php
include_once('../Classes/Config.inc.php');

/** Recebe o formulario */
$form = filter_input_array(INPUT_POST, FILTER_DEFAULT);

/** @var Login */
$login = Login::getInstance($form['login'], $form['senha']);

/** @var array */
$usuario = $login->consultar();

/** Verifica se o login é válido e cria uma nova sessão */
if(count($usuario) > 0){
    session_start();
    $_SESSION['login'] = $usuario[0]['login'];
    $_SESSION['senha'] = $usuario[0]['senha'];
}

/** Retorna a quantidade de usuarios retornados na consulta */
echo count($usuario);