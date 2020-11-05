<?php include "includes.php";
if(isset($_GET['cat']) && !empty($_GET['cat'])){
	$puxanumeroCategoria = $categorias->rsDados('', '', '', $_GET['cat']);
	$_POST['id_cat'] = $puxanumeroCategoria[0]->id;
}
$puxaCategorias = $categorias->rsDados();
$puxaProdutos = $produtos->rsDados();

foreach($_SESSION['shopping_cart'] as $pegandoIngresso){
  if($pegandoIngresso['id'] == 252525){
    $id_filme = $pegandoIngresso['id_filme'];
  }
  if($pegandoIngresso['id'] == 252526){
    $id_filme = $pegandoIngresso['id_filme'];
  }
}
$descFilme = $filmes->rsDados($id_filme);
?>
<!doctype html>
<html class="no-js" lang="pt-br">
    <head>
        <title><?php if(isset($metastags->meta_title_produtos) && !empty($metastags->meta_title_produtos)){echo $metastags->meta_title_produtos;}?></title>
    <meta name="description" content="<?php if(isset($metastags->meta_description_produtos) && !empty($metastags->meta_description_produtos)){echo $metastags->meta_description_produtos;}?>"/>
		<meta name="keywords" content="<?php if(isset($metastags->meta_keywords_produtos) && !empty($metastags->meta_keywords_produtos)){echo $metastags->meta_keywords_produtos;}?>">
    <?php if(isset($infoSistema->favicon) && !empty($infoSistema->favicon)){?>
		<link rel="shortcut icon" href="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->favicon;?>" >
		<link rel="icon" href="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->favicon;?>" >
    <?php }?>
    <meta name="author" content="Adriano Monteiro">
        <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="theme-color" content="#b5121b">
    
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
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
        <!-- Breadcumb Area Start Here -->
        <div class="breadcumb-area">
            <div class="container-fluid acurate">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="breadcumb">
                            <ul>
                                <li><a href=".">Home <i class="fa fa-angle-right" aria-hidden="true"></i> </a></li>
                                <li>Produtos</li>
                            </ul>
                        </div>
                        <br>
                        <p id="mostraCidade">Você está em <span style="color: red;"><?php echo $mostrarNomeCidade[0]->nome;?></span></p>
                        
                    </div>
                </div>
            </div>
        </div>
        <?php if(isset($_GET['veiode']) && $_GET['veiode'] == 'bomboniere'){?>
        <div class="container">
         <div class="row">
                     <div> 
                        <a class="btn-default back-top topppbtn"  href="javascript:;" onclick="history.back()" style="padding-top: 6px;"><i class="fa fa-angle-left" aria-hidden="true"></i> Voltar</a>
                        <a href="<?php echo SITE_URL;?>/carrinho/continuacao"  class="btn-green done" style="padding-top: 6px; width: 212px !important;">Continuar Compra <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                </div>
                </div>
                <?php }?>
        <!-- Breadcumb Area End Here -->
        <!-- Trailers Area Start Here -->
        <div class="trailers-area">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="heading-title">
                    <h2>Produtos</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Trailers Area End Here -->
        <!-- Movie Trailer  Start Here -->
        <div class="portfolio-one-area">
            <div class="container">
               
                <div class="row">
                    <div class="portfolio-menu fouur">
                        <ul>
                            <li class="filter" data-filter="all">Todos</li>
                            <?php foreach($puxaCategorias as $categoria){?>
                            <li class="filter " data-filter=".categoria_<?php echo $categoria->id;?>"><?php echo $categoria->nome;?></li>
                            <?php }?>
                          
                        </ul>
                    </div>
                   
                </div>
                <div class="row">                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 acurate">
                        <div id="Container">
                            <?php foreach($puxaProdutos as $produto){?>
                            <!-- single portfolio start -->
                            <?php $categoria = "categoria_".$produto->id_categoria;?>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mix <?php echo $categoria;?>">
                                <div class="single-portfolio">
                                    <h3><a href="<?php echo SITE_URL;?>/produto/<?php echo $produto->url_amigavel;?>"><?php echo $produto->nome;?></a></h3>
                                    <div >
                                        <a href="<?php echo SITE_URL;?>/produto/<?php echo $produto->url_amigavel;?>">
                                          <img src="<?php echo SITE_URL;?>/img/<?php echo $produto->imagem;?>" alt="<?php echo $produto->url_amigavel;?>" title="<?php echo $produto->url_amigavel;?>">
                                        </a>
                                    </div>
                                    <div class="product-rating-area">
                                        R$ <?php echo number_format($produto->preco_por,2,',','.');?>
                                    <form method="post" action="<?php echo SITE_URL;?>/?action=add&id=<?php echo $produto->id;?>" id="add_cart_<?php echo $produto->id;?>">
									<input type="hidden" name="nome_produto" value="<?php echo $produto->nome;?>">
									<input type="hidden" name="valor_produto" value="<?php echo $produto->preco_por;?>">
                  <input type="hidden" name="imagem_produto" value="<?php echo $produto->imagem;?>">
									<input type="hidden" name="quantidade_produto" value="1">
									<input type="hidden" name="addCarrinho" value="S">
									<a href="javascript:;" onclick="document.getElementById('add_cart_<?php echo $produto->id;?>').submit();" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="fa fa-shopping-cart"></i></span>
                                        Adicionar
	    							</a>
									</form>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                        
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
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
    </body>
</html>
