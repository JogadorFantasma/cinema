<?php 
$ApisCielosInstanciada = '';
if(empty($ApisCielosInstanciada)) {
	if(file_exists('Connection/conexao.php')) {
		require_once('Connection/con-pdo.php');
		require_once('funcoes.php');
	} else {
		require_once('../Connection/con-pdo.php');
		require_once('../funcoes.php');
	}
	
	class ApisCielos {
        private $pdo = null;  

		private static $ApisCielos = null; 
	
		private function __construct($conexao){  
			$this->pdo = $conexao;  
		}
		
		public static function getInstance($conexao){   
			if (!isset(self::$ApisCielos)):    
				self::$ApisCielos = new ApisCielos($conexao);   
			endif;
			return self::$ApisCielos;    
		}

        function crediCardMinimo(){
    //Puxa as chaves gravadas no banco
    try{   
        $sql = "SELECT * FROM tbl_config where 1=1 and id = 1 ";
        $stm = $this->pdo->prepare($sql);
        $stm->execute();   
        $rsConfig = $stm->fetchAll(PDO::FETCH_OBJ);

    } catch(PDOException $erro){   
        echo $erro->getLine(); 
    }

    $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.cieloecommerce.cielo.com.br/1/sales",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS =>"{\r\n   \"MerchantOrderId\":\"2014111703\",\r\n   \"Payment\":{\r\n     \"Type\":\"CreditCard\",\r\n     \"Amount\":15700,\r\n     \"Installments\":1,\r\n     \"SoftDescriptor\":\"123456789ABCD\",\r\n     \"CreditCard\":{\r\n         \"CardNumber\":\"4551870000000183\",\r\n         \"Holder\":\"Teste Holder\",\r\n         \"ExpirationDate\":\"12/2021\",\r\n         \"SecurityCode\":\"123\",\r\n         \"Brand\":\"Visa\"\r\n     }\r\n   }\r\n}",
  CURLOPT_HTTPHEADER => array(
    "MerchantId: {$rsConfig[0]->merchant_id_cielo}",
    "Content-Type: application/json",
    "MerchantKey: {$rsConfig[0]->merchant_key_cielo}"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
}

function credCardAutenticado(){
  if(isset($_POST['acao']) && $_POST['acao'] == 'pagamentoCartaoCredito'){


    $nome = filter_input(INPUT_POST, 'senderName', FILTER_SANITIZE_STRING);
    $cpf = filter_input(INPUT_POST, 'senderCPF', FILTER_SANITIZE_STRING);
    $nome_cartao = filter_input(INPUT_POST, 'creditCardHolderName', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'senderEmail', FILTER_SANITIZE_STRING);
    $telefone = filter_input(INPUT_POST, 'senderPhone', FILTER_SANITIZE_STRING);
    $valor = number_format(filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_STRING),2,',','.');
    $numero_cartao = filter_input(INPUT_POST, 'cardNumber', FILTER_SANITIZE_STRING);
    $data_validade = filter_input(INPUT_POST, 'mesVencimento', FILTER_SANITIZE_STRING)."/".filter_input(INPUT_POST, 'anoVencimento', FILTER_SANITIZE_STRING);
    $codigo_seguranca = filter_input(INPUT_POST, 'codigo_seguranca', FILTER_SANITIZE_STRING);
    $bandeira = obterBandeira($numero_cartao);
    $data_transacao = date('Y-m-d');
    $hora_transacao = date('H:i:s');
    
    // Verificar se já existe cliente cadastrado:
				 $sql = "SELECT * FROM tbl_cliente where email = ?";
				 $stm = $this->pdo->prepare($sql);
				 $stm->bindValue(1, $email);			
				 $stm->execute();  
         $idCliente1 = $stm->fetchAll(PDO::FETCH_OBJ);
				
				 if(count($idCliente1) > 0) {
				 	$id_cliente = $idCliente1[0]->id;
          //echo "aqui: ".$idCliente1[0]->id;exit;
				 } else {
            $sql = "INSERT INTO tbl_cliente (nome, email, telefone, cpf) VALUES (?, ?, ?, ?)";
						$stm = $this->pdo->prepare($sql);
						$stm->bindValue(1, $nome);
						$stm->bindValue(2, $email);
						$stm->bindValue(3, $telefone);
            $stm->bindValue(4, $cpf);
						$stm->execute(); 
						$idCliente = $this->pdo->lastInsertId();
            $id_cliente = $idCliente;
         }

         // Insere nova compra
         $sql = "INSERT INTO tbl_compras (id_cliente, valor, data_transacao, hora_transacao, bandeira, forma_pagamento, id_cidade) VALUES (?, ?, ?, ?, ?, ?, ?)";   
						$stm = $this->pdo->prepare($sql);   
						$stm->bindValue(1, $id_cliente);
            $stm->bindValue(2, valorCalculavel($valor));
            $stm->bindValue(3, $data_transacao);
            $stm->bindValue(4, $hora_transacao);
            $stm->bindValue(5, $bandeira);
            $stm->bindValue(6, "CRE");
            $stm->bindValue(7, $_SESSION['id_cidade']);
						$stm->execute(); 
						$idCompra = $this->pdo->lastInsertId();

            foreach($_SESSION['shopping_cart'] as $key => $produto_carrinho){
                // Insere novos produtos na compra
         $sql = "INSERT INTO tbl_relaciona_compras (id_produto, id_compra, valor_produto, id_filme, data_filme, hora_filme, id_cliente, quantidade_produto, id_sala, id_cidade) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";   
						$stm = $this->pdo->prepare($sql);   
						$stm->bindValue(1, $produto_carrinho['id']);
            $stm->bindValue(2, $idCompra);
            $stm->bindValue(3, valorCalculavel($produto_carrinho['valor_produto']));
            $stm->bindValue(4, $produto_carrinho['id_filme']);
            $stm->bindValue(5, $produto_carrinho['data_filme']);
            $stm->bindValue(6, $produto_carrinho['hora_filme']);
            $stm->bindValue(7, $id_cliente);
            $stm->bindValue(8, $produto_carrinho['quantidade_produto']);
            $stm->bindValue(9, $produto_carrinho['id_sala']);
            $stm->bindValue(10, $_SESSION['id_cidade']);
						$stm->execute(); 
						
            }

            foreach($_SESSION['escolha_cadeira'] as $key => $assentos){
                // Insere novos produtos na compra
         $sql = "INSERT INTO tbl_relaciona_cadeiras (id_compra, id_filme, data_filme, hora_filme, id_cliente, assento, id_cidade, id_sala) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";   
						$stm = $this->pdo->prepare($sql);   
						$stm->bindValue(1, $idCompra);
            $stm->bindValue(2, $assentos['id_filme']);
            $stm->bindValue(3, $assentos['data_filme']);
            $stm->bindValue(4, $assentos['hora_filme']);
            $stm->bindValue(5, $id_cliente);
            $stm->bindValue(6, $assentos['assento']);
            $stm->bindValue(7, $assentos['id_cidade']);
            $stm->bindValue(8, $assentos['id_sala']);
						$stm->execute(); 
						
            }

    //Puxa as chaves gravadas no banco
    try{   
        $sql = "SELECT * FROM tbl_config where 1=1 and id = 1 ";
        $stm = $this->pdo->prepare($sql);
        $stm->execute();   
        $rsConfig = $stm->fetchAll(PDO::FETCH_OBJ);

    } catch(PDOException $erro){   
        echo $erro->getLine(); 
    }
    $valor = str_replace(",","",str_replace(".","",$valor));
    if(isset($_SESSION['id_cidade']) && $_SESSION['id_cidade'] == 5){
      //barreiras
      $merchant_id_cielo = '3ca6195a-411c-4322-8c8e-917bc6ad1ccc';
      $merchant_key_cielo = 'y6boiTmvpB5aVHQ688cERKB9PnZPc6OpGe3QEUc9';
    }
    if(isset($_SESSION['id_cidade']) && $_SESSION['id_cidade'] == 1){
      //formosa
      $merchant_id_cielo = 'aea32023-70dd-4e30-a51b-4e9d5693326a';
      $merchant_key_cielo = 'uDc0wlALfukd2KsMdY4U73MoBNtyqCrKgGbQBifb';
    }
    if(isset($_SESSION['id_cidade']) && $_SESSION['id_cidade'] == 2){
      //lem
      $merchant_id_cielo = 'd292d4b9-a8b1-420e-99c3-d2bea566d926';
      $merchant_key_cielo = 'qNodGohHeBETZxyOnrdkxqnAmaDLWpxaD9odIU34';
    }
    if(isset($_SESSION['id_cidade']) && $_SESSION['id_cidade'] == 4){
      //sobradinho
      $merchant_id_cielo = '11fcefd0-f8df-4afc-9531-26c64f28549a';
      $merchant_key_cielo = 'B041YxRoW1ofjjPONItlCzpULDbl2FSerdulvAlr';
    }
    if(empty($_SESSION['id_cidade'])){
      //sobradinho
      $merchant_id_cielo = $rsConfig[0]->merchant_id_cielo;
      $merchant_key_cielo = $rsConfig[0]->merchant_key_cielo;
    }
    $curl = curl_init();

   

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.cieloecommerce.cielo.com.br/1/sales",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS =>"{ \n  \"MerchantOrderId\":\"$idCompra\", \n  \"Customer\":\n  { \n    \"Name\":\"$nome\" \n  }, \n  \"Payment\":\n  { \n      \"Type\":\"CreditCard\", \n      \"Amount\":$valor, \n      \"Provider\":\"Cielo\",\n      \"ReturnUrl\":\"https://www.google.com.br\",\n      \"Installments\":1, \n      \"Authenticate\":true,\n      \"CreditCard\":\n      { \n        \"CardNumber\":\"$numero_cartao\", \n        \"Holder\":\"$nome_cartao\", \n        \"ExpirationDate\":\"$data_validade\", \n        \"SecurityCode\":\"$codigo_seguranca\", \n        \"Brand\":\"$bandeira\" \n      } \n  } \n}",
  CURLOPT_HTTPHEADER => array(
    "MerchantId: {$merchant_id_cielo}",
    "Content-Type: application/json",
    "MerchantKey: {$merchant_key_cielo}"
  ),
));

$response = json_decode(curl_exec($curl));

curl_close($curl);
//return($response);
//echo count($response);exit;


$puxaDados = $response->Payment;
$codico_retorno = $puxaDados->ReturnCode;
$id_pagamento = $puxaDados->PaymentId;

try { 
					$sql = "UPDATE tbl_compras SET status_compra=?, id_pagamento=? WHERE id=?";   
					$stm = $this->pdo->prepare($sql);   
					$stm->bindValue(1, $codico_retorno);   
					$stm->bindValue(2, $id_pagamento);
					$stm->bindValue(3, $idCompra);   
					$stm->execute(); 
				} catch(PDOException $erro){
					echo $erro->getMessage(); 
				}

        echo "<script>window.location='confirmacao/{$idCompra}';</script>";
  }
}

function credCardCompleto(){
    //Puxa as chaves gravadas no banco
    try{   
        $sql = "SELECT * FROM tbl_config where 1=1 and id = 1 ";
        $stm = $this->pdo->prepare($sql);
        $stm->execute();   
        $rsConfig = $stm->fetchAll(PDO::FETCH_OBJ);

    } catch(PDOException $erro){   
        echo $erro->getLine(); 
    }

    $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.cieloecommerce.cielo.com.br/1/sales",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS =>"{  \r\n   \"MerchantOrderId\":\"2014111701\",\r\n    \"Customer\":{  \r\n      \"Name\":\"Comprador Teste\",\r\n      \"Identity\":\"11225468954\",\r\n      \"IdentityType\":\"CPF\",\r\n      \"Email\":\"compradorteste@teste.com\",\r\n      \"Birthdate\":\"1991-01-02\",\r\n      \"Address\":{  \r\n         \"Street\":\"Rua Teste\",\r\n         \"Number\":\"123\",\r\n         \"Complement\":\"AP 123\",\r\n         \"ZipCode\":\"12345987\",\r\n         \"City\":\"Rio de Janeiro\",\r\n         \"State\":\"RJ\",\r\n         \"Country\":\"BRA\"\r\n      },\r\n        \"DeliveryAddress\": {\r\n            \"Street\": \"Rua Teste\",\r\n            \"Number\": \"123\",\r\n            \"Complement\": \"AP 123\",\r\n            \"ZipCode\": \"12345987\",\r\n            \"City\": \"Rio de Janeiro\",\r\n            \"State\": \"RJ\",\r\n            \"Country\": \"BRA\"\r\n        }\r\n   },\r\n   \"Payment\":{  \r\n     \"Type\":\"CreditCard\",\r\n     \"Amount\":15700,\r\n     \"Currency\":\"BRL\",\r\n     \"Country\":\"BRA\",\r\n     \"Provider\":\"Simulado\",\r\n     \"ServiceTaxAmount\":0,\r\n     \"Installments\":1,\r\n     \"Interest\":\"ByMerchant\",\r\n     \"Capture\":false,\r\n     \"Authenticate\":false,    \r\n     \"Recurrent\": false,\r\n     \"SoftDescriptor\":\"123456789ABCD\",\r\n     \"CreditCard\":{  \r\n         \"CardNumber\":\"4024007197692931\",\r\n         \"Holder\":\"Teste Holder\",\r\n         \"ExpirationDate\":\"12/2021\",\r\n         \"SecurityCode\":\"123\",\r\n         \"SaveCard\":\"false\",\r\n         \"Brand\":\"Visa\"\r\n     }\r\n   }\r\n}",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json",
    "MerchantId: {$rsConfig[0]->merchant_id_cielo}",
    "MerchantKey: {$rsConfig[0]->merchant_key_cielo}"
  ),
));

$response = json_decode(curl_exec($curl), true);

curl_close($curl);
return($response);
//echo $response;
echo "aqui2: ".$response['Payment'];
}

function debitoCard(){
  if(isset($_POST['acao']) && $_POST['acao'] == 'pagamentoCartaoDebito'){
    $nome = filter_input(INPUT_POST, 'senderName', FILTER_SANITIZE_STRING);
    $cpf = filter_input(INPUT_POST, 'senderCPF', FILTER_SANITIZE_STRING);
    $nome_cartao = filter_input(INPUT_POST, 'creditCardHolderName', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'senderEmail', FILTER_SANITIZE_STRING);
    $telefone = filter_input(INPUT_POST, 'senderPhone', FILTER_SANITIZE_STRING);
    $valor = number_format(filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_STRING),2,',','.');
    $numero_cartao = filter_input(INPUT_POST, 'cardNumber', FILTER_SANITIZE_STRING);
    $data_validade = filter_input(INPUT_POST, 'mesVencimento', FILTER_SANITIZE_STRING)."/".filter_input(INPUT_POST, 'anoVencimento', FILTER_SANITIZE_STRING);
    $codigo_seguranca = filter_input(INPUT_POST, 'codigo_seguranca', FILTER_SANITIZE_STRING);
    $bandeira = obterBandeira($numero_cartao);
    $data_transacao = date('Y-m-d');
    $hora_transacao = date('H:i:s');
    
    // Verificar se já existe cliente cadastrado:
				 $sql = "SELECT * FROM tbl_cliente where email = ?";
				 $stm = $this->pdo->prepare($sql);
				 $stm->bindValue(1, $email);			
				 $stm->execute();  
         $idCliente1 = $stm->fetchAll(PDO::FETCH_OBJ);
				
				 if(count($idCliente1) > 0) {
				 	$id_cliente = $idCliente1[0]->id;
          //echo "aqui: ".$idCliente1[0]->id;exit;
				 } else {
            $sql = "INSERT INTO tbl_cliente (nome, email, telefone, cpf) VALUES (?, ?, ?, ?)";
						$stm = $this->pdo->prepare($sql);
						$stm->bindValue(1, $nome);
						$stm->bindValue(2, $email);
						$stm->bindValue(3, $telefone);
            $stm->bindValue(4, $cpf);
						$stm->execute(); 
						$idCliente = $this->pdo->lastInsertId();
            $id_cliente = $idCliente;
         }

         // Insere nova compra
         $sql = "INSERT INTO tbl_compras (id_cliente, valor, data_transacao, hora_transacao, bandeira, forma_pagamento, id_cidade) VALUES (?, ?, ?, ?, ?, ?, ?)";   
						$stm = $this->pdo->prepare($sql);   
						$stm->bindValue(1, $id_cliente);
            $stm->bindValue(2, valorCalculavel($valor));
            $stm->bindValue(3, $data_transacao);
            $stm->bindValue(4, $hora_transacao);
            $stm->bindValue(5, $bandeira);
            $stm->bindValue(6, "CRE");
            $stm->bindValue(7, $_SESSION['id_cidade']);
						$stm->execute(); 
						$idCompra = $this->pdo->lastInsertId();

            foreach($_SESSION['shopping_cart'] as $key => $produto_carrinho){
                // Insere novos produtos na compra
         $sql = "INSERT INTO tbl_relaciona_compras (id_produto, id_compra, valor_produto, id_filme, data_filme, hora_filme, id_cliente, quantidade_produto, id_sala, id_cidade) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";   
						$stm = $this->pdo->prepare($sql);   
						$stm->bindValue(1, $produto_carrinho['id']);
            $stm->bindValue(2, $idCompra);
            $stm->bindValue(3, valorCalculavel($produto_carrinho['valor_produto']));
            $stm->bindValue(4, $produto_carrinho['id_filme']);
            $stm->bindValue(5, $produto_carrinho['data_filme']);
            $stm->bindValue(6, $produto_carrinho['hora_filme']);
            $stm->bindValue(7, $id_cliente);
            $stm->bindValue(8, $produto_carrinho['quantidade_produto']);
            $stm->bindValue(9, $produto_carrinho['id_sala']);
            $stm->bindValue(10, $_SESSION['id_cidade']);
						$stm->execute(); 
						
            }

            foreach($_SESSION['escolha_cadeira'] as $key => $assentos){
                // Insere novos produtos na compra
         $sql = "INSERT INTO tbl_relaciona_cadeiras (id_compra, id_filme, data_filme, hora_filme, id_cliente, assento, id_cidade, id_sala) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";   
						$stm = $this->pdo->prepare($sql);   
						$stm->bindValue(1, $idCompra);
            $stm->bindValue(2, $assentos['id_filme']);
            $stm->bindValue(3, $assentos['data_filme']);
            $stm->bindValue(4, $assentos['hora_filme']);
            $stm->bindValue(5, $id_cliente);
            $stm->bindValue(6, $assentos['assento']);
            $stm->bindValue(7, $assentos['id_cidade']);
            $stm->bindValue(8, $assentos['id_sala']);
						$stm->execute(); 
						
            }

    //Puxa as chaves gravadas no banco
    try{   
        $sql = "SELECT * FROM tbl_config where 1=1 and id = 1 ";
        $stm = $this->pdo->prepare($sql);
        $stm->execute();   
        $rsConfig = $stm->fetchAll(PDO::FETCH_OBJ);

    } catch(PDOException $erro){   
        echo $erro->getLine(); 
    }
    $valor = str_replace(",","",str_replace(".","",$valor));
    
    if(isset($_SESSION['id_cidade']) && $_SESSION['id_cidade'] == 5){
      //barreiras
      $merchant_id_cielo = '3ca6195a-411c-4322-8c8e-917bc6ad1ccc';
      $merchant_key_cielo = 'y6boiTmvpB5aVHQ688cERKB9PnZPc6OpGe3QEUc9';
    }
    if(isset($_SESSION['id_cidade']) && $_SESSION['id_cidade'] == 1){
      //formosa
      $merchant_id_cielo = 'aea32023-70dd-4e30-a51b-4e9d5693326a';
      $merchant_key_cielo = 'uDc0wlALfukd2KsMdY4U73MoBNtyqCrKgGbQBifb';
    }
    if(isset($_SESSION['id_cidade']) && $_SESSION['id_cidade'] == 2){
      //lem
      $merchant_id_cielo = 'd292d4b9-a8b1-420e-99c3-d2bea566d926';
      $merchant_key_cielo = 'qNodGohHeBETZxyOnrdkxqnAmaDLWpxaD9odIU34';
    }
    if(isset($_SESSION['id_cidade']) && $_SESSION['id_cidade'] == 4){
      //sobradinho
      $merchant_id_cielo = '11fcefd0-f8df-4afc-9531-26c64f28549a';
      $merchant_key_cielo = 'B041YxRoW1ofjjPONItlCzpULDbl2FSerdulvAlr';
    }
    if(empty($_SESSION['id_cidade'])){
      //sobradinho
      $merchant_id_cielo = $rsConfig[0]->merchant_id_cielo;
      $merchant_key_cielo = $rsConfig[0]->merchant_key_cielo;
    }


    $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.cieloecommerce.cielo.com.br/1/sales",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS =>"{  \n   \"MerchantOrderId\":\"$idCompra\",\n   \"Customer\":{  \n      \"Name\":\"$nome\"     \n   },\n   \"Payment\":{  \n     \"Type\":\"DebitCard\",\n     \"Amount\":$valor,\n     \"Provider\":\"Simulado\",\n     \"ReturnUrl\":\"http://www.google.com.br\",\n     \"DebitCard\":{  \n         \"CardNumber\":\"$numero_cartao\",\n         \"Holder\":\"$nome_cartao\",\n         \"ExpirationDate\":\"$data_validade\",\n         \"SecurityCode\":\"$codigo_seguranca\",\n         \"Brand\":\"$bandeira\"\n     }\n   }\n}",
  CURLOPT_HTTPHEADER => array(
    "MerchantId: {$merchant_id_cielo}",
    "Content-Type: application/json",
    "MerchantKey: {$merchant_key_cielo}"
  ),
));

$response = json_decode(curl_exec($curl));

curl_close($curl);
//return($response);
//echo count($response);exit;


$puxaDados = $response->Payment;
$codico_retorno = $puxaDados->ReturnCode;
$id_pagamento = $puxaDados->PaymentId;

try { 
					$sql = "UPDATE tbl_compras SET status_compra=?, id_pagamento=? WHERE id=?";   
					$stm = $this->pdo->prepare($sql);   
					$stm->bindValue(1, $codico_retorno);   
					$stm->bindValue(2, $id_pagamento);
					$stm->bindValue(3, $idCompra);   
					$stm->execute(); 
				} catch(PDOException $erro){
					echo $erro->getMessage(); 
				}

        echo "<script>window.location='confirmacao/{$idCompra}';</script>";
  }
}

function capturaTransacaoPorId($id_pagamento){
    //Puxa as chaves gravadas no banco
    try{   
        $sql = "SELECT * FROM tbl_config where 1=1 and id = 1 ";
        $stm = $this->pdo->prepare($sql);
        $stm->execute();   
        $rsConfig = $stm->fetchAll(PDO::FETCH_OBJ);

    } catch(PDOException $erro){   
        echo $erro->getLine(); 
    }
    $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.cieloecommerce.cielo.com.br/1/sales/{$id_pagamento}/capture",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "PUT",
  CURLOPT_HTTPHEADER => array(
    "MerchantId: {$rsConfig[0]->merchant_id_cielo}",
    "Content-Type: application/json",
    "MerchantKey: {$rsConfig[0]->merchant_key_cielo}"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
return($response);
}

    }

}
 
?>

