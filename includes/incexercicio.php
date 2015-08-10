<?php

/**  */
$questoesBusiness = Questao::getInstance();
$questoes = $questoesBusiness->buscarPorCapitulo($url->getURL(1), $idUsuario);

/** */
$exerciciosBusiness = Exercicio::getInstance();

/** Recebe o formulario */
$form = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(isset($form['salvar'])){
    
    /** */
    $sum = 0;
    $qtdQuestoes = 0;    
    
    /** */
    unset($form['salvar']);
    
    /** */
    foreach($form as $questao => $resposta){
        $res = $questoesBusiness->buscarItem($resposta);
        $sum += $res[0]['valor'];
        $qtdQuestoes++;
    }
    
    /** */
    $nota = ($sum * 10) / $qtdQuestoes;
    
    /** */
    $dados = array(
        "idCapitulo" => $url->getURL(1),
        "idUsuario" => $idUsuario,
        "nota" => $nota,
    );
    
    /** */
    $exerciciosBusiness->cadastrar($dados);
}

include_once('pages/pgexercicio.php');
