 <?php 
 if(isset($_GET['data']) && !empty($_GET['data'])){
     $data_selecionada = $_GET['data'];
 }else{
     $data_selecionada = date('Y-m-d');
 }
 echo "Aqui: ".$data_selecionada; 
 $puxaProgramacoesGeral = $filmes->rsDadosProgramacao('', '', '', '', $data_selecionada, 'data_exibicao, id_filme');
 ?>
 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <?php 
                        if(count($puxaProgramacoesGeral) > 0){
                        foreach($puxaProgramacoesGeral as $puxaProgramacaoGeral){
                            $puxaFilme = $filmes->rsDados($puxaProgramacaoGeral->id_filme);
                            $puxaHorarios = $filmes->rsDadosProgramacao('', '', '', $puxaFilme->id, $data_selecionada);
                            ?>
                        <div class="single-movie-details-area">
                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                <div class="movie-details">
                                    <div class="media">
                                      <a class="pull-left" href="./filme/<?php echo $puxaFilme->url_amigavel;?>">
                                        <img class="media-object" src="img/<?php echo $puxaFilme->imagem;?>" alt="<?php echo $puxaFilme->url_amigavel;?>" title="<?php echo $puxaFilme->url_amigavel;?>" style="max-width: 150px;" >
                                        <!-- <span class="text-align">3D Movie</span> -->
                                      </a>
                                      <div class="media-body">
                                        <h4 class="media-heading"><a href="./filme/<?php echo $puxaFilme->url_amigavel;?>"><?php echo $puxaFilme->titulo;?></a></h4>
                                        <div class="movie-info">
                                            <ul>
                                                <li class="info-one three">12+</li>
                                                <li> <?php echo $puxaFilme->duracao;?> - <?php echo $puxaFilme->genero;?></li>
                                            </ul>
                                        </div>
                                        <p><span>Diretor:</span> <?php echo $puxaFilme->diretor;?><br/><span>Atores:</span> <?php echo $puxaFilme->atores;?></p>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="movie-time">
                                                <ul>
                                                    <?php foreach($puxaHorarios as $puxaHorario){
                                                        $hora_agora = date('H:i:s');
                                                        //if(strtotime($hora_agora) > strtotime($puxaHorario->hora_exibicao)){ ?>
                                                       <!--  <li><?php //echo substr($puxaHorario->hora_exibicao,0,5);?></li> -->
                                                       <?php //}else{?>
                                                        <li><a href="./entrada/<?php echo substr($puxaHorario->hora_exibicao,0,5);?>/<?php echo $puxaFilme->url_amigavel;?>"><?php echo substr($puxaHorario->hora_exibicao,0,5);?></a></li>
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
                        <div class="single-movie-details-area">
                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                <div class="movie-details">
                                    <div class="media">
                                      <a class="pull-left" href="show-details.html">
                                        <img class="media-object" src="images/movie/2.jpg" alt="Generic placeholder image">
                                        <span class="text-align">Animation</span>
                                      </a>
                                      <div class="media-body">
                                        <h4 class="media-heading"><a href="show-details.html">Old McDonald’s Had a Farm (2016)</a></h4>
                                        <div class="movie-info">
                                            <ul>
                                                <li class="info-one">4+</li>
                                                <li>103 min - Animation for Kids</li>
                                            </ul>
                                        </div>
                                        <p><span>Director:</span> Tom Tykwer<br/><span>Actors:</span>  Tom Hanks, Alexander Black, Sarita Choudhury, Dave Egger</p>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="movie-time">
                                                <ul>
                                                    <li>13:00</li>
                                                    <li>17:45</li>
                                                    <li>21:00</li>
                                                </ul>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="movie-details-text">
                                    <p>From the bitter quest of the Queen of Longtrel, to 2 mysterious sisters who provoke the passion of a king, to all the Kings of Highhills obsessed with a giant Flea.</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-movie-details-area">
                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                <div class="movie-details">
                                    <div class="media">
                                      <a class="pull-left" href="show-details.html">
                                        <img class="media-object" src="images/movie/3.jpg" alt="Generic placeholder image">
                                        <span class="text-align">3D Movie <br/> Digital Movie</span>
                                      </a>
                                      <div class="media-body">
                                        <h4 class="media-heading"><a href="show-details.html">Popstar: Never Stop Never Stopping (2016)</a></h4>
                                        <div class="movie-info">
                                            <ul>
                                                <li class="info-one two">7+</li>
                                                <li>126 min - Drama | Comedy</li>
                                            </ul>
                                        </div>
                                        <p><span>Director:</span> Kirk Jones<br/><span>Actors:</span> Nia Vardalos, John Corbett, Michael Constantine, Lainie Kaza</p>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="movie-time">
                                                <ul>
                                                    <li>11:00</li>
                                                    <li>12:55</li>
                                                    <li>15:45</li>
                                                    <li>21:15</li>
                                                </ul>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="movie-details-text">
                                    <p>A first-person action film from the of Henry, who's resurrected from death with no memory. He must save his wife from a very telekinetic warlord with a plan to bio-engineer soldiers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-movie-details-area">
                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                <div class="movie-details">
                                    <div class="media">
                                      <a class="pull-left" href="show-details.html">
                                        <img class="media-object" src="images/movie/4.jpg" alt="Generic placeholder image">
                                        <span class="text-align">Digital Movie</span>
                                      </a>
                                      <div class="media-body">
                                        <h4 class="media-heading"><a href="show-details.html">Alice Through the Looking Glass (2016)</a></h4>
                                        <div class="movie-info">
                                            <ul>
                                                <li class="info-one threee">16+</li>
                                                <li>101 min - Action | Adventure | Sci-Fi</li>
                                            </ul>
                                        </div>
                                        <p><span>Director:</span> Robert Schwentke<br/><span>Actors:</span> Shailene Woodley, Theo James, Jeff Daniels, Naomi Watts</p>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="movie-time">
                                                <ul>
                                                    <li>10:45</li>
                                                    <li>12:55</li>
                                                    <li>15:45</li>
                                                    <li>17:15</li>
                                                    <li>19:45</li>
                                                </ul>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="movie-details-text">
                                    <p>A young girl suffering from a rare digestive disorder finds herself miraculously cured after surviving a terrible accident.Very good movie!</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-movie-details-area">
                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                <div class="movie-details">
                                    <div class="media">
                                      <a class="pull-left" href="show-details.html">
                                        <img class="media-object" src="images/movie/5.jpg" alt="Generic placeholder image">
                                        <span class="text-align">Digital Movie</span>
                                      </a>
                                      <div class="media-body">
                                        <h4 class="media-heading"><a href="show-details.html">Battle of the young lions (2016)</a></h4>
                                        <div class="movie-info">
                                            <ul>
                                                <li class="info-one four">18+</li>
                                                <li>128 min - Action | Adventure | Mystery | Sci-Fi | Thriller</li>
                                            </ul>
                                        </div>
                                        <p><span>Director:</span> Ilya Naishuller<br/><span>Actors:</span> Sharlto Copley, Tim Roth, Haley Bennett, Danila Kozlovsky</p>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="movie-time">
                                                <ul>
                                                    <li>11:45</li>
                                                    <li>15:25</li>
                                                    <li>17:00</li>
                                                    <li>19:15</li>
                                                    <li>19:45</li>
                                                </ul>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="movie-details-text">
                                    <p>After getting in a car accident, a woman is held in a shelter with two men, who claim the outside world is affected by a very widespread chemical attack.</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-movie-details-area">
                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                <div class="movie-details">
                                    <div class="media">
                                      <a class="pull-left" href="show-details.html">
                                        <img class="media-object" src="images/movie/6.jpg" alt="Generic placeholder image">
                                        <span class="text-align">3D Movie</span>
                                      </a>
                                      <div class="media-body">
                                        <h4 class="media-heading"><a href="show-details.html">The Room From Badmintom Hotel (2016)</a></h4>
                                        <div class="movie-info">
                                            <ul>
                                                <li class="info-one five">12+</li>
                                                <li>106 min - Drama | Thriller | War</li>
                                            </ul>
                                        </div>
                                        <p><span>Director:</span>  Gavin Hood<br/><span>Actors:</span> John Goodman, Mary Elizabeth Winstead, John Gallagher</p>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="movie-time">
                                                <ul>
                                                    <li>13:00</li>
                                                    <li>15:30</li>
                                                    <li>17:45</li>
                                                    <li>19:15</li>
                                                    <li>21:00</li>
                                                </ul>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="movie-details-text">
                                    <p>Col. Katherine Powell, a military officer in command of an new operation to capture terrorists in Kenya, sees her missions to escalate when a girl enters the kill zone triggering.</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-movie-details-area">
                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                <div class="movie-details">
                                    <div class="media">
                                      <a class="pull-left" href="show-details.html">
                                        <img class="media-object" src="images/movie/7.jpg" alt="Generic placeholder image">
                                        <span class="text-align">Animation</span>
                                      </a>
                                      <div class="media-body">
                                        <h4 class="media-heading"><a href="show-details.html">Spy eye directly from the sky (2016)</a></h4>
                                        <div class="movie-info">
                                            <ul>
                                                <li class="info-one one">4+</li>
                                                <li> 156 min - Comedy | Animation</li>
                                            </ul>
                                        </div>
                                        <p><span>Director:</span> Peter Atencio<br/><span>Actors:</span> Keegan-Michael Key, Jordan Peele, Will Forte, Nia Long</p>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="movie-time">
                                                <ul>
                                                    <li>11:25</li>
                                                    <li>13:50</li>
                                                    <li>15:45</li>
                                                </ul>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="movie-details-text">
                                    <p>It's been a long time since we enjoyed a trailer as much as this one while simultaneously wondering aloud whether the movie could sustain the laughter for 100 minutes. </p>
                                </div>
                            </div>
                        </div>
                    </div>