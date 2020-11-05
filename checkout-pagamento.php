<?php
include "includes.php";
include "cielo/api-cielo.class.php";
$cielos = ApisCielos::getInstance(Conexao::getInstance());

$cielos->credCardAutenticado();
$cielos->debitoCard();

?>
<!doctype html>
<html class="no-js" lang="pt-br">
    <head>
        <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="theme-color" content="#b5121b">
    
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
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
                                <li>Pagamento</li>
                            </ul>
                        </div>
                        <br>
                        <p id="mostraCidade">Você está em <span style="color: red;"><?php echo $mostrarNomeCidade[0]->nome;?></span></p>
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
                      <h2>Pagamento</h2>
                  </div>
              </div>
            </div>
            <div class="row single-movie-show">              
             
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                           <form method="POST"  class="signup-form" id="formPagamento">
                <h3>
                    <span class="icon"><i class="ti-credit-card"></i></span>
                    <span class="title_text">Pagamento</span>
                </h3>
                <fieldset>
                    <legend>
                        <span class="step-heading">Informação de Pagamento </span>
                      
                    </legend>

                    <div class="form-group">
                        <label for="creditCardHolderName" class="form-label required">
                            Forma de Pagamento
                        </label>
                       <select name="formaPagamento" onchange="if(this.value == 1){document.getElementById('acao').value='pagamentoCartaoCredito';}if(this.value == 2){document.getElementById('acao').value='pagamentoCartaoDebito';}" class="form-control">
                       <option value="1">Crédito</option>
                       <option value="2">Débito</option>
                       </select> 
                    </div>

                    <div class="form-group">
                        <label for="creditCardHolderName" class="form-label required">
                            Nome no cartão
                        </label>
                        <input type="text" class="form-control" name="creditCardHolderName" id="creditCardHolderName" require />
                    </div>
                   <!--  <div class="form-group">
                        <label for="creditCardHolderCPF" class="form-label required">
                            CPF
                        </label>
                        <input type="text" name="creditCardHolderCPF" data-mask="000.000.000-00" id="creditCardHolderCPF" require />
                    </div>
                    <div class="form-group">
                        <label for="creditCardHolderBirthDate" class="form-label required">
                            Data de nascimento
                        </label>
                        <input type="text" name="creditCardHolderBirthDate" data-mask="00/00/0000" id="creditCardHolderBirthDate" require />
                    </div> -->
        
                    
        
                    <div class="form-group">
                        <label for="cardNumber" class="form-label required">Número do cartão</label>
                        <input type="number" class="form-control" name="cardNumber" id="cardNumber" minlength="11" require/>
                    </div>
                  
                    <div class="form-group">
                        <label for="cvv" class="form-label required">
                            Código de segurança (CVV)
                        </label>
                        <input type="number" class="form-control" name="codigo_seguranca" data-mask="000" id="cvv" require />
                    </div>
        
                    <div class="form-row">
                        <div class="form-date">
                            <label for="">Mês
                                <input type="text" class="form-control" name="mesVencimento" maxlength="2" placeholder="MM" require>
                            </label>
                            <label for="">Ano
                                <input type="text" class="form-control" name="anoVencimento" maxlength="4" placeholder="Ano" require>
                            </label>
                        </div>
                        </div>
                        <div class="actions clearfix">
                          
                               <button class="btn-default back-top topppbtn"  onclick="window.location='<?php echo SITE_URL;?>/carrinho';"><i class="fa fa-angle-left" aria-hidden="true"></i> Voltar</button>
                                <button class="btn-green done" onclick="document.getElementById('formPagamento').submit()" role="menuitem">Finalizar</button>
                               
                                </div>
                  
                <input type="hidden" name="senderName" value="<?php if(isset($_POST['senderName']) && !empty($_POST['senderName'])){ echo $_POST['senderName'];}?>">
                <input type="hidden" name="senderCPF" value="<?php if(isset($_POST['senderCPF']) && !empty($_POST['senderCPF'])){ echo $_POST['senderCPF'];}?>">
                <input type="hidden" name="senderEmail" value="<?php if(isset($_POST['senderEmail']) && !empty($_POST['senderEmail'])){ echo $_POST['senderEmail'];}?>">
                <input type="hidden" name="senderPhone" value="<?php if(isset($_POST['senderPhone']) && !empty($_POST['senderPhone'])){ echo $_POST['senderPhone'];}?>">
                <input type="hidden" name="valor" value="<?php if(isset($_POST['valor']) && !empty($_POST['valor'])){ echo $_POST['valor'];}?>">
                <input type="hidden" name="acao" id="acao" value="pagamentoCartaoCredito">
                
            </form>
              </div>
            </div>
          
          
          </div>
        </div>
        <!-- Single Movie Show End Here -->
        <!-- Zooks Promos Start Here -->
        <?php include"newsletter.php";?>
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
        <script>
          function voltar(){
            <?php
              
            ?>
              window.location='<?php echo SITE_URL;?>/carrinho';
          }
        </script>
    </body>
</html>