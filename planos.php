<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Roi Hero</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css" media="all">
    <link rel="stylesheet" href="css/font-awesome.min.css" media="all">
    <link rel="stylesheet" href="css/estilo.css" media="all">
    <link rel="stylesheet" href="css/animate.css" media="screen">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/replete-modal.css">
    <style type="text/css">
        .rplm-alert button {
            color: white;
            border: 2px solid currentColor;
            font-size: 17px;
            border-radius: 15px;
            margin: 26px 5px 0 5px;
            cursor: pointer;
            background: rgb(70,185,177);
            font-weight: bold;
            padding: 3px 20px;
        }

        .rm-button-container {
            display: none;
        }

        .content-wrap {
            padding-top: 0;
        }

            #hvr-grow-shadow {
          display: inline-block;
          vertical-align: middle;
          -webkit-transform: perspective(1px) translateZ(0);
          transform: perspective(1px) translateZ(0);
          box-shadow: 0 0 1px transparent;
          -webkit-transition-duration: 0.3s;
          transition-duration: 0.3s;
          -webkit-transition-property: box-shadow, transform;
          transition-property: box-shadow, transform;
        }
        #hvr-grow-shadow:hover, #vr-grow-shadow:focus, #hvr-grow-shadow:active {
          box-shadow: 0 10px 10px -10px rgba(0, 0, 0, 0.5);
          -webkit-transform: scale(1.1);
          transform: scale(1.1);
        }

    </style>
    <script type="text/javascript" src="html5lightbox/html5lightbox.js"></script>
    <script src="js/replete-modal.js"></script>
</head>
<body>
<!-- /header -->
    <?php include('header.php'); ?>
    <!-- /header -->
    <div class="wrapper">
        <div id="area-gradiente" class="azul-gradiente animated bounceInUp">
            <div class="conteudo-destaque text-center animated bounceInDown">
                <h1>Escolha já um plano!</h1>
                <div class="grupo-botoes">
                    <input type="radio" id="peq_negocio" name="caregoria" value="pequeno" checked>
                    <label for="peq_negocio"><i class="fa fa-shopping-basket"></i> Pequeno</label>
                    <input type="radio" id="med_negocio" name="caregoria" value="medio">
                    <label for="med_negocio"><i class="fa fa-shopping-cart"></i> Médio</label>
                    <input type="radio" id="grande_negocio" name="caregoria" value="grande">
                    <label for="grande_negocio"><i class="fa fa-building"></i> Grande</label>
                </div>
                <span class="legenda">
                    Cada plano garante a sua loja um número de impressões das recomendações da ROI HERO, então escolha com base na navegação do seu site.
                </span>
            </div>
        </div>
        <!-- área com a tabela de preços sobrepondo outra div e centralizada -->
        <section class="area-precos">
            <div class="caixa-precos">
                <div class="cabecalho text-center">
                    <h1>Filtre os planos pela quantidade de <b id="visualizacoes">0</b> impressões.</h1>
                </div>
                <div class="area-progresso">
                    <input type="range" id="pageviewsQtd" class="progressbar" name="barra-progresso" value="0" min="0" max="600000">
                </div>
                <!--- THE FUCKING TABLE -->
                <div class="tabela-precos">
                    <table id="tabela" class="table">
                        <thead>
                            <tr>
                                <th>Pageviews</th>
                                <th>Preço</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="linha-ativa">
                                <td>3.000 impressões</td>
                                <td>R$ 29/mês</td>
                                <td><button class="botao" onclick="openModal('modal-contato')">Assinar</td>
                            </tr>
                            <tr>
                                <td>10.000 impressões</td>
                                <td>R$ 59/mês</td>
                                <td><button class="botao" onclick="openModal('modal-contato')">Assinar</td>
                            </tr>
                            <tr>
                                <td>20.000 impressões</td>
                                <td>R$ 99/mês</td>
                                <td><button class="botao" onclick="openModal('modal-contato')">Assinar</td>
                            </tr>
                            <tr>
                                <td>35.000 impressões</td>
                                <td>R$ 149/mês</td>
                                <td><button class="botao" onclick="openModal('modal-contato')">Assinar</td>
                            </tr>
                            <tr>
                                <td>50.000 impressões</td>
                                <td>R$ 199/mês</td>
                                <td><button class="botao" onclick="openModal('modal-contato')">Assinar</td>
                            </tr>
                            <tr>
                                <td>75.000 impressões</td>
                                <td>R$ 249/mês</td>
                                <td><button class="botao" onclick="openModal('modal-contato')">Assinar</td>
                            </tr>
                            <tr>
                                <td>100.000 impressões</td>
                                <td>R$ 299/mês</td>
                                <td><button class="botao" onclick="openModal('modal-contato')">Assinar</td>
                            </tr>
                            <tr>
                                <td>150.000 impressões</td>
                                <td>R$ 399/mês</td>
                                <td><button class="botao" onclick="openModal('modal-contato')">Assinar</td>
                            </tr>
                            <tr>
                                <td>200.000 impressões</td>
                                <td>R$ 499/mês</td>
                                <td><button class="botao" onclick="openModal('modal-contato')">Assinar</td>
                            </tr>
                            <tr>
                                <td>250.000 impressões</td>
                                <td>R$ 599/mês</td>
                                <td><button class="botao" onclick="openModal('modal-contato')">Assinar</td>
                            </tr>
                            <tr>
                                <td>300.000 impressões</td>
                                <td>R$ 699/mês</td>
                                <td><button class="botao" onclick="openModal('modal-contato')">Assinar</td>
                            </tr>
                            <tr>
                                <td>350.000 impressões</td>
                                <td>R$ 799/mês</td>
                                <td><button class="botao" onclick="openModal('modal-contato')">Assinar</td>
                            </tr>
                            <tr>
                                <td>400.000 impressões</td>
                                <td>R$ 899/mês</td>
                                <td><button class="botao" onclick="openModal('modal-contato')">Assinar</td>
                            </tr>
                            <tr>
                                <td>500.000 impressões</td>
                                <td>R$ 999/mês</td>
                                <td><button class="botao" onclick="openModal('modal-contato')">Assinar</td>
                            </tr>
                            <tr style="display: table-row !important;">
                                <td style="font-weight:bold;">Infinitas impressões</td>
                                <td><B>Contrate um plano VIP</B></td>
                                <td><button class="botao" onclick="openModal('modal-contato')">Assinar</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- icones informativos abaixo da tabela -->
                <div class="informacoes">
                    <h1 class="text-center">Todos os planos incluem</h1>
                    <di class="row">
                        <div class="col-md-4 col-md-offset-2">
                            <div class="info-item">
                                <img src="assets/planos/compre-junto.png" alt="Compre Junto"> Compre Junto
                            </div>
                            <div class="info-item">
                                <img src="assets/planos/vitrine-de-outlet.png" alt="Vitrine de Outlet"> Vitrine de Outlet
                            </div>
                            <div class="info-item">
                               <img src="assets/planos/oferta-limitada.png" alt="Oferta Limitada"> Oferta Limitada
                            </div>
                            <div class="info-item">
                                <img src="assets/planos/suporte-wow.png" alt="Suporte Wow"> Suporte Express
                            </div>
                        </div>
                        <div class="col-md-4 col-md-offset-1">
                            <div class="info-item">
                                <img src="assets/planos/sliders.png" alt="Sliders"> Sliders
                            </div>
                            <div class="info-item">
                                <img src="assets/planos/overlay.png" alt="Overlay"> Overlay
                            </div>
                            <div class="info-item">
                                <img src="assets/planos/loja-inteligente.png" alt="Loja Inteligente"> Loja Inteligente
                            </div>
                            <div class="info-item">
                                <img src="assets/planos/widgets-ilimitados.png" alt="Widgets Ilimitados"> Widgets Ilimitados
                            </div>
                        </div>
                    </di>
                </div>
            </div>
        </section>
        <!-- área de dúvidas comuns 
        <section class="area-duvidas">
            <div class="duvidas-comuns">
                    <h1 class="big text-center">Dúvidas Comuns</h1>
                    <ul>
                        <li data-toggle="collapse" data-target="#duvida-1">A ROI HERO funciona em todas as plataformas de loja virtual?
                            <ul id="duvida-1" class="collapse">
                                <p>Sim, funcionamos em todas as plataformas que sejam possíveis copiar e colar um código. Lembrando que a ROI HERO é de fácil integração, não precisa ser expert para integrá-la.</p>
                            </ul>
                        </li>
                        <li  data-toggle="collapse" data-target="#duvida-2">Eu preciso saber usar HTML?
                            <ul id="duvida-2" class="collapse">
                              <p>Não necessáriamente. Caso você saiba o mínimo de HTML, você já irá conseguir utilizar a ferramenta ROI HERO facilmente em seu site. Caso você não saiba, temos nosso suporte que pode facilitar para você!</p>
                            </ul>
                        </li>
                        <li data-toggle="collapse" data-target="#duvida-3">Tem multa se cancelar meu plano?
                            <ul id="duvida-3" class="collapse">
                              <p>Não! Na ROI HERO você pode cancelar seu plano a qualquer momento sem multas. Mas dúvido que você irá querer cancelar...</p>
                            </ul>
                        </li>
                        <li data-toggle="collapse" data-target="#duvida-4">Escolhi um plano, como eu pago?
                            <ul id="duvida-4" class="collapse">
                              <p>Nós iremos enviar a você boletos todo mês com 10 dias de antecedência em relação ao vencimento do seu plano.</p>
                            </ul>
                        </li>
                    </ul>
            </div> -->
            <!-- seguir o exemplo acima para cria o efeito de "abertura" ao clicar na dúvida, o efeito é gerado pelo bootstrap collapse -->
        </section> 

        <!-- Seção de clientes começa aqui -->
        <section class="clientes">
                <div class="container">
                    <h1 class="text-center">Alguns de nossos clientes</h1>
                    <div class="row">
                        <div class="col-md-12 col-lg-8 col-lg-offset-2">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-6 cliente-hide">
                                 <a href="http://www.casabaher.com" target="_blank">   <img class="cliente-logo" src="img/logo_casabaher.png" id="hvr-grow-shadow" style="background: red !important; padding: 10px !important;"/> </a>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6 cliente-hide">
                                  <a href="http://www.vestcasa.com.br" target="_blank">  <img class="cliente-logo" id="hvr-grow-shadow" src="img/logo_vestcasa.png"/> </a>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6 cliente-hide">
                                 <a href="http://www.grifti.com.br" target="_blank">   <img class="cliente-logo" style="margin-top: 25%;" id="hvr-grow-shadow" src="img/logo_grifiti.png"/> </a>
                                </div>
                                <div class="col-md-3 col-sm-6  col-xs-6 cliente-hide">
                                <a href="https://www.iluminim.com.br" target="_blank">  <img class="cliente-logo" id="hvr-grow-shadow" style="position:relative; top:30px;" src="img/iluminim.png"> </a>
                                </div>
                                <div class="col-md-3 col-sm-6  col-xs-6 cliente-hide">
                                  <a href="http://www.cristallepresentes.com.br" target="_blank">  <img class="cliente-logo" id="hvr-grow-shadow" src="img/logo_cristalle.png"/> </a>
                                </div>
                                <div class="col-md-3 col-sm-6  col-xs-6 cliente-hide">
                                  <a href="http://www.beluga.com.br" target="_blank">  <img class="cliente-logo" id="hvr-grow-shadow" src="img/logo_beluga.png"/> </a>
                                </div>
                                <div class="col-md-3 col-sm-6  col-xs-6 cliente-hide">
                                  <a href="http://www.cirilocabos.com.br" target="_blank">  <img class="cliente-logo" id="hvr-grow-shadow" src="img/logo_cirilocabos.png"/> </a>
                                </div>
                                <div class="col-md-3 col-sm-6  col-xs-6 cliente-hide">
                                  <a href="http://www.pandorajoias.com.br" target="_blank"> <img class="cliente-logo" id="hvr-grow-shadow" style="position:relative; top:-16px" src="img/pandora1.png"> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
             <!-- / Clientes acaba aqui -->

        <!-- Footer começa aqui -->
     <?php include('footer.php') ?>
            <!-- Área de copyright -->
            <div class="row copyright-area">
                <div class="container text-center">
                    <div id="footer-credits">
                        <p>Roi Hero - Recomendações Inteligentes desde 2016.</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>


    <!-- JS no Footer pra agilizar o carregamento da página -->
    <link rel="stylesheet" href="css/progressbar.css" media="all">
    <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- funções uteis utilizadas no site -->
    <script type="text/javascript" src="js/utils.js"></script>
    <!-- funções usadas na página -->
    <script type="text/javascript" src="js/app.js"></script>
    <!-- Usado para transformar o número do formato internacional para string em formato brasileiro de milhares -->
    <script type="text/javascript" src="js/jquery.number.min.js"></script>
    <!-- aplica os filtros e efeitos dinâmicos na página -->
    <script type="text/javascript" src="js/planos.js"></script>

    <section id="modal">
        <style type="text/css">
            .modal-overlay {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: transparent;
                z-index: 200;
                transition: all .5s;
                -moz-transition: all .5s;
                -webkit-transition: all .5s;
                -o-transition: all .5s;
                display: none;
            }

            .modal-lite{
                padding: 15px;
            }

            #modal-contato {
                height: 345px;
                width: 40%;
                margin: 10% auto;
                box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
                background: linear-gradient(#FFF, #fff,#EAEAEA);
                position: relative;
            }

            #modal-contato h1, #modal-contato label {
                font-family: Coolvetica;
                background: #fff;
            }

            #modal-contato h1 {
                margin-bottom: 25px;
            }
            #modal-contato label {
                font-size: 18px;
            }

            #modal-contato form { 
                background: transparent;
            }

            .button-submit {
                display: inline-block;
                border: none;
                border-radius: 20px;
                padding: 10px 35px;
                color: white;
                background-color: #00c853 !important;
                margin-left: auto;
                margin-right: auto;
                float: right;
            }

            .btn-close {
                position: absolute;
                top: -7px;
                right: 2px;
                font-size: 30px;
                color: #C23A4A !important;
                cursor: pointer;
            }

            .btn-close:hover, .button-submit:hover {
                opacity: .8;
            }

            @media screen and (max-width: 480px) {
                #modal-contato {
                    height: auto;
                    width: 90%;
                    margin: 18% 5%;
                    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
                    background: linear-gradient(#FFF, #fff,#D4D4D4);
                    position: relative;
                    display: inline-block;
                }
            }

            /*@media screen and (max-width: 900px) { 
                #modal-contato {
                    height: 400px;
                    width: 40%;
                    margin: 10% auto;
                    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
                    background: linear-gradient(#FFF, #fff,#D4D4D4);
                    position: relative;
                }

            }*/
        </style>
<?php include_once('modal.php'); ?> 

        <script type="text/javascript">
            $('.btn-close').on('click', function() {
               $(this).parent().parent().fadeOut();
            });

            function openModal(modal) {
              modal = '#'+modal;
              $(modal).parent().fadeIn(500);
            }
        </script>
    </section>


</body>
</html>
