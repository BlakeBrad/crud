<!DOCTYPE html>
	<html>
	<head>	
    <meta charset="utf-8">	
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	
    <title>CRUD por Felipe Silva</title>	
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<script src="<?php echo BASEURL; ?>js/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">
	<style>	    
    body {	   
	padding-top: 50px;	
	padding-bottom: 20px;
	}	
    </style>	 
	<link rel="stylesheet" href="<?php echo BASEURL; ?>style.css">
	<link rel="stylesheet" href="<?php echo BASEURL; ?>font/css/all.css">	
	
	<script src="<?php echo BASEURL; ?>font/js/all.js"></script>
	</head>
	<body>	
	
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault" >
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../indexpage.php">Início<span class="sr-only">(current)</span></a>
      </li>
      <?php if($_SESSION['lvl_acess'] != 0) { echo
      '<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produtos</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="'. BASEURL .'products">Gerenciar produto</a>';}
           if($_SESSION['lvl_acess'] != 0 && $_SESSION['lvl_acess'] <= 2){ echo '<a class="dropdown-item" href="'. BASEURL .'products/add2.php">Novo produto</a>';} ?>
        </div>
      </li>
	  <li class="nav-item dropdown">
 <?php if($_SESSION['lvl_acess'] != 0) { echo '<a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Clientes</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="' . BASEURL. 'customers">Gerenciar clientes</a>';}
          if($_SESSION['lvl_acess'] != 0 && $_SESSION['lvl_acess'] <= 2){ echo '<a class="dropdown-item" href="'.  BASEURL .'customers/add.php">Novo clientes</a>';} ?>
        </div>
        	   <?php if($_SESSION['lvl_acess'] != 0){ echo '<li class="nav-item dropdown">
     <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filme</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="' . BASEURL. 'movies">Gerenciar Filmes</a>';}
           if($_SESSION['lvl_acess'] != 0 && $_SESSION['lvl_acess'] <= 2){ echo '<a class="dropdown-item" href="'.  BASEURL .'movies/add2.php">Novo cadastro de Filmes</a>'; } ?>
        </div>
      </li>
      <?php if ($_SESSION['lvl_acess'] == 1){
	  echo '
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cadastros</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="'.  BASEURL .'users">Gerenciar cadastros</a>
          <a class="dropdown-item" href="'.  BASEURL .'users/addusers.php">Novo cadastro</a>
        </div>
      </li>';}?>
				 <?php if($_SESSION['lvl_acess'] != 0){ echo '<a class="order-3">&nbsp;</a>
				&nbsp;<a href="'. BASEURL .'inc/logout.php" class="btn btn-danger order-4" style="margin-left: 1075px"<a>Logout</a>';} 
				else { echo'
				<a class="order-3">&nbsp;</a>
				&nbsp;<a href="'. BASEURL .'index.php" class="btn btn-primary order-4" style="margin-left: 1075px"<a>log In</a>
				';} ?>
    </ul>
  </div>
</nav><!--/.navbar-collapse -->	   
	</div>
	</nav>	
    <main class="container" style="margin-top: 40px;">