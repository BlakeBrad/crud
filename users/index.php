<?php
    Session_start();
	require_once('functions.php');	  
	index();
?>	
<?php include(HEADER_TEMPLATE); ?>	
<script src="main_access.js"></script>
<script src="../js/jquery-3.4.1.js"></script>
<header>	
	<div class="row">	
	<div class="col-sm-6">	
	<h2>Usuário</h2>		
	</div>			
	<div class="col-sm-6 text-right h2">
	<a class="btn btn-primary" href="addusers.php"><i class="fa fa-plus"></i> Novo Usuário</a>
	<a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>	
	</div>	
	</div>
</header>	
	<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>	
	<?php echo $_SESSION['message']; ?>	
	</div>	
	<?php clear_messages; ?>	
	<?php	endif; ?>	
	<hr>	
	<table class="table table-hover">
			<tr>	
				<th>ID</th>	
				<th width="30%">Nome</th>	

				<th style="padding-left: 750px;">Opções</th>
			</tr>	
		</thead>	
		<tbody>	
			<?php if ($usuarios) : ?>
			<?php foreach ($usuarios as $usuario) : ?>	
			<tr>			
				<td><?php echo $usuario['id']; ?></td>		
				<td><?php echo $usuario['NOME']; ?></td>	
				<td class="actions text-right">	
					<a href="view.php?id=<?php echo $usuario['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-view"></i> Visualizar</a>		
					<a href="edit.php?id=<?php echo $usuario['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-user-edit"></i> Editar</a>		
					<?php
					if($_SESSION['lvl_acess'] == 1){
					 echo '
					<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-usuario=" ' . $usuario['id'] . '">
					<i class="fa fa-trash"></i> Excluir	
					</a>	
			
			</td>
		</tr>	
';
				}else{ echo '
					<div class="btn btn-sm btn-danger">
					<span>bloqueado</span>
				</div>
			</tr>	
';}
			 endforeach; ?>	
			<?php else : ?>	
			<tr>		
				<td colspan="6">Nenhum registro encontrado.</td>
			</tr>
			<?php endif; ?>	
		</tbody>	
	</table>
<?php include('modal_access.php'); ?>
<?php include(FOOTER_TEMPLATE); ?>
