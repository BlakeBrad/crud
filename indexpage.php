<?php 
    session_start();

    error_reporting(E_ALL);
    ini_set('display_error',1);
    require_once('config.php'); 	
    require_once(DBAPI);
    require(HEADER_TEMPLATE); 
    if ($_SESSION['lvl_acess']!= 0){ $db = open_database(); } ?>	
<h1>Dashboard</h1>
	<hr />	
<?php if ($db) : ?>	
<?php if($_SESSION['lvl_acess'] <= 2){
		echo ' 
<div class="row">	
	<div class="col-xs-6 col-sm-3 col-md-2">	
		<a href="customers/add.php" class="btn btn-primary">
				<div class="row">
					<div class="col-12 text-center">
						<i class="fa fa-plus fa-5x"></i>
					</div>
					<div class="col-12 text-center">
						<p>Novo Cliente</p>
					</div>
				</div>
			</a>
		</div>
	<div class="col-xs-6 col-sm-3 col-md-2">	
		<a href="products/add2.php" class="btn btn-primary">
			<div class="row">
				<div class="col-12 text-center">
					<i class="fa fa-cart-plus fa-5x"></i>
				</div>
				<div class="col-12 text-center">
					<p>Novo Produto</p>
				</div>
			</div>
		</a>
	</div>
		<div class="col-xs-6 col-sm-3 col-md-2">	
		<a href="movies/add2.php" class="btn btn-primary">
			<div class="row">
				<div class="col-12 text-center">
					<i class="fa fa-plus fa-5x"></i>
				</div>
				<div class="col-12 text-center">
					<p>Novo cadastro de Filme</p>
				</div>
			</div>
		</a>
	</div>

<div class="col-xs-6 col-sm-3 col-md-2">	
	<a href="users/addusers.php" class="btn btn-primary" style="margin-bottom:30px;">
		<div class="row">
			<div class="col-12 text-center">
				<i class="fas fa-plus fa-5x"></i>
			</div>
			<div class="col-12 text-center">
				<p>novo cadastro</p>
			</div>
		</div>
	</a>
</div>

</div> 
';		
	}
	else{
		echo '
		<div class="col-xs-6 col-sm-3 col-md-2" >	
			<div class="row">
				<div class="btn btn-danger" style="width: 70%">
					<div class="col-12 text-center">
						<i class="fas fa-user-lock fa-5x"></i>
					</div>
					<div class="col-12 text-center">
						<p>bloqueado</p>
					</div>
				</div>
			</div>
		</div>
	</div>
 
		';
	}
		?>      
		
	
        <div class="row">	
	<div class="col-xs-6 col-sm-3 col-md-2">	
	<a href="customers/index.php" class="btn btn-default" style="margin-top:30px;">
			<div class="row">
				<div class="col-12 text-center">
					<i class="fa fa-user fa-5x"></i>
				</div>
				<div class="col-12 text-center">
					<p>Clientes</p>
				</div>
			</div>
		</a>
        </div>
	<div class="col-xs-6 col-sm-3 col-md-2">	
	<a href="products/index.php" class="btn btn-default" style="margin-top:30px;">
			<div class="row">
				<div class="col-12 text-center">
					<i class="fa fa-shopping-cart fa-5x"></i>
				</div>
				<div class="col-12 text-center">
					<p>Produtos</p>
				</div>
			</div>
		</a>
	</div>
	<div class="col-xs-6 col-sm-3 col-md-2">	
	<a href="movies/index.php" class="btn btn-default" style="margin-top:30px;">
			<div class="row">
				<div class="col-12 text-center">
					<i class="fas fa-ticket-alt fa-5x"></i>
				</div>
				<div class="col-12 text-center">
					<p>Filmes</p>
				</div>
			</div>
		</a>
	</div>	
	<?php if($_SESSION['lvl_acess'] <= 2){
		echo ' 
<div class="col-xs-6 col-sm-3 col-md-2" style="margin-top: 30px">	
	<a href="users/index.php" class="btn btn-default">
		<div class="row">
			<div class="col-12 text-center">
				<i class="fas fa-sign-in-alt fa-5x"></i>
			</div>
			<div class="col-12 text-center">
				<p>cadastros</p>
			</div>
		</div>
	</a>
</div>
</div> ';		
	}
	else{
		echo '
		<div class="col-xs-6 col-sm-3 col-md-2" style=" padding-left:0px; padding-right:0px;">	
			<div class="btn btn-danger" style="margin-top: 30px; width: 70%">	
				<div class="row">
					<div class="col-12 text-center" style=" padding-left:0px; padding-right:0px; width: 75%;">
						<i class="fas fa-user-lock fa-5x"></i>
					</div>
					<div class="col-12 text-center">
						<p>bloqueado</p>
					</div>
				</div>
			</div>
		</div> 
	</div> 
		';
	}
		?>
       
<?php else : ?>	
	<div class="alert alert-danger" role="alert">	
	<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>	
	</div>	
<?php endif; ?>	
<?php include(FOOTER_TEMPLATE); ?>