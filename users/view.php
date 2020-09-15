<?php 		
require_once('functions.php'); 
		view($_GET['id']);	?>	
<?php include(HEADER_TEMPLATE); ?>	

<h2>Cliente <?php echo $usuario['id']; ?></h2>	
<hr>	
<?php if (!empty($_SESSION['message'])) : ?>	
	<div class="alert alert-<?php echo $_SESSION['type']; ?>">
	<?php echo $_SESSION['message']; ?>
	</div>
	<?php endif; ?>	
<dl class="dl-horizontal">
		<dt>Nome:</dt>	
		<dd><?php echo $usuario['NOME']; ?></dd>	
		
	<!--<dt>Senha:</dt>-->
	<!--<dd><?php //echo $usuario['SENHA']; ?></dd>	-->
	
	<dt>Hierarquia:</dt>	
	<dd><?php echo $usuario['lvl_acess']; ?></dd>	</dl>	
	<a href="edit.php?id=<?php echo $usuario['id']; ?>" class="btn btn-primary">Editar</a>		 
	<a href="index.php" class="btn btn-default">Voltar</a>	
	</div>	
	</div>	
<?php include(FOOTER_TEMPLATE); ?>