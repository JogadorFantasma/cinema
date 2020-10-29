<?php 
include "includes.php";

$dadosBanner = $banners->rsDados();
$dadosFilmes = $filmes->rsDados();
?>
<!doctype html>
<html class="no-js" lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cinema Premier</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/favicon.ico">
    <!-- Place favicon.ico in the root directory -->
    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- flaticon css -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr css -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <?php include "header.php";?>
    <div class="caixa-cidade animated bounce" id="animacao">

		<h3 class="text-center"><i class="fa fa-clock-o" aria-hidden="true"></i> Programação em </h3>
		<select class="form-control" id="select-cidade">
			<option value="3"> UNAÍ/MG </option>
            <option value="4"> SOBRADINHO/DF </option>
            <option value="2"> LEM/BA </option>
            <option value="6"> GUANAMBI/BA </option>
            <option value="1"> FORMOSA/GO </option>
            <option value="7"> BRUMADO/BA </option>
            <option value="5"> BARREIRAS/BA </option>		
        </select>
		<span style="margin-left: 30px">escolha sua cidade</span>
	</div>
    <!-- Slider Area Start Here -->
    <div class="slider-area">
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
                                    Filmes</h1>
                                <h2 class="wow zoomIn text-white text-uppercase  animated" data-wow-duration="0.5s"
                                    data-wow-delay="0.5s"
                                    style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: zoomIn;">
                                    Aproveite</h2>

                                <a href="#">Saiba Mais</a>
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
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="topbar-left">

                        <select class="selectpicker"
                            onChange="AtualizaJanela('inc-horario-filmes.php?data='+this.value, 'Filmes');">
                            <?php 
                            $datas = render(date('Y-m-d'));
                            foreach($datas as $data){ ?>
                            <option value="<?php echo $data;?>" <?php if(date('Y-m-d') == $data){echo "selected";}?>>
                                <?php echo diasemana($data)." - ".formataData($data);?></option>
                            <?php }?>

                        </select>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

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
                    <?php foreach($dadosFilmes as $itensFilmes){ ?>    
                    <div class="single-promos">
                            <a href="#"><img src="img/<?php echo $itensFilmes->imagem?>" alt=""></a>
                    </div>
                    <?php } ?>   
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="zooks-promos-area-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title text-center">
                        <h2>CADASTRE-SE E FIQUE POR DENTRO DA PROGRAMAÇÃO E PROMOÇÕES EXCLUSIVAS.</h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="input-group" style="margin-top:12vh;">
                        <form method="post">
                            <input style="width: 538px;" type="email" name="email" class="form-control"
                                placeholder="E-mail">
                            <span class="input-group-btn">
                                <button name="acao" value="enviar" class=" btn btn-default"
                                    type="submit">Enviar</button>
                            </span>
                        </form>
                    </div>
                </div>
                            </div>
                
        </div>
    </div>

    <!-- Zooks Promos End Here -->
    <?php include "footer.php";?>
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
    <script src="js/script_loads.js"></script>
</body>

</html>