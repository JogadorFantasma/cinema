 <?php 
 require_once "../funcoes.php";?>
 
                                                <div class="form-froup">
                                                    <label for="Escolha Data">Escolha Data</label>
 <select class="form-control" onchange="AtualizaJanela('inc-horario-filmes.php?data='+this.value+'&id_cidade=<?php echo $_GET['id_cidade'];?>', 'Filmes');">
                            <option value="">Selecione</option>
                            <?php 
                            $datas = render(date('Y-m-d'));
                            foreach($datas as $data){ ?>
                            <option value="<?php echo $data;?>">
                                <?php echo diasemana($data)." - ".formataData($data);?></option>
                            <?php }?>

                        </select>
                                                </div>
 