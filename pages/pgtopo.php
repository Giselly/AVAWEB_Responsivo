<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <base href="<?php echo RAIZ; ?>" target="_self">
        <title>Ambiente Virtual de Aprendizagem</title>
        <link rel='stylesheet' type='text/css' href='css/style.css'>
        <link rel='stylesheet' type='text/css' href='css/topo.css'>
        <link rel='stylesheet' type='text/css' href='css/lightBox.css'>
        <?php echo $arqCSS; ?>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/jquery.mask.js" type="text/javascript"></script>
        <script src="js/mascaras.js" type="text/javascript"></script>
        <script src="js/jquery-ui.js"></script>
        <script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
        <script type="text/javascript" src="js/jquery.leanModal.min_1.js"></script>
        <script type="text/javascript" src="js/topo.js"></script>
        <script type="text/javascript" src="js/datepicker-pt-br.js"></script>
        <?php echo $arqJS; ?>
        <link rel="shortcut icon" href="imagens/icon.ico" type="image/gif">
    </head>
    <body>
        <input type="hidden" value="<?php echo RAIZ; ?>" id="raiz" />
        <header id="principal">
        
            <!--logo Full Scren-->
            <div id="logo"> <a href="treinamento/1/conteudo"><img src="imagens/logo.gif" alt="" title="Voltar a Página Inicial"></a></div>
          	<!--logo Movel Screen-->
            <div id="logo_res"> <a href="treinamento/1/conteudo"><img src="imagens/logo3.gif" alt="" title="Voltar a Página Inicial"></a>
            </div>
            <!--logo Medium Scren-->
            <div id="logo_res2"> <a href="treinamento/1/conteudo"><img src="imagens/logo2.gif" alt="" title="Voltar a Página Inicial"></a>
            </div>
             <!--logo Super Movel Scren-->
            <div id="logo_res3"> <a href="treinamento/1/conteudo"><img src="imagens/logo4.gif" alt="" title="Voltar a Página Inicial"></a>
            </div>
            <div id="tituloSistema">
                Ambiente Virtual de Aprendizagem
            </div>
            <div id="menuUsuario">
                <span id="boasVindas">Olá, <?php echo $apelido; ?>  |  </span>Comunicação Digital
                <a href="logout" id="logout">Sair</a>
            </div>
            <a href="logout" id="logout2">Sair</a>
        </header>
        	
        <section id="menuSistema">
            <div id="separador">
            </div>
            <ul>
                <li><a href="treinamento">Treinamento</a></li>
                <li><a href="cronogramaDoCurso">Cronograma do curso</a></li>
                <li><a href="notificacoes">Notificações</a></li>
            </ul>
        </section>   
         <!--MENU SCREEN MEDIUM-->
        <!--Button Menu-->
        <nav id="nav-btn-medium">
            <div></div>
            <div></div>
            <div></div>
        </nav>
        <!--Menu Slider SCREEN MEDIUM-->
        <section id="nav-slide-medium">
            <br/>
            <p><a <?php if($url->getURL(0) == "alterarDados") echo "class='selecionado'"; ?>href="alterarDados" id="menu_slider">Alterar dados</a></p><br>
            <p><a <?php if($url->getURL(0) == "alterarSenha") echo "class='selecionado'"; ?>href="alterarSenha" id="menu_slider">Alterar senha</a></p><br>
            <p><a <?php if($url->getURL(0) == "cadastroDeUsuarios") echo "class='selecionado'"; ?>href="cadastroDeUsuarios"  id="menu_slider">Cadastro de usuários</a></p><br>
            <p><a <?php if($url->getURL(0) == "resumosCorrecao") echo "class='selecionado'"; ?>href="resumosCorrecao"  id="menu_slider">Resumos</a></p><br>
            <p><a href="logout" id="menu_slider_logout">Sair</a></p><br>
        </section>
        <!--MENU SCREEN MÓVEL-->
        <!--Button Menu-->
        <nav id="nav-btn-movel">
            <div></div>
            <div></div>
            <div></div>
        </nav>
        <!--Menu Slider SCREEN MOVEL-->
        <section id="nav-slide-movel">
            <br/>
            <p><a <?php if($url->getURL(0) == "alterarDados") echo "class='selecionado'"; ?>href="alterarDados" id="menu_slider">Alterar dados</a></p><br>
            <p><a <?php if($url->getURL(0) == "alterarSenha") echo "class='selecionado'"; ?>href="alterarSenha" id="menu_slider">Alterar senha</a></p><br>
            <p><a <?php if($url->getURL(0) == "cadastroDeUsuarios") echo "class='selecionado'"; ?>href="cadastroDeUsuarios"  id="menu_slider">Cadastro de usuários</a></p><br>
            <p><a <?php if($url->getURL(0) == "resumosCorrecao") echo "class='selecionado'"; ?>href="resumosCorrecao"  id="menu_slider">Resumos</a></p><br>
            <div id="tcns">
                <br>
                <p><a href="treinamento" id="menu_slider">Treinamento</a></p><br>
                <p><a href="cronogramaDoCurso" id="menu_slider">Cronograma do curso</a></p><br>
                <p><a href="notificacoes" id="menu_slider">Notificações</a></p><br>
                <p><a href="logout" id="menu_slider_logout">Sair</a></p><br>
            </div>
        </section>
        <!--JAVA SCRIPT Menu Slider - MEDIUM SCREEN-->
            <script>
                 $(document).ready(function(){
                    $("#nav-slide-medium").hide(); 

                    $("#nav-btn-medium").click(function(){
                        $("#nav-slide-medium").slideToggle("fast");
                    });
                 });
             </script>
        <!--JAVA SCRIPT Menu Slider - MOVEL SCREEN--> 
            <script>
                $(document).ready(function(){
                   $("#nav-slide-movel").hide(); 

                   $("#nav-btn-movel").click(function(){
                       $("#nav-slide-movel").slideToggle("fast");
                   });
                });
            </script>