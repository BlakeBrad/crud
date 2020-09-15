<?php
 session_start();	
		if($_SESSION['lvl_acess'] != 0){require_once('../config.php');}
	require_once(DBAPI);	
	$usuarios = null;
	$usuario = null;		
	/**	
	*  Listagem de Clientes	
    */
	 function index() {	
		 global $usuarios;
		 $usuarios = find_all('usuario');	
	 }
	 /**	
	 *  Cadastro de Clientes	
	 */	
	function add() {
		
	$connect = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if(isset($_POST['login'])){
	$senha = md5($_POST['senha']);
	$login = $_POST['login'];
	$acess = $_POST['acess'];
		if($login == "" || $login == null){
			echo"<script language='javascript' type='text/javascript'>
			alert('O campo login deve ser preenchido');;</script>";
		}
		
		else{
      if($_SESSION == $login){
 
       echo "<script language='javascript' type='text/javascript'>
        alert('Esse login já existe!');
		window.location.href='addusers.php';</script>";
        die();
 
      }else{
        $query = "INSERT INTO usuario(NOME,SENHA, lvl_acess) VALUES ('$login','$senha', '$acess')";
        $insert = mysqli_query($connect, $query);
		echo $query;
         
        if($insert){
          echo "<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');
		  window.location.href='index.php'</script>";
        }
		else{
			echo mysqli_error($connect);
			echo "<script language='javascript' type='text/javascript'>
			alert('Não foi possível cadastrar esse usuário');
			window.href.location = 'index.php'; </script>";
        }
      }
		
	}
		
	}	
	}
	 /**	 *	Atualizacao/Edicao de Cliente	 */
	function edit() {	
		//$now = date_create('now', new DateTimeZone('America/Sao_Paulo'));	
		if (isset($_GET['id'])) {		
			$id = $_GET['id'];		
			if (isset($_POST['usuario'])) {	
				$usuario = $_POST['usuario'];	
			//	$usuario['modified'] = $now->format("Y-m-d H:i:s");	
				update('usuario', $id, $usuario);
				header('location: index.php');	  
			} else {		
				 global $usuario;
				 $usuario = find('usuario', $id);
			} 	
		} else {	 
			header('location: index.php');	 
		}	
	}	
	 /**	 *  Visualização de um Cliente	 */
	function view($id = null) {	
		 global $usuario;
		 $usuario = find('usuario', $id);	
	}

	/**
	 *  Exclusão de um Cliente
	 */
	function delete($id = null) {

		global $usuario;
		$usuario = remove('usuario', $id);

		header('location: index.php');
	}
?>