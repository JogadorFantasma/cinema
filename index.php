<?php 
include "includes.php";

$dadosBanner = $banners->rsDados();
$dadosFilmes = $filmes->rsDados('', '', '', '', '', '', 2);
$dadosCidades = $cidades->rsDadosCidades();
?>
<!doctype html>
<html class="no-js" lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="theme-color" content="#b5121b">
    
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
 <title><?php if(isset($metastags->meta_title_principal) && !empty($metastags->meta_title_principal)){echo $metastags->meta_title_principal;}?></title>
    <meta name="description" content="<?php if(isset($metastags->meta_description_principal) && !empty($metastags->meta_description_principal)){echo $metastags->meta_description_principal;}?>"/>
		<meta name="keywords" content="<?php if(isset($metastags->meta_keywords_principal) && !empty($metastags->meta_keywords_principal)){echo $metastags->meta_keywords_principal;}?>">
    <?php if(isset($infoSistema->favicon) && !empty($infoSistema->favicon)){?>
		<link rel="shortcut icon" href="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->favicon;?>" >
		<link rel="icon" href="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->favicon;?>" >
    <?php }?>
    <meta name="author" content="Adriano Monteiro">
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
    <?php include "header.php";?>
    <div class="caixa-cidade animated bounce hidden-xs" id="animacao">

		<h3 class="text-center"><i class="fa fa-clock-o" aria-hidden="true"></i> Programação em </h3>
		<select class="form-control" id="select-cidade" name="select_cidade" onchange="window.location='<?php echo SITE_URL;?>/cidade/'+this.value">
        <?php foreach($dadosCidades as $cidade){?>
			<option value="<?php echo $cidade->id;?>" <?php if(isset($_SESSION['id_cidade']) && $_SESSION['id_cidade'] == $cidade->id){ echo"selected";}?>> <?php echo $cidade->nome;?> </option>
            <?php }?>
        </select>
		<span style="margin-left: 30px">escolha sua cidade</span>
	</div>
    <!-- Slider Area Start Here -->
    <div class="slider-area" style="background: url(images/baa.jpg) no-repeat center; background-size: cover; width: 100%; overflow: hidden; padding: 290px 0;">
        <div class="slider-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="slider-content">
                            <?php foreach($dadosBanner as $itensBanner){ ?>
                            <div class="single-slide-content">
                                <h1 class="wow zoomIn text-uppercase text-white  animated" data-wow-duration="0.3s"
                                    data-wow-delay="0.3s"
                                    style="visibility: visible; animation-duration: 0.3s; animation-delay: 0.3s; animation-name: zoomIn;">
                                    </h1>
                                <h2 class="wow zoomIn text-white text-uppercase  animated" data-wow-duration="0.5s"
                                    data-wow-delay="0.5s"
                                    style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: zoomIn;">
                                    </h2>

                                
                            </div>
                            <?php }?>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
     

    <div class="watching-movie-area">
        <div class="container">
            <div class="row">
            <div class="col-xs-12 hidden-lg hidden-md hidden-sm">
            <div class="topbar-left">
                <h6 class="text-center"><i class="fa fa-clock-o" aria-hidden="true"></i> Programação em </h6>
		        <select class="selectpicker" id="select-cidade" name="select_cidade" onchange="window.location='<?php echo SITE_URL;?>/cidade/'+this.value">
                     <?php foreach($dadosCidades as $cidade){?>
			            <option value="<?php echo $cidade->id;?>" <?php if(isset($_SESSION['id_cidade']) && $_SESSION['id_cidade'] == $cidade->id){ echo"selected";}?>> <?php echo $cidade->nome;?> </option>
                    <?php }?>
                </select> 
            </div>           
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="topbar-left">

                        <select class="selectpicker" onChange="AtualizaJanela('inc-horario-filmes.php?data='+this.value, 'Filmes');">
                            <?php 
                            $datas = render(date('Y-m-d'));
                            foreach($datas as $data){ ?>
                            <option value="<?php echo $data;?>" <?php if(date('Y-m-d') == $data){echo "selected";}?>>
                                <?php echo diasemana($data)." - ".formataData($data);?></option>
                            <?php }?>

                        </select>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div id="janela_Filmes">
                    <?php include "inc-horario-filmes.php"; ?>

                </div>

            </div>
        </div>
    </div>
    <!-- Watching Movies Details End Here -->
    <!-- Zooks Promos Start Here -->
    <div class="zooks-promos-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <h2><span>EM BREVE NO CINEMAS PREMIER</span></h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="total-promos-area">
                    <?php foreach($dadosFilmes as $itensFilmes){?>    
                    <div class="single-promos">
                            <a href="#"><img src="<?php echo SITE_URL;?>/img/<?php echo $itensFilmes->imagem?>" alt=""></a>
                    </div>
                    <?php } ?>   
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('newsletter.php');?>

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
    <!-- jQuery MixedIT Up -->
    <script src="<?php echo SITE_URL;?>/js/jquery.mixitup.min.js" type="text/javascript"></script>
    <!-- main js -->
    <script src="<?php echo SITE_URL;?>/js/main.js"></script>
    <script src="<?php echo SITE_URL;?>/js/script_loads.js"></script>
</body>

</html>