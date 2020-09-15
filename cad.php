<?php require_once 'config.php';
 require_once DBAPI;
$db = open_database(); ?>	
<h1>Dashboard</h1>
	<hr />	
<?php if ($db) : ?>	
<?php  
//$login = $_POST['login'];
//$senha = MD5($_POST['senha']);
//$connect = mysqli_connect('wda_crud','root','root');
//$db = mysqli_select_db('USUARIO');
//var_dump(DB_HOST);
//var_dump(DB_USER);
//var_dump(DB_PASSWORD);
//var_dump(DB_NAME);

$connect = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$query_select = "SELECT login FROM usuario WHERE login = '$login'";
$select = mysqli_query($query_select,$connect);
$array = mysqli_fetch_array($select);
$logarray = $array['NOME'];

	if($login == "" || $login == null){
		echo"<script language='javascript' type='text/javascript'>
		alert('O campo login deve ser preenchido');window.location.href='
		cadastro.html';</script>";
    }
	else{
      if($logarray == $login){
 
        echo "<script language='javascript' type='text/javascript'>
        alert('Esse login já existe!');
		window.location.href='addusers.php';</script>";
        die();
 
      }else{
        $query = "INSERT INTO usuario (NOME,SENHA) VALUES ('$login','$senha')";
        $insert = mysqli_query($query,$connect);
         
        if($insert){
          echo "<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location.
          href='indexpage.php'</script>";
        }
		else{
          echo "<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar esse usuário');
		  window.location.href='indexpage.php'</script>";
        }
      }
	}
?>