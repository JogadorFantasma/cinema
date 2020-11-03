 <?php 
 require_once "Class/filmes.class.php";
$incfilmes = Filmes::getInstance(Conexao::getInstance());
 if(isset($_GET['data']) && !empty($_GET['data'])){
     $data_selecionada = $_GET['data'];
 }else{
     $data_selecionada = date('Y-m-d');
 }
 //echo "Aqui: ".$data_selecionada; 
 $puxaProgramacoesGeral = $incfilmes->rsDadosProgramacao('', '', '', '', $data_selecionada, 'data_exibicao, id_filme', '', $_SESSION['id_cidade']);

 define('SITE_URL', 'https://'.$_SERVER['HTTP_HOST'].'/projects/cinema');

 ?>
 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <?php 
                        if(count($puxaProgramacoesGeral) > 0){
                        foreach($puxaProgramacoesGeral as $puxaProgramacaoGeral){
                            $puxaFilme = $incfilmes->rsDados($puxaProgramacaoGeral->id_filme);
                            $puxaHorarios = $incfilmes->rsDadosProgramacao('', '', '', $puxaFilme->id, $data_selecionada, '', '', $_SESSION['id_cidade']);
                            ?>
                        <div class="single-movie-details-area">
                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                <div class="movie-details">
                                    <div class="media">
                                      <a class="pull-left" href="<?php echo SITE_URL;?>/filme/<?php echo $puxaFilme->url_amigavel;?>">
                                        <img class="media-object" src="<?php echo SITE_URL;?>/img/<?php echo $puxaFilme->imagem;?>" alt="<?php echo $puxaFilme->url_amigavel;?>" title="<?php echo $puxaFilme->url_amigavel;?>" style="max-width: 150px;" >
                                        <!-- <span class="text-align">3D Movie</span> -->
                                      </a>
                                      <div class="media-body">
                                        <h4 class="media-heading"><a href="<?php echo SITE_URL;?>/filme/<?php echo $puxaFilme->url_amigavel;?>"><?php echo $puxaFilme->titulo;?></a></h4>
                                        <div class="movie-info">
                                            <ul>
                                                <li><?php echo exibe_classe_indicativa($puxaFilme->id_classificacao_indicativa);?></li>
                                                <li> <?php echo $puxaFilme->duracao;?> - <?php echo $puxaFilme->genero;?></li>
                                            </ul>
                                        </div>
                                        <p><span>Diretor:</span> <?php echo $puxaFilme->diretor;?><br/><span>Atores:</span> <?php echo $puxaFilme->atores;?></p>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="movie-time">
                                                <ul>
                                                    <?php foreach($puxaHorarios as $puxaHorario){
                                                        $hora_agora = date('H:i:s');
                                                        $puxaSala = $salas->rsDados($puxaHorario->id_sala);
                                                        //if(strtotime($hora_agora) > strtotime($puxaHorario->hora_exibicao)){ ?>
                                                       <!--  <li><?php //echo substr($puxaHorario->hora_exibicao,0,5);?></li> -->
                                                       <?php //}else{?>
                                                        <li><a href="<?php echo SITE_URL;?>/entrada/<?php echo substr($puxaHorario->hora_exibicao,0,2).substr($puxaHorario->hora_exibicao,3,2);?>/<?php echo substr($puxaHorario->data_exibicao,0,4).substr($puxaHorario->data_exibicao,5,2).substr($puxaHorario->data_exibicao,8,2);?>/<?php echo $puxaFilme->url_amigavel;?>"><?php echo $puxaSala->titulo;?> - <?php echo substr($puxaHorario->hora_exibicao,0,5);?></a></li>
                                                        <?php //}?>
                                                    
                                                    <?php }?>
                                                  
                                                </ul>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="movie-details-text">
                                    <p><?php echo $puxaFilme->breve;?></p>
                                </div>
                            </div>
                        </div>
                        <?php } 
                        }else{
                        ?>
                        <div class="single-movie-details-area"><h2>Nenhum filme exibido nesse dia!</h2></div>
                        <?php }?>
                    
                    </div>