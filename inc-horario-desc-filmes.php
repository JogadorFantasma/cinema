 <?php 
 require_once "Class/filmes.class.php";
$incfilmes = Filmes::getInstance(Conexao::getInstance());
require_once "Class/salas.class.php";
$incsalas = Salas::getInstance(Conexao::getInstance());
 if(isset($_GET['data']) && !empty($_GET['data'])){
     $data_selecionada = $_GET['data'];
 }else{
     $data_selecionada = date('Y-m-d');
 }
 if(isset($_GET['id_filme']) && !empty($_GET['id_filme'])){
     $id_filme = $_GET['id_filme'];
 }
 if(isset($_GET['url']) && !empty($_GET['url'])){
     $url = $_GET['url'];
 }
 if(isset($_GET['id_cidade']) && !empty($_GET['id_cidade'])){
     $_SESSION['id_cidade'] = $_GET['id_cidade'];
 }
 $data_hoje = date('Y-m-d');
 $puxaHorarios = $incfilmes->rsDadosProgramacao('', '', '', $id_filme, $data_selecionada, '', '', $_SESSION['id_cidade']) ;
 $filmeInc = $incfilmes->rsDados($id_filme);

 if(!defined('SITE_URL')){ 
     define('SITE_URL', 'https://'.$_SERVER['HTTP_HOST']);
     }
 
 ?>
                        <?php if(count($puxaHorarios) > 0){ ?>
                        <div class="movie-time">
                                                <ul>
                                                    <?php foreach($puxaHorarios as $puxaHorario){
                                                        $hora_agora = date('H:i:s');
                                                        $puxaSala = $incsalas->rsDados($puxaHorario->id_sala);?>
                                                        <?php /*
                                                        if($data_selecionada >= $data_hoje){
                                                        if($data_selecionada == $data_hoje && strtotime($hora_agora) > strtotime('16:00:00')){ ?>
                                                        <li><?php echo $puxaSala->titulo;?> - <?php echo substr($puxaHorario->hora_exibicao,0,5);?> <br><?php echo exibe_tipo_filme($puxaHorario->id_tipo);?></li>
                                                       <?php }else{?>
                                                        <li><a href="<?php echo SITE_URL;?>/entrada/<?php echo substr($puxaHorario->hora_exibicao,0,2).substr($puxaHorario->hora_exibicao,3,2);?>/<?php echo substr($puxaHorario->data_exibicao,0,4).substr($puxaHorario->data_exibicao,5,2).substr($puxaHorario->data_exibicao,8,2);?>/<?php echo $filmeInc->url_amigavel;?>"><?php echo $puxaSala->titulo;?> - <?php echo substr($puxaHorario->hora_exibicao,0,5);?> <br><?php echo exibe_tipo_filme($puxaHorario->id_tipo);?></a></li>
                                                        <?php }?>
                                                        <?php }?>
                                                    <?php if($data_selecionada < $data_hoje){?>
                                                    <li><?php echo $puxaSala->titulo;?> - <?php echo substr($puxaHorario->hora_exibicao,0,5);?> <br><?php echo exibe_tipo_filme($puxaHorario->id_tipo);?></li>
                                                    <?php } */?>
                                                    <li><?php echo $puxaSala->titulo;?> - <?php echo substr($puxaHorario->hora_exibicao,0,5);?> <br><?php echo exibe_tipo_filme($puxaHorario->id_tipo);?></li>
                                                    <?php }?>
                                                  
                                                </ul>
                                                </div>
                        <?php }else{?>
                        <div class="single-movie-details-area"><h2>Nenhum horário exibido nesse dia!</h2></div>
                        <?php }?>
                    