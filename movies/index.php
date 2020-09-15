<?php
        Session_start();
	    require_once('functions2.php');	  
		index();
		require('modal2.php');
		?>	
<?php include(HEADER_TEMPLATE); ?>	

<header>	
	<div class="row">	
	<div class="col-sm-6">	
	<h2>Filme</h2>		
	</div>			
	<div class="col-sm-6 text-right h2">
	<a class="btn btn-primary" href="add2.php"><i class="fa fa-plus"></i> Novo Filme</a>
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
		<?php endif; ?>	
<hr>	
<table class="table table-hover">
	<thead>
	<tr>	
	<th>ID</th>	
	<th width="30%">Nome</th>
	<th>Duração</th>		
	<th>Ano</th>		
	<th style="padding-left: 300px;">Duração</th>
	</tr>	
	</thead>	
	<tbody>	
	<?php if ($mvs) : ?>
	<?php foreach ($mvs as $mv) : ?>	
	<tr>
	<td><?php echo $mv['id']; ?></td>		
	<td><?php echo $mv['filme']; ?></td>	
	<td><?php echo $mv['duracao']; ?></td>	
	<td><?php echo $mv['ano']; ?></td>	
	<td class="actions text-left" style="padding-left: 300px">	
	<a href="view2.php?id=<?php echo $produto['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
	<a href="edit2.php?id=<?php echo $produto['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> Editar</a>		
	<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $mv['id']; ?>">	
	<i class="fa fa-trash"></i> Excluir	
	</a>	
	</td>		
	</tr>	
	<?php endforeach; ?>	
	<?php else : ?>	
	<tr>		
	<td colspan="6">Nenhum registro encontrado.</td>
	</tr>
	<?php endif; ?>	
	</tbody>	
	</table>

<?php include(FOOTER_TEMPLATE); ?>