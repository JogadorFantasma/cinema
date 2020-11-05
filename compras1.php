<?php include ('includes.php');

$id = '';
if(isset($_GET['url'])){
    if(empty($_GET['url'])){
        header('Location: filmes');
    }else{
        $id = $_GET['url'];        
    }
}
$quantidade_inteira = 0;
  $quantidade_meia = 0;
foreach($_SESSION['shopping_cart'] as $pegandoIngresso){
  /* $quantidade_inteira = 0;
  $quantidade_meia = 0; */
  if($pegandoIngresso['id'] == 252525){
   /*  echo "id: ".$pegandoIngresso['id']."<br>";
    echo "Nome: ".$pegandoIngresso['nome_produto']."<br>";
    echo "Qnt: ".$pegandoIngresso['quantidade_produto']."<br>";
    echo "idFilme: ".$pegandoIngresso['id_filme']."<br>";
    echo "dtFilme: ".$pegandoIngresso['data_filme']."<br>";
    echo "hrFilme: ".$pegandoIngresso['hora_filme']."<br>"; */
    $quantidade_inteira = $pegandoIngresso['quantidade_produto'];
    $data_ingresso = $pegandoIngresso['data_filme'];
    $horario_ingresso = $pegandoIngresso['hora_filme'];
  }
  if($pegandoIngresso['id'] == 252526){
   /*  echo "id: ".$pegandoIngresso['id']."<br>";
    echo "Nome: ".$pegandoIngresso['nome_produto']."<br>";
    echo "Qnt: ".$pegandoIngresso['quantidade_produto']."<br>";
    echo "idFilme: ".$pegandoIngresso['id_filme']."<br>";
    echo "dtFilme: ".$pegandoIngresso['data_filme']."<br>";
    echo "hrFilme: ".$pegandoIngresso['hora_filme']."<br>"; */
    $quantidade_meia = $pegandoIngresso['quantidade_produto'];
    $data_ingresso = $pegandoIngresso['data_filme'];
    $horario_ingresso = $pegandoIngresso['hora_filme'];
  }
  $quantidade = $quantidade_inteira + $quantidade_meia;
}
//var_dump($_SESSION['shopping_cart']);
//echo "Quantidade: ".$quantidade;
$descFilme = $filmes->rsDados('', '', '', $id);
//var_dump($descFilme);
/* if(isset($_GET['data']) && !empty($_GET['data'])){
  $data_ingresso = substr($_GET['data'],0,4)."-".substr($_GET['data'],4,2)."-".substr($_GET['data'],6,2);
}
if(isset($_GET['horario']) && !empty($_GET['horario'])){
  $horario_ingresso = substr($_GET['horario'],0,2).":".substr($_GET['horario'],2,2).":00";
} */
//echo "Aqui2: ".$data_ingresso;
//echo "Aqui4: ".$horario_ingresso;
//echo "Aqui: ".$descFilme[0]->id;
//echo "Aqui3: ".$_SESSION['id_cidade'];
$dadosDaProgramacao = $filmes->rsDadosProgramacao('', '', '', $descFilme[0]->id, $data_ingresso, '', $horario_ingresso, $_SESSION['id_cidade']);
//var_dump($dadosDaProgramacao);
$dadosSala = $filmes->rsDadosSalas($dadosDaProgramacao[0]->id_sala);
?>
<!doctype html>
<html class="no-js" lang="pt-br">
    <head>
        <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="theme-color" content="#b5121b">
    
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
       <title><?php if(isset($descFilme[0]->meta_title) && !empty($descFilme[0]->meta_title)){echo $descFilme[0]->meta_title;}?></title>
    <meta name="description" content="<?php if(isset($descFilme[0]->meta_description) && !empty($descFilme[0]->meta_description_)){echo $descFilme[0]->meta_description;}?>"/>
		<meta name="keywords" content="<?php if(isset($descFilme[0]->meta_keywords) && !empty($descFilme[0]->meta_keywords)){echo $descFilme[0]->meta_keywords;}?>">
    <?php if(isset($infoSistema->favicon) && !empty($infoSistema->favicon)){?>
		<link rel="shortcut icon" href="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->favicon;?>" >
		<link rel="icon" href="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->favicon;?>" >
    <?php }?>
        <!-- all css here -->
        <!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="<?php echo SITE_URL;?>/css/bootstrap.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="<?php echo SITE_URL;?>/css/animate.css">
        <!-- flaticon css -->
        <link rel="stylesheet" href="<?php echo SITE_URL;?>/css/flaticon.css">
        <!-- jquery-ui.min css -->
        <link rel="stylesheet" href="<?php echo SITE_URL;?>/css/jquery-ui.min.css">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="<?php echo SITE_URL;?>/css/meanmenu.min.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" href="<?php echo SITE_URL;?>/css/owl.carousel.css">
        <!-- font-awesome css -->
        <link rel="stylesheet" href="<?php echo SITE_URL;?>/css/font-awesome.min.css">
        <!-- style css -->
        <link rel="stylesheet" href="<?php echo SITE_URL;?>/style.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="<?php echo SITE_URL;?>/css/responsive.css">
        <!-- modernizr css -->
        <script src="<?php echo SITE_URL;?>/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!-- Header Start Here -->
        <?php include('header.php')?>
        <!-- Header End Here -->
        <!-- Breadcumb Area Start Here -->
        <div class="breadcumb-area">
            <div class="container-fluid acurate">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="breadcumb">
                            <ul>
                                <li><a href="<?php echo SITE_URL;?>/.">Home <i class="fa fa-angle-right" aria-hidden="true"></i> </a></li>
                                <li><a href="<?php echo SITE_URL;?>/filmes">Filmes <i class="fa fa-angle-right" aria-hidden="true"></i> </a></li>
                                <li><?php echo $descFilme[0]->titulo;?></li>
                            </ul>
                        </div>
                        <br>
                        <p id="mostraCidade">Você está em <span style="color: red;"><?php echo $mostrarNomeCidade[0]->nome;?></span></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcumb Area End Here -->
        <!-- Trailers Area Start Here -->
        <div class="trailers-area">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="heading-title">
                    
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Trailers Area End Here -->
        <!-- Single Movie Start Here -->
        <div class="single-movie-area">
          <div class="container">
            <div class="row">
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="single-movie-content threee">
                  <ul class="payment-wizard">
                      <li >
                          <div class="wizard-heading"><span>1</span>Ingressos</div>
                      </li>
                      <li class="active">
                        <div class="wizard-heading ">
                            <span>2</span> Assentos
                          </div>
                          <div class="wizard-content seats" style="display: block;">
                           <?php 
                          $_GET['id_sala'] = $dadosSala->id;
                          $_GET['id_cidade_sala'] = $dadosSala->id_cidade;
                           include "inc-assentos.php";?>
                            
                          </div>
                      </li>
                      <li>
                        <div class="wizard-heading">
                            <span>3</span> Resumo e Pagamento
                          </div>
                    
                      </li>
                    </ul>
                  </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="sidebar-area">
                  <div class="single-sidebar">
                    <div class="widget">
                      <h2 class="widget-title">Resumo da Compra</h2>
                      <div class="sidebar-content">
                        <p><?php echo $descFilme[0]->titulo?></p>
                        <div class="sidebar-image siixx">
                          <img src="<?php echo SITE_URL;?>/img/<?php echo $descFilme[0]->imagem?>" alt="<?php echo $descFilme[0]->url_amigavel;?>" title="<?php echo $descFilme[0]->url_amigavel;?>">
                          <div class="movies-image-head">
                          <h2><?php echo $descFilme[0]->titulo?></h2>
                          
                          </div>
                        </div>
                        <div class="details">                          
                          <ul>
                            <li><span>Cidade: </span> <span style="color: red;"><?php echo $mostrarNomeCidade[0]->nome;?></span></li>
                            <li><span>Dia : </span> <?php echo formataData($dadosDaProgramacao[0]->data_exibicao);?></li>
                            <li><span>Sala : </span> <?php echo $dadosSala->titulo;?> </li>
                            <li><span>Horário : </span> <?php echo substr($dadosDaProgramacao[0]->hora_exibicao,0,5);?></li>
                            <!-- <li class="entry"><span>Entradas:<br/>1x Normal</span> $8.50</li> -->
                          </ul>
                        </div>
                        
                        <div class="button">
                          <!-- <a href="#">Total: $8.50</a> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Single Movie End Here -->
        <!-- Zooks Promos Start Here -->
        <?php include('newsletter.php')?>
        <!-- Zooks Promos End Here -->
        <!-- Footer Start Here -->
        <?php include('footer.php')?>
        <!-- Footer End Here -->
        <!-- all js here -->
        <!-- jquery latest version -->
        <script src="<?php echo SITE_URL;?>/js/vendor/jquery-1.12.0.min.js"></script>
        <!-- bootstrap js -->
        <script src="<?php echo SITE_URL;?>/js/bootstrap.min.js"></script>
        <!-- owl.carousel js -->
        <script src="<?php echo SITE_URL;?>/js/owl.carousel.min.js"></script>
        <!-- meanmenu js -->
        <script src="<?php echo SITE_URL;?>/js/jquery.meanmenu.js"></script>
        <!-- jquery-ui js -->
        <script src="<?php echo SITE_URL;?>/js/jquery-ui.min.js"></script>
        <!-- wow js -->
        <script src="<?php echo SITE_URL;?>/js/wow.min.js"></script>
        <!-- plugins js -->
        <script src="<?php echo SITE_URL;?>/js/plugins.js"></script>
        <!-- jQuery MixedIT Up -->
        <script src="<?php echo SITE_URL;?>/js/jquery.mixitup.min.js" type="text/javascript"></script>
        <!-- main js -->
        <script src="<?php echo SITE_URL;?>/js/main.js"></script>
        <script>
          function voltar(){
            <?php
              
            ?>
              
          }
        </script>
    </body>
</html>