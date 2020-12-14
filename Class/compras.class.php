<?php
@ session_start();
$ComprasInstanciada = '';
if(empty($ComprasInstanciada)) {
	if(file_exists('Connection/conexao.php')) {
		require_once('Connection/con-pdo.php');
		require_once('funcoes.php');
	} else {
		require_once('../Connection/con-pdo.php');
		require_once('../funcoes.php');
	}
	
	class Compras {
		
		private $pdo = null;  

		private static $Compras = null; 

		private function __construct($conexao){  
			$this->pdo = $conexao;  
		}
	  
		public static function getInstance($conexao){   
			if (!isset(self::$Compras)):    
				self::$Compras = new Compras($conexao);   
			endif;
			return self::$Compras;    
		}
		
	
		function rsDados($id='', $orderBy='', $limite='') {
			
			/// FILTROS
			$nCampos = 0;
			$sql = '';
			$sqlOrdem = ''; 
			$sqlLimite = '';
			if(!empty($id)) {
				$sql .= " and id = ?"; 
				$nCampos++;
				$campo[$nCampos] = $id;
			}
		
			/// ORDEM		
			if(!empty($orderBy)) {
				$sqlOrdem = " order by {$orderBy}";
			}
			
			if(!empty($limite)) {
				$sqlLimite = " limit 0,{$limite}";
			}
			
			try{   
				$sql = "SELECT * FROM tbl_compras where 1=1 $sql $sqlOrdem $sqlLimite";
				$stm = $this->pdo->prepare($sql);
				
				for($i=1; $i<=$nCampos; $i++) {
					$stm->bindValue($i, $campo[$i]);
				}
				
				$stm->execute();
				$rsDados = $stm->fetchAll(PDO::FETCH_OBJ);
				//print_r($rsDados);
				if($id <> '' or $limite == 1) {
					return($rsDados[0]);
				} else {
					return($rsDados);
				}
			} catch(PDOException $erro){   
				echo $erro->getMessage(); 
			}
		}

		function add($redireciona='') {
			if(isset($_POST['acao']) && $_POST['acao'] == 'addCompra') {
				
				$tipo_compra = filter_input(INPUT_POST, 'tipo_compra', FILTER_SANITIZE_STRING);
				$valor = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_STRING);
				$quantidade_adulto = filter_input(INPUT_POST, 'quantidade_adulto', FILTER_SANITIZE_STRING);
				$quantidade_crianca_ate_5 = filter_input(INPUT_POST, 'quantidade_crianca_ate_5', FILTER_SANITIZE_STRING);
				$quantidade_crianca_ate_9 = filter_input(INPUT_POST, 'quantidade_crianca_ate_9', FILTER_SANITIZE_STRING);
				$entrada = filter_input(INPUT_POST, 'entrada', FILTER_SANITIZE_STRING);
				$saida = filter_input(INPUT_POST, 'saida', FILTER_SANITIZE_STRING);
				$status_compra = filter_input(INPUT_POST, 'status_compra', FILTER_SANITIZE_STRING);
				$id_cliente = filter_input(INPUT_POST, 'id_cliente', FILTER_SANITIZE_STRING);
				$id_chale = filter_input(INPUT_POST, 'id_chale', FILTER_SANITIZE_STRING);
				$data_transacao = date('Y-m-d');
				$hora_transacao = date('H:i:s');
					try{
		
						$sql = "INSERT INTO tbl_compras (tipo_compra, valor, quantidade_adulto, quantidade_crianca_ate_5, quantidade_crianca_ate_9, entrada, saida, status_compra, id_cliente, id_chale, data_transacao, hora_transacao) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";   
						$stm = $this->pdo->prepare($sql);   
						$stm->bindValue(1, $tipo_compra);   
						$stm->bindValue(2, valorCalculavel($valor));   
						$stm->bindValue(3, $quantidade_adulto);
						$stm->bindValue(4, $quantidade_crianca_ate_5);
						$stm->bindValue(5, $quantidade_crianca_ate_9);
						$stm->bindValue(6, $entrada);
						$stm->bindValue(7, $saida);
						$stm->bindValue(8, $status_compra);
						$stm->bindValue(9, $id_cliente);
						$stm->bindValue(10, $id_chale);
						$stm->bindValue(11, $data_transacao);
						$stm->bindValue(12, $hora_transacao);
						$stm->execute(); 
						$idBanner = $this->pdo->lastInsertId();
						
						if($redireciona == '') {
							$redireciona = '.';
						}
						
						
					} catch(PDOException $erro){
						echo $erro->getMessage(); 
					}
					echo "	<script>
								window.location='compras.php';
								</script>";
								exit;
				
			}
		}
		
		function editar($redireciona='reservas.php') {
			if(isset($_POST['acao']) && $_POST['acao'] == 'editaCompra') {
				
				$tipo_compra = filter_input(INPUT_POST, 'tipo_compra', FILTER_SANITIZE_STRING);
				$valor = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_STRING);
				$quantidade_adulto = filter_input(INPUT_POST, 'quantidade_adulto', FILTER_SANITIZE_STRING);
				$quantidade_crianca_ate_5 = filter_input(INPUT_POST, 'quantidade_crianca_ate_5', FILTER_SANITIZE_STRING);
				$quantidade_crianca_ate_9 = filter_input(INPUT_POST, 'quantidade_crianca_ate_9', FILTER_SANITIZE_STRING);
				$entrada = filter_input(INPUT_POST, 'entrada', FILTER_SANITIZE_STRING);
				$saida = filter_input(INPUT_POST, 'saida', FILTER_SANITIZE_STRING);
				$status_compra = filter_input(INPUT_POST, 'status_compra', FILTER_SANITIZE_STRING);
				$id_cliente = filter_input(INPUT_POST, 'id_cliente', FILTER_SANITIZE_STRING);
				$id_chale = filter_input(INPUT_POST, 'id_chale', FILTER_SANITIZE_STRING);
				$data_transacao = filter_input(INPUT_POST, 'data_transacao', FILTER_SANITIZE_STRING);
				$hora_transacao = filter_input(INPUT_POST, 'hora_transacao', FILTER_SANITIZE_STRING);
				$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
				

				try { 

					$sql = "UPDATE tbl_compras SET tipo_compra=?, valor=?, quantidade_adulto=?, quantidade_crianca_ate_5=?, quantidade_crianca_ate_9=?, entrada=?, saida=?, status_compra=?, id_cliente=?, id_chale=?, data_transacao=?, hora_transacao=? WHERE id=?";   
					$stm = $this->pdo->prepare($sql);   
					$stm->bindValue(1, $tipo_compra);   
					$stm->bindValue(2, valorCalculavel($valor));   
					$stm->bindValue(3, $quantidade_adulto);
					$stm->bindValue(4, $quantidade_crianca_ate_5);
					$stm->bindValue(5, $quantidade_crianca_ate_9);
					$stm->bindValue(6, $entrada);
					$stm->bindValue(7, $saida);
					$stm->bindValue(8, $status_compra);
					$stm->bindValue(9, $id_cliente);
					$stm->bindValue(10, $id_chale);
					$stm->bindValue(11, $data_transacao);
					$stm->bindValue(12, $hora_transacao); 
					$stm->bindValue(13, $id);   
					$stm->execute(); 
				} catch(PDOException $erro){
					echo $erro->getMessage(); 
				}
					echo "	<script>
							window.location='{$redireciona}';
							</script>";
							exit;
			}
		}
		function excluir() {
			if(isset($_GET['acao']) && $_GET['acao'] == 'excluirCompra') {
				
				try{   
					$sql = "DELETE FROM tbl_compras WHERE id=? ";   
					$stm = $this->pdo->prepare($sql);   
					$stm->bindValue(1, $_GET['id']);   
					$stm->execute();
				} catch(PDOException $erro){
					echo $erro->getMessage(); 
				}
				echo "	<script>
								window.location='compras.php';
								</script>";
								exit;

			}
		}

		function rsDadosItens($id='', $orderBy='', $limite='', $id_compra='') {
			
			/// FILTROS
			$nCampos = 0;
			$sql = '';
			$sqlOrdem = ''; 
			$sqlLimite = '';
			if(!empty($id)) {
				$sql .= " and id = ?"; 
				$nCampos++;
				$campo[$nCampos] = $id;
			}

			if(!empty($id_compra)) {
				$sql .= " and id_compra = ?"; 
				$nCampos++;
				$campo[$nCampos] = $id_compra;
			}
		
			/// ORDEM		
			if(!empty($orderBy)) {
				$sqlOrdem = " order by {$orderBy}";
			}
			
			if(!empty($limite)) {
				$sqlLimite = " limit 0,{$limite}";
			}
			
			try{   
				$sql = "SELECT * FROM tbl_relaciona_compras where 1=1 $sql $sqlOrdem $sqlLimite";
				$stm = $this->pdo->prepare($sql);
				
				for($i=1; $i<=$nCampos; $i++) {
					$stm->bindValue($i, $campo[$i]);
				}
				
				$stm->execute();
				$rsDados = $stm->fetchAll(PDO::FETCH_OBJ);
				//print_r($rsDados);
				if($id <> '' or $limite == 1) {
					return($rsDados[0]);
				} else {
					return($rsDados);
				}
			} catch(PDOException $erro){   
				echo $erro->getMessage(); 
			}
		}

		function rsDadosAssentos($id='', $orderBy='', $limite='', $id_compra='', $id_filme='', $hora_exibicao='', $data_exibicao='', $id_cidade='', $assento='') {
			
			/// FILTROS
			$nCampos = 0;
			$sql = '';
			$sqlOrdem = ''; 
			$sqlLimite = '';
			if(!empty($id)) {
				$sql .= " and id = ?"; 
				$nCampos++;
				$campo[$nCampos] = $id;
			}

			if(!empty($id_compra)) {
				$sql .= " and id_compra = ?"; 
				$nCampos++;
				$campo[$nCampos] = $id_compra;
			}
			if(!empty($id_filme)) {
				$sql .= " and id_filme = ?"; 
				$nCampos++;
				$campo[$nCampos] = $id_filme;
			}
			if(!empty($hora_exibicao)) {
				$sql .= " and hora_filme = ?"; 
				$nCampos++;
				$campo[$nCampos] = $hora_exibicao;
			}
			if(!empty($data_exibicao)) {
				$sql .= " and data_filme = ?"; 
				$nCampos++;
				$campo[$nCampos] = $data_exibicao;
			}
			if(!empty($id_cidade)) {
				$sql .= " and id_cidade = ?"; 
				$nCampos++;
				$campo[$nCampos] = $id_cidade;
			}
			if(!empty($assento)) {
				$sql .= " and assento = ?"; 
				$nCampos++;
				$campo[$nCampos] = $assento;
			}
		
			/// ORDEM		
			if(!empty($orderBy)) {
				$sqlOrdem = " order by {$orderBy}";
			}
			
			if(!empty($limite)) {
				$sqlLimite = " limit 0,{$limite}";
			}
			
			try{   
				$sql = "SELECT * FROM tbl_relaciona_cadeiras where 1=1 $sql $sqlOrdem $sqlLimite";
				$stm = $this->pdo->prepare($sql);
				
				for($i=1; $i<=$nCampos; $i++) {
					$stm->bindValue($i, $campo[$i]);
				}
				
				$stm->execute();
				$rsDados = $stm->fetchAll(PDO::FETCH_OBJ);
				//print_r($rsDados);
				if($id <> '' or $limite == 1) {
					return($rsDados[0]);
				} else {
					return($rsDados);
				}
			} catch(PDOException $erro){   
				echo $erro->getMessage(); 
			}
		}

		function excluirProdutoErroPagamento() {
			
				
				try{   
					$sql = "DELETE FROM tbl_relaciona_compras WHERE id_compra=? ";   
					$stm = $this->pdo->prepare($sql);   
					$stm->bindValue(1, $_GET['id_compra']);   
					$stm->execute();
				} catch(PDOException $erro){
					echo $erro->getMessage(); 
				}

				try{   
					$sql = "DELETE FROM tbl_relaciona_cadeiras WHERE id_compra=? ";   
					$stm = $this->pdo->prepare($sql);   
					$stm->bindValue(1, $_GET['id_compra']);   
					$stm->execute();
				} catch(PDOException $erro){
					echo $erro->getMessage(); 
				}
				

			
		}

		function addBaixa() {
			if(isset($_POST['acao']) && $_POST['acao'] == 'addBaixa') {

				
				
				$quantidade_ingresso_inteira = filter_input(INPUT_POST, 'quantidade_ingresso_inteira', FILTER_SANITIZE_STRING);
				$quantidade_ingresso_meia = filter_input(INPUT_POST, 'quantidade_ingresso_meia', FILTER_SANITIZE_STRING);
				$url_filme = filter_input(INPUT_POST, 'url_filme', FILTER_SANITIZE_STRING);
				$id_filme = filter_input(INPUT_POST, 'id_filme', FILTER_SANITIZE_STRING);
				$data_filme = filter_input(INPUT_POST, 'data_filme', FILTER_SANITIZE_STRING);
				$hora_filme = filter_input(INPUT_POST, 'hora_filme', FILTER_SANITIZE_STRING);
				$id_sala = filter_input(INPUT_POST, 'id_sala', FILTER_SANITIZE_STRING);
				$id_cidade = filter_input(INPUT_POST, 'id_cidade', FILTER_SANITIZE_STRING);
				$valor_inteira = filter_input(INPUT_POST, 'valor_inteira', FILTER_SANITIZE_STRING);
				$valor_meia = filter_input(INPUT_POST, 'valor_meia', FILTER_SANITIZE_STRING);
				$id_usuario = filter_input(INPUT_POST, 'id_usuario', FILTER_SANITIZE_STRING);
				$cadeira = $_POST['cadeira'];
				$data_transacao = date('Y-m-d');
				$hora_transacao = date('H:i:s');
				$somaQuantidade = $quantidade_ingresso_inteira + $quantidade_ingresso_meia;
				$valorInteira = $quantidade_ingresso_inteira * $valor_inteira;
				$valorMeia = $quantidade_ingresso_meia * $valor_meia;

				$valor = $valorInteira + $valorMeia;

				
				if($somaQuantidade != count($cadeira)){
					echo "<script>alert('A quantidade de ingressos não corresponde a quantidade selecionada');history.back();</script>";
					exit;
				}
				//var_dump($_POST); exit;
				
				$sql = "INSERT INTO tbl_compras (id_usuario, valor, data_transacao, hora_transacao, id_cidade, status_compra) VALUES (?, ?, ?, ?, ?, ?)";   
				$stm = $this->pdo->prepare($sql);   
				$stm->bindValue(1, $id_usuario);
	$stm->bindValue(2, valorCalculavel($valor));
	$stm->bindValue(3, $data_transacao);
	$stm->bindValue(4, $hora_transacao);
	$stm->bindValue(5, $id_cidade);
	$stm->bindValue(6, 'BCP');
				$stm->execute(); 
				$idCompra = $this->pdo->lastInsertId();

				if($quantidade_ingresso_inteira > 0){
					$sql = "INSERT INTO tbl_relaciona_compras (id_produto, id_compra, valor_produto, id_filme, data_filme, hora_filme, id_usuario, quantidade_produto, id_sala, id_cidade) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";   
				$stm = $this->pdo->prepare($sql);   
				$stm->bindValue(1, 252525);
	$stm->bindValue(2, $idCompra);
	$stm->bindValue(3, valorCalculavel($valor_inteira));
	$stm->bindValue(4, $id_filme);
	$stm->bindValue(5, $data_filme);
	$stm->bindValue(6, $hora_filme);
	$stm->bindValue(7, $id_usuario);
	$stm->bindValue(8, $quantidade_ingresso_inteira);
	$stm->bindValue(9, $id_sala);
	$stm->bindValue(10, $id_cidade);
				$stm->execute(); 
				}
				if($quantidade_ingresso_meia > 0){
					$sql = "INSERT INTO tbl_relaciona_compras (id_produto, id_compra, valor_produto, id_filme, data_filme, hora_filme, id_usuario, quantidade_produto, id_sala, id_cidade) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";   
				$stm = $this->pdo->prepare($sql);   
				$stm->bindValue(1, 252526);
	$stm->bindValue(2, $idCompra);
	$stm->bindValue(3, valorCalculavel($valor_meia));
	$stm->bindValue(4, $id_filme);
	$stm->bindValue(5, $data_filme);
	$stm->bindValue(6, $hora_filme);
	$stm->bindValue(7, $id_usuario);
	$stm->bindValue(8, $quantidade_ingresso_meia);
	$stm->bindValue(9, $id_sala);
	$stm->bindValue(10, $id_cidade);
				$stm->execute(); 
				}

	for($i=0;$i<count($cadeira);$i++){
		$sql = "INSERT INTO tbl_relaciona_cadeiras (id_compra, id_filme, data_filme, hora_filme, id_usuario, assento, id_cidade, id_sala) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";   
				$stm = $this->pdo->prepare($sql);   
				$stm->bindValue(1, $idCompra);
	$stm->bindValue(2, $id_filme);
	$stm->bindValue(3, $data_filme);
	$stm->bindValue(4, $hora_filme);
	$stm->bindValue(5, $id_usuario);
	$stm->bindValue(6, $_POST['cadeira'][$i]);
	$stm->bindValue(7, $id_cidade);
	$stm->bindValue(8, $id_sala);
				$stm->execute(); 

	}

					echo "	<script>
								window.location='compras.php';
								</script>";
								exit;
				
			}
		}
	}
	
	$ComprasInstanciada = 'S';
}