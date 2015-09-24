<?php

/** @var Usuario */
$usuarioBusiness = Usuario::getInstance();

/** Recebe o formulario */
    $form = filter_input_array(INPUT_POST, FILTER_DEFAULT);

/**
 * Verifica se foi enviado via POST o form
 */
if (isset($_POST['enviar']) && is_string($_POST['enviar'])) {
    $dados = array(
        "nome" => $form['usuario'],
        "email" => $form['email'],
        "login" => $form['login'],
        "senha" => password($form['senha'])
    );
    
    $usuarioBusiness->cadastrar($dados);
}

include_once('pages/pgcadastro.php');
