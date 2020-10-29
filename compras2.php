<?php include ('includes.php');

$id = '';
if(isset($_GET['url'])){
    if(empty($_GET['url'])){
        header('Location: filmes');
    }else{
        $id = $_GET['url'];        
    }
}

$descFilme = $filmes->rsDados('', '', '', $id);
if(isset($_GET['data']) && !empty($_GET['data'])){
  $data_ingresso = substr($_GET['data'],0,4)."-".substr($_GET['data'],4,2)."-".substr($_GET['data'],6,2);
}
if(isset($_GET['horario']) && !empty($_GET['horario'])){
  $horario_ingresso = substr($_GET['horario'],0,2).":".substr($_GET['horario'],2,2).":00";
}
//echo "Aqui: ".$data_ingresso;
$dadosDaProgramacao = $filmes->rsDadosProgramacao('', '', '', $descFilme[0]->id, $data_ingresso, '', $horario_ingresso);
//var_dump($dadosDaProgramacao);
$dadosSala = $filmes->rsDadosSalas($dadosDaProgramacao[0]->id_sala);
?>
<!doctype html>
<html class="no-js" lang="pt-br">
    <head>
        <meta charset="utf-8">
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
                                <li><a href="./">Home <i class="fa fa-angle-right" aria-hidden="true"></i> </a></li>
                                <li><a href="./">Filmes <i class="fa fa-angle-right" aria-hidden="true"></i> </a></li>
                                <li><?php echo $descFilme[0]->titulo;?></li>
                            </ul>
                        </div>
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
                      <li >
                       
                        <div class="wizard-heading wizard-bor">
                            <span>2</span> Assentos
                          </div>
                        
                      </li>
                      <li class="active">
                        <div class="wizard-heading">
                            <span>3</span> Resumo e Pagamento
                          </div>
                          <div class="wizard-content" style="display: block;">
                            <div class="cinema-sumary-area siixx">
                              <div class="media">
                                <div class="pull-left siixx">
                                  <a href="#">
                                    <div class="sidebar-image siixx">
                                      <img src="img/<?php echo $descFilme[0]->imagem;?>" alt="">
                                      <div class="movies-image-head">
                                      <h2><?php echo $descFilme[0]->titulo;?></h2>
                                      
                                      </div>
                                    </div>
                                  </a>
                                  <!-- <div class="varification">
                                    <p>*Don’t forget to come with an ID for verification. No refunds after the purchase of tickets!</p>
                                  </div> -->
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><?php echo $descFilme[0]->titulo;?></h4>
                                  <div class="details">                          
                                    <ul>
                                      <li><span>Place: </span> Zooks Cinema City</li>
                                      <li><span>Day : </span> 05/06/2016</li>
                                      <li><span>Room : </span> 4 </li>
                                      <li><span>Time : </span> 21:40</li>
                                      <li class="entry"><span>ENTRIES:<br/>1x Normal</span> $8.50</li>
                                    </ul>
                                  </div>
                                  <!-- <p>TVA Included (21%) <br/><i>All expenses are included also.</i></p> -->
                                  <div class="button">
                                    <a href="#">Total: $8.50</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="contact-details">
                              <h3>Dados</h3>                              
                              <form>
                                <fieldset>
                                  <div class="row">
                                  <div class="col-sm-6">
                                    <div class="form-group">
                                      <input type="text" class="form-control" placeholder="Nome Completo" required>
                                    </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="form-group">
                                      <input type="text" class="form-control" placeholder="CPF" required>
                                    </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="form-group">
                                      <input type="text" class="form-control" placeholder="Telefone" required>
                                    </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="form-group">
                                      <input type="email" class="form-control" placeholder="E-mail" required>
                                    </div>
                                  </div>
                                  
                                  
                                  </div>
                                </fieldset>
                              </form>
                            </div>
                            <button class="btn-default back-top topppbtn" type="button"><i class="fa fa-angle-left" aria-hidden="true"></i> Voltar</button>
                            <button class="btn-green done last-button topppbtn" type="submit">Pagar com o Cartão <img src="images/payment.png" alt=""></button>
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
                            <!-- <li><span>Place: </span> Zooks Cinema City</li> -->
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
    </body>
</html>