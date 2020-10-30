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
                            
                            $cadeiraJ3 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'J3');
                            $cadeiraJ4 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'J4');
                            $cadeiraJ7 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'J7');
                            $cadeiraJ8 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'J8');
                            $cadeiraJ10 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'J10');
                            $cadeiraJ11 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'J11');
                            $cadeiraJ12 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'J12');
                            $cadeiraJ15 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'J15');
                            $cadeiraJ16 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'J16');

                            $cadeiraI1 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'I1');
                            $cadeiraI2 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'I2');
                            $cadeiraI5 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'I5');
                            $cadeiraI6 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'I6');
                            $cadeiraI13 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'I13');
                            $cadeiraI14 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'I14');
                            //echo "aqui: ".$cadeirasOcupadas->assento;

                            $cadeiraH3 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H3');
                            $cadeiraH4 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H4');
                            $cadeiraH7 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H7');
                            $cadeiraH8 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H8');
                            $cadeiraH10 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H10');
                            $cadeiraH11 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H11');
                            $cadeiraH12 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H12');
                            $cadeiraH15 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H15');
                            $cadeiraH16 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H16');

                            $cadeiraG1 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'G1');
                            $cadeiraG2 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'G2');
                            $cadeiraG5 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'G5');
                            $cadeiraG6 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'G6');
                            $cadeiraG13 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'G13');
                            $cadeiraG14 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'G14');

                            $cadeiraF3 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F3');
                            $cadeiraF4 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F4');
                            $cadeiraF7 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F7');
                            $cadeiraF8 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F8');
                            $cadeiraF10 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F10');
                            $cadeiraF11 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F11');
                            $cadeiraF12 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F12');
                            $cadeiraF15 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F15');
                            $cadeiraF16 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F16');

                            $cadeiraE1 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'E1');
                            $cadeiraE2 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'E2');
                            $cadeiraE5 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'E5');
                            $cadeiraE6 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'E6');
                            $cadeiraE13 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'E13');
                            $cadeiraE14 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'E14');

                            $cadeiraD3 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D3');
                            $cadeiraD4 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D4');
                            $cadeiraD7 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D7');
                            $cadeiraD8 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D8');
                            $cadeiraD10 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D10');
                            $cadeiraD11 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D11');
                            $cadeiraD12 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D12');
                            $cadeiraD15 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D15');
                            $cadeiraD16 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D16');

                            $cadeiraC1 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'C1');
                            $cadeiraC2 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'C2');
                            $cadeiraC5 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'C5');
                            $cadeiraC6 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'C6');
                            $cadeiraC13 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'C13');
                            $cadeiraC14 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'C14');

                            $cadeiraB3 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'B3');
                            $cadeiraB4 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'B4');
                            $cadeiraB7 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'B7');
                            $cadeiraB8 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'B8');
                            $cadeiraB10 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'B10');
                            $cadeiraB11 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'B11');
                            $cadeiraB12 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'B12');
                            $cadeiraB15 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'B15');
                            $cadeiraB16 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'B16');

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
                                      <td class="number">J</td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      
                                      
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <?php if(count($cadeiraJ10)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="J10"/>10</td>
                                      <?php }?>
                                      <?php if(count($cadeiraJ11)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="J11"/>11</td>
                                      <?php }?>
                                      <?php if(count($cadeiraJ12)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="J12"/>12</td>
                                      <?php }?>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraJ15)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="J15"/>15</td>
                                      <?php }?>
                                      <?php if(count($cadeiraJ16)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="J16"/>16</td>
                                      <?php }?>
                                      
                                      <td class="number">J</td>
                                    </tr> 
                                    <tr>
                                        <td class="number"></td>
                                      <td class="number"></td>
                                      <td class="number">I</td>
                                      <?php if(count($cadeiraI1)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="I1"/>1</td>
                                      <?php }?>
                                      <?php if(count($cadeiraI2)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="I2"/>2</td>
                                      <?php }?>
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraI5)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="I5"/>5</td>
                                      <?php }?>
                                      <?php if(count($cadeiraI6)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="I6"/>6</td>
                                      <?php }?>
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                       <?php if(count($cadeiraI13)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="I13"/>13</td>
                                      <?php }?>
                                       <?php if(count($cadeiraI14)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="I14"/>14</td>
                                      <?php }?>
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="number">I</td>
                                    </tr> 
                                    <tr>
                                        <td class="number"></td>
                                      <td class="number"></td>
                                      <td class="number">H</td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraH3)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" name="cadeira[]" value="H3"/>3</td>
                                      <?php }?>
                                      <?php if(count($cadeiraH4)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="H4"/>4</td>
                                      <?php }?>
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraH7)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="H7"/>7</td>
                                      <?php }?>
                                      <?php if(count($cadeiraH8)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="H8"/>8</td>
                                      <?php }?>
                                      
                                      
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <?php if(count($cadeiraH10)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="H10"/>10</td>
                                      <?php }?>
                                      <?php if(count($cadeiraH11)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="H11"/>11</td>
                                      <?php }?>
                                      <?php if(count($cadeiraH12)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="H12"/>12</td>
                                      <?php }?>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraH15)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="H15"/>15</td>
                                      <?php }?>
                                      <?php if(count($cadeiraH16)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="H16"/>16</td>
                                      <?php }?>
                                      <td class="number">H</td>
                                    </tr> 
                                    <tr>
                                        <td class="number"></td>
                                      <td class="number"></td>
                                      <td class="number">G</td>
                                      <?php if(count($cadeiraG1)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="G1"/>1</td>
                                      <?php }?>
                                      <?php if(count($cadeiraG2)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="G2"/>2</td>
                                      <?php }?>
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraG5)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="G5"/>5</td>
                                      <?php }?>
                                      <?php if(count($cadeiraG6)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="G6"/>6</td>
                                      <?php }?>
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                       <?php if(count($cadeiraG13)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="G13"/>13</td>
                                      <?php }?>
                                       <?php if(count($cadeiraG14)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="G14"/>14</td>
                                      <?php }?>
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="number">G</td>
                                    </tr> 
                                    <tr>
                                        <td class="number"></td>
                                      <td class="number"></td>
                                      <td class="number">F</td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraF3)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" name="cadeira[]" value="F3"/>3</td>
                                      <?php }?>
                                      <?php if(count($cadeiraF4)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="F4"/>4</td>
                                      <?php }?>
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraF7)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="F7"/>7</td>
                                      <?php }?>
                                      <?php if(count($cadeiraF8)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="F8"/>8</td>
                                      <?php }?>
                                      
                                      
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <?php if(count($cadeiraF10)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="F10"/>10</td>
                                      <?php }?>
                                      <?php if(count($cadeiraF11)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="F11"/>11</td>
                                      <?php }?>
                                      <?php if(count($cadeiraF12)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="F12"/>12</td>
                                      <?php }?>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraF15)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="F15"/>15</td>
                                      <?php }?>
                                      <?php if(count($cadeiraF16)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="F16"/>16</td>
                                      <?php }?>
                                      <td class="number">F</td>
                                    </tr> 
                                   
                                    <tr>
                                        <td class="number"></td>
                                      <td class="number"></td>
                                      <td class="number">E</td>
                                       <?php if(count($cadeiraE1)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="E1"/>1</td>
                                      <?php }?>
                                      <?php if(count($cadeiraE2)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="E2"/>2</td>
                                      <?php }?>
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraE5)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="E5"/>5</td>
                                      <?php }?>
                                      <?php if(count($cadeiraE6)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="E6"/>6</td>
                                      <?php }?>
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                       <?php if(count($cadeiraE13)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="E13"/>13</td>
                                      <?php }?>
                                       <?php if(count($cadeiraE14)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="E14"/>14</td>
                                      <?php }?>
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="number">E</td>
                                    </tr> 
                                   
                                    <tr>
                                        <td class="number"></td>
                                      <td class="number"></td>
                                      <td class="number">D</td>
                                       <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraD3)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" name="cadeira[]" value="D3"/>3</td>
                                      <?php }?>
                                      <?php if(count($cadeiraD4)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="D4"/>4</td>
                                      <?php }?>
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraD7)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="D7"/>7</td>
                                      <?php }?>
                                      <?php if(count($cadeiraD8)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="D8"/>8</td>
                                      <?php }?>
                                      
                                      
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <?php if(count($cadeiraD10)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="D10"/>10</td>
                                      <?php }?>
                                      <?php if(count($cadeiraD11)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="D11"/>11</td>
                                      <?php }?>
                                      <?php if(count($cadeiraD12)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="D12"/>12</td>
                                      <?php }?>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraD15)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="D15"/>15</td>
                                      <?php }?>
                                      <?php if(count($cadeiraD16)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="D16"/>16</td>
                                      <?php }?>
                                      <td class="number">D</td>
                                    </tr>
                                    <tr>
                                        <td class="number"></td>
                                      <td class="number"></td>
                                      <td class="number">C</td>
                                      <?php if(count($cadeiraC1)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="C1"/>1</td>
                                      <?php }?>
                                      <?php if(count($cadeiraC2)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="C2"/>2</td>
                                      <?php }?>
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraC5)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="C5"/>5</td>
                                      <?php }?>
                                      <?php if(count($cadeiraC6)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="C6"/>6</td>
                                      <?php }?>
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                       <?php if(count($cadeiraC13)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="C13"/>13</td>
                                      <?php }?>
                                       <?php if(count($cadeiraC14)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="C14"/>14</td>
                                      <?php }?>
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="number">C</td>
                                    </tr> 
                                    <tr>
                                        <td class="number"></td>
                                      <td class="number"></td>
                                      <td class="number">B</td>
                                       <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <?php if(count($cadeiraB10)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="B10"/>10</td>
                                      <?php }?>
                                      <?php if(count($cadeiraB11)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="B11"/>11</td>
                                      <?php }?>
                                      <?php if(count($cadeiraB12)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="B12"/>12</td>
                                      <?php }?>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraB15)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="B15"/>15</td>
                                      <?php }?>
                                      <?php if(count($cadeiraB16)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="B16"/>16</td>
                                      <?php }?>
                                      <td class="number">B</td>
                                    </tr> 

                                    <tr>
                                        <td class="number"></td>
                                      <td class="number"></td>
                                      <td class="number">A</td>
                                       <td class="unavailable click-seat"></td>
                                       <?php if(count($cadeiraES1)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="whilechair"><span><i class="fa fa-wheelchair" aria-hidden="true"></i></span><input type="checkbox" name="cadeira[]" value="ES1"/></td>
                                      <?php }?>
                                      <td class="unavailable click-seat"></td>
                                       <?php if(count($cadeiraES2)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="whilechair"><span><i class="fa fa-wheelchair" aria-hidden="true"></i></span><input type="checkbox" name="cadeira[]" value="ES2"/></td>
                                      <?php }?>
                                      
                                      <td class="unavailable click-seat"></td>
                                       <?php if(count($cadeiraES3)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                         <td class="whilechair"><span><i class="fa fa-wheelchair" aria-hidden="true"></i></span><input type="checkbox" name="cadeira[]" value="ES3"/></td>
                                      <?php }?>
                                      <td class="unavailable click-seat"></td>
                                         <?php if(count($cadeiraES4)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="whilechair"><span><i class="fa fa-wheelchair" aria-hidden="true"></i></span><input type="checkbox" name="cadeira[]" value="ES4"/></td>
                                      <?php }?>
                                      
                                      
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                        <?php if(count($cadeiraES5)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                         <td class="whilechair"><span><i class="fa fa-wheelchair" aria-hidden="true"></i></span><input type="checkbox" name="cadeira[]" value="ES5"/></td>
                                      <?php }?>
                                     
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                        <?php if(count($cadeiraES6)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="whilechair"><span><i class="fa fa-wheelchair" aria-hidden="true"></i></span><input type="checkbox" name="cadeira[]" value="ES6"/></td>
                                      <?php }?>
                                       <td class="unavailable click-seat"></td>
                                         <?php if(count($cadeiraES7)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="whilechair"><span><i class="fa fa-wheelchair" aria-hidden="true"></i></span><input type="checkbox" name="cadeira[]" value="ES7"/></td>
                                      <?php }?>
                                       <td class="unavailable click-seat"></td>
                                      <td class="number">A</td>
                                    </tr> 
                                  
                                  
                                  </tbody>
                                </table>
                              </div>
                              <div class="screen-button">
                                <a href="#">Tela de Cinema</a>
                              </div>
                            </div>
                            <a class="btn-default back-top topppbtn"  href="<?php echo SITE_URL;?>/entrada/<?php echo substr($horario_ingresso,0,2).substr($horario_ingresso,3,2);?>/<?php echo substr($data_ingresso,0,4).substr($data_ingresso,5,2).substr($data_ingresso,8,2);?>/<?php echo $descFilme[0]->url_amigavel;?>" style="padding-top: 6px;"><i class="fa fa-angle-left" aria-hidden="true"></i> Voltar</a>
                              <button class="btn-green done" type="submit">Proximo <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                            </form>
                            <?php }?>

                             <?php if(isset($_GET['id_sala']) && $_GET['id_sala'] == 6 && $_GET['id_cidade_sala'] == 5){?>
                            <form action="<?php echo SITE_URL;?>/entrada/3/<?php echo $descFilme[0]->url_amigavel;?>" name="form" method="POST">
                            <?php //var_dump($_POST);
                            $cadeiraJ1 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'J1');
                            $cadeiraJ2 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'J2');
                            $cadeiraJ3 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'J3');
                            $cadeiraJ6 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'J6');
                            $cadeiraJ7 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'J7');
                            $cadeiraJ8 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'J8');
                            $cadeiraJ9 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'J9');
                            $cadeiraJ12 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'J12');
                            $cadeiraJ13 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'J13');
                            $cadeiraJ16 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'J16');
                            $cadeiraJ17 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'J17');
                            $cadeiraJ20 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'J20');
                            $cadeiraJ21 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'J21');

                            $cadeiraI4 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'I4');
                            $cadeiraI5 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'I5');
                            $cadeiraI10 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'I10');
                            $cadeiraI11 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'I11');
                            $cadeiraI14 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'I14');
                            $cadeiraI15 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'I15');
                            $cadeiraI18 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'I18');
                            $cadeiraI19 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'I19');

                            $cadeiraH1 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H1');
                            $cadeiraH2 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H2');
                            $cadeiraH3 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H3');
                            $cadeiraH8 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H8');
                            $cadeiraH9 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H9');
                            $cadeiraH12 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H12');
                            $cadeiraH13 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H13');
                            $cadeiraH20 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H20');
                            $cadeiraH21 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H21');
                            $cadeiraH22 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H22');
                            //echo "aqui: ".$cadeirasOcupadas->assento;
                            
                            $cadeiraG4 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'G4');
                            $cadeiraG5 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'G5');
                            $cadeiraG10 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'G10');
                            $cadeiraG11 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'G11');
                            $cadeiraG14 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'G14');
                            $cadeiraG15 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'G15');
                            $cadeiraG18 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'G18');
                            $cadeiraG19 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'G19');

                          
                            $cadeiraF1 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F1');
                            $cadeiraF2 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F2');
                            $cadeiraF3 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F3');
                            $cadeiraF8 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F8');
                            $cadeiraF9 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F9');
                            $cadeiraF12 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F12');
                            $cadeiraF13 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F13');
                            $cadeiraF20 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F20');
                            $cadeiraF21 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F21');
                            $cadeiraF22 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F22');

                            $cadeiraE4 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'E4');
                            $cadeiraE5 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'E5');
                            $cadeiraE10 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'E10');
                            $cadeiraE11 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'E11');
                            $cadeiraE14 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'E14');
                            $cadeiraE15 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'E15');
                            $cadeiraE18 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'E18');
                            $cadeiraE19 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'E19');

                            $cadeiraD1 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D1');
                            $cadeiraD2 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D2');
                            $cadeiraD3 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D3');
                            $cadeiraD8 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D8');
                            $cadeiraD9 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D9');
                            $cadeiraD12 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D12');
                            $cadeiraD13 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D13');
                            $cadeiraD20 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D20');
                            $cadeiraD21 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D21');
                            $cadeiraD22 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D22');

                            $cadeiraC4 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'C4');
                            $cadeiraC5 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'C5');
                            $cadeiraC10 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'C10');
                            $cadeiraC11 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'C11');
                            $cadeiraC14 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'C14');
                            $cadeiraC15 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'C15');
                            $cadeiraC18 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'C18');
                            $cadeiraC19 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'C19');

                            $cadeiraB1 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'B1');
                            $cadeiraB2 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'B2');
                            $cadeiraB3 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'B3');
                            $cadeiraB11 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'B11');
                            $cadeiraB12 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'B12');
                            $cadeiraB20 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'B20');
                            $cadeiraB21 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'B21');
                            $cadeiraB22 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'B22');

                            $cadeiraA8 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'A8');
                            $cadeiraA9 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'A9');
                            $cadeiraA14 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'A14');
                            $cadeiraA15 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'A15');
                           
                            $cadeiraES1 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'ES1');
                            $cadeiraES2 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'ES2');
                            $cadeiraES3 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'ES3');
                            $cadeiraES4 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'ES4');
                            
                            ?>
                            <div class="seats-table">
                              <div class="table-responsive">
                                <table class="table">
                                  <tbody> 
                                    <tr>
                                      
                                      <td class="number">J</td>
                                       <?php if(count($cadeiraJ1)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="J1"/>1</td>
                                      <?php }?>
                                      <?php if(count($cadeiraJ2)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="J2"/>2</td>
                                      <?php }?>
                                      <?php if(count($cadeiraJ3)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="J3"/>3</td>
                                      <?php }?>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraJ6)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="J6"/>6</td>
                                      <?php }?>
                                      <?php if(count($cadeiraJ7)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="J7"/>7</td>
                                      <?php }?>
                                      <?php if(count($cadeiraJ8)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="J8"/>8</td>
                                      <?php }?>
                                      <?php if(count($cadeiraJ9)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="J9"/>9</td>
                                      <?php }?>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                       <?php if(count($cadeiraJ12)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="J12"/>12</td>
                                      <?php }?>
                                       <?php if(count($cadeiraJ13)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="J13"/>13</td>
                                      <?php }?>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                       <?php if(count($cadeiraJ16)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="J16"/>16</td>
                                      <?php }?>
                                       <?php if(count($cadeiraJ17)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="J17"/>17</td>
                                      <?php }?>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                       <?php if(count($cadeiraJ20)){?>
                                        <td class="selected-seat click-seat"></td>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"></td>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="J20"/>20</td>
                                      <?php }?>
                                       <?php if(count($cadeiraJ21)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="J21"/>21</td>
                                      <?php }?>
                                      
                                      
                                      <td class="number">J</td>
                                    </tr> 

                                    <tr>
                                      <td class="number">I</td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraI4)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="I4"/>4</td>
                                      <?php }?>
                                      <?php if(count($cadeiraI5)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="I5"/>5</td>
                                      <?php }?>
                                      
                                      
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
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
                                     
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                       <?php if(count($cadeiraI14)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="I14"/>14</td>
                                      <?php }?>
                                      <?php if(count($cadeiraI15)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="I15"/>15</td>
                                      <?php }?>
                                     <td class="white-space"></td>
                                     <td class="white-space"></td>
                                      <?php if(count($cadeiraI18)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="I18"/>18</td>
                                      <?php }?>
                                      <?php if(count($cadeiraI19)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="I19"/>19</td>
                                      <?php }?>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="number">I</td>
                                    </tr> 
                                    <tr>
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
                                      <?php if(count($cadeiraH3)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="H3"/>3</td>
                                      <?php }?>
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <?php if(count($cadeiraH8)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="H8"/>8</td>
                                      <?php }?>
                                      <?php if(count($cadeiraH9)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="H9"/>9</td>
                                      <?php }?>
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraH12)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="H12"/>12</td>
                                      <?php }?>
                                      <?php if(count($cadeiraH13)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="H13"/>13</td>
                                      <?php }?>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      
                                       <?php if(count($cadeiraH20)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="H20"/>20</td>
                                      <?php }?>
                                       <?php if(count($cadeiraH21)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="H21"/>21</td>
                                      <?php }?>
                                       <?php if(count($cadeiraH22)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="H22"/>22</td>
                                      <?php }?>
                                      
                                      
                                      <td class="number">H</td>
                                    </tr> 
                                    <tr>
                                      <td class="number">G</td>
                                     <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraG4)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="G4"/>4</td>
                                      <?php }?>
                                      <?php if(count($cadeiraG5)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="G5"/>5</td>
                                      <?php }?>
                                      
                                      
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
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
                                     
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                       <?php if(count($cadeiraG14)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="G14"/>14</td>
                                      <?php }?>
                                      <?php if(count($cadeiraG15)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="G15"/>15</td>
                                      <?php }?>
                                     <td class="white-space"></td>
                                     <td class="white-space"></td>
                                      <?php if(count($cadeiraG18)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="G18"/>18</td>
                                      <?php }?>
                                      <?php if(count($cadeiraG19)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="G19"/>19</td>
                                      <?php }?>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="number">G</td>
                                    </tr> 
                                    <tr>
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
                                      <?php if(count($cadeiraF3)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="F3"/>3</td>
                                      <?php }?>
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <?php if(count($cadeiraF8)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="F8"/>8</td>
                                      <?php }?>
                                      <?php if(count($cadeiraF9)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="F9"/>9</td>
                                      <?php }?>
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraF12)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="F12"/>12</td>
                                      <?php }?>
                                      <?php if(count($cadeiraF13)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="F13"/>13</td>
                                      <?php }?>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      
                                       <?php if(count($cadeiraF20)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="F20"/>20</td>
                                      <?php }?>
                                       <?php if(count($cadeiraF21)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="F21"/>21</td>
                                      <?php }?>
                                       <?php if(count($cadeiraF22)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="F22"/>22</td>
                                      <?php }?>
                                      <td class="number">F</td>
                                    </tr> 
                                    <tr>
                                      <td class="number">E</td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraE4)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="E4"/>4</td>
                                      <?php }?>
                                      <?php if(count($cadeiraE5)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="E5"/>5</td>
                                      <?php }?>
                                      
                                      
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
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
                                     
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                       <?php if(count($cadeiraE14)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="E14"/>14</td>
                                      <?php }?>
                                      <?php if(count($cadeiraE15)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="E15"/>15</td>
                                      <?php }?>
                                     <td class="white-space"></td>
                                     <td class="white-space"></td>
                                      <?php if(count($cadeiraE18)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="E18"/>18</td>
                                      <?php }?>
                                      <?php if(count($cadeiraE19)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="E19"/>19</td>
                                      <?php }?>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="number">E</td>
                                    </tr> 
                                   
                                    <tr>
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
                                      <?php if(count($cadeiraD3)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="D3"/>3</td>
                                      <?php }?>
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <?php if(count($cadeiraD8)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="D8"/>8</td>
                                      <?php }?>
                                      <?php if(count($cadeiraD9)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="D9"/>9</td>
                                      <?php }?>
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraD12)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="D12"/>12</td>
                                      <?php }?>
                                      <?php if(count($cadeiraD13)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="D13"/>13</td>
                                      <?php }?>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      
                                       <?php if(count($cadeiraD20)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="D20"/>20</td>
                                      <?php }?>
                                       <?php if(count($cadeiraD21)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="D21"/>21</td>
                                      <?php }?>
                                       <?php if(count($cadeiraD22)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="D22"/>22</td>
                                      <?php }?>
                                      <td class="number">D</td>
                                    </tr> 
                                   
                                    <tr>
                                      <td class="number">C</td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraC4)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="C4"/>4</td>
                                      <?php }?>
                                      <?php if(count($cadeiraC5)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="C5"/>5</td>
                                      <?php }?>
                                      
                                      
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
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
                                     
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                       <?php if(count($cadeiraC14)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="C14"/>14</td>
                                      <?php }?>
                                      <?php if(count($cadeiraC15)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="C15"/>15</td>
                                      <?php }?>
                                     <td class="white-space"></td>
                                     <td class="white-space"></td>
                                      <?php if(count($cadeiraC18)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="C18"/>18</td>
                                      <?php }?>
                                      <?php if(count($cadeiraC19)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="C19"/>19</td>
                                      <?php }?>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="number">C</td>
                                    </tr>
                                    <tr>
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
                                      <?php if(count($cadeiraB3)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="B3"/>3</td>
                                      <?php }?>
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraB11)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="B11"/>11</td>
                                      <?php }?>
                                      <?php if(count($cadeiraB12)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="B12"/>12</td>
                                      <?php }?>
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      
                                     
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      
                                       <?php if(count($cadeiraB20)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="B20"/>20</td>
                                      <?php }?>
                                       <?php if(count($cadeiraB21)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="B21"/>21</td>
                                      <?php }?>
                                       <?php if(count($cadeiraB22)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="B22"/>22</td>
                                      <?php }?>
                                      <td class="number">B</td>
                                    </tr> 
                                    <tr>
                                      <td class="number">A</td>
                                       <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraES1)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="whilechair"><span><i class="fa fa-wheelchair" aria-hidden="true"></i></span><input type="checkbox" name="cadeira[]" value="ES1"/></td>
                                      <?php }?>
                                      
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <?php if(count($cadeiraA8)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="A8"/>8</td>
                                      <?php }?>
                                      <?php if(count($cadeiraA9)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="A9"/>9</td>
                                      <?php }?>
                                      <?php if(count($cadeiraES2)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="whilechair"><span><i class="fa fa-wheelchair" aria-hidden="true"></i></span><input type="checkbox" name="cadeira[]" value="ES2"/></td>
                                      <?php }?>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                       <?php if(count($cadeiraES3)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="whilechair"><span><i class="fa fa-wheelchair" aria-hidden="true"></i></span><input type="checkbox" name="cadeira[]" value="ES3"/></td>
                                      <?php }?>
                                      <?php if(count($cadeiraA14)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="A14"/>14</td>
                                      <?php }?>
                                      <?php if(count($cadeiraA15)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="A15"/>15</td>
                                      <?php }?>
                                     
                                      
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                       <?php if(count($cadeiraES4)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="whilechair"><span><i class="fa fa-wheelchair" aria-hidden="true"></i></span><input type="checkbox" name="cadeira[]" value="ES4"/></td>
                                      <?php }?>
                                    
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                   
                                      <td class="number">A</td>
                                    </tr> 
                                    
                                  
                                  </tbody>
                                </table>
                              </div>
                              <div class="screen-button">
                                <a href="#">Tela de Cinema</a>
                              </div>
                            </div>
                            <a class="btn-default back-top topppbtn"  href="<?php echo SITE_URL;?>/entrada/<?php echo substr($horario_ingresso,0,2).substr($horario_ingresso,3,2);?>/<?php echo substr($data_ingresso,0,4).substr($data_ingresso,5,2).substr($data_ingresso,8,2);?>/<?php echo $descFilme[0]->url_amigavel;?>" style="padding-top: 6px;"><i class="fa fa-angle-left" aria-hidden="true"></i> Voltar</a>
                              <button class="btn-green done" type="submit">Proximo <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                            </form>
                            <?php }?>

                              <?php if(isset($_GET['id_sala']) && $_GET['id_sala'] == 2 && $_GET['id_cidade_sala'] == 2){?>
                              
                              <style>
                                    .seats .seats-table .table-responsive .table tbody tr td {
                                        width: 28px !important;
                                        height: 28px !important;
                                }

                              </style>
                            <form action="<?php echo SITE_URL;?>/entrada/3/<?php echo $descFilme[0]->url_amigavel;?>" name="form" method="POST">
                            <?php //var_dump($_POST);
                            
                            $cadeiraJ1 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'J1');
                            $cadeiraJ2 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'J2');
                            $cadeiraJ5 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'J5');
                            $cadeiraJ6 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'J6');
                            $cadeiraJ9 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'J9');
                            $cadeiraJ10 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'J10');
                            $cadeiraJ11 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'J11');
                            $cadeiraJ14 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'J14');
                            $cadeiraJ15 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'J15');
                            $cadeiraJ18 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'J18');
                            $cadeiraJ19 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'J19');
                            $cadeiraJ20 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'J20');

                            $cadeiraI3 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'I3');
                            $cadeiraI4 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'I4');
                            $cadeiraI7 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'I7');
                            $cadeiraI8 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'I8');
                            $cadeiraI13 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'I13');
                            $cadeiraI14 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'I14');
                            $cadeiraI18 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'I18');
                            $cadeiraI19 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'I19');

                            //echo "aqui: ".$cadeirasOcupadas->assento;

                            $cadeiraH1 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H1');
                            $cadeiraH2 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H2');
                            $cadeiraH5 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H5');
                            $cadeiraH6 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H6');
                            $cadeiraH9 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H9');
                            $cadeiraH10 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H10');
                            $cadeiraH11 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H11');
                            $cadeiraH12 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H12');
                            $cadeiraH15 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H15');
                            $cadeiraH16 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H16');
                            $cadeiraH17 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H17');

                            $cadeiraG3 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'G3');
                            $cadeiraG4 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'G4');
                            $cadeiraG7 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'G7');
                            $cadeiraG8 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'G8');
                            $cadeiraG13 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'G13');
                            $cadeiraG14 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'G14');
                            $cadeiraG18 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'G18');
                            $cadeiraG19 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'G19');

                            $cadeiraF1 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F1');
                            $cadeiraF2 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F2');
                            $cadeiraF5 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F5');
                            $cadeiraF6 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F6');
                            $cadeiraF9 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F9');
                            $cadeiraF10 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F10');
                            $cadeiraF11 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F11');
                            $cadeiraF12 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F12');
                            $cadeiraF15 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F15');
                            $cadeiraF16 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F16');
                            $cadeiraF17 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F17');

                            $cadeiraE3 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'E3');
                            $cadeiraE4 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'E4');
                            $cadeiraE7 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'E7');
                            $cadeiraE8 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'E8');
                            $cadeiraE13 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'E13');
                            $cadeiraE14 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'E14');
                            $cadeiraE18 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'E18');
                            $cadeiraE19 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'E19');

                            $cadeiraD1 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D1');
                            $cadeiraD2 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D2');
                            $cadeiraD5 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D5');
                            $cadeiraD6 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D6');
                            $cadeiraD9 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D9');
                            $cadeiraD10 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D10');
                            $cadeiraD11 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D11');
                            $cadeiraD12 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D12');
                            $cadeiraD15 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D15');
                            $cadeiraD16 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D16');
                            $cadeiraD17 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D17');

                            $cadeiraC3 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'C3');
                            $cadeiraC4 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'C4');
                            $cadeiraC7 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'C7');
                            $cadeiraC8 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'C8');
                            $cadeiraC13 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'C13');
                            $cadeiraC14 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'C14');
                            $cadeiraC18 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'C18');
                            $cadeiraC19 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'C19');

                            $cadeiraB1 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'B1');
                            $cadeiraB2 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'B2');
                            $cadeiraB5 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'B5');
                            $cadeiraB6 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'B6');
                            $cadeiraB9 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'B9');
                            $cadeiraB10 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'B10');
                            $cadeiraB11 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'B11');
                            $cadeiraB12 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'B12');
                            $cadeiraB15 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'B15');
                            $cadeiraB16 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'B16');
                            $cadeiraB17 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'B17');

                            $cadeiraA3 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'A3');
                            $cadeiraA4 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'A4');
                            $cadeiraA7 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'A7');
                            $cadeiraA8 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'A8');
                            $cadeiraA13 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'A13');
                            $cadeiraA18 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'A18');
                            $cadeiraA19 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'A19');
                            
                            $cadeiraES1 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'ES1');
                            $cadeiraES2 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'ES2');
                            
                            ?>
                            <div class="seats-table">
                              <div class="table-responsive">
                                <table class="table">
                                  <tbody> 
                                    <tr>
                                      <td class="number">J</td>
                                       <?php if(count($cadeiraJ1)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="J1"/>1</td>
                                      <?php }?>
                                       <?php if(count($cadeiraJ2)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="J2"/>2</td>
                                      <?php }?>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                       <?php if(count($cadeiraJ5)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="J5"/>5</td>
                                      <?php }?>
                                       <?php if(count($cadeiraJ6)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="J6"/>6</td>
                                      <?php }?>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                       <?php if(count($cadeiraJ9)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="J9"/>9</td>
                                      <?php }?>
                                      <?php if(count($cadeiraJ10)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="J10"/>10</td>
                                      <?php }?>
                                      <?php if(count($cadeiraJ11)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="J11"/>11</td>
                                      <?php }?>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraJ14)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="J14"/>14</td>
                                      <?php }?>
                                      
                                      <?php if(count($cadeiraJ15)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="J15"/>15</td>
                                      <?php }?>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraJ18)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="J18"/>18</td>
                                      <?php }?>
                                      <?php if(count($cadeiraJ19)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="J19"/>19</td>
                                      <?php }?>
                                      <?php if(count($cadeiraJ20)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="J20"/>20</td>
                                      <?php }?>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="number">J</td>
                                    </tr> 
                                    <tr>
                                      <td class="number">I</td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraI3)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="I3"/>3</td>
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
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                     
                                       <?php if(count($cadeiraI13)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="I13"/>13</td>
                                      <?php }?>
                                       <?php if(count($cadeiraI14)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="I14"/>14</td>
                                      <?php }?>
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraI18)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="I18"/>18</td>
                                      <?php }?>
                                       <?php if(count($cadeiraI19)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="I19"/>19</td>
                                      <?php }?>
                                      <td class="number">I</td>
                                    </tr> 
                                    <tr>
                                     
                                      <td class="number">H</td>
                                      <?php if(count($cadeiraH1)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" name="cadeira[]" value="H1"/>1</td>
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
                                      <?php if(count($cadeiraH9)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="H9"/>9</td>
                                      <?php }?>
                                      <?php if(count($cadeiraH10)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="H10"/>10</td>
                                      <?php }?>
                                      
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      
                                      <?php if(count($cadeiraH11)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="H11"/>11</td>
                                      <?php }?>
                                      <?php if(count($cadeiraH12)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="H12"/>12</td>
                                      <?php }?>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraH15)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="H15"/>15</td>
                                      <?php }?>
                                      <?php if(count($cadeiraH16)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="H16"/>16</td>
                                      <?php }?>
                                      <?php if(count($cadeiraH17)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="H17"/>17</td>
                                      <?php }?>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="number">H</td>
                                    </tr> 
                                    <tr>
                                      <td class="number">G</td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraG3)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="G3"/>3</td>
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
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                     
                                       <?php if(count($cadeiraG13)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="G13"/>13</td>
                                      <?php }?>
                                       <?php if(count($cadeiraG14)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="G14"/>14</td>
                                      <?php }?>
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraG18)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="G18"/>18</td>
                                      <?php }?>
                                       <?php if(count($cadeiraG19)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="G19"/>19</td>
                                      <?php }?>
                                      <td class="number">G</td>
                                    </tr> 
                                    <tr>
                                      <td class="number">F</td>
                                      <?php if(count($cadeiraF1)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" name="cadeira[]" value="F1"/>1</td>
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
                                      <?php if(count($cadeiraF9)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="F9"/>9</td>
                                      <?php }?>
                                      <?php if(count($cadeiraF10)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="F10"/>10</td>
                                      <?php }?>
                                      
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      
                                      <?php if(count($cadeiraF11)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="F11"/>11</td>
                                      <?php }?>
                                      <?php if(count($cadeiraF12)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="F12"/>12</td>
                                      <?php }?>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraF15)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="F15"/>15</td>
                                      <?php }?>
                                      <?php if(count($cadeiraF16)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="F16"/>16</td>
                                      <?php }?>
                                      <?php if(count($cadeiraF17)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="F17"/>17</td>
                                      <?php }?>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="number">F</td>
                                    </tr> 
                                   
                                    <tr>
                                      <td class="number">E</td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraE3)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="E3"/>3</td>
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
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                     
                                       <?php if(count($cadeiraE13)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="E13"/>13</td>
                                      <?php }?>
                                       <?php if(count($cadeiraE14)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="E14"/>14</td>
                                      <?php }?>
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraE18)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="E18"/>18</td>
                                      <?php }?>
                                       <?php if(count($cadeiraE19)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="E19"/>19</td>
                                      <?php }?>
                                      <td class="number">E</td>
                                    </tr> 
                                   
                                    <tr>
                                      
                                      <td class="number">D</td>
                                      <?php if(count($cadeiraD1)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" name="cadeira[]" value="D1"/>1</td>
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
                                      <?php if(count($cadeiraD9)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="D9"/>9</td>
                                      <?php }?>
                                      <?php if(count($cadeiraD10)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="D10"/>10</td>
                                      <?php }?>
                                      
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      
                                      <?php if(count($cadeiraD11)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="D11"/>11</td>
                                      <?php }?>
                                      <?php if(count($cadeiraD12)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="D12"/>12</td>
                                      <?php }?>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraD15)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="D15"/>15</td>
                                      <?php }?>
                                      <?php if(count($cadeiraD16)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="D16"/>16</td>
                                      <?php }?>
                                      <?php if(count($cadeiraD17)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="D17"/>17</td>
                                      <?php }?>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="number">D</td>
                                    </tr>
                                    <tr>
                                      
                                      <td class="number">C</td>
                                     <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraC3)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="C3"/>3</td>
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
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                     
                                       <?php if(count($cadeiraC13)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="C13"/>13</td>
                                      <?php }?>
                                       <?php if(count($cadeiraC14)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="C14"/>14</td>
                                      <?php }?>
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraC18)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="C18"/>18</td>
                                      <?php }?>
                                       <?php if(count($cadeiraC19)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="C19"/>19</td>
                                      <?php }?>
                                      <td class="number">C</td>
                                    </tr> 
                                    <tr>
                                      
                                      <td class="number">B</td>
                                      <?php if(count($cadeiraB1)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" name="cadeira[]" value="B1"/>1</td>
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
                                      <?php if(count($cadeiraB9)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="B9"/>9</td>
                                      <?php }?>
                                      <?php if(count($cadeiraB10)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="B10"/>10</td>
                                      <?php }?>
                                      
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      
                                      <?php if(count($cadeiraB11)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="B11"/>11</td>
                                      <?php }?>
                                      <?php if(count($cadeiraB12)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="B12"/>12</td>
                                      <?php }?>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraB15)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="B15"/>15</td>
                                      <?php }?>
                                      <?php if(count($cadeiraB16)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="B16"/>16</td>
                                      <?php }?>
                                      <?php if(count($cadeiraB17)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="B17"/>17</td>
                                      <?php }?>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="number">B</td>
                                    </tr> 

                                    <tr>
                                      <td class="number">A</td>
                                       <td class="unavailable click-seat"></td>
                                       <td class="unavailable click-seat"></td>
                                       <?php if(count($cadeiraA3)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="A3"/>3</td>
                                      <?php }?>
                                      <?php if(count($cadeiraA4)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="A4"/>4</td>
                                      <?php }?>
                                      <td class="white-space"></td>
                                       <?php if(count($cadeiraES1)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="whilechair"><span><i class="fa fa-wheelchair" aria-hidden="true"></i></span><input type="checkbox" name="cadeira[]" value="ES1"/></td>
                                      <?php }?>
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
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                       <?php if(count($cadeiraA13)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="A13"/>13</td>
                                      <?php }?>
                                      <td class="white-space"></td>
                                       <?php if(count($cadeiraES2)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="whilechair"><span><i class="fa fa-wheelchair" aria-hidden="true"></i></span><input type="checkbox" name="cadeira[]" value="ES2"/></td>
                                      <?php }?>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraA18)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="A18"/>18</td>
                                      <?php }?>
                                      <?php if(count($cadeiraA19)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="A19"/>19</td>
                                      <?php }?>
                                    
                                      <td class="number">A</td>
                                    </tr> 
                                  
                                  
                                  </tbody>
                                </table>
                              </div>
                              <div class="screen-button">
                                <a href="#">Tela de Cinema</a>
                              </div>
                            </div>
                            <a class="btn-default back-top topppbtn"  href="<?php echo SITE_URL;?>/entrada/<?php echo substr($horario_ingresso,0,2).substr($horario_ingresso,3,2);?>/<?php echo substr($data_ingresso,0,4).substr($data_ingresso,5,2).substr($data_ingresso,8,2);?>/<?php echo $descFilme[0]->url_amigavel;?>" style="padding-top: 6px;"><i class="fa fa-angle-left" aria-hidden="true"></i> Voltar</a>
                              <button class="btn-green done" type="submit">Proximo <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                            </form>
                            <?php }?>

                             <?php if(isset($_GET['id_sala']) && $_GET['id_sala'] == 5 && $_GET['id_cidade_sala'] == 2){?>
                           
                            <form action="<?php echo SITE_URL;?>/entrada/3/<?php echo $descFilme[0]->url_amigavel;?>" name="form" method="POST">
                            <?php //var_dump($_POST);
                            
                            
                            $cadeiraI3 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'I3');
                            $cadeiraI4 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'I4');
                            $cadeiraI8 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'I8');
                            $cadeiraI9 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'I9');
                            $cadeiraI12 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'I12');
                            $cadeiraI13 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'I13');
                            $cadeiraI16 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'I16');
                            $cadeiraI17 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'I17');

                            //echo "aqui: ".$cadeirasOcupadas->assento;

                            $cadeiraH1 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H1');
                            $cadeiraH2 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H2');
                            $cadeiraH5 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H5');
                            $cadeiraH6 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H6');
                            $cadeiraH7 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H7');
                            $cadeiraH10 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H10');
                            $cadeiraH11 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H11');
                            $cadeiraH14 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H14');
                            $cadeiraH15 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'H15');
                            
                            $cadeiraG3 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'G3');
                            $cadeiraG4 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'G4');
                            $cadeiraG12 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'G12');
                            $cadeiraG13 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'G13');
                            $cadeiraG16 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'G16');
                            $cadeiraG17 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'G17');
                            
                            $cadeiraF1 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F1');
                            $cadeiraF2 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F2');
                            $cadeiraF5 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F5');
                            $cadeiraF6 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F6');
                            $cadeiraF7 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F7');
                            $cadeiraF10 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F10');
                            $cadeiraF11 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F11');
                            $cadeiraF14 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F14');
                            $cadeiraF15 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'F15');

                            $cadeiraE3 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'E3');
                            $cadeiraE4 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'E4');
                            $cadeiraE12 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'E12');
                            $cadeiraE13 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'E13');
                            $cadeiraE16 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'E16');
                            $cadeiraE17 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'E17');

                            $cadeiraD1 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D1');
                            $cadeiraD2 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D2');
                            $cadeiraD5 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D5');
                            $cadeiraD6 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D6');
                            $cadeiraD7 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D7');
                            $cadeiraD10 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D10');
                            $cadeiraD11 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D11');
                            $cadeiraD14 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D14');
                            $cadeiraD15 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'D15');

                            $cadeiraC3 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'C3');
                            $cadeiraC4 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'C4');
                            $cadeiraC12 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'C12');
                            $cadeiraC13 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'C13');
                            $cadeiraC16 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'C16');
                            $cadeiraC17 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'C17');

                            $cadeiraB1 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'B1');
                            $cadeiraB2 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'B2');
                            $cadeiraB5 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'B5');
                            $cadeiraB6 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'B6');
                            $cadeiraB7 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'B7');
                            $cadeiraB10 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'B10');
                            $cadeiraB11 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'B11');
                            $cadeiraB14 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'B14');
                            $cadeiraB15 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'B15');

                            $cadeiraA3 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'A3');
                            $cadeiraA4 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'A4');
                            $cadeiraA12 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'A12');
                            $cadeiraA13 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'A13');
                            $cadeiraA16 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'A16');
                            $cadeiraA17 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'A17');
                            
                            $cadeiraES1 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'ES1');
                            $cadeiraES2 = $compras->rsDadosAssentos('', '', '', '', $descFilme[0]->id, $horario_ingresso, $data_ingresso, $_SESSION['id_cidade'], 'ES2');
                            
                            ?>
                            <div class="seats-table">
                              <div class="table-responsive">
                                <table class="table">
                                  <tbody> 
                                    
                                    <tr>
                                      <td class="number">I</td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraI3)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="I3"/>3</td>
                                      <?php }?>
                                      <?php if(count($cadeiraI4)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="I4"/>4</td>
                                      <?php }?>
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      
                                      <?php if(count($cadeiraI8)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="I8"/>8</td>
                                      <?php }?>
                                      <?php if(count($cadeiraI9)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="I9"/>9</td>
                                      <?php }?>
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      
                                      
                                      <?php if(count($cadeiraI12)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="I12"/>12</td>
                                      <?php }?>
                                       <?php if(count($cadeiraI13)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="I13"/>13</td>
                                      <?php }?>
                                      
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      
                                      <?php if(count($cadeiraI16)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="I16"/>16</td>
                                      <?php }?>
                                       <?php if(count($cadeiraI17)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="I17"/>17</td>
                                      <?php }?>
                                      <td class="number">I</td>
                                    </tr> 
                                    <tr>
                                     
                                      <td class="number">H</td>
                                      <?php if(count($cadeiraH1)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" name="cadeira[]" value="H1"/>1</td>
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
                                       <?php if(count($cadeiraH7)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="H7"/>7</td>
                                      <?php }?>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      
                                      
                                      <?php if(count($cadeiraH10)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="H10"/>10</td>
                                      <?php }?>
                                      <?php if(count($cadeiraH11)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="H11"/>11</td>
                                      <?php }?>
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                     <?php if(count($cadeiraH14)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="H14"/>14</td>
                                      <?php }?>
                                      <?php if(count($cadeiraH15)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="H15"/>15</td>
                                      <?php }?>
                                    
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="number">H</td>
                                    </tr> 
                                    <tr>
                                      <td class="number">G</td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraG3)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="G3"/>3</td>
                                      <?php }?>
                                      <?php if(count($cadeiraG4)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="G4"/>4</td>
                                      <?php }?>
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                        <?php if(count($cadeiraG12)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="G12"/>12</td>
                                      <?php }?>
                                     
                                       <?php if(count($cadeiraG13)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="G13"/>13</td>
                                      <?php }?>
                                     
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      
                                      <?php if(count($cadeiraG16)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="G16"/>16</td>
                                      <?php }?>
                                       <?php if(count($cadeiraG17)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="G17"/>17</td>
                                      <?php }?>
                                      <td class="number">G</td>
                                    </tr> 
                                    <tr>
                                      <td class="number">F</td>
                                     <?php if(count($cadeiraF1)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" name="cadeira[]" value="F1"/>1</td>
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
                                       <?php if(count($cadeiraF7)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="F7"/>7</td>
                                      <?php }?>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      
                                      
                                      <?php if(count($cadeiraF10)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="F10"/>10</td>
                                      <?php }?>
                                      <?php if(count($cadeiraF11)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="F11"/>11</td>
                                      <?php }?>
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                     <?php if(count($cadeiraF14)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="F14"/>14</td>
                                      <?php }?>
                                      <?php if(count($cadeiraF15)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="F15"/>15</td>
                                      <?php }?>
                                    
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="number">F</td>
                                    </tr> 
                                   
                                    <tr>
                                      <td class="number">E</td>
                                     <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraE3)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="E3"/>3</td>
                                      <?php }?>
                                      <?php if(count($cadeiraE4)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="E4"/>4</td>
                                      <?php }?>
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                        <?php if(count($cadeiraE12)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="E12"/>12</td>
                                      <?php }?>
                                     
                                       <?php if(count($cadeiraE13)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="E13"/>13</td>
                                      <?php }?>
                                     
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      
                                      <?php if(count($cadeiraE16)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="E16"/>16</td>
                                      <?php }?>
                                       <?php if(count($cadeiraE17)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="E17"/>17</td>
                                      <?php }?>
                                      <td class="number">E</td>
                                    </tr> 
                                   
                                    <tr>
                                      
                                      <td class="number">D</td>
                                     <?php if(count($cadeiraD1)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" name="cadeira[]" value="D1"/>1</td>
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
                                       <?php if(count($cadeiraD7)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="D7"/>7</td>
                                      <?php }?>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      
                                      
                                      <?php if(count($cadeiraD10)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="D10"/>10</td>
                                      <?php }?>
                                      <?php if(count($cadeiraD11)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="D11"/>11</td>
                                      <?php }?>
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                     <?php if(count($cadeiraD14)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="D14"/>14</td>
                                      <?php }?>
                                      <?php if(count($cadeiraD15)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="D15"/>15</td>
                                      <?php }?>
                                    
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="number">D</td>
                                    </tr>
                                    <tr>
                                      
                                      <td class="number">C</td>
                                    <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraC3)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="C3"/>3</td>
                                      <?php }?>
                                      <?php if(count($cadeiraC4)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="C4"/>4</td>
                                      <?php }?>
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                        <?php if(count($cadeiraC12)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="C12"/>12</td>
                                      <?php }?>
                                     
                                       <?php if(count($cadeiraC13)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="C13"/>13</td>
                                      <?php }?>
                                     
                                      
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      
                                      <?php if(count($cadeiraC16)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="C16"/>16</td>
                                      <?php }?>
                                       <?php if(count($cadeiraC17)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="C17"/>17</td>
                                      <?php }?>
                                      <td class="number">C</td>
                                    </tr> 
                                    <tr>
                                      
                                      <td class="number">B</td>
                                      <?php if(count($cadeiraB1)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" name="cadeira[]" value="B1"/>1</td>
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
                                       <?php if(count($cadeiraB7)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="B7"/>7</td>
                                      <?php }?>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      
                                      
                                      <?php if(count($cadeiraB10)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="B10"/>10</td>
                                      <?php }?>
                                      <?php if(count($cadeiraB11)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="B11"/>11</td>
                                      <?php }?>
                                      
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                     <?php if(count($cadeiraB14)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="B14"/>14</td>
                                      <?php }?>
                                      <?php if(count($cadeiraB15)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="B15"/>15</td>
                                      <?php }?>
                                    
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <td class="number">B</td>
                                    </tr> 

                                    <tr>
                                      <td class="number">A</td>
                                       <td class="unavailable click-seat"></td>
                                       <td class="unavailable click-seat"></td>
                                       <?php if(count($cadeiraA3)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="A3"/>3</td>
                                      <?php }?>
                                      <?php if(count($cadeiraA4)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="A4"/>4</td>
                                      <?php }?>
                                      <td class="white-space"></td>
                                       <?php if(count($cadeiraES1)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="whilechair"><span><i class="fa fa-wheelchair" aria-hidden="true"></i></span><input type="checkbox" name="cadeira[]" value="ES1"/></td>
                                      <?php }?>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <td class="white-space"></td>
                                      <?php if(count($cadeiraES2)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="whilechair"><span><i class="fa fa-wheelchair" aria-hidden="true"></i></span><input type="checkbox" name="cadeira[]" value="ES2"/></td>
                                      <?php }?>
                                      <td class="white-space"></td>
                                      
                                     
                                      
                                       <?php if(count($cadeiraA12)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="A12"/>12</td>
                                      <?php }?>
                                      <?php if(count($cadeiraA13)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="A13"/>13</td>
                                      <?php }?>
                                      <td class="unavailable click-seat"></td>
                                      <td class="unavailable click-seat"></td>
                                      <?php if(count($cadeiraA16)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="A16"/>16</td>
                                      <?php }?>
                                      <?php if(count($cadeiraA17)){?>
                                        <td class="selected-seat click-seat"></td>
                                      <?php }else{?>
                                        <td class="free-seat click-seat"><input type="checkbox" name="cadeira[]" value="A17"/>17</td>
                                      <?php }?>
                                    
                                      <td class="number">A</td>
                                    </tr> 
                                  
                                  
                                  </tbody>
                                </table>
                              </div>
                              <div class="screen-button">
                                <a href="#">Tela de Cinema</a>
                              </div>
                            </div>
                            <a class="btn-default back-top topppbtn"  href="<?php echo SITE_URL;?>/entrada/<?php echo substr($horario_ingresso,0,2).substr($horario_ingresso,3,2);?>/<?php echo substr($data_ingresso,0,4).substr($data_ingresso,5,2).substr($data_ingresso,8,2);?>/<?php echo $descFilme[0]->url_amigavel;?>" style="padding-top: 6px;"><i class="fa fa-angle-left" aria-hidden="true"></i> Voltar</a>
                              <button class="btn-green done" type="submit">Proximo <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                            </form>
                            <?php }?>