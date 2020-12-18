<?php
	$acao = 'recuperar';
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

		<script src="js/index.js"></script>

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
			<th scope="col">Cadastro</th>
			<th scope="col">Editar</th>
			<th scope="col">Excluir</th>
			</tr>
		</thead>

		<tbody>
			<?php foreach($cadastros as $indice => $cadastro) { ?>
			<tr>
			<td><?= $cadastro->nome ?></td>
			<td><?= $cadastro->email ?></td>
			<td><?= $cadastro->tel ?></td>
			<td><p class="text-center"><i class="fas fa-file fa-lg text-success"></i></p></td>
			<td><p class="text-center"><i class="fas fa-edit fa-lg text-info" onclick="editar()"></i></p></td>
			<td><p class="text-center"><i class="fas fa-trash-alt fa-lg text-danger" onclick="remover()"></p></i></td>
			</tr>
			<?php } ?>
		</tbody>
		</table>

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