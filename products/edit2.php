<?php 	
  require_once('functions2.php'); 
  edit();
  ?>	
<?php include(HEADER_TEMPLATE); ?>	
<h2>Atualizar Cliente</h2>	
<form action="edit2.php?id=<?php echo $produto['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="produto['name_pro']" value="<?php echo $produto['name_pro']; ?>">
    </div>
	<div class="form-group col-md-7">
      <label for="desc">Descrição</label>
      <input type="text" class="form-control" name="produto['descri']" value="<?php echo $produto['descri']; ?>">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-3">
      <label for="campo1">Quantidade</label>
      <input type="text" class="form-control" name="produto['quant']" value="<?php echo $produto['quant']; ?>">
    </div>
    <div class="form-group col-md-3">
      <label for="campo2">Preço Unitário</label>
      <input type="number" step="0.01" class="form-control" name="produto['precounit']" value="<?php echo $produto['precounit'];?>">
    </div>
  </div>
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>
<?php include(FOOTER_TEMPLATE); ?>