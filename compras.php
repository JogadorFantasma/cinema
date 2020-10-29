<?php include ('includes.php');

$id = '';
if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        header('Location: filmes');
    }else{
        $id = $_GET['id'];        
    }
}


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
<<<<<<< HEAD
        <link rel="stylesheet" href="<?php echo SITE_URL;?>/css/font-awesome.min.css">
=======
        <link rel="stylesheet" href="<?php echo SITE_URL;?>/ss/font-awesome.min.css">
>>>>>>> 1d5a8c02a500d8b8f11d872295d89d78b5a9c551
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
                                <li><a href="index.html">Home <i class="fa fa-angle-right" aria-hidden="true"></i> </a></li>
                                <li><a href="index.html">Movie <i class="fa fa-angle-right" aria-hidden="true"></i> </a></li>
                                <li>Single Movie</li>
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
                      <li class="active">
                          <div class="wizard-heading"><span>1</span>Ingressos</div>
                            <div class="wizard-content">
                              <div class="panel-body">
                                <b>SELECIONE O TIPO DE NÚMERO DE ENTRADAS:</b>
                                <p class="wizard-paraa">Maximum 10 ingressos por transação.</p>
                                
                                
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
                                        <li> $8.50 / seat </li>
                                        <li>
                                            <div class="input-group spinner-normal">
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
                                        <li>$7.50 / seat </li>
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
                              <button class="btn-green done" type="submit">Proximo <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                            </div>
                      </li>
                      <li>
                        <div class="wizard-heading wizard-bor">
                            <span>2</span> Assentos
                          </div>
                          <div class="wizard-content seats">
                            <div class="selected-seat">
                              <ul>
                                <li><span></span>Assentos selecionados</li>
                                <li><span></span>Assentos Livres</li>
                                <li><span><i class="fa fa-wheelchair" aria-hidden="true"></i></span>Reservados para Cadeirantes</li>
                                <li><span></span>Assentos Indisponiveis</li>
                              </ul>
                            </div>
                            <div class="seats-table">
                              <div class="table-responsive">
                                <table class="table">
                                  <tbody> 
                                    <tr>
                                      <td class="number">14</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="1"/>1</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="2"/>2</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="3"/>3</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="4"/>4</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="5"/>5</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="6"/>6</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="7"/>7</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="8"/>8</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="9"/>9</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="10"/>10</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="11"/>11</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="12"/>12</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="13"/>13</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="14"/>14</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="15"/>15</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="16"/>16</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="17"/>17</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="18"/>18</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="19"/>19</td>
                                      <td class="number">14</td>
                                    </tr> 
                                    <tr>
                                      <td class="number">13</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="1"/>1</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="2"/>2</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="3"/>3</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="4"/>4</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="5"/>5</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="6"/>6</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="7"/>7</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="8"/>8</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="9"/>9</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="10"/>10</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="11"/>11</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="12"/>12</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="13"/>13</td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="16"/>16</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="17"/>17</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="18"/>18</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="19"/>19</td>
                                      <td class="number">13</td>
                                    </tr> 
                                    <tr>
                                      <td class="number">12</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="1"/>1</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="2"/>2</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="3"/>3</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="4"/>4</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="5"/>5</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="6"/>6</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="7"/>7</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="8"/>8</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="9"/>9</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="10"/>10</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="11"/>11</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="12"/>12</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="13"/>13</td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="16"/>16</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="17"/>17</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="18"/>18</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="19"/>19</td>
                                      <td class="number">12</td>
                                    </tr> 
                                    <tr>
                                      <td class="number">11</td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="unavailable click-seat"><input type="checkbox" value="4"/>4</td>
                                      <td class="unavailable click-seat"><input type="checkbox" value="5"/>5</td>
                                      <td class="unavailable click-seat"><input type="checkbox" value="6"/>6</td>
                                      <td class="unavailable click-seat"><input type="checkbox" value="7"/>7</td>
                                      <td class="unavailable click-seat"><input type="checkbox" value="8"/>8</td>
                                      <td class="unavailable click-seat"><input type="checkbox" value="9"/>9</td>
                                      <td class="unavailable click-seat"><input type="checkbox" value="10"/>10</td>
                                      <td class="unavailable click-seat"><input type="checkbox" value="11"/>11</td>
                                      <td class="unavailable click-seat"><input type="checkbox" value="12"/>12</td>
                                      <td class="unavailable click-seat"><input type="checkbox" value="13"/>13</td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="16"/>16</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="17"/>17</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="18"/>18</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="19"/>19</td>
                                      <td class="number">11</td>
                                    </tr> 
                                    <tr>
                                      <td class="number">10</td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="unavailable click-seat"><input type="checkbox" value="4"/>4</td>
                                      <td class="unavailable click-seat"><input type="checkbox" value="5"/>5</td>
                                      <td class="unavailable click-seat"><input type="checkbox" value="6"/>6</td>
                                      <td class="unavailable click-seat"><input type="checkbox" value="7"/>7</td>
                                      <td class="unavailable click-seat"><input type="checkbox" value="8"/>8</td>
                                      <td class="unavailable click-seat"><input type="checkbox" value="9"/>9</td>
                                      <td class="unavailable click-seat"><input type="checkbox" value="10"/>10</td>
                                      <td class="unavailable click-seat"><input type="checkbox" value="11"/>11</td>
                                      <td class="unavailable click-seat"><input type="checkbox" value="12"/>12</td>
                                      <td class="unavailable click-seat"><input type="checkbox" value="13"/>13</td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="16"/>16</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="17"/>17</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="18"/>18</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="19"/>19</td>
                                      <td class="number">10</td>
                                    </tr> 
                                    <tr>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                    </tr> 
                                    <tr>
                                      <td class="number">9</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="1"/>1</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="5"/>2</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="3"/>3</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="4"/>4</td>
                                      <td class="whilechair"><span><i class="fa fa-wheelchair" aria-hidden="true"></i></span></td>
                                      <td class="whilechair"><span><i class="fa fa-wheelchair" aria-hidden="true"></i></span></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>                             
                                      <td class="whilechair"><span><i class="fa fa-wheelchair" aria-hidden="true"></i></span></td>
                                      <td class="whilechair"><span><i class="fa fa-wheelchair" aria-hidden="true"></i></span></td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="12"/>12</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="13"/>13</td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="16"/>16</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="17"/>17</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="18"/>18</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="19"/>19</td>
                                      <td class="number">9</td>
                                    </tr> 
                                    <tr>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                    </tr> 
                                    <tr>
                                      <td class="number">8</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="1"/>1</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="2"/>2</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="3"/>3</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="4"/>4</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="5"/>5</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="6"/>6</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="7"/>7</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="8"/>8</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="9"/>9</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="10"/>10</td>
                                      <td class="selected-seat click-seat"><input type="checkbox" value="11"/>11</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="12"/>12</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="13"/>13</td>  
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="16"/>16</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="17"/>17</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="18"/>18</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="19"/>19</td>
                                      <td class="number">8</td>
                                    </tr>
                                    <tr>
                                      <td class="number">7</td>
                                      <td class="whilechair"><span><i class="fa fa-wheelchair" aria-hidden="true"></i></span></td>
                                      <td class="whilechair"><span><i class="fa fa-wheelchair" aria-hidden="true"></i></span></td>
                                      <td class="whilechair"><span><i class="fa fa-wheelchair" aria-hidden="true"></i></span></td>
                                      <td class="whilechair"><span><i class="fa fa-wheelchair" aria-hidden="true"></i></span></td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="5"/>5</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="6"/>6</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="7"/>7</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="8"/>8</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="9"/>9</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="10"/>10</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="11"/>11</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="12"/>12</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="13"/>13</td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="16"/>16</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="17"/>17</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="18"/>18</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="19"/>19</td>
                                      <td class="number">7</td>
                                    </tr> 
                                    <tr>
                                      <td class="number">6</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="1"/>1</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="2"/>2</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="3"/>3</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="4"/>4</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="5"/>5</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="6"/>6</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="7"/>7</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="8"/>8</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="9"/>9</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="10"/>10</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="11"/>11</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="12"/>12</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="13"/>13</td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="16"/>16</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="17"/>17</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="18"/>18</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="19"/>19</td>
                                      <td class="number">6</td>
                                    </tr> 
                                    <tr>
                                      <td class="number">5</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="1"/>1</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="2"/>2</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="3"/>3</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="4"/>4</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="5"/>5</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="6"/>6</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="7"/>7</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="8"/>8</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="9"/>9</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="10"/>10</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="11"/>11</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="12"/>12</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="13"/>13</td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="16"/>16</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="17"/>17</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="18"/>18</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="19"/>19</td>
                                      <td class="number">5</td>
                                    </tr>
                                    <tr>
                                      <td class="number">4</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="1"/>1</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="2"/>2</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="3"/>3</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="4"/>4</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="5"/>5</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="6"/>6</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="7"/>7</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="8"/>8</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="9"/>9</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="10"/>10</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="11"/>11</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="12"/>12</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="13"/>13</td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="16"/>16</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="17"/>17</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="18"/>18</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="19"/>19</td>
                                      <td class="number">4</td>
                                    </tr>
                                    <tr>
                                      <td class="number">3</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="1"/>1</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="2"/>2</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="3"/>3</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="4"/>4</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="5"/>5</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="6"/>6</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="7"/>7</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="8"/>8</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="9"/>9</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="10"/>10</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="11"/>11</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="12"/>12</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="13"/>13</td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="16"/>16</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="17"/>17</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="18"/>18</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="19"/>19</td>
                                      <td class="number">3</td>
                                    </tr>
                                    <tr>
                                      <td class="number">2</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="1"/>1</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="2"/>2</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="3"/>3</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="4"/>4</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="5"/>5</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="6"/>6</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="7"/>7</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="8"/>8</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="9"/>9</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="10"/>10</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="11"/>11</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="12"/>12</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="13"/>13</td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="16"/>16</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="17"/>17</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="18"/>18</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="19"/>19</td>
                                      <td class="number">2</td>
                                    </tr>
                                    <tr>
                                      <td class="number">1</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="1"/>1</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="2"/>2</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="3"/>3</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="4"/>4</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="5"/>5</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="6"/>6</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="7"/>7</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="8"/>8</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="9"/>9</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="10"/>10</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="11"/>11</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="12"/>12</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="13"/>13</td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="16"/>16</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="17"/>17</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="18"/>18</td>
                                      <td class="free-seat click-seat"><input type="checkbox" value="19"/>19</td>
                                      <td class="number">1</td>
                                    </tr> 
                                  </tbody>
                                </table>
                              </div>
                              <div class="screen-button">
                                <a href="#">Tela de Cinema</a>
                              </div>
                            </div>
                              <button class="btn-green done" type="submit">Proximo <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                          </div>
                      </li>
                      <li>
                        <div class="wizard-heading">
                            <span>3</span> Resumo e Pagamento
                          </div>
                          <div class="wizard-content">
                            <div class="cinema-sumary-area siixx">
                              <div class="media">
                                <div class="pull-left siixx">
                                  <a href="#">
                                    <div class="sidebar-image siixx">
                                      <img src="img/<?php echo $descFilme->foto?>" alt="">
                                      <div class="movies-image-head">
                                      <h2><?php echo $descFilme->titulo?></h2>
                                      
                                      </div>
                                    </div>
                                  </a>
                                  <!-- <div class="varification">
                                    <p>*Don’t forget to come with an ID for verification. No refunds after the purchase of tickets!</p>
                                  </div> -->
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><?php echo $descFilme->titulo?></h4>
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
                        <p><?php echo $descFilme->titulo?></p>
                        <div class="sidebar-image siixx">
                          <img src="img/<?php echo $descFilme->foto?>" alt="">
                          <div class="movies-image-head">
                          <h2><?php echo $descFilme->titulo?></h2>
                          
                          </div>
                        </div>
                        <div class="details">                          
                          <ul>
                            <li><span>Place: </span> Zooks Cinema City</li>
                            <li><span>Day : </span> 05/06/2016</li>
                            <li><span>Room : </span> 4 </li>
                            <li><span>Time : </span> 21:40</li>
                            <li class="entry"><span>Entries:<br/>1x Normal</span> $8.50</li>
                          </ul>
                        </div>
                        
                        <div class="button">
                          <a href="#">Total: $8.50</a>
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
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
        <!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- owl.carousel js -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
        <!-- jquery-ui js -->
        <script src="js/jquery-ui.min.js"></script>
        <!-- wow js -->
        <script src="js/wow.min.js"></script>
        <!-- plugins js -->
        <script src="js/plugins.js"></script>
        <!-- jQuery MixedIT Up -->
        <script src="js/jquery.mixitup.min.js" type="text/javascript"></script>
        <!-- main js -->
        <script src="js/main.js"></script>
    </body>
</html>