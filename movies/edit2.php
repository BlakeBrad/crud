<?php 	
    session_start();
  require_once('functions2.php'); 
  require_once('../config.php'); 
  edit();
  	
 include(HEADER_TEMPLATE); ?>	
<h2>Atualizar Cliente</h2>	
<form action="edit2.php?id=<?php echo $mv['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="mv['filme']" value="<?php echo $mv['filme']; ?>">
    </div>
	<div class="form-group col-md-7">
      <label for="desc">Duração</label>
      <input type="text" class="form-control" name="mv['duracao']" value="<?php echo $mv['duracao']; ?>">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-3">
      <label for="campo1">Diretor</label>
      <input type="text" class="form-control" name="mv['diretor']" value="<?php echo $mv['diretor']; ?>">
    </div>
    <div class="form-group col-md-3">
      <label for="campo2">Ano</label>
      <input type="number" step="0.01" class="form-control" name="mv['ano']" value="<?php echo $mv['ano'];?>">
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