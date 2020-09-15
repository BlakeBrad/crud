<?php	
		if($_SESSION['lvl_acess'] != 0) {require_once('../config.php');	require_once(DBAPI);}	
	$produtos = null;	$produto = null;		
	/**	
	*  Listagem de Clientes	
    */
	 function index() {	
		 global $produtos;
		 $produtos = find_all('produto');	
	 }
	 /**	
	 *  Cadastro de Clientes	
	 */	
	function add() {
		if (!empty($_POST['produto'])) {	
			 $today = 	   
			 date_create('now', new DateTimeZone('America/Sao_Paulo'));	
			 $produto = $_POST['produto'];
			 $produto['modified'] = $produto['created'] = $today->format("Y-m-d H:i:s");
			 save('produto', $produto);	 
			 header('location: index.php');	 
		 }
	 }
	 
	 /**	 *	Atualizacao/Edicao de Cliente	 */
	 function edit() {	
	 $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));	
	 if (isset($_GET['id'])) {		
	 $cod_pro = $_GET['id'];		
	 if (isset($_POST['produto'])) {	
	 $produto = $_POST['produto'];	
	 $produto['modified'] = $now->format("Y-m-d H:i:s");	
	 update('produto', $cod_pro, $produto);
	 header('location: index.php');	  
	 }

	 else {		
	 global $produto;
	 $produto = find('produto', $cod_pro);
	 // var_dump($produto);
	 } 	
	 } 
	 else {	 
	 header('location: index.php');	 
	 }	
	 }	
	 /**	 *  Visualização de um Cliente	 */
	 function view($cod_pro = null) {	
	 global $produto;
	 $produto = find('produto', $cod_pro);	
	 // var_dump($produto); 
	 }
?>
<?php
/**
 *  Exclusão de um Cliente
 */
function delete($id = null) {

  global $customer;
  $customer = remove('produto', $id);

  header('location: index.php');
}