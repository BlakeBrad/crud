<?php 

session_start();

$login = $_POST['login'];
$senha = md5($_POST['senha']);

require_once('config.php');
require_once DBAPI; 
 
 $cmd ="SELECT * FROM usuario
 WHERE NOME = '$login' AND SENHA = '$senha'";
 //echo $cmd;
 
 $conn = open_database();

$result = mysqli_query($conn, $cmd);

if(mysqli_num_rows($result) > 0 )
{
$result = mysqli_fetch_assoc($result);
//var_dump($result);
$_SESSION['id'] = $result['id'];
$_SESSION['login'] = $result['NOME'];
$_SESSION['lvl_acess'] = $result['lvl_acess'];
header('location:indexpage.php');

}
else{
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);
  header('location:error.html');
   
  }
  
  
?>