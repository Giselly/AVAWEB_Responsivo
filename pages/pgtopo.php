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
            <div id="logo">
            <img src="imagens/logo.gif"></div>
          	<!--logo Movel Screen-->
            <div id="logo_res">
            <img src="imagens/logo3.gif" alt="">
            </div>
            <!--logo Medium Scren-->
            <div id="logo_res2">
            <img src="imagens/logo2.gif" alt="">
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
        
        <!--MENU SCREEN MÓVEL-->
        <!--Button Menu-->
        <nav id="nav-btn" onclick="slidetoggle()">
            <div></div>
            <div></div>
            <div></div>
        </nav>
        <!--Menu Slider SCREEN MOVEL-->
        <section id="nav-slide">
        	<br>
            <p><a href="treinamento" id="menu_slider">Treinamento</a></p><br>
            <p><a href="cronogramaDoCurso" id="menu_slider">Cronograma do curso</a></p><br>
            <p><a href="notificacoes" id="menu_slider">Notificações</a></p><br>
            <p><a href="logout" id="menu_slider_logout">Sair</a></p><br>
        </section>
        <!--JAVA SCRIPT-->
         <script>
            function slidetoggle(){
            var slider = document.getElementById("nav-slide");
            slider.style.height = window.innerHeight - 60 + "px";
            
            if(slider.style.right == "0px"){
                slider.style.right = "-250px";
                
            }else{
                slider.style.right = "0px";
            }
        }
        </script>