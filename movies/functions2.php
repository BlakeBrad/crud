<?php
session_start();
require_once('../config.php');	require_once(DBAPI);
	$mvs = null;	$mv = null;		
	//$cod_pro = $mv['id'];		
	/**	
	*  Listagem de Clientes	
    */
	 function index() {	
		 global $mvs;
		 $mvs = find_all('mv');	
	 }
	 /**	
	 *  Cadastro de Clientes	
	 */	
	function add() {
		if (!empty($_POST['mv'])) {	

			 $mv = $_POST['mv'];
			 save('mv', $mv);	 
			 header('location: index.php');	 
		 }
	 }
	 
	 /**	 *	Atualizacao/Edicao de Cliente	 */
		function edit() {	
		//$now = date_create('now', new DateTimeZone('America/Sao_Paulo'));	
		if (isset($_GET['id'])) {		
			$id = $_GET['id'];		
			if (isset($_POST['mv'])) {	
				$mv = $_POST['mv'];	
				update('mv', $id, $mv);
				header('location: index.php');	  
			} else {		
				 global $mv;
				 $mv = find('mv', $id);
			} 	
		} else {	 
			header('location: index.php');	 
		}	
	}	
		 /**	 *  Visualização de um Cliente	 */
	function view($id = null) {	
		 global $mv;
		 $mv = find('mv', $id);	
	}

/**
 *  Exclusão de um Cliente
 */
function delete($id = null) {

  global $mv;
  $mv = remove('mv', $id);

  header('location: index.php'); 
}?>