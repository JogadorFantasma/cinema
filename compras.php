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
                                <li><a href="./">Home <i class="fa fa-angle-right" aria-hidden="true"></i> </a></li>
                                <li><a href="./">Filmes <i class="fa fa-angle-right" aria-hidden="true"></i> </a></li>
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
                      <li class="active">
                          <div class="wizard-heading"><span>1</span>Ingressos</div>
                            <div class="wizard-content">
                              <div class="panel-body">
                                <b>SELECIONE O NÚMERO DE ENTRADAS:</b>
                                <p class="wizard-paraa">Maximo 10 ingressos por transação.</p>
                                
                                
                                <div class="single-enties">
                                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 acurate">
                                    <div class="media">
                                      
                                      <div class="media-body">
                                        <h4 class="media-heading">Normal</h4>                                  
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 acurate">
                                    <div class="entities-properties">
                                      <ul>
                                        <li> R$ <?php echo number_format($dadosDaProgramacao[0]->valor,2,',','.');?> </li>
                                        <li>
                                            <div class="input-group spinner-normal">
                                              <div class="input-group-btn-vertical acurate text-center">
                                                <button class="btn btn-default" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                                <button class="btn btn-default" type="button"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                                <form>
                                                  <fieldset>
                                                    <div class="col-sm-6">
                                                      <div class="form-group">
                                                          <input type="text" class="form-control" value="1" minlength="1" maxlength="10">
                                                      </div>
                                                    </div>
                                                  </fieldset>
                                                </form>
                                              </div>
                                            </div>                             
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                                <div class="single-enties">
                                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 acurate">
                                    <div class="media">
                                      
                                      <div class="media-body">
                                        <h4 class="media-heading">Estudantes</h4>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 acurate">
                                    <div class="entities-properties">
                                      <ul>
                                        <li>R$ <?php echo number_format(($dadosDaProgramacao[0]->valor_meia),2,',','.');?> </li>
                                        <li>
                                            <div class="input-group spinner-meia">
                                              <div class="input-group-btn-vertical acurate text-center">
                                                <button class="btn btn-default" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                                <button class="btn btn-default" type="button"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                                <form>
                                                  <fieldset>
                                                    <div class="col-sm-6">
                                                      <div class="form-group">
                                                          <input type="text" class="form-control" value="0" minlength="0" maxlength="10">
                                                      </div>
                                                    </div>
                                                  </fieldset>
                                                </form>
                                              </div>
                                            </div>                             
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                                
                                <!-- <div class="promo-ad-area">
                                  <img src="images/promo-ad.png" alt="">
                                </div> -->
                                <div class="varification">
                                  <p>* Não se esqueça de trazer uma identificação para verificação. Não haverá reembolso após a compra dos ingressos!</p>
                                </div>
                              </div>
                              <form method="post" action="?action=add&id=252525" >
									<input type="hidden" name="nome_produto" value="Ingresso">
                  <input type="hidden" name="url_filme" value="<?php echo $descFilme[0]->url_amigavel;?>">
                  <input type="hidden" name="id_filme" value="<?php echo $descFilme[0]->id;?>">
                  <input type="hidden" name="data_filme" value="<?php echo $data_ingresso;?>">
                  <input type="hidden" name="hora_filme" value="<?php echo $horario_ingresso;?>">
                   <input type="hidden" name="id_sala" value="<?php echo $dadosDaProgramacao[0]->id_sala;?>">
									<input type="hidden" name="valor_inteira" value="<?php echo $dadosDaProgramacao[0]->valor;?>">
                  <input type="hidden" name="valor_meia" value="<?php echo $dadosDaProgramacao[0]->valor_meia;?>">
                  <div class="spinner-normal2">
                  <input type="hidden" name="quantidade_ingresso_inteira" value="1">
                  </div>
                  <div class="spinner-meia2">
                  <input type="hidden" name="quantidade_ingresso_meia" value="0">
                  </div>
									<input type="hidden" name="addCarrinhoIngresso" value="S">
									<button class="btn-green done" type="submit">Proximo <i class="fa fa-angle-right" aria-hidden="true"></i></button>
									</form>
                              
                            </div>
                      </li>
                      <li>
                        <div class="wizard-heading wizard-bor">
                            <span>2</span> Assentos
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
                            <li><span>Tipo:</span> <?php echo exibe_tipo_filme($dadosDaProgramacao[0]->id_tipo);?></li>
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