<?php 
/* 
Site: The Coffee's Beauty
Autora: Keyla
Data: 24 de abril, 2022
*/

/* Define a página atual pela URL */
$pagina = 'home';

if(isset($_GET['i'])){
	$pagina = addslashes($_GET['i']);
}

/* Carrega o header.php */
include 'app/views/header.php';

/* Carrega a página escolhida pelo usuário */
switch ($pagina) {
	case 'home':
		include 'app/views/home.php';
		break;

	case 'quem_somos':
		include 'app/views/quem_somos.php';
		break;

	case 'contatos':
		include 'app/views/contatos.php';
		break;

	case 'ajuda':
		include 'app/views/ajuda.php';
		break;
	
	default:
		include 'app/views/home.php';
		break;
}

/* Carrega o footer.php */
include 'app/views/footer.php';