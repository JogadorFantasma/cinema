 <div class="selected-seat">
                              <ul>
                                <li><span></span>Assentos selecionados</li>
                                <li><span></span>Assentos Livres</li>
                                <li><span><i class="fa fa-wheelchair" aria-hidden="true"></i></span>Reservados para Cadeirantes</li>
                                <li><span></span>Assentos Indisponiveis</li>
                              </ul>
                            </div>
                            <?php if(isset($_GET['id_sala']) && $_GET['id_sala'] == 3 && $_GET['id_cidade_sala'] == 4){?>
                            <form action="<?php echo SITE_URL;?>/entrada/3/<?php echo $descFilme[0]->url_amigavel;?>" name="form" method="POST">
                            <?php //var_dump($_POST);
                            $cadeiraI3 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'I3');
                            $cadeiraI4 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'I4');
                            $cadeiraI7 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'I7');
                            $cadeiraI8 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'I8');
                            $cadeiraI8 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'I8');
                            $cadeiraI10 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'I10');
                            $cadeiraI11 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'I11');
                            $cadeiraI12 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'I12');
                            $cadeiraI15 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'I15');
                            $cadeiraI16 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'I16');

                            $cadeiraH1 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H1');
                            $cadeiraH2 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H2');
                            $cadeiraH5 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H5');
                            $cadeiraH6 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H6');
                            $cadeiraH13 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H13');
                            $cadeiraH14 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H14');
                            //echo "aqui: ".$cadeirasOcupadas->assento;

                            $cadeiraG3 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'G3');
                            $cadeiraG4 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'G4');
                            $cadeiraG7 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'G7');
                            $cadeiraG8 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'G8');
                            $cadeiraG8 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'G8');
                            $cadeiraG10 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'G10');
                            $cadeiraG11 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'G11');
                            $cadeiraG12 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'G12');
                            $cadeiraG15 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'G15');
                            $cadeiraG16 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'G16');

                            $cadeiraF1 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F1');
                            $cadeiraF2 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F2');
                            $cadeiraF5 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F5');
                            $cadeiraF6 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F6');
                            $cadeiraF13 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F13');
                            $cadeiraF14 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F14');

                            $cadeiraE3 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'E3');
                            $cadeiraE4 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'E4');
                            $cadeiraE7 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'E7');
                            $cadeiraE8 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'E8');
                            $cadeiraE8 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'E8');
                            $cadeiraE10 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'E10');
                            $cadeiraE11 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'E11');
                            $cadeiraE12 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'E12');
                            $cadeiraE15 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'E15');
                            $cadeiraE16 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'E16');

                            $cadeiraD1 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D1');
                            $cadeiraD2 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D2');
                            $cadeiraD5 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D5');
                            $cadeiraD6 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D6');
                            $cadeiraD13 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D13');
                            $cadeiraD14 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D14');

                            $cadeiraC3 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'C3');
                            $cadeiraC4 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'C4');
                            $cadeiraC7 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'C7');
                            $cadeiraC8 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'C8');
                            $cadeiraC8 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'C8');
                            $cadeiraC10 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'C10');
                            $cadeiraC11 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'C11');
                            $cadeiraC12 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'C12');
                            $cadeiraC15 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'C15');
                            $cadeiraC16 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'C16');

                            $cadeiraB1 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'B1');
                            $cadeiraB2 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'B2');
                            $cadeiraB5 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'B5');
                            $cadeiraB6 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'B6');
                            $cadeiraB13 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'B13');
                            $cadeiraB14 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'B14');

                            $cadeiraA3 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'A3');
                            $cadeiraA4 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'A4');
                            $cadeiraA7 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'A7');
                            $cadeiraA8 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'A8');
                            $cadeiraA8 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'A8');
                            $cadeiraA10 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'A10');
                            $cadeiraA11 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'A11');
                            $cadeiraA12 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'A12');
                            $cadeiraA15 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'A15');
                            $cadeiraA16 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'A16');

                            $cadeiraES1 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'ES1');
                            $cadeiraES2 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'ES2');
                            $cadeiraES3 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'ES3');
                            $cadeiraES4 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'ES4');
                            $cadeiraES5 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'ES5');
                            $cadeiraES6 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'ES6');
                            $cadeiraES7 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'ES7');
                            ?>
                            <div class="seats-table">
                              <div class="table-responsive">
                                <table class="table">
                                  <tbody> 
                                    <tr>
                                      <td class="number"></td>
                                      <td class="number"></td>
                                      <td class="number">I</td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraI3)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" name="cadeira[]" value="I3"/>3</td>
                                      <?php }?>
                                      <?php if(count($cadeiraI4)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="I4"/>4</td>
                                      <?php }?>
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraI7)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="I7"/>7</td>
                                      <?php }?>
                                      <?php if(count($cadeiraI8)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="I8"/>8</td>
                                      <?php }?>
                                      
                                      
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <?php if(count($cadeiraI10)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="I10"/>10</td>
                                      <?php }?>
                                      <?php if(count($cadeiraI11)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="I11"/>11</td>
                                      <?php }?>
                                      <?php if(count($cadeiraI12)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="I12"/>12</td>
                                      <?php }?>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraI15)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="I15"/>15</td>
                                      <?php }?>
                                      <?php if(count($cadeiraI16)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="I16"/>16</td>
                                      <?php }?>
                                      
                                      <td class="number">I</td>
                                    </tr> 
                                    <tr>
                                        <td class="number"></td>
                                      <td class="number"></td>
                                      <td class="number">H</td>
                                      <?php if(count($cadeiraH1)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="H1"/>1</td>
                                      <?php }?>
                                      <?php if(count($cadeiraH2)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="H2"/>2</td>
                                      <?php }?>
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraH5)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="H5"/>5</td>
                                      <?php }?>
                                      <?php if(count($cadeiraH6)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="H6"/>6</td>
                                      <?php }?>
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                       <?php if(count($cadeiraH13)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="H13"/>13</td>
                                      <?php }?>
                                       <?php if(count($cadeiraH14)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="H14"/>14</td>
                                      <?php }?>
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="number">H</td>
                                    </tr> 
                                    <tr>
                                        <td class="number"></td>
                                      <td class="number"></td>
                                      <td class="number">G</td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraG3)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" name="cadeira[]" value="G3"/>3</td>
                                      <?php }?>
                                      <?php if(count($cadeiraG4)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="G4"/>4</td>
                                      <?php }?>
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraG7)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="G7"/>7</td>
                                      <?php }?>
                                      <?php if(count($cadeiraG8)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="G8"/>8</td>
                                      <?php }?>
                                      
                                      
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <?php if(count($cadeiraG10)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="G10"/>10</td>
                                      <?php }?>
                                      <?php if(count($cadeiraG11)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="G11"/>11</td>
                                      <?php }?>
                                      <?php if(count($cadeiraG12)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="G12"/>12</td>
                                      <?php }?>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraG15)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="G15"/>15</td>
                                      <?php }?>
                                      <?php if(count($cadeiraG16)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="G16"/>16</td>
                                      <?php }?>
                                      <td class="number">G</td>
                                    </tr> 
                                    <tr>
                                        <td class="number"></td>
                                      <td class="number"></td>
                                      <td class="number">F</td>
                                      <?php if(count($cadeiraF1)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="F1"/>1</td>
                                      <?php }?>
                                      <?php if(count($cadeiraF2)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="F2"/>2</td>
                                      <?php }?>
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraF5)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="F5"/>5</td>
                                      <?php }?>
                                      <?php if(count($cadeiraF6)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="F6"/>6</td>
                                      <?php }?>
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                       <?php if(count($cadeiraF13)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="F13"/>13</td>
                                      <?php }?>
                                       <?php if(count($cadeiraF14)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="F14"/>14</td>
                                      <?php }?>
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="number">F</td>
                                    </tr> 
                                    <tr>
                                        <td class="number"></td>
                                      <td class="number"></td>
                                      <td class="number">E</td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraE3)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" name="cadeira[]" value="E3"/>3</td>
                                      <?php }?>
                                      <?php if(count($cadeiraE4)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="E4"/>4</td>
                                      <?php }?>
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraE7)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="E7"/>7</td>
                                      <?php }?>
                                      <?php if(count($cadeiraE8)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="E8"/>8</td>
                                      <?php }?>
                                      
                                      
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <?php if(count($cadeiraE10)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="E10"/>10</td>
                                      <?php }?>
                                      <?php if(count($cadeiraE11)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="E11"/>11</td>
                                      <?php }?>
                                      <?php if(count($cadeiraE12)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="E12"/>12</td>
                                      <?php }?>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraE15)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="E15"/>15</td>
                                      <?php }?>
                                      <?php if(count($cadeiraE16)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="E16"/>16</td>
                                      <?php }?>
                                      <td class="number">E</td>
                                    </tr> 
                                   
                                    <tr>
                                        <td class="number"></td>
                                      <td class="number"></td>
                                      <td class="number">D</td>
                                       <?php if(count($cadeiraD1)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="D1"/>1</td>
                                      <?php }?>
                                      <?php if(count($cadeiraD2)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="D2"/>2</td>
                                      <?php }?>
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraD5)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="D5"/>5</td>
                                      <?php }?>
                                      <?php if(count($cadeiraD6)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="D6"/>6</td>
                                      <?php }?>
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                       <?php if(count($cadeiraD13)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="D13"/>13</td>
                                      <?php }?>
                                       <?php if(count($cadeiraD14)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="D14"/>14</td>
                                      <?php }?>
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="number">D</td>
                                    </tr> 
                                   
                                    <tr>
                                        <td class="number"></td>
                                      <td class="number"></td>
                                      <td class="number">C</td>
                                       <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraC3)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" name="cadeira[]" value="C3"/>3</td>
                                      <?php }?>
                                      <?php if(count($cadeiraC4)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="C4"/>4</td>
                                      <?php }?>
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraC7)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="C7"/>7</td>
                                      <?php }?>
                                      <?php if(count($cadeiraC8)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="C8"/>8</td>
                                      <?php }?>
                                      
                                      
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <?php if(count($cadeiraC10)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="C10"/>10</td>
                                      <?php }?>
                                      <?php if(count($cadeiraC11)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="C11"/>11</td>
                                      <?php }?>
                                      <?php if(count($cadeiraC12)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="C12"/>12</td>
                                      <?php }?>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraC15)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="C15"/>15</td>
                                      <?php }?>
                                      <?php if(count($cadeiraC16)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="C16"/>16</td>
                                      <?php }?>
                                      <td class="number">C</td>
                                    </tr>
                                    <tr>
                                        <td class="number"></td>
                                      <td class="number"></td>
                                      <td class="number">B</td>
                                      <?php if(count($cadeiraB1)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="B1"/>1</td>
                                      <?php }?>
                                      <?php if(count($cadeiraB2)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="B2"/>2</td>
                                      <?php }?>
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraB5)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="B5"/>5</td>
                                      <?php }?>
                                      <?php if(count($cadeiraB6)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="B6"/>6</td>
                                      <?php }?>
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                       <?php if(count($cadeiraB13)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="B13"/>13</td>
                                      <?php }?>
                                       <?php if(count($cadeiraB14)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="B14"/>14</td>
                                      <?php }?>
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="number">B</td>
                                    </tr> 
                                    <tr>
                                        <td class="number"></td>
                                      <td class="number"></td>
                                      <td class="number">A</td>
                                       <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraA3)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" name="cadeira[]" value="A3"/>3</td>
                                      <?php }?>
                                      <?php if(count($cadeiraA4)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="A4"/>4</td>
                                      <?php }?>
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraA7)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="A7"/>7</td>
                                      <?php }?>
                                      <?php if(count($cadeiraA8)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="A8"/>8</td>
                                      <?php }?>
                                      
                                      
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <?php if(count($cadeiraA10)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="A10"/>10</td>
                                      <?php }?>
                                      <?php if(count($cadeiraA11)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="A11"/>11</td>
                                      <?php }?>
                                      <?php if(count($cadeiraA12)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="A12"/>12</td>
                                      <?php }?>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraA15)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="A15"/>15</td>
                                      <?php }?>
                                      <?php if(count($cadeiraA16)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="A16"/>16</td>
                                      <?php }?>
                                      <td class="number">A</td>
                                    </tr> 
                                    <tr>
                                        <td class="white-space"></td>
                                        <td class="white-space"></td>
                                        <td class="white-space"></td>
                                        <td class="white-space"></td>
                                        <?php if(count($cadeiraES1)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="whilechair"><span><i class="fa fa-wheelchair" aria-hidden="true"></i></span><input type="checkbox" name="cadeira[]" value="ES1"/></td>
                                      <?php }?>
                                        
                                        <td class="white-space"></td>
                                        <?php if(count($cadeiraES2)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="whilechair"><span><i class="fa fa-wheelchair" aria-hidden="true"></i></span><input type="checkbox" name="cadeira[]" value="ES2"/></td>
                                      <?php }?>
                                       
                                        <td class="white-space"></td>
                                         <?php if(count($cadeiraES3)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                         <td class="whilechair"><span><i class="fa fa-wheelchair" aria-hidden="true"></i></span><input type="checkbox" name="cadeira[]" value="ES3"/></td>
                                      <?php }?>
                                       
                                        <td class="white-space"></td>
                                           <?php if(count($cadeiraES4)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="whilechair"><span><i class="fa fa-wheelchair" aria-hidden="true"></i></span><input type="checkbox" name="cadeira[]" value="ES4"/></td>
                                      <?php }?>
                                        
                                        <td class="white-space"></td>
                                        <td class="white-space"></td>
                                        <td class="white-space"></td>
                                            <?php if(count($cadeiraES5)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                         <td class="whilechair"><span><i class="fa fa-wheelchair" aria-hidden="true"></i></span><input type="checkbox" name="cadeira[]" value="ES5"/></td>
                                      <?php }?>
                                       
                                        <td class="white-space"></td>
                                            <?php if(count($cadeiraES6)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="whilechair"><span><i class="fa fa-wheelchair" aria-hidden="true"></i></span><input type="checkbox" name="cadeira[]" value="ES6"/></td>
                                      <?php }?>
                                        
                                        <td class="white-space"></td>
                                            <?php if(count($cadeiraES7)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="whilechair"><span><i class="fa fa-wheelchair" aria-hidden="true"></i></span><input type="checkbox" name="cadeira[]" value="ES7"/></td>
                                      <?php }?>
                                        
                                        <td class="white-space"></td>
                                    </tr>
                                  
                                  </tbody>
                                </table>
                              </div>
                              <div class="screen-button">
                                <a href="#">Tela de Cinema</a>
                              </div>
                            </div>
                            <button class="btn-default back-top topppbtn"  onclick="window.location='<?php echo SITE_URL;?>/entrada/<?php echo substr($horario_ingresso,0,2).substr($horario_ingresso,3,2);?>/<?php echo substr($data_ingresso,0,4).substr($data_ingresso,5,2).substr($data_ingresso,8,2);?>/<?php echo $descFilme[0]->url_amigavel;?>';"><i class="fa fa-angle-left" aria-hidden="true"></i> Voltar</button>
                              <button class="btn-green done" type="submit">Proximo <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                            </form>
                            <?php }?>