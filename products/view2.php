<?php 
	require_once('functions2.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Cliente <?php echo $produto['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome do Produto:</dt>
	<dd><?php echo $produto['name_pro']; ?></dd>
	<dt>Descrição:</dt>
	<dd><?php echo $produto['descri']; ?></dd>
	<dt>Preço:</dt>
	<dd><?php echo $produto['precounit']; ?></dd>
	<dt>Quantia:</dt>
	<dd><?php echo $produto['quant']; ?></dd>
</dl>
<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit2.php?id=<?php echo $produto['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>