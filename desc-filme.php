<?php include "includes.php";
$id = '';
if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        header('Location: filmes');
    }else{
        $id = $_GET['id'];        
    }
}
$descFilme = $filmes->rsDados('', '', '', $id);
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
        <link rel="stylesheet" href="<?php echo SITE_URL;?>/ss/font-awesome.min.css">
        <!-- style css -->
        <link rel="stylesheet" href="<?php echo SITE_URL;?>/style.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="<?php echo SITE_URL;?>/css/responsive.css">
        <!-- modernizr css -->
        <script src="<?php echo SITE_URL;?>/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
       
       <?php include "header.php";?>
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
                                <li><?php echo $descFilme[0]->titulo;?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcumb Area End Here -->
        <!-- Single Movie Show Start Here -->
        <div class="single-movie-show-area siix">
          <div class="container">
            <div class="row">              
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="movies-show-title">
                      <h2><?php echo $descFilme[0]->titulo;?></h2>
                  </div>
              </div>
            </div>
            <div class="row single-movie-show">              
              <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="movies-promo">
                  <div class="image">
                    <img src="<?php echo SITE_URL;?>/img/<?php echo $descFilme[0]->imagem;?>" alt="">
                    <div class="movies-image-head">
                      <h2><?php echo $descFilme[0]->titulo;?></h2>
                      <!-- <p>The Most Beloved Of All</p> -->
                    </div>
                  </div>
                  <div class="details">
                    <h3><?php echo $descFilme[0]->titulo;?></h3>
                    <ul>
                      <li><span>Duração :</span> <?php echo $descFilme[0]->duracao;?></li>
                      <li><span>Gênero :</span><?php echo $descFilme[0]->genero;?></li>
                      <li><span>Diretor :</span> <?php echo $descFilme[0]->diretor;?></li>
                      <li><span>Atores :</span> <?php echo $descFilme[0]->atores;?></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                <div class="movie-details">
                    <!-- <div class="video">
                      <iframe src="https://player.vimeo.com/video/199030826" allowfullscreen></iframe>
                    </div> -->
                    <div class="movie-description">
                      <h3>Sinopse</h3>
                      <p><?php echo $descFilme[0]->descricao;?></p>
                    </div>
                </div>
              </div>
            </div>
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                 <div class="movie-selection-area fouur">
                 <form>
                   <fieldset>
                    
                     <div class="col-sm-12">
                       <div class="form-group">                                                
                        <select class="selectpicker" onChange="AtualizaJanela('<?php echo SITE_URL;?>/inc-horario-desc-filmes.php?id_filme=<?php echo $descFilme[0]->id;?>&url=<?php echo $descFilme[0]->url_amigavel;?>&data='+this.value, 'Filmes');">
                                <?php 
                            $datas = render(date('Y-m-d'));
                            foreach($datas as $data){ ?>
                             <option value="<?php echo $data;?>" <?php if(date('Y-m-d') == $data){echo "selected";}?>><?php echo diasemana($data)." - ".formataData($data);?></option>
                            <?php }?>
                              
                            </select>
                       </div>
                     </div>
                   </fieldset>
                 </form>
                 </div>
               </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-mg-12 col-sm-12 col-xs-12">
                <div class="movie-time-area fouur">
                  <div class="title">
                    <p><?php echo $descFilme[0]->titulo;?></p>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php $_GET['id_filme'] = $descFilme[0]->id; $_GET['url'] = $descFilme[0]->url_amigavel;?>
                          <div id="janela_Filmes">
                    <?php include "inc-horario-desc-filmes.php"; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Single Movie Show End Here -->
        <!-- Zooks Promos Start Here -->
        <div class="zooks-promos-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title">
                            <h2><span>Zooks</span> Promos</h2>
                            <p>Weekly Zooks <strong>promotional</strong> ads!</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="total-promos-area">
                            <div class="single-promos">
                                <a href="#"><img src="<?php echo SITE_URL;?>/images/promos/1.jpg" alt=""></a>
                            </div>
                            <div class="single-promos">
                                <a href="#"><img src="<?php echo SITE_URL;?>/images/promos/2.jpg" alt=""></a>
                            </div>
                            <div class="single-promos">
                                <a href="#"><img src="<?php echo SITE_URL;?>/images/promos/3.jpg" alt=""></a>
                            </div>
                            <div class="single-promos">
                                <a href="#"><img src="<?php echo SITE_URL;?>/images/promos/1.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Zooks Promos End Here -->
    <?php include "footer.php";?>
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
         <script src="<?php echo SITE_URL;?>/js/jquery.mixitup.min.js" type="text/javascript"></script>
        <!-- main js -->
        <script src="<?php echo SITE_URL;?>/js/main.js"></script>
        <script src="<?php echo SITE_URL;?>/js/script_loads.js"></script>
    </body>
</html>