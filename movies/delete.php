<?php 
  require_once('functions2.php'); 

  if (isset($_GET['id'])){
    delete($_GET['id']);
  } else {
    //die("ERRO: ID não definido.");
  }
?>
aasdbasczfwee