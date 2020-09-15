<?php 
	  require_once('functions2.php'); 
	  add();	
	  session_start();
        include(HEADER_TEMPLATE); ?>	

<h2>Novo Produto</h2>
	
<form action="add2.php" method="post">	
  <!-- area de campos do form -->
  <hr />	
  <div class="row">	  
  <div class="form-group col-md-7">	
  <label for="name">Nome do produto</label>	
  <input type="text" class="form-control" name="produto['name_pro']">
  </div>	
    <div class="form-group col-md-3">	
	<label for="campo2">descrição</label>
	<input type="text" class="form-control" name="produto['descri']">
	</div>	
    <div class="form-group col-md-2">	
	<label for="campo3">preço</label>	 
	<input type="text" class="form-control" name="produto['precounit']">
	</div>
	</div>	 
	<div class="row">
	<div class="form-group col-md-5">
	<label for="campo1">quantia</label>
	<input type="text" class="form-control" name="produto['quant']">	 
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