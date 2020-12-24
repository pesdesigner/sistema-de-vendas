<?php
	$acao = 'recuperar';
	$view = 0;
	require 'cadastro_controller.php';

?>

<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Sistema - Clientes</title>

		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

		<script src="js/main.js"></script>

	</head>
	<body>
		<nav class="navbar navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="#">
					<img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
					Clientes cadastrados
				</a>
			</div>
		</nav>

		<?php if(isset($_GET['update']) && $_GET['update'] == 1) { ?>
		<div class="bg-success pt-2 text-white d-flex justify-content-center">
			<h5>Cadastro atualizado com sucesso!</h5>
		</div>
		<?php } ?>	

		<div class="container app">
			<div class="row">
				<div class="col-sm-3 menu">
					<ul class="list-group">
						<li class="list-group-item"><a href="index.php">Gerenciador</a></li>
						<li class="list-group-item"><a href="cadastro_clientes.php">Cadastrar</a></li>
						<li class="list-group-item active"><a href="clientes.php">Clientes</a></li>
					</ul>
				</div>

				<div class="col-sm-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4>Clientes cadastrados</h4>
						
		<table class="table table-hover">
		<thead>
			<tr>
			<th scope="col">Nome</th>
			<th scope="col">E-mail</th>
			<th scope="col">Telefone</th>
			<th scope="col">Empresa</th>
			<th scope="col">Cadastro</th>
			</tr>
		</thead>

		<tbody>
			<?php foreach($cadastros as $indice => $cadastro) {?>

			<tr>
			<td><?= $cadastro->nome ?></td>
			<td><?= $cadastro->email ?></td>
			<td><?= $cadastro->tel ?></td>
			<td><?= $cadastro->empresa ?></td>
			<td><p class="text-center"><i class="fas fa-file fa-lg text-success cursor" onclick="view(<?= $cadastro->id_cliente ?>)"></i></p></td>
			</tr>
			
			<?php
		} ?>
		</tbody>
		</table>

</div>

							</div>
<hr>
<div class="row">
<div class="col">
<div class="row mb-3 d-flex align-items-center">
	<div class="col-sm-10">
	<h4>Atualizar cadastro</h4>
	</div>
	<div class="col-sm-2 d-flex justify-content-between">
		<i class="fas fa-trash-alt fa-lg text-danger cursor" onclick="remover()"></i>
	</div>
	</div>
<hr>

	<?php
		echo '<pre>';
	//	print_r($cliente);
		echo '</pre>';

	if (isset($cliente)){ ?>
		
	<div class="row mb-3 d-flex align-items-center">
	<div class="col-sm-10">
	<p id="Nome"><strong>Nome:</strong> <?= $cliente->nome ?></p>
	</div>
	
	<div class="col-sm-2 d-flex align-items-right">
		<i class="fas fa-edit fa-lg text-info cursor" onclick="editar(<?= $cliente->id_cliente ?>,'Nome','<?= $cliente->nome ?>')"></i>			
	</div>

	<div class="col-sm-10">
	<p id="CPF"><strong>CPF:</strong> <?= $cliente->cpf ?></p>
	</div>

	<div class="col-sm-2 d-flex align-items-right">
		<i class="fas fa-edit fa-lg text-info cursor" onclick="editar(<?= $cliente->id_cliente ?>,'CPF','<?= $cliente->cpf ?>')"></i>			
	</div>

	<div class="col-sm-10">
	<p id="Email"><strong>E-mail:</strong> <?= $cliente->email ?></p>
	</div>

	<div class="col-sm-2 d-flex align-items-right">
		<i class="fas fa-edit fa-lg text-info cursor" onclick="editar(<?= $cliente->id_cliente ?>,'Email','<?= $cliente->email ?>')"></i>			
	</div>

	<div class="col-sm-10">
	<p id="Tel"><strong>Tel:</strong> <?= $cliente->tel ?></p>
	</div>

	<div class="col-sm-2 d-flex align-items-right">
		<i class="fas fa-edit fa-lg text-info cursor" onclick="editar(<?= $cliente->id_cliente ?>,'Tel','<?= $cliente->tel ?>')"></i>			
	</div>

	<div class="col-sm-10">
	<p id="Cel"><strong>Cel:</strong> <?= $cliente->cel ?></p>
	</div>

	<div class="col-sm-2 d-flex align-items-right">
		<i class="fas fa-edit fa-lg text-info cursor" onclick="editar(<?= $cliente->id_cliente ?>,'Cel','<?= $cliente->cel ?>')"></i>			
	</div>

	<div class="col-sm-10">
	<p id="Empresa"><strong>Empresa:</strong> <?= $cliente->empresa ?></p>
	</div>

	<div class="col-sm-2 d-flex align-items-right">
		<i class="fas fa-edit fa-lg text-info cursor" onclick="editar(<?= $cliente->id_cliente ?>,'Empresa','<?= $cliente->empresa ?>')"></i>			
	</div>

	<div class="col-sm-10">
	<p id="CNPJ"><strong>CNPJ:</strong> <?= $cliente->cnpj ?></p>
	</div>

	<div class="col-sm-2 d-flex align-items-right">
		<i class="fas fa-edit fa-lg text-info cursor" onclick="editar(<?= $cliente->id_cliente ?>,'CNPJ','<?= $cliente->cnpj ?>')"></i>			
	</div>

	<div class="col-sm-10">
	<p id="Cidade"><strong>Cidade:</strong> <?= $cliente->cidade ?></p>
	</div>

	<div class="col-sm-2 d-flex align-items-right">
		<i class="fas fa-edit fa-lg text-info cursor" onclick="editar(<?= $cliente->id_cliente ?>,'Cidade','<?= $cliente->cidade ?>')"></i>			
	</div>

	<div class="col-sm-10">
	<p id="Estado"><strong>Estado:</strong> <?= $cliente->estado ?></p>
	</div>

	<div class="col-sm-2 d-flex align-items-right">
		<i class="fas fa-edit fa-lg text-info cursor" onclick="editar(<?= $cliente->id_cliente ?>,'Estado','<?= $cliente->estado ?>')"></i>			
	</div>

	<div class="col-sm-10">
	<p id="End"><strong>End:</strong> <?= $cliente->end ?></p>
	</div>

	<div class="col-sm-2 d-flex align-items-right">
		<i class="fas fa-edit fa-lg text-info cursor" onclick="editar(<?= $cliente->id_cliente ?>,'End','<?= $cliente->end ?>')"></i>			
	</div>

	<div class="col-sm-10">
	<p id="CEP"><strong>CEP:</strong> <?= $cliente->cep ?></p>
	</div>

	<div class="col-sm-2 d-flex align-items-right">
		<i class="fas fa-edit fa-lg text-info cursor" onclick="editar(<?= $cliente->id_cliente ?>,'CEP','<?= $cliente->cep ?>')"></i>			
	</div>

	<div class="col-sm-10">
	<p id="Complemento"><strong>Complemento:</strong> <?= $cliente->complemento ?></p>
	</div>

	<div class="col-sm-2 d-flex align-items-right">
		<i class="fas fa-edit fa-lg text-info cursor" onclick="editar(<?= $cliente->id_cliente ?>,'Complemento','<?= $cliente->complemento ?>')"></i>			
	</div>

	<div class="col-sm-10">
	<p><strong>Data do cadastro:</strong> <?= $cliente->data_cadastro ?></p>
	</div>

	</div>
	</div>

</div>

	<?php } else { ?>
		<p><strong><?php echo $message; ?></strong></p>
	<?php } ?>
		</div>

</div>



						</div>
					</div>
				</div>
			</div>
		</div>

	

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>	
	</body>
</html>