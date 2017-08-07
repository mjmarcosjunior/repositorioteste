<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="theme-color" content="#2790f2" /><!-- cor da barra de endereços no browser mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Roi Hero</title>
    <link rel="stylesheet" href="css/clouds.css" media="all">
    <link rel="stylesheet" href="css/bootstrap.min.css" media="all">
    <link rel="stylesheet" href="css/font-awesome.min.css" media="all">
    <link rel="stylesheet" href="css/circle.css" media="all">
    <link rel="stylesheet" href="css/estilo.css" media="all">
    <link rel="stylesheet" href="css/animate.css" media="screen">
    <link rel="stylesheet" href="css/animate1.css">
    <link rel="stylesheet" href="css/replete-modal.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">

    <!-- HTML5 LIGHTBOX MUST BE ON HEADER TO RUN PROPERLY -->
    <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="html5lightbox/html5lightbox.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <style type="text/css">
        .cliente-show {
            height: 150px;
        }

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
</head>
<body>
<!-- /header -->
    <header class="azul">
       <nav class="navbar navbar-azul navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Exibir navegação</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="inicio">
                        <img alt="Brand" src="img/logo.png">
                    </a>
                </div><!-- navbar header -->
                 <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a style="font-weight: bolder;cursor: pointer;text-decoration: underline;" onclick="openModal('modal-contato')">Assine Já</a></li>
                    <li><a href="inicio">Início</a></li>
                    <li><a href="features">Features</a></li>
                    <li><a href="planos">Planos</a></li>
                    <!-- ROI HERO BLOG -->
                    <!-- <li><a href="#">Blog</a></li> -->
                    <a href="login" class="btn btn-primary btn-roi navbar-btn">Login</a>
                </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
    </header>
    <!-- /header -->
    <div class="wrapper">
      <div id="background-wrap">
          <div class="x2">
              <div class="cloud"></div>
          </div>

          <div class="x3">
                <div class="cloud" style="position:relative; top:-20px;"></div>
          </div>

          <div class="x4">
             <div class="cloud" style="position:relative; top:-100px;"></div>
          </div>
      </div>
      <div id="roi-hero" class="scrollto--arrow">
        <img src="img/heroi-voando.png" alt="ROI HERO" style="position:relative; top:-60px">
      </div>
        <div id="painel-principal" class="azul-topo">
            <div class="bloco-destacado text-center animated flipInX">
                <h1 id="texto-destacado" class="big">
                    Nós ajudamos você a vender mais!
                </h1>
                <p>Se minhas preferências são diferentes das suas, sua loja virtual <br/>não deveria mostrar os mesmos produtos <br/>para mim e para você.</p>
                <div class="promo">
                 <a style="text-decoration: none !important;"><button class="animated tada" id="teste-gratis" onclick="openModal('modal-contato')">Assine já!</button></a>
                </div>            
        </div>
        <div id="barra-azul"  class="row">
            <div class="roi-hero-video text-center">
                <a class="html5lightbox" href="https://www.youtube.com/watch?v=_eFdILZV7c0"><img src="assets/player-btn.png" alt="Roi Hero em 1 minuto!"> Conheça a Roi Hero em 1 minuto!</a>
            </div>
        </div>

        <!-- <div id="clientes-usam" class="row">
            <div class="conteudo text-center">
                <ul id="client-list" class="client-list">                                    
                    <li><img class="cliente-logo" src="img/logo_casabaher.png" style="background: red !important; padding: 10px !important;" alt="Clientes que usam a ROI HERO"/></li>
                    <li><img src="img/logo_vestcasa.png" alt="Clientes que usam a ROI HERO"></li>
                    <li><img src="img/logo_altamesa.jpg" alt="Clientes que usam a ROI HERO"></li>
                    <li><img src="img/logo_beluga.png" alt="Clientes que usam a ROI HERO"></li>
                    <li><img src="img/logo_cirilocabos.png" alt="Clientes que usam a ROI HERO"></li>
                    <li><img src="img/logo_cristalle.png" alt="Clientes que usam a ROI HERO"></li>
                    <li><img src="img/logo_grifiti.png" alt="Clientes que usam a ROI HERO"></li>
                    <li><img src="img/logo_rosana.png" alt="Clientes que usam a ROI HERO"></li>
                </ul>
                <span>Está usando a Roi Hero</span>
            </div>
        </div> -->


            <!-- GRÁFICOS LOJAS/VENDAS/PRODUTOS -->
            <!-- <section class="area-graficos row default">
                <div class="conteudo col-md-12">
                        <h1 class="text-center">A melhor ferramenta para aumentar<br>suas vendas online!</h1>
                    <div class="graficos">
                        <div class="row">
                            <div class="col-md-4 text-center grafico vermelho">
                                <h3>Lojas que usam</h3>
                                <h4>256</h4>
                                <div class="clearfix"></div>
                                <div class="c100 p25 red">
                                    <span>50%</span>
                                    <div class="slice">
                                        <div class="bar"></div>
                                        <div class="fill"></div>
                                    </div>
                                </div>
                                <span>Meta</span>
                            </div>
                            <div class="col-md-4 text-center grafico amarelo">
                                <h3>Vendas</h3>
                                <h4>R$ 97,023</h4>
                                <div class="c100 p25 yellow">
                                    <span>50%</span>
                                    <div class="slice">
                                        <div class="bar"></div>
                                        <div class="fill"></div>
                                    </div>
                                </div>
                                <span>Meta</span>
                            </div>
                            <div class="col-md-4 text-center grafico azul">
                                <h3>Produtos Vendidos</h3>
                                <h4>76,212</h4>
                                <div class="c100 p50">
                                    <span>50%</span>
                                    <div class="slice">
                                        <div class="bar"></div>
                                        <div class="fill"></div>
                                    </div>
                                </div>
                                <span>Meta</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

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

            <!-- SLIDER, POR ENQUANTO NÃO VAMOS MOSTRAR -->
            <section id="slider" class="hidden-sm hidden-xs">
                 <!-- #region Jssor Slider Begin -->
                <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;visibility:hidden;">
                    <!-- Loading Screen -->
                    <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
                        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                        <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                    </div>
                    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;">
                        <div>
                             <img data-u="image" src="img/purple2.png" />
                            <div style="position:absolute;top:80px;left:30px;width:480px;height:120px;z-index:0;font-size:37px;color:#ffffff;line-height:60px;font-family:coolvetica;">CASES DE SUCESSO  VESTCASA</div>
                            <div style="position:absolute;top:200px;left:30px;width:480px;height:120px;z-index:0;font-size:18px;color:#ffffff;line-height:27px;font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;"><p>Através das nossas vitrines de recomendação nas páginas de produtos
a Vestcasa aumentou significativamente a taxa de conversão.</p><br/><br/></div>
                          
                        </div>
                        <div>
                            <img data-u="image" src="img/blue2.png" />
                            <div style="position:absolute;top:80px;left:30px;width:480px;height:120px;z-index:0;font-size:37px;color:#ffffff;line-height:60px;font-family:coolvetica;">CASES DE SUCESSO <br>BAVERA</div>
                           <div style="position:absolute;top:200px;left:30px;width:480px;height:120px;z-index:0;font-size:18px;color:#ffffff;line-height:27px; font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;"><p>Com uma estratégia forte no mobile, a bavera optou
por criar blocos de recomendação por todo o site. O aumento no faturamento foi muito expressivo
além de uma melhora significativa no ticket médio.</p><br/><br/></div>
                   
                        </div>
                        <div>
                            <img data-u="image" src="img/red1.png" />
                           <div style="position:absolute;top:80px;left:30px;width:480px;height:120px;z-index:0;font-size:37px;color:#ffffff;line-height:60px;font-family:coolvetica;">CASES DE SUCESSO <br>ILUMINIM</div>
                            <div style="position:absolute;top:200px;left:30px;width:480px;height:120px;z-index:0;font-size:18px;color:#ffffff;line-height:27px; font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;"><p>Com uma estratégia forte de compre junto e itens similares
a Iluminim tem obtido resultados incríveis no aumento
da taxa de conversão, quantidade de transações e faturamento.</p><br/><br/></div>
                          
                        </div>
                        <a data-u="any" href="https://www.jssor.com/wordpress.html" style="display:none">wordpress gallery</a>
                    </div>
                    <!-- Bullet Navigator -->
                    <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
                        <!-- bullet navigator item prototype -->
                        <div data-u="prototype" style="width:16px;height:16px;"></div>
                    </div>
                    <!-- Arrow Navigator -->
                    <span data-u="arrowleft" class="jssora22l" style="top:0px;left:8px;width:40px;height:58px;" data-autocenter="2"></span>
                    <span data-u="arrowright" class="jssora22r" style="top:0px;right:8px;width:40px;height:58px;" data-autocenter="2"></span>
                </div>

                <!-- #endregion Jssor Slider End -->
            </section>
            <!-- FIM SLIDER -->

            <!-- BLOG ROI HERO -->
            <!-- <section class="blog">
                <h1 class="text-center">
                    Blog Roi Hero
                </h1>
                <div class="blog-posts">
                    <div class="container">
                        <div class="posts-area">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="blog-item">
                                    <div class="imagem-post">
                                        <img  src="img/blog-item.jpeg"/>
                                    </div>
                                    <div class="post-meta">
                                        <h1>Loren Ipsum dolor sit amet</h1>
                                        <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI</p>
                                        <button class="post-link botao">Lorem Ipsum</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="blog-item ">
                                    <div class="imagem-post">
                                        <img  src="img/blog-item.jpeg"/>
                                    </div>
                                    <div class="post-meta">
                                        <h1>Loren Ipsum dolor sit amet</h1>
                                        <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI</p>
                                        <button class="post-link botao">Lorem Ipsum</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="blog-item ">
                                    <div class="imagem-post">
                                        <img  src="img/blog-item.jpeg"/>
                                    </div>
                                    <div class="post-meta">
                                        <h1>Loren Ipsum dolor sit amet</h1>
                                        <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI</p>
                                        <button class="post-link botao">Lorem Ipsum</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

            <section class="vermelho feature top">
                <div class="row">
                    <div class="container">
                        <div class="col-md-6 col-sm-12">
                            <div class="imagem-feature">
                                <img  src="img/gifs/loja-inteligente.gif" alt="Loja Inteligente">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="texto-feature ">
                                <h1 class="big">Loja Inteligente</h1>
                                <p>Com nossa tecnologia, nós vamos recomendar os produtos corretos para cada visitante, levando em consideração as preferências com base na navegação do cliente em sua loja.</p>
                                <p>E você tem liberdade para definir em quais área do site nós vamos atuar ou não. Desta forma, podemos criar prateleiras na página inicial ou em qualquer página que você queira.</p>
                               <a href="features"> <button class="btn-feature">
                                    Explorar Recursos
                                </button> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="azul feature z1">
                <div class="row">
                    <div class="container">
                        <div class="col-md-6 col-sm-12">
                            <div class="texto-feature ">
                                <h1 class="big">Recomende Mais<br> Venda Mais!</h1>
                                <p>Já percebeu que quando você entra em um supermercado, você "nunca" compra os itens que foi lá para comprar?.</p>
                                <p>Na internet não é muito diferente, quando você oferta mais produtos que são relevantes, mais você vende. A ROI HERO pode te ajudar com vitrines que ofertam os produtos certos para cada um, deixando sua loja irresistível.</p>
                                <a href="features"> <button class="btn-feature">
                                    Explorar Recursos
                                </button> </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="imagem-feature">
                                <img  src="img/gifs/recomenda-mais.gif" alt="Recomende mais produtos">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="amarelo feature z1">
                <div class="row">
                    <div class="container">
                        <div class="col-md-6 col-sm-12">
                            <div class="imagem-feature">
                                <img  src="img/gifs/venda-produtos.gif" alt="Venda Produtos">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="texto-feature ">
                                <h1 class="big">Venda Produtos</h1>
                                <p>Nós temos um formato chamado de oferta limitada, que é perfeito para você vender produtos específicos para dar vazão a itens há mais tempo no estoque.</p>
                                <p>Ele pode ficar localizado em suas páginas de categoria aumentando o valor médio dos pedidos em sua loja.</p>
                                <a href="features"> <button class="btn-feature">
                                    Explorar Recursos
                                </button> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="feature vermelho z1">
                <div class="row">
                    <div class="container">
                        <div class="col-md-6 col-sm-12">
                            <div class="texto-feature ">
                                <h1 class="big">Não precisa programar</h1>
                                <p>Você pode adicionar facilmente nossos blocos de recomendação, sem saber programar 01 linha de código. A Roi Hero foi pensada para você que não tem nenhum conhecimento técnico, mas deseja elevar o nível da sua loja virtual deixando-a ainda mais profissional.</p>
                                <a href="features"> <button class="btn-feature">
                                    Explorar Recursos
                                </button> </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="imagem-feature">
                                <img  src="img/gifs/nao_precisa_programar.gif" alt="Não precisa programar">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- NEWSLETTER ROI HERO -->
            <!-- <section id="newsletter" class="z1">
                <div class="conteudo newsletter-content text-center">
                    <h1>Newsletter Roi Hero</h1>
                     <form method="post" id="newsletter-form">
                        <input type="text" name="newsletter-mail" id="newsletter-mail" placeholder="E-mail">
                        <button type="submit" class="botao laranja" name="enviar-newsletter">Enviar</button>
                    </form>
                    <p class="form-legend">Acompanhe nossas notícias!</p>
                </div>
            </section> -->

            <?php include('footer.php') ?>

                <div class="row copyright-area">
                    <div class="container text-center">
                        <div id="footer-credits">
                            <p>Roi Hero - Recomendações Inteligentes desde 2016.</p>
                        </div>
                    </div>
                </div>
            </footer>
    </div>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jssor.slider-23.1.6.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideoTransitions = [
            [{b:900,d:2000,x:-379,e:{x:7}}],
            [{b:900,d:2000,x:-379,e:{x:7}}],
            [{b:-1,d:1,o:-1,sX:2,sY:2},{b:0,d:900,x:-171,y:-341,o:1,sX:-2,sY:-2,e:{x:3,y:3,sX:3,sY:3}},{b:900,d:1600,x:-283,o:-1,e:{x:16}}]
            ];

            var jssor_1_options = {
            $AutoPlay: 1,
            $SlideDuration: 800,
            $SlideEasing: $Jease$.$OutQuint,
            $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
            },
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
            },
            $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
            }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*responsive code end*/
        };
    </script>
    <script type="text/javascript" src="js/utils.js"></script>
    <script type="text/javascript" src="slick/slick.js"></script>
    <script>
        (function(){
            jssor_1_slider_init();

            $(document).scroll(
                utils.debounce(function(){
                utils.animeScroll('.imagem-feature', 'animated fadeInLeftBig imagem-feature-live');
                utils.animeScroll('.newsletter-content', 'animated rollIn newsletter-content-show');
                utils.animeScroll('.grafico','animated bounceInUp grafico-show');
                utils.animeScroll('.cliente-hide', 'animated slideInUp cliente-show');
                utils.animeScroll('.blog-item', 'animated fadeInLeftBig blog-item-show');
            }, 10));

            $('.client-list').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                vertical: true
            });


            }());
    </script>
</body>
</html>
<!-- ALERTA SEMPRE NO FIM DA PAGINA -->
<?php include_once('/home/roihero/public_html/sandbox/alertas.php'); ?> 
<?php include_once('/home/roihero/public_html/sandbox/modal.php'); ?> 