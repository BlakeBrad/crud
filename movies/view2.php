<?php 
	require_once('functions2.php'); 
	view($_GET['id']);
	session_start();
	index();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Cliente <?php echo $mv['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome do filme:</dt>
	<dd><?php echo $mv['filme']; ?></dd>
	<dt>Duração:</dt>
	<dd><?php echo $mv['duracao']; ?></dd>
	<dt>Diretor:</dt>
	<dd><?php echo $mv['diretor']; ?></dd>
	<dt>Ano:</dt>
	<dd><?php echo $mv['ano']; ?></dd>
</dl>
<?// echo 'teste: \n' . $mv['duracao']; . '\n'?>
<?//php var_dump($mv);?>
<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit2.php?id=<?php echo $mv['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>