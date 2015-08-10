$(document).ready(function () {
    
    /** Função para ajusta o conteudo ao tamanho da tela */
    ajustarConteudo();
    setTimeout(ajustarConteudo(), 1000);
    
    /** Reajusta o conteudo sempre que a tela mudar de tamanho */
    $(window).resize(function () {
        ajustarConteudo();
    });
    
    /** Exibe o questionario quando a pessoa clicar em iniciar exercicio */
    $('input#iniciar').click(function () {
        $('form#exercicio').show();
        $('section#iniciarExercicio').hide();
        ajustarConteudo();
    });
    
    /** Verifica se o usuario preencheu todas as questoes antes de enviar o teste */
    $('form#exercicio').submit(function () {
        var preenchido = true;
        $('ol#questoes > li').each(function () {
            if (preenchido) {
                var respondido = false;
                $(this).find('input[type=radio]').each(function () {
                    if ($(this).is(':checked')) {
                        respondido = true;
                    }
                });
                
                preenchido = respondido;
            }
        });
        
        if(!preenchido) alert('responda todas as questoes');
        return preenchido;
    });
});

/** Função que ajusta o conteudo ao tamanho da tela */
function ajustarConteudo() {
    var largura = $(document).width();

    $('#conteudoTopico').css('width', larguraConteudo(largura) + "%");

    ajustarAltura();
}

/** */
function ajustarAltura() {
    var altura = $('section#conteudoTopico').height() + 30;
    var posRodape = $('footer#rodape').position().top - 65;
    console.log(posRodape);
    if (posRodape > altura) {
        altura = posRodape;
    }

    if (altura < 500) {
        altura = 500;
    }

    $('#capitulos').css('height', (altura) + 'px');
    $('#paginas').css('height', (altura) + 'px');
}

/**
 * Ajusta o conteudo ao tamanho horizontal da tela
 * 
 * @param int largura da tela
 * @return int largura do documento 
 */
function larguraConteudo(largura) {
    if (largura > 980) {
        return 36.5 + 31 * (largura - 990) / (1920 - 990);
    } else {
        return 35;
    }
}