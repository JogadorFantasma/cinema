<?php 
@session_start();
///Aqui fica a session cidade
if(!isset($_SESSION['id_cidade'])){
    $_SESSION['id_cidade'] = 1;
}
if(isset($_GET['select_cidade']) && !empty($_GET['select_cidade'])){
    $_SESSION['id_cidade'] = $_GET['select_cidade'];
}

include "Class/config.class.php";
$infoSistema = ConfigSistema::getInstance(Conexao::getInstance())->rsDados();

include "Class/metasTags.class.php";
$metastags = MetasTags::getInstance(Conexao::getInstance())->rsDados();

include "Class/filmes.class.php";
$filmes = Filmes::getInstance(Conexao::getInstance());

include "Class/produtos.class.php";
$produtos = Produtos::getInstance(Conexao::getInstance());

include "Class/categorias.class.php";
$categorias = Categorias::getInstance(Conexao::getInstance());

include "Class/banners.class.php";
$banners = Banners::getInstance(Conexao::getInstance());

include "Class/compras.class.php";
$compras = Compras::getInstance(Conexao::getInstance());

include "Class/clientes.class.php";
$clientes = Clientes::getInstance(Conexao::getInstance());

include "Class/cidades.class.php";
$cidades = Cidades::getInstance(Conexao::getInstance());


define('SITE_URL', 'https://'.$_SERVER['HTTP_HOST'].'/projects/cinema');

$produtos_id = array();
//session_destroy();
// checa se o botao do carrinho foi clicado

if(filter_input(INPUT_POST, 'addCarrinhoIngresso')){

    //Se existir ele deleta o existente para inserir novamente
    foreach($_SESSION['shopping_cart'] as $key => $pesquisandoSeExiste){
              if($pesquisandoSeExiste['id'] == 252525){
                  unset($_SESSION['shopping_cart'][$key]);
              }
              if($pesquisandoSeExiste['id'] == 252526){
                unset($_SESSION['shopping_cart'][$key]);
              }
              
            }
  
    if(isset($_SESSION['shopping_cart'])){
        //Mostra quantos produtos tem no carrinho
        $count = count($_SESSION['shopping_cart']);

        //Cria um array sequencial para ver se bate com o id do produto
        $produtos_id = array_column($_SESSION['shopping_cart'], 'id');
        //print_r($_POST);exit;

        if (filter_input(INPUT_POST, 'quantidade_ingresso_inteira') > 0){
            $_SESSION['shopping_cart'][$count] = array
            (
            'id' => 252525,
            'nome_produto' => "Ingresso Inteira",
            'valor_produto' => filter_input(INPUT_POST, 'valor_produto'),
            'quantidade_produto' => filter_input(INPUT_POST, 'quantidade_ingresso_inteira'),
            'imagem_produto' => filter_input(INPUT_POST, 'imagem_produto'),
            'id_filme' => filter_input(INPUT_POST, 'id_filme'),
            'data_filme' => filter_input(INPUT_POST, 'data_filme'),
            'hora_filme' => filter_input(INPUT_POST, 'hora_filme')
            );
        }
        if (filter_input(INPUT_POST, 'quantidade_ingresso_inteira') == 0 && filter_input(INPUT_POST, 'quantidade_ingresso_meia') > 0){
            $_SESSION['shopping_cart'][$count] = array
            (
            'id' => 252526,
            'nome_produto' => "Ingresso Meia",
            'valor_produto' => filter_input(INPUT_POST, 'valor_produto')/ 2,
            'quantidade_produto' => filter_input(INPUT_POST, 'quantidade_ingresso_meia'),
            'imagem_produto' => filter_input(INPUT_POST, 'imagem_produto'),
            'id_filme' => filter_input(INPUT_POST, 'id_filme'),
            'data_filme' => filter_input(INPUT_POST, 'data_filme'),
            'hora_filme' => filter_input(INPUT_POST, 'hora_filme')
            );
        }
        if (filter_input(INPUT_POST, 'quantidade_ingresso_inteira') > 0 && filter_input(INPUT_POST, 'quantidade_ingresso_meia') > 0){
            $_SESSION['shopping_cart'][$count+1] = array
            (
            'id' => 252526,
            'nome_produto' => "Ingresso Meia",
            'valor_produto' => filter_input(INPUT_POST, 'valor_produto')/ 2,
            'quantidade_produto' => filter_input(INPUT_POST, 'quantidade_ingresso_meia'),
            'imagem_produto' => filter_input(INPUT_POST, 'imagem_produto'),
            'id_filme' => filter_input(INPUT_POST, 'id_filme'),
            'data_filme' => filter_input(INPUT_POST, 'data_filme'),
            'hora_filme' => filter_input(INPUT_POST, 'hora_filme')
            );
        }
        
        $url = filter_input(INPUT_POST, 'url_filme');
        $url_site = SITE_URL;
        //print_r($produtos_id);
        echo "<script>window.location='$url_site/entrada/2/$url';</script>";
    }else{// caso nao tenha nada no carrinho, irá criar o primeiro produto no else
        if (filter_input(INPUT_POST, 'quantidade_ingresso_inteira') > 0){
        $_SESSION['shopping_cart'][0] = array(
            'id' => 252525,
            'nome_produto' => "Ingresso Inteira",
            'valor_produto' => filter_input(INPUT_POST, 'valor_produto'),
            'quantidade_produto' => filter_input(INPUT_POST, 'quantidade_ingresso_inteira'),
            'imagem_produto' => filter_input(INPUT_POST, 'imagem_produto'),
            'id_filme' => filter_input(INPUT_POST, 'id_filme'),
            'data_filme' => filter_input(INPUT_POST, 'data_filme'),
            'hora_filme' => filter_input(INPUT_POST, 'hora_filme')
        );
        }
        if (filter_input(INPUT_POST, 'quantidade_ingresso_inteira') == 0 && filter_input(INPUT_POST, 'quantidade_ingresso_meia') > 0){
        $_SESSION['shopping_cart'][0] = array(
            'id' => 252526,
            'nome_produto' => "Ingresso Meia",
            'valor_produto' => filter_input(INPUT_POST, 'valor_produto')/ 2,
            'quantidade_produto' => filter_input(INPUT_POST, 'quantidade_ingresso_meia'),
            'imagem_produto' => filter_input(INPUT_POST, 'imagem_produto'),
            'id_filme' => filter_input(INPUT_POST, 'id_filme'),
            'data_filme' => filter_input(INPUT_POST, 'data_filme'),
            'hora_filme' => filter_input(INPUT_POST, 'hora_filme')
        );
        }
        if (filter_input(INPUT_POST, 'quantidade_ingresso_inteira') > 0 && filter_input(INPUT_POST, 'quantidade_ingresso_meia') > 0){
        $_SESSION['shopping_cart'][1] = array(
            'id' => 252526,
            'nome_produto' => "Ingresso Meia",
            'valor_produto' => filter_input(INPUT_POST, 'valor_produto')/ 2,
            'quantidade_produto' => filter_input(INPUT_POST, 'quantidade_ingresso_meia'),
            'imagem_produto' => filter_input(INPUT_POST, 'imagem_produto'),
            'id_filme' => filter_input(INPUT_POST, 'id_filme'),
            'data_filme' => filter_input(INPUT_POST, 'data_filme'),
            'hora_filme' => filter_input(INPUT_POST, 'hora_filme')
        );
        }
 $url = filter_input(INPUT_POST, 'url_filme');
 $url_site = SITE_URL;
        echo "<script>window.location='$url_site/entrada/2/$url';</script>";
    }
    //pre_r($_SESSION);
}


// checa se o botao do carrinho foi clicado
if(filter_input(INPUT_POST, 'addCarrinho')){
    if(isset($_SESSION['shopping_cart'])){
        //Mostra quantos produtos tem no carrinho
        $count = count($_SESSION['shopping_cart']);

        //Cria um array sequencial para ver se bate com o id do produto
        $produtos_id = array_column($_SESSION['shopping_cart'], 'id');

        if (!in_array(filter_input(INPUT_GET, 'id'), $produtos_id)){
            $_SESSION['shopping_cart'][$count] = array
            (
            'id' => filter_input(INPUT_GET, 'id'),
            'nome_produto' => filter_input(INPUT_POST, 'nome_produto'),
            'valor_produto' => filter_input(INPUT_POST, 'valor_produto'),
            'quantidade_produto' => filter_input(INPUT_POST, 'quantidade_produto'),
            'imagem_produto' => filter_input(INPUT_POST, 'imagem_produto')
            );
        }else{
            //Bate se o produto foi ja inserido no carrinho
            for($i=0; $i < count($produtos_id); $i++){
                if($produtos_id[$i] == filter_input(INPUT_GET, 'id'))
                {
                    //Adiciona mais uma quantidade no produto existente
                    $_SESSION['shopping_cart'][$i]['quantidade_produto'] += filter_input(INPUT_POST, 'quantidade_produto');
                }
            }
        }
        //print_r($produtos_id);
    }else{// caso nao tenha nada no carrinho, irá criar o primeiro produto no else
        $_SESSION['shopping_cart'][0] = array(
            'id' => filter_input(INPUT_GET, 'id'),
            'nome_produto' => filter_input(INPUT_POST, 'nome_produto'),
            'valor_produto' => filter_input(INPUT_POST, 'valor_produto'),
            'quantidade_produto' => filter_input(INPUT_POST, 'quantidade_produto'),
            'imagem_produto' => filter_input(INPUT_POST, 'imagem_produto')
        );
    }
    //pre_r($_SESSION);
}
if(filter_input(INPUT_GET, 'action') == 'delete'){
    foreach($_SESSION['shopping_cart'] as $key => $products){
        if($products['id'] == filter_input(INPUT_GET, 'id')){
            unset($_SESSION['shopping_cart'][$key]);
        }
    }
    $_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']);
}
?>