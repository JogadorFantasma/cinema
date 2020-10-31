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
    $id_filme = $pegandoIngresso['id_filme'];
    $id_sala = $pegandoIngresso['id_sala'];
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
    $id_filme = $pegandoIngresso['id_filme'];
    $id_sala = $pegandoIngresso['id_sala'];
  }
  $quantidade = $quantidade_inteira + $quantidade_meia;
}
$descFilme = $filmes->rsDados($id_filme);
//echo "Aqui: ".$data_ingresso;
$dadosDaProgramacao = $filmes->rsDadosProgramacao('', '', '', $descFilme->id, $data_ingresso, '', $horario_ingresso);
//var_dump($dadosDaProgramacao);
$dadosSala = $filmes->rsDadosSalas($dadosDaProgramacao[0]->id_sala);

//var_dump($_POST);
if(isset($_POST['cadeira'])){
$variavel = $_POST['cadeira'];
$qntcadeiras = count($variavel);
}else{
  $qntcadeiras = 0;
}
/* echo "aqui ".$quantidade;
echo "aqui2 ".$qntcadeiras; */
//exit;
if(!isset($_SESSION['escolha_cadeira']) && $quantidade > $qntcadeiras){
$puxaurl = SITE_URL;
echo "<script>alert('Quantidade de cadeiras selecionadas maior que a solicitada');window.location='{$puxaurl}/entrada/2/{$descFilme->url_amigavel}';</script>";
exit;
}
if(!isset($_SESSION['escolha_cadeira']) && $quantidade < $qntcadeiras){
$puxaurl = SITE_URL;
echo "<script>alert('Quantidade de cadeiras selecionadas menor que a solicitada');window.location='{$puxaurl}/entrada/2/{$descFilme->url_amigavel}';</script>";
exit;
}
if($quantidade == $qntcadeiras){
if(isset($_SESSION['escolha_cadeira']) && !empty($qntcadeiras)){
  unset($_SESSION['escolha_cadeira']);
}
for($b=0;$b<$qntcadeiras;$b++){
  $_SESSION['escolha_cadeira'][$b] = array
            (
            'assento' => $_POST['cadeira'][$b],
            'id_filme' => $id_filme,
            'data_filme' => $data_ingresso,
            'hora_filme' => $horario_ingresso,
            'id_cidade' => $_SESSION['id_cidade'],
            'id_sala' => $id_sala
            );
}
}

//var_dump($_SESSION['escolha_cadeira']);
?>
<!doctype html>
<html class="no-js" lang="pt-br">
    <head>
        <meta charset="utf-8">
       <title><?php if(isset($descFilme->meta_title) && !empty($descFilme->meta_title)){echo $descFilme->meta_title;}?></title>
    <meta name="description" content="<?php if(isset($descFilme->meta_description) && !empty($descFilme->meta_description_)){echo $descFilme->meta_description;}?>"/>
		<meta name="keywords" content="<?php if(isset($descFilme->meta_keywords) && !empty($descFilme->meta_keywords)){echo $descFilme->meta_keywords;}?>">
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
                                <li><?php echo $descFilme->titulo;?></li>
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
                                  <table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Produto</th>
						        <th>Preço</th>
						        <th>Quantidade</th>
						        <th>Total</th>
						      </tr>
						    </thead>
						    <tbody>
								<?php if(count($_SESSION['shopping_cart']) > 0){
									$totalcarrinho = 0;
									$total_produtos=0;
									foreach($_SESSION['shopping_cart'] as $key => $produto_carrinho){?>
						      <tr class="text-center">
						        <td class="product-remove"><a href="?action=delete&id=<?php echo $produto_carrinho['id'];?>"><span class="fa fa-close"></span></a></td>
						        
						        <td class="image-prod"><img src="<?php echo SITE_URL;?>/img/<?php echo $produto_carrinho['imagem_produto'];?>" alt="" width="80"><div class="img" style="background-image:url(<?php echo SITE_URL;?>/img/<?php echo $produto_carrinho['imagem_produto'];?>);"></div></td>
						        
						        <td class="product-name">
						        	<h3><?php echo $produto_carrinho['nome_produto'];?></h3>
						        	
						        </td>
						        
						        <td class="price">R$ <?php echo number_format($produto_carrinho['valor_produto'],2,',','.');?></td>
						        
						        <td class="quantity">
									 <p class="text-center"><?php echo $produto_carrinho['quantidade_produto'];?></p>
						        	<!-- <div class="input-group mb-3">
					             	<input type="text" name="quantity" class="quantity form-control input-number" value="<?php echo $produto_carrinho['quantidade_produto'];?>" min="1" max="100">
									
					          	</div> -->
					          </td>
						        
						        <td class="total"><?php echo number_format($produto_carrinho['quantidade_produto'] * $produto_carrinho['valor_produto'],2,',','.');?></td>
						      </tr><!-- END TR-->
							  <?php $totalcarrinho = $totalcarrinho + ($produto_carrinho['quantidade_produto'] * $produto_carrinho['valor_produto']);
							  		$total_produtos = $totalcarrinho+$total_produtos;
							  ?>
							  <?php } }else{?>
								 <tr class="text-center">
									 <td colspan="6"><h2>Nenhum produto adicionado no carrinho.</h2></td>
								 </tr>
							  <?php }?>
                
						    </tbody>
						  </table>
                                <!--   <a href="#">
                                    <div class="sidebar-image siixx">
                                      <img src="img/<?php echo $descFilme->imagem;?>" alt="">
                                      <div class="movies-image-head">
                                      <h2><?php echo $descFilme->titulo;?></h2>
                                      
                                      </div>
                                    </div>
                                  </a> -->
                                  <!-- <div class="varification">
                                    <p>*Don’t forget to come with an ID for verification. No refunds after the purchase of tickets!</p>
                                  </div> -->
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"></h4>
                                  <!-- <div class="details">                          
                                    <ul>
                                      <li><span>Place: </span> Zooks Cinema City</li>
                                      <li><span>Day : </span> 05/06/2016</li>
                                      <li><span>Room : </span> 4 </li>
                                      <li><span>Time : </span> 21:40</li>
                                      <li class="entry"><span>ENTRIES:<br/>1x Normal</span> $8.50</li>
                                    </ul>
                                  </div> -->
                                  <!-- <p>TVA Included (21%) <br/><i>All expenses are included also.</i></p> -->
                                  <div class="button">
                                    <a href="#">Total: R$ <?php echo number_format($totalcarrinho,2,',','.');?></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="contact-details">
                              <h3>Dados</h3>                              
                              <form action="<?php echo SITE_URL;?>/pagamento" method="POST" id="formUsuario">
                                <fieldset>
                                  <div class="row">
                                  <div class="col-sm-6">
                                    <div class="form-group">
                                      <input type="text" class="form-control" name="senderName" placeholder="Nome Completo" required>
                                    </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="form-group">
                                      <input type="text" class="form-control" name="senderCPF" id="senderCPF" maxlength="14" placeholder="CPF" required>
                                    </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="form-group">
                                      <input type="text" class="form-control" name="senderPhone" id="senderPhone" maxlength="15" placeholder="Telefone" required>
                                    </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="form-group">
                                      <input type="email" class="form-control" name="senderEmail" placeholder="E-mail" required>
                                    </div>
                                  </div>
                                  
                                  
                                  </div>
                                </fieldset>
                                <button class="btn-green done last-button topppbtn" type="submit">Pagar com o Cartão <img src="images/payment.png" alt=""></button>
                                <input type="hidden" name="valor" value="<?php echo $totalcarrinho;?>">
                              </form>
                            </div>
                            <!-- <button class="btn-default back-top topppbtn" type="button"><i class="fa fa-angle-left" aria-hidden="true"></i> Voltar</button> -->
                            
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
                          <img src="<?php echo SITE_URL;?>/img/<?php echo $descFilme->imagem?>" alt="<?php echo $descFilme->url_amigavel;?>" title="<?php echo $descFilme->url_amigavel;?>">
                          <div class="movies-image-head">
                          <h2><?php echo $descFilme->titulo?></h2>
                          
                          </div>
                        </div>
                        <div class="details">                          
                          <ul>
                            <!-- <li><span>Place: </span> Zooks Cinema City</li> -->
                            <li><span>Dia : </span> <?php echo formataData($dadosDaProgramacao[0]->data_exibicao);?></li>
                            <li><span>Sala : </span> <?php echo $dadosSala->titulo;?> </li>
                            <li><span>Horário : </span> <?php echo substr($dadosDaProgramacao[0]->hora_exibicao,0,5);?></li>
                              <?php if(count($_SESSION['escolha_cadeira']) > 0){?>
                  <li ><span>Assentos:</span> 
                  <?php foreach($_SESSION['escolha_cadeira'] as $key => $assentos){
                    ?>
                    
                        <div class='btn-success btn'><?php echo $assentos['assento'];?></div>
                  <?php } ?>
                  </li>
                  <?php }?>
                            
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
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
        <script>
    $(document).ready(function () { 
        var $cpf = $("#senderCPF");
        var $telefone = $("#senderPhone");

        $cpf.mask('000.000.000-00', {reverse: true});
        $telefone.mask('(00)00000-0000', {reverse: true});
    });
</script>
    </body>
</html>