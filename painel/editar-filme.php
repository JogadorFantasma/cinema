<?php include "verifica.php";
$id = '';
if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        header('Location: filmes.php');
    }else{
        $id = $_GET['id'];        
    }
}
$filmes->editar();
$editaFilme = $filmes->rsDados($id);
$puxaProgramacoes = $filmes->rsDadosProgramacao('', '', '', $id);
$puxaSalas = $filmes->rsDadosSalas();
?>
<!DOCTYPE html>
<html dir="ltr" lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Adriano Monteiro">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/hoogli_logo.svg">
    <title>Painel Hoogli - Editar Filme</title>
    <link href="dist/css/style.min.css" rel="stylesheet">
</head>
<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
       <?php include "header.php";?>
       <?php include "inc-menu-lateral.php";?>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Editar Filme</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="." class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page"><a href="filmes.php" class="text-muted">Filmes</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                
                                <ul class="nav nav-tabs mb-3">
                                    <li class="nav-item">
                                        <a href="#home1" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                            <i class="mdi mdi-home-variant d-lg-none d-block mr-1"></i>
                                            <span class="d-none d-lg-block">Descrição</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#profile1" data-toggle="tab" aria-expanded="true" class="nav-link">
                                            <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                                            <span class="d-none d-lg-block">Programação</span>
                                        </a>
                                    </li>
                                   
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane show active" id="home1">
                                        <form method="POST" enctype="multipart/form-data">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                               
                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Ativo</label>
                                        <select class="custom-select mr-sm-2" name="ativo" id="inlineFormCustomSelect">
                                            <option value="S" <?php if(isset($editaFilme->ativo) && $editaFilme->ativo == 'S'){ echo "selected";}?>>Sim</option>
                                            <option value="N" <?php if(isset($editaFilme->ativo) && $editaFilme->ativo == 'N'){ echo "selected";}?>>Não</option>
                                        </select>                                  
                                                </div>
                                            </div>
                                           <!--  <div class="col-md-2">
                                                <div class="form-group">
                                               
                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Destaque</label>
                                        <select class="custom-select mr-sm-2" name="destaque" id="inlineFormCustomSelect">
                                            <option value="S" <?php if(isset($editaFilme->destaque) && $editaFilme->destaque == 'S'){ echo "selected";}?>>Sim</option>
                                            <option value="N" <?php if(isset($editaFilme->destaque) && $editaFilme->destaque == 'N'){ echo "selected";}?>>Não</option>
                                        </select>                                  
                                                </div>
                                            </div> -->
                                        </div>
                                        <div class="row">
                                          
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="titulo" value="<?php if(isset($editaFilme->titulo) && !empty($editaFilme->titulo)){ echo $editaFilme->titulo;}?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Duração</label>
                                                    <input type="text" class="form-control" name="duracao" value="<?php if(isset($editaFilme->duracao) && !empty($editaFilme->duracao)){ echo $editaFilme->duracao;}?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Imagem</label>
                                                    <input type="file" name="imagem" class="form-control" >
                                                </div>
                                            </div>
                                        </div>
                                      <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Descrição</label>
                                                   <textarea name="descricao" class="form-control" id="" cols="30" rows="4"><?php if(isset($editaFilme->descricao) && !empty($editaFilme->descricao)){ echo $editaFilme->descricao;}?></textarea>
                                                </div>
                                            </div>                                        
                                        </div>
                                        <br>
                                        <h4 class="card-title">Metas Tags</h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Meta Title</label>
                                                    <input type="text" class="form-control" name="meta_title" value="<?php if(isset($editaFilme->meta_title) && !empty($editaFilme->meta_title)){ echo $editaFilme->meta_title;}?>">
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Meta Keywords</label>
                                                    <input type="text" class="form-control" name="meta_keywords" value="<?php if(isset($editaFilme->meta_keywords) && !empty($editaFilme->meta_keywords)){ echo $editaFilme->meta_keywords;}?>">
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Meta Description</label>
                                                   <textarea name="meta_description" class="form-control" id="" cols="30" rows="4"><?php if(isset($editaFilme->meta_description) && !empty($editaFilme->meta_description)){ echo $editaFilme->meta_description;}?></textarea>
                                                </div>
                                            </div>                                        
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info">Salvar</button>
                                           <!--  <button type="reset" class="btn btn-dark">Resetar</button> -->
                                        </div>
                                    </div>
                                    <input type="hidden" name="acao" value="editaFilme">
                                    <input type="hidden" name="imagem_Atual" value="<?php echo $editaFilme->imagem;?>">
                                    <input type="hidden" name="id" value="<?php echo $editaFilme->id;?>">
                                </form>
                                    </div>
                                    <div class="tab-pane" id="profile1">
                                        <form method="post" action="">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="row" id="row">
                                                    <div class="col-md-3">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Data</label>
                                                    <input type="date" class="form-control" name="data_exibicao[]">
                                                    </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Hora</label>
                                                    <input type="time" class="form-control" name="hora_exibicao[]">
                                                    </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Sala</label>
                                                    <select  class="form-control" name="id_sala[]">
                                                    <?php foreach($puxaSalas as $sala){?>
                                                    <option value="<?php echo $sala->id;?>"><?php echo $sala->titulo;?></option>
                                                    <?php }?>
                                                    </select>
                                                    </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Valor</label>
                                                    <input type="text" class="form-control" name="valor[]">
                                                    </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Ação</label>
                                                    <input id="removeRow" type="button" class="btn btn-danger form-control" value="Remover" />
                                                    </div>
                                                    </div>
                                                    </div>

                                                    <div id="newRow"></div>
                                                    <button id="addRow" type="button" class="btn btn-info">Add Programação</button>
                                                    <button type="submit" class="btn btn-warning" >Salvar</button>
                                                </div>
                                            </div>
                                            <input type="hidden" name="id_filme" value="<?php echo $id;?>">
                                            <input type="hidden" name="acao" value="addProgramacao">
                                        </form>
                                        <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>Data</th>
                                                <th>Hora</th>
                                                <th>Sala</th>
                                                <th>Preço</th>
                                                <th>Opções</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            if(count($puxaProgramacoes) > 0){
                                            foreach($puxaProgramacoes as $programacao){?>
                                            <tr>
                                                <td><?php echo formataData($programacao->data_exibicao);?></td>
                                                <td><?php echo $programacao->hora_exibicao;?></td>
                                                <td><?php echo $programacao->id_sala;?></td>
                                                <td><?php echo number_format($programacao->valor,2,',','.');?></td>
                                                <td>
                                                    <a href="editar-filme.php?id=<?php echo $programacao->id;?>" class="btn btn-success btn-circle"><i class="fas fa-pencil-alt"></i></a>
                                                    <a href="editar-filme.php?id=<?php echo $programacao->id_filme;?>&id_programacao=<?php echo $programacao->id;?>&acao=excluirProgramacao" class="btn btn-warning btn-circle"><i class="fa fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <?php } }?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Data</th>
                                                <th>Hora</th>
                                                <th>Sala</th>
                                                <th>Preço</th>
                                                <th>Opções</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                    </div>
                                  
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
           <?php include "footer.php";?>
        </div>
    </div>
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <script src="dist/js/sidebarmenu.js"></script>
    <script src="dist/js/custom.min.js"></script>
    <script src="assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="dist/js/pages/datatable/datatable-basic.init.js"></script>
  
    <script type="text/javascript">
    // add row
    $("#addRow").click(function () {
        var html = '';
        html += '<div class="row" id="row">';
        html += '<div class="col-md-3">';
        html += '<div class="form-group">';
        html += '<label class="mr-sm-2" for="">Data</label>';
        html += '<input type="date" class="form-control" name="data_exibicao[]">';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-md-3">';
        html += '<div class="form-group">';
        html += '<label class="mr-sm-2" for="">Hora</label>';
        html += '<input type="time" class="form-control" name="hora_exibicao[]">';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-md-2">';
        html += '<div class="form-group">';
        html += '<label class="mr-sm-2" for="">Sala</label>';
        html += '<select  class="form-control" name="id_sala[]">';
        <?php foreach($puxaSalas as $sala){?>
        html += '<option value="<?php echo $sala->id;?>"><?php echo $sala->titulo;?></option>';
        <?php }?>
        html += '</select>';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-md-2">';
        html += '<div class="form-group">';
        html += '<label class="mr-sm-2" for="">Valor</label>';
        html += '<input type="text" class="form-control" name="valor[]">';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-md-2">';
        html += '<div class="form-group">';
        html += '<label class="mr-sm-2" for="">Ação</label>';
        html += '<input id="removeRow" type="button" class="btn btn-danger form-control" value="Remover" />'; 
        html += '</div>';
        html += '</div>';
        html += '</div>';

        $('#newRow').append(html);
    });

    // remove row
    $(document).on('click', '#removeRow', function () {
        $(this).closest('#row').remove();
    });
</script>

                                          
                                           
                                             
                                                <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="titulo"  >
                                                </div>
                                           
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Duração</label>
                                                    <input type="text" class="form-control" name="duracao" value="<?php if(isset($editaFilme->duracao) && !empty($editaFilme->duracao)){ echo $editaFilme->duracao;}?>" >
                                                </div>
                                            </div>
                                        
</body>
</html>