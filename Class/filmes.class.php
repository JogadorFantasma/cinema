<?php
@ session_start();
$FilmesInstanciada = '';
if(empty($FilmesInstanciada)) {
	if(file_exists('Connection/conexao.php')) {
		require_once('Connection/con-pdo.php');
		require_once('funcoes.php');
	} else {
		require_once('../Connection/con-pdo.php');
		require_once('../funcoes.php');
	}
	
	class Filmes {
		
		private $pdo = null;  

		private static $Filmes = null; 

		private function __construct($conexao){  
			$this->pdo = $conexao;  
		}
	  
		public static function getInstance($conexao){   
			if (!isset(self::$Filmes)):    
				self::$Filmes = new Filmes($conexao);   
			endif;
			return self::$Filmes;    
		}
		
	
		function rsDados($id='', $orderBy='', $limite='', $url_amigavel='', $destaque='', $ativo='') {
			
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
		
			if(!empty($url_amigavel)) {
				$sql .= " and url_amigavel = ?"; 
				$nCampos++;
				$campo[$nCampos] = $url_amigavel;
			}

			if(!empty($destaque)) {
				$sql .= " and destaque = ?"; 
				$nCampos++;
				$campo[$nCampos] = $destaque;
			}

			if(!empty($ativo)) {
				$sql .= " and ativo = ?"; 
				$nCampos++;
				$campo[$nCampos] = $ativo;
			}
		
			if(isset($_POST['id_cat']) && !empty($_POST['id_cat'])) {
				$sql .= " and id_categoria = '{$_POST['id_cat']}'"; 
			}

			/// ORDEM		
			if(!empty($orderBy)) {
				$sqlOrdem = " order by {$orderBy}";
			}
			
			if(!empty($limite)) {
				$sqlLimite = " limit 0,{$limite}";
			}
			
			try{   
				$sql = "SELECT * FROM tbl_filmes where 1=1 $sql $sqlOrdem $sqlLimite";
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
			if(isset($_POST['acao']) && $_POST['acao'] == 'addFilme') {

				
				$titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
				$descricao = $_POST['descricao'];
				$ativo = filter_input(INPUT_POST, 'ativo', FILTER_SANITIZE_STRING);
				$duracao = filter_input(INPUT_POST, 'duracao', FILTER_SANITIZE_STRING);
				$urlAmigavel = gerarTituloSEO($titulo);
				$meta_title = filter_input(INPUT_POST, 'meta_title', FILTER_SANITIZE_STRING);
				$meta_keywords = filter_input(INPUT_POST, 'meta_keywords', FILTER_SANITIZE_STRING);
				$meta_description = filter_input(INPUT_POST, 'meta_description', FILTER_SANITIZE_STRING);
					try{

						if(file_exists('Connection/conexao.php')) {
							$pastaArquivos = 'img';
						} else {
							$pastaArquivos = '../img';
						}
						
						$sql = "INSERT INTO tbl_filmes (imagem, titulo, descricao, duracao, ativo, url_amigavel, meta_title, meta_keywords, meta_description) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";   
						$stm = $this->pdo->prepare($sql);   
						$stm->bindValue(1, upload('imagem', $pastaArquivos, 'N'));   
						$stm->bindValue(2, $titulo);   
						$stm->bindValue(3, $descricao);
						$stm->bindValue(4, $duracao);
						$stm->bindValue(5, $ativo);
						$stm->bindValue(6, $urlAmigavel);
						$stm->bindValue(7, $meta_title); 
						$stm->bindValue(8, $meta_keywords); 
						$stm->bindValue(9, $meta_description);
						$stm->execute(); 
						$idBanner = $this->pdo->lastInsertId();
						
						if($redireciona == '') {
							$redireciona = '.';
						}
						
						
					} catch(PDOException $erro){
						echo $erro->getMessage(); 
					}
					echo "	<script>
								window.location='filmes.php';
								</script>";
								exit;
				
			}
		}
		
		function editar($redireciona='filmes.php') {
			if(isset($_POST['acao']) && $_POST['acao'] == 'editaFilme') {

				$titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
				$descricao = $_POST['descricao'];
				$ativo = filter_input(INPUT_POST, 'ativo', FILTER_SANITIZE_STRING);
				$duracao = filter_input(INPUT_POST, 'duracao', FILTER_SANITIZE_STRING);
				$urlAmigavel = gerarTituloSEO($titulo);
				$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
				$meta_title = filter_input(INPUT_POST, 'meta_title', FILTER_SANITIZE_STRING);
				$meta_keywords = filter_input(INPUT_POST, 'meta_keywords', FILTER_SANITIZE_STRING);
				$meta_description = filter_input(INPUT_POST, 'meta_description', FILTER_SANITIZE_STRING);
				
				
				try { 

					if(file_exists('Connection/conexao.php')) {
							$pastaArquivos = 'img';
						} else {
							$pastaArquivos = '../img';
						}
				
					$sql = "UPDATE tbl_filmes SET imagem=?, titulo=?, descricao=?, duracao=?, ativo=?, url_amigavel=?, meta_title=?, meta_keywords=?, meta_description=? WHERE id=?";   
					$stm = $this->pdo->prepare($sql);   
					$stm->bindValue(1, upload('imagem', $pastaArquivos, 'N'));   
					$stm->bindValue(2, $titulo);   
					$stm->bindValue(3, $descricao);
					$stm->bindValue(4, $duracao);
					$stm->bindValue(5, $ativo);
					$stm->bindValue(6, $urlAmigavel);
					$stm->bindValue(7, $meta_title); 
					$stm->bindValue(8, $meta_keywords); 
					$stm->bindValue(9, $meta_description); 
					$stm->bindValue(10, $id);   
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
			if(isset($_GET['acao']) && $_GET['acao'] == 'excluirFilme') {
				
				try{   
					$sql = "DELETE FROM tbl_filmes WHERE id=? ";   
					$stm = $this->pdo->prepare($sql);   
					$stm->bindValue(1, $_GET['id']);   
					$stm->execute();
				} catch(PDOException $erro){
					echo $erro->getMessage(); 
				}
				echo "	<script>
								window.location='filmes.php';
								</script>";
								exit;

			}
		}

		function rsDadosProgramacao($id='', $orderBy='', $limite='', $id_filme='') {
			
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
			if(!empty($id_filme)) {
				$sql .= " and id_filme = ?"; 
				$nCampos++;
				$campo[$nCampos] = $id_filme;
			}
		
			/// ORDEM		
			if(!empty($orderBy)) {
				$sqlOrdem = " order by {$orderBy}";
			}
			
			if(!empty($limite)) {
				$sqlLimite = " limit 0,{$limite}";
			}
			
			try{   
				$sql = "SELECT * FROM tbl_programacao_filmes where 1=1 $sql $sqlOrdem $sqlLimite";
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

		function addProgramacao($redireciona='') {
			if(isset($_POST['acao']) && $_POST['acao'] == 'addProgramacao') {

				 $id_filme = filter_input(INPUT_POST, 'id_filme', FILTER_SANITIZE_STRING);
				/*$data_exibicao = filter_input(INPUT_POST, 'data_exibicao', FILTER_SANITIZE_STRING);
				$hora_exibicao = filter_input(INPUT_POST, 'hora_exibicao', FILTER_SANITIZE_STRING);
				$id_sala = filter_input(INPUT_POST, 'id_sala', FILTER_SANITIZE_STRING);
				$valor = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_STRING); */

				$data_exibicao = explode(", ", $_POST['data_exibicao']);
				for($i=0;$i <count($data_exibicao); $i++){
					try{

						$sql = "INSERT INTO tbl_programacao_filmes (id_filme, data_exibicao, hora_exibicao, id_sala, valor) VALUES (?, ?, ?, ?, ?)";   
						$stm = $this->pdo->prepare($sql);   
						$stm->bindValue(1, $id_filme);   
						$stm->bindValue(2, $_POST['data_exibicao'][$i]);
						$stm->bindValue(3, $_POST['hora_exibicao'][$i]);
						$stm->bindValue(4, $_POST['id_sala'][$i]);
						$stm->bindValue(5, $_POST['valor'][$i]);
						$stm->execute(); 
						$idBanner = $this->pdo->lastInsertId();
						
						if($redireciona == '') {
							$redireciona = '.';
						}
						
						
					} catch(PDOException $erro){
						echo $erro->getMessage(); 
					}
				}
					echo "	<script>
								window.location='editar-filme.php?id={$id_filme}';
								</script>";
								exit;
				
			}
		}

		function rsDadosSalas($id='', $orderBy='', $limite='') {
			
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
				$sql = "SELECT * FROM tbl_sala where 1=1 $sql $sqlOrdem $sqlLimite";
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
	}
	
	$FilmesInstanciada = 'S';
}