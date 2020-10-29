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
                                <li>Em Breve / Em Cartaz</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcumb Area End Here -->
        <!-- Movie Show Search Box Start Here -->
        <div class="movies-show-area">
            <div class="container">
                <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                         <div class="movies-show-title">
                             <h2>Em Breve / Em Cartaz</h2>
                         </div>
                     </div>
                </div>
                
            </div>
        </div>
        <!-- Movie Show Search Box End Here -->
        <!-- Watching Movies Details Start Here -->
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
        <?php include('newsletter.php');?>
        <!-- Zooks Promos End Here -->
        <!-- Footer Start Here -->
        <?include('footer.php');?>
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