<?php 
include "Class/config.class.php";
$infoSistema = ConfigSistema::getInstance(Conexao::getInstance())->rsDados();

include "Class/filmes.class.php";
$filmes = Filmes::getInstance(Conexao::getInstance());


define('SITE_URL', 'https://'.$_SERVER['HTTP_HOST'].'/cinema');
?>