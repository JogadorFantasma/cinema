 <?php 

 require_once "../Class/filmes.class.php";
$incfilmes = Filmes::getInstance(Conexao::getInstance());
require_once "../Class/salas.class.php";
$incsalas = Salas::getInstance(Conexao::getInstance());
 if(isset($_GET['data']) && !empty($_GET['data'])){
     $data_selecionada = $_GET['data'];
 }else{
     $data_selecionada = date('Y-m-d');
 }
 $data_hoje = date('Y-m-d');
 
 if(isset($_GET['id_cidade']) && !empty($_GET['id_cidade'])){
     $_SESSION['id_cidade'] = $_GET['id_cidade'];
 }
 //echo "Aqui: ".$_SESSION['id_cidade']; 
 $puxaProgramacoesGeral = $incfilmes->rsDadosProgramacao('', '', '', '', $data_selecionada, 'data_exibicao, id_filme', '', $_SESSION['id_cidade']);

 ?>
 <div class="col-md-12">
                        <?php 
                        if(count($puxaProgramacoesGeral) > 0){
                        foreach($puxaProgramacoesGeral as $puxaProgramacaoGeral){
                            $puxaFilme = $incfilmes->rsDados($puxaProgramacaoGeral->id_filme);
                            $puxaHorarios = $incfilmes->rsDadosProgramacao('', '', '', $puxaFilme->id, $data_selecionada, '', '', $_SESSION['id_cidade']);
                            ?>
                        <div class="single-movie-details-area">
                            <div class="row">
                            <div class="col-md-7">
                                <div class="movie-details">
                                    <div class="media">
                                      <a class="pull-left" href="filme/<?php echo $puxaFilme->url_amigavel;?>">
                                        <img class="media-object" src="../img/<?php echo $puxaFilme->imagem;?>" alt="<?php echo $puxaFilme->url_amigavel;?>" title="<?php echo $puxaFilme->url_amigavel;?>" style="max-width: 150px;" >
                                      </a>
                                      <div class="media-body">
                                        <h4 class="media-heading"><a href="filme/<?php echo $puxaFilme->url_amigavel;?>"><?php echo $puxaFilme->titulo;?></a></h4>
                                        <div class="movie-info">
                                            <ul>
                                                <li><?php echo exibe_classe_indicativa($puxaFilme->id_classificacao_indicativa);?></li>
                                                <li> <?php echo $puxaFilme->duracao;?> - <?php echo $puxaFilme->genero;?></li>
                                            </ul>
                                        </div>
                                        <p><span>Diretor:</span> <?php echo $puxaFilme->diretor;?><br/><span>Atores:</span> <?php echo $puxaFilme->atores;?></p>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                              <div class="movie-time">
                                              
                                                    <?php foreach($puxaHorarios as $puxaHorario){
                                                            $hora_agora = date('H:i:s');
                                                            $puxaSala = $incsalas->rsDados($puxaHorario->id_sala);?>
                                                  
                                                        <a href="entrada/<?php echo substr($puxaHorario->hora_exibicao,0,2).substr($puxaHorario->hora_exibicao,3,2);?>/<?php echo substr($puxaHorario->data_exibicao,0,4).substr($puxaHorario->data_exibicao,5,2).substr($puxaHorario->data_exibicao,8,2);?>/<?php echo $puxaFilme->url_amigavel;?>"><?php echo $puxaSala->titulo;?> - <?php echo substr($puxaHorario->hora_exibicao,0,5);?> <br><?php echo exibe_tipo_filme($puxaHorario->id_tipo);?></a>
                                                     
                                                  
                                                    <?php }?>
                                                  
                                              
                                            </div>
                            </div>
                        </div>
                        </div>
                        <?php } 
                        }else{
                        ?>
                        <div class="single-movie-details-area"><h2>Nenhum filme exibido nesse dia!</h2></div>
                        <?php }?>
                    
                    </div>