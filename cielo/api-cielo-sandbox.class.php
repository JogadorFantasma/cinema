<?php 
$ApisSandboxesCieloInstanciada = '';
if(empty($ApisSandboxesCieloInstanciada)) {
	if(file_exists('Connection/conexao.php')) {
		require_once('Connection/con-pdo.php');
		require_once('funcoes.php');
	} else {
		require_once('../Connection/con-pdo.php');
		require_once('../funcoes.php');
	}
	
	class ApisSandboxesCielo {
        private $pdo = null;  

		private static $ApisSandboxesCielo = null; 
	
		private function __construct($conexao){  
			$this->pdo = $conexao;  
		}
		
		public static function getInstance($conexao){   
			if (!isset(self::$ApisSandboxesCielo)):    
				self::$ApisSandboxesCielo = new ApisSandboxesCielo($conexao);   
			endif;
			return self::$ApisSandboxesCielo;    
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
  CURLOPT_URL => "https://apisandbox.cieloecommerce.cielo.com.br/1/sales",
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
    $telefone = "(".filter_input(INPUT_POST, 'senderAreaCode', FILTER_SANITIZE_STRING).") ".filter_input(INPUT_POST, 'senderPhone', FILTER_SANITIZE_STRING);
    $valor = number_format(filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_STRING),2,',','.');
    $numero_cartao = filter_input(INPUT_POST, 'cardNumber', FILTER_SANITIZE_STRING);
    $data_validade = filter_input(INPUT_POST, 'mesVencimento', FILTER_SANITIZE_STRING)."/".filter_input(INPUT_POST, 'anoVencimento', FILTER_SANITIZE_STRING);
    $codigo_seguranca = filter_input(INPUT_POST, 'codigo_seguranca', FILTER_SANITIZE_STRING);
    $bandeira = obterBandeira($numero_cartao);
    $data_transacao = date('Y-m-d');
    $hora_transacao = date('H:i:s');
    $quantidade_adulto = filter_input(INPUT_POST, 'qtd_adulto', FILTER_SANITIZE_STRING);
    $quantidade_crianca_ate_5 = filter_input(INPUT_POST, 'qtd_crianca5', FILTER_SANITIZE_STRING);
    $quantidade_crianca_ate_9 = filter_input(INPUT_POST, 'qtd_crianca9', FILTER_SANITIZE_STRING);
    $id_chale = filter_input(INPUT_POST, 'id_chale', FILTER_SANITIZE_STRING);
    $entrada = filter_input(INPUT_POST, 'data_entrada', FILTER_SANITIZE_STRING);
    $saida = filter_input(INPUT_POST, 'data_saida', FILTER_SANITIZE_STRING);
    $tipo_compra = filter_input(INPUT_POST, 'tipo_compra', FILTER_SANITIZE_STRING);

    

    //echo "aqui: ".$valor; exit;
    

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
         $sql = "INSERT INTO tbl_compras (tipo_compra, entrada, saida, id_cliente, id_chale, quantidade_adulto, quantidade_crianca_ate_5, quantidade_crianca_ate_9, valor, data_transacao, hora_transacao, bandeira, forma_pagamento) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";   
						$stm = $this->pdo->prepare($sql);   
						$stm->bindValue(1, $tipo_compra);   
						$stm->bindValue(2, $entrada);
						$stm->bindValue(3, $saida);
            $stm->bindValue(4, $id_cliente);
            $stm->bindValue(5, ($id_chale) ? $id_chale : NULL);
            $stm->bindValue(6, $quantidade_adulto);
            $stm->bindValue(7, $quantidade_crianca_ate_5);
            $stm->bindValue(8, $quantidade_crianca_ate_9);
            $stm->bindValue(9, valorCalculavel($valor));
            $stm->bindValue(10, $data_transacao);
            $stm->bindValue(11, $hora_transacao);
            $stm->bindValue(12, $bandeira);
            $stm->bindValue(13, "CRE");
						$stm->execute(); 
						$idCompra = $this->pdo->lastInsertId();

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
    $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://apisandbox.cieloecommerce.cielo.com.br/1/sales",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS =>"{ \n  \"MerchantOrderId\":\"$idCompra\", \n  \"Customer\":\n  { \n    \"Name\":\"$nome\" \n  }, \n  \"Payment\":\n  { \n      \"Type\":\"CreditCard\", \n      \"Amount\":$valor, \n      \"Provider\":\"Cielo\",\n      \"ReturnUrl\":\"https://www.google.com.br\",\n      \"Installments\":1, \n      \"Authenticate\":true,\n      \"CreditCard\":\n      { \n        \"CardNumber\":\"$numero_cartao\", \n        \"Holder\":\"$nome_cartao\", \n        \"ExpirationDate\":\"$data_validade\", \n        \"SecurityCode\":\"$codigo_seguranca\", \n        \"Brand\":\"$bandeira\" \n      } \n  } \n}",
  CURLOPT_HTTPHEADER => array(
    "MerchantId: {$rsConfig[0]->merchant_id_cielo}",
    "Content-Type: application/json",
    "MerchantKey: {$rsConfig[0]->merchant_key_cielo}"
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

        echo "<script>window.location='confirmacao-pagamento.php?id_compra={$idCompra}';</script>";
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
  CURLOPT_URL => "https://apisandbox.cieloecommerce.cielo.com.br/1/sales",
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
    $telefone = "(".filter_input(INPUT_POST, 'senderAreaCode', FILTER_SANITIZE_STRING).") ".filter_input(INPUT_POST, 'senderPhone', FILTER_SANITIZE_STRING);
    $valor = number_format(filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_STRING),2,',','.');
    $numero_cartao = filter_input(INPUT_POST, 'cardNumber', FILTER_SANITIZE_STRING);
    $data_validade = filter_input(INPUT_POST, 'mesVencimento', FILTER_SANITIZE_STRING)."/".filter_input(INPUT_POST, 'anoVencimento', FILTER_SANITIZE_STRING);
    $codigo_seguranca = filter_input(INPUT_POST, 'codigo_seguranca', FILTER_SANITIZE_STRING);
    $bandeira = obterBandeira($numero_cartao);
    $data_transacao = date('Y-m-d');
    $hora_transacao = date('H:i:s');
    $quantidade_adulto = filter_input(INPUT_POST, 'qtd_adulto', FILTER_SANITIZE_STRING);
    $quantidade_crianca_ate_5 = filter_input(INPUT_POST, 'qtd_crianca5', FILTER_SANITIZE_STRING);
    $quantidade_crianca_ate_9 = filter_input(INPUT_POST, 'qtd_crianca9', FILTER_SANITIZE_STRING);
    $id_chale = filter_input(INPUT_POST, 'id_chale', FILTER_SANITIZE_STRING);
    $entrada = filter_input(INPUT_POST, 'data_entrada', FILTER_SANITIZE_STRING);
    $saida = filter_input(INPUT_POST, 'data_saida', FILTER_SANITIZE_STRING);
    $tipo_compra = filter_input(INPUT_POST, 'tipo_compra', FILTER_SANITIZE_STRING);

    

    //echo "aqui: ".$valor; exit;
    

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
         $sql = "INSERT INTO tbl_compras (tipo_compra, entrada, saida, id_cliente, id_chale, quantidade_adulto, quantidade_crianca_ate_5, quantidade_crianca_ate_9, valor, data_transacao, hora_transacao, bandeira, forma_pagamento) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";   
						$stm = $this->pdo->prepare($sql);   
						$stm->bindValue(1, $tipo_compra);   
						$stm->bindValue(2, $entrada);
						$stm->bindValue(3, $saida);
            $stm->bindValue(4, $id_cliente);
            $stm->bindValue(5, $id_chale);
            $stm->bindValue(6, $quantidade_adulto);
            $stm->bindValue(7, $quantidade_crianca_ate_5);
            $stm->bindValue(8, $quantidade_crianca_ate_9);
            $stm->bindValue(9, valorCalculavel($valor));
            $stm->bindValue(10, $data_transacao);
            $stm->bindValue(11, $hora_transacao);
            $stm->bindValue(12, $bandeira);
            $stm->bindValue(13, "DEB");
						$stm->execute(); 
						$idCompra = $this->pdo->lastInsertId();

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
  CURLOPT_URL => "https://apisandbox.cieloecommerce.cielo.com.br/1/sales",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS =>"{  \n   \"MerchantOrderId\":\"$idCompra\",\n   \"Customer\":{  \n      \"Name\":\"$nome\"     \n   },\n   \"Payment\":{  \n     \"Type\":\"DebitCard\",\n     \"Amount\":$valor,\n     \"Provider\":\"Simulado\",\n     \"ReturnUrl\":\"http://www.google.com.br\",\n     \"DebitCard\":{  \n         \"CardNumber\":\"$numero_cartao\",\n         \"Holder\":\"$nome_cartao\",\n         \"ExpirationDate\":\"$data_validade\",\n         \"SecurityCode\":\"$codigo_seguranca\",\n         \"Brand\":\"$bandeira\"\n     }\n   }\n}",
  CURLOPT_HTTPHEADER => array(
    "MerchantId: {$rsConfig[0]->merchant_id_cielo}",
    "Content-Type: application/json",
    "MerchantKey: {$rsConfig[0]->merchant_key_cielo}"
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

        echo "<script>window.location='confirmacao-pagamento.php?id_compra={$idCompra}';</script>";
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
  CURLOPT_URL => "https://apisandbox.cieloecommerce.cielo.com.br/1/sales/{$id_pagamento}/capture",
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

