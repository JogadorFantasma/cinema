<?php include "verifica.php";
$id = '';
if(isset($_GET['url_filme'])){
    if(empty($_GET['url_filme'])){
        header('Location: baixar-cadeira.php');
    }else{
        $id = $_GET['url_filme'];        
    }
}
$descFilme = $filmes->rsDados('', '', '', $id);
if(isset($_GET['data_exibicao']) && !empty($_GET['data_exibicao'])){
  $data_ingresso = substr($_GET['data_exibicao'],0,4)."-".substr($_GET['data_exibicao'],4,2)."-".substr($_GET['data_exibicao'],6,2);
}
if(isset($_GET['hora_exibicao']) && !empty($_GET['hora_exibicao'])){
  $horario_ingresso = substr($_GET['hora_exibicao'],0,2).":".substr($_GET['hora_exibicao'],2,2).":00";
}
//echo "Aqui: ".$data_ingresso;
$dadosDaProgramacao = $filmes->rsDadosProgramacao('', '', '', $descFilme[0]->id, $data_ingresso, '', $horario_ingresso);
//var_dump($dadosDaProgramacao);
$dadosSala = $filmes->rsDadosSalas($dadosDaProgramacao[0]->id_sala);
$mostrarNomeCidade = $cidades->rsDadosCidades($dadosDaProgramacao[0]->id_cidade);
?>
<!DOCTYPE html>
<html dir="ltr" lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Adriano Monteiro">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/hoogli_logo.svg">
    <title>Painel Hoogli - Quantidade de Cadeiras</title>
    <link href="dist/css/style.min.css" rel="stylesheet">
</head>

<body>
   <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
      <?php include "header.php";?>
       <?php include "inc-menu-lateral.php";?>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Quantidade de Cadeiras</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="." class="text-muted">Home</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                    <p id="mostraCidade">Você está em <span style="color: red;"><?php echo $mostrarNomeCidade[0]->nome;?></span></p>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    <form method="post" action="mostra-cadeira.php" >
                    <div class="panel-body">
                                <b>SELECIONE O NÚMERO DE ENTRADAS:</b>
                                
                                <div class="single-enties">
                                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 acurate">
                                    <div class="media">
                                      
                                      <div class="media-body">
                                         <?php if(isset($dadosDaProgramacao[0]->dia_promorcional) && $dadosDaProgramacao[0]->dia_promorcional == 'S'){?>
                                        <h4 class="media-heading"><strike>Inteira</strike></h4>  
                                        <?php }else{?>
                                          <h4 class="media-heading">Inteira</h4>  
                                        <?php }?>
                                                                        
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 acurate">
                                    <?php if(isset($dadosDaProgramacao[0]->dia_promorcional) && $dadosDaProgramacao[0]->dia_promorcional == 'S'){?>
                                <div class="entities-properties">
                                      
                                      <strike> R$ <?php echo number_format($dadosDaProgramacao[0]->valor,2,',','.');?> </strike>
                                       
                                            <div class="input-group spinner-normal">
                                              <div class="input-group-btn-vertical acurate text-center">
                                                  <fieldset>
                                                    <div class="col-sm-6">
                                                      <div class="form-group">
                                                          <input type="text" disabled class="form-control" value="0" minlength="0" maxlength="10" >
                                                      </div>
                                                    </div>
                                                  </fieldset>
                                             
                                              </div>
                                            </div>                             
                                      
                                    
                                    </div>
                                    <?php }else{?>
                                <div class="entities-properties">
                                     R$ <?php echo number_format($dadosDaProgramacao[0]->valor,2,',','.');?>
                                     
                                            <div class="input-group spinner-normal">
                                              <div class="input-group-btn-vertical acurate text-center">
                                                  <fieldset>
                                                    <div class="col-sm-6">
                                                      <div class="form-group">
                                                          <input type="number" name="quantidade_ingresso_inteira" class="form-control" value="1" minlength="1" maxlength="10">
                                                      </div>
                                                    </div>
                                                  </fieldset>
                                             
                                              </div>
                                            </div>                             
                                      
                                    </div>
                                    <?php }?>
                                    
                                  </div>
                                </div>
                                <div class="single-enties">
                                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 acurate">
                                    <div class="media">
                                      
                                      <div class="media-body">
                                        <?php if(isset($dadosDaProgramacao[0]->dia_promorcional) && $dadosDaProgramacao[0]->dia_promorcional == 'S'){?>
                                        <h4 class="media-heading">Dia Promocional</h4>
                                        <?php }else{?>
                                          <h4 class="media-heading">Meia</h4>
                                        <?php }?>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 acurate">
                                    <div class="entities-properties">
                                     R$ <?php echo number_format(($dadosDaProgramacao[0]->valor_meia),2,',','.');?>
                                            <div class="input-group spinner-meia">
                                              <div class="input-group-btn-vertical acurate text-center">
                                              
                                              
                                                  <fieldset>
                                                    <div class="col-sm-6">
                                                      <div class="form-group">
                                                        <?php if(isset($dadosDaProgramacao[0]->dia_promorcional) && $dadosDaProgramacao[0]->dia_promorcional == 'S'){?>
                                        <input type="number" class="form-control" name="quantidade_ingresso_meia" value="1" minlength="1" maxlength="10">
                                        <?php }else{?>
                                          <input type="number" name="quantidade_ingresso_meia" class="form-control" value="0" minlength="0" maxlength="10">
                                        <?php }?>
                                                          
                                                      </div>
                                                    </div>
                                                  </fieldset>
                                               
                                              </div>
                                            </div>                              
                                     
                                    </div>
                                  </div>
                                </div>
                                
                                <!-- <div class="promo-ad-area">
                                  <img src="images/promo-ad.png" alt="">
                                </div> -->
                             
                              </div>
									<input type="hidden" name="nome_produto" value="Ingresso">
                  <input type="hidden" name="url_filme" value="<?php echo $descFilme[0]->url_amigavel;?>">
                  <input type="hidden" name="id_filme" value="<?php echo $descFilme[0]->id;?>">
                  <input type="hidden" name="data_filme" value="<?php echo $data_ingresso;?>">
                  <input type="hidden" name="hora_filme" value="<?php echo $horario_ingresso;?>">
                   <input type="hidden" name="id_sala" value="<?php echo $dadosDaProgramacao[0]->id_sala;?>">
                   <input type="hidden" name="id_cidade" value="<?php echo $dadosDaProgramacao[0]->id_cidade;?>">
					<input type="hidden" name="valor_inteira" value="<?php echo $dadosDaProgramacao[0]->valor;?>">
                  <input type="hidden" name="valor_meia" value="<?php echo $dadosDaProgramacao[0]->valor_meia;?>">
                  
                 
								
									<button class="btn btn-primary" type="submit">Proximo <i class="fa fa-angle-right" aria-hidden="true"></i></button>
									</form>
                    </div>
                  
                </div>
                <hr>
               
            </div>
        <?php include "footer.php";?>
        </div>
    </div>
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <script src="dist/js/sidebarmenu.js"></script>
    <script src="dist/js/custom.min.js"></script>
    <script src="assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="dist/js/pages/datatable/datatable-basic.init.js"></script>
    <script src="dist/js/script_loads.js"></script>
</body>
</html>