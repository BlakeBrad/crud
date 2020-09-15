<?php 
	  require_once('functions.php'); 
	  add();	
	  session_start();
	  ?>	
<?php include(HEADER_TEMPLATE); ?>	
<h2>Novo Usuário</h2>
	
<form action="addusers.php" method="post">	
  <!-- area de campos do form -->
  <hr />	
  <div class="row">	  
		<div class="form-group col-md-7">	
		  <label for="name">usuário</label>	
		  <input type="text" class="form-control" name="login" id="login">
		</div>	
		<div class="form-group col-md-3">	
			<label for="campo2">senha</label>
			<input type="text" class="form-control"  name="senha" id="senha">
		</div>
		<div class="form-group col-md-3">	
			<label for="campo2">nível de acesso</label>
			<input type="text" class="form-control"  name="acess" id="acess" placeholder=" (1=adm, 2=usuário, 3=guest.)">
		</div>	
	</div>
	<div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary" value="Cadastrar" id="cadastrar" name="cadastrar">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
   
	
	</form>	
<?php include(FOOTER_TEMPLATE); ?>