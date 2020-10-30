 <?php 
 require_once "Class/filmes.class.php";
$incfilmes = Filmes::getInstance(Conexao::getInstance());
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
 
 $puxaHorarios = $incfilmes->rsDadosProgramacao('', '', '', $id_filme, $data_selecionada, '', '', $_SESSION['id_cidade']) ;
 ?>
                        <?php if(count($puxaHorarios) > 0){ ?>
                        <div class="movie-time">
                                                <ul>
                                                    <?php foreach($puxaHorarios as $puxaHorario){
                                                        $hora_agora = date('H:i:s');
                                                        //if(strtotime($hora_agora) > strtotime($puxaHorario->hora_exibicao)){ ?>
                                                       <!--  <li><?php //echo substr($puxaHorario->hora_exibicao,0,5);?></li> -->
                                                       <?php //}else{?>
                                                        <li><a href="./entrada/<?php echo substr($puxaHorario->hora_exibicao,0,5);?>/<?php echo $url;?>"><?php echo substr($puxaHorario->hora_exibicao,0,5);?></a></li>
                                                        <?php //}?>
                                                    
                                                    <?php }?>
                                                  
                                                </ul>
                                                </div>
                        <?php }else{?>
                        <div class="single-movie-details-area"><h2>Nenhum horário exibido nesse dia!</h2></div>
                        <?php }?>
                    