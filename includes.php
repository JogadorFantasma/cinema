<?php 
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


define('SITE_URL', 'https://'.$_SERVER['HTTP_HOST'].'/projetos/cinema');

$produtos_id = array();

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