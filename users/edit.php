<?php 
require_once('functions.php'); 	
edit();
?>	
<?php include(HEADER_TEMPLATE); ?>	
<h2>Atualizar Cliente</h2>	
<form action="edit.php?id=<?php echo $usuario['id']; ?>" method="post">	
  <hr />
  <div class="row">	   
  <div class="form-group col-md-7">	   
  <label for="name">Usuário</label>	
  <input type="text" class="form-control" name="usuario['nome']" value="<?php echo $usuario['NOME']; ?>">	  
  </div>	
    <div class="form-group col-md-3">
	<label for="campo2">Senha</label>	 
	<input type="text" class="form-control" name="usuario['senha']" value="<?php echo $usuario['SENHA']; ?>">	
    </div>	
	<button type="submit" class="btn btn-sm btn-primary">Salvar</button>	
	<a href="index.php"><button class="btn btn-sm btn-default">Cancelar</a></button>	  
	</div>
	</form>	
<?php include(FOOTER_TEMPLATE); ?>