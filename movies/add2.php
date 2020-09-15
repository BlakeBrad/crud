<?php 
	  require_once('functions2.php'); 
	  add();	
	  session_start();
	  ?>	
<?php include(HEADER_TEMPLATE); ?>	

<h2>Novo Produto</h2>
	
<form action="add2.php" method="post">	
  <!-- area de campos do form -->
  <hr />	
  <div class="row">	  
  <div class="form-group col-md-7">	
  <label for="name">Nome do filme</label>	
  <input type="text" class="form-control" name="mv['filme']">
  </div>	
    <div class="form-group col-md-3">	
	<label for="campo2">Duração</label>
	<input type="text" class="form-control" name="mv['duracao']">
	</div>	
    <div class="form-group col-md-2">	
	<label for="campo3">Diretor</label>	 
	<input type="text" class="form-control" name="mv['diretor']">
	</div>
	</div>	 
	<div class="row">
	<div class="form-group col-md-5">
	<label for="campo1">Ano</label>
	<input type="text" class="form-control" name="mv['ano']">	 
	</div>		  
	</div>		  
	<div id="actions" class="row">	  
	<div class="col-md-12">	     
	<button type="submit" class="btn btn-primary" href="index">Salvar</button>
	<a href="index.php" class="btn btn-default">Cancelar</a>
	</div>
	</div>
	
	</form>	
<?php include(FOOTER_TEMPLATE); ?>