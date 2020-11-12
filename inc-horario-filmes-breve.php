 <?php 
 require_once "Class/filmes.class.php";
$incfilmes = Filmes::getInstance(Conexao::getInstance());
 //echo "Aqui: ".$data_selecionada; 
 $puxaProgramacoesGeral = $incfilmes->rsDadosProgramacao('', '', '', '', $data_selecionada, 'data_exibicao, id_filme', '', $_SESSION['id_cidade']);
$puxaFilmes = $incfilmes->rsDados('', '', '', '', '', '', '2');
 
 ?>
 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <?php 
                        if(count($puxaFilmes) > 0){
                        foreach($puxaFilmes as $puxaFilme){?>
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
                        <div class="single-movie-details-area"><h2>Nenhum filme em breve!</h2></div>
                        <?php }?>
                    
                    </div>