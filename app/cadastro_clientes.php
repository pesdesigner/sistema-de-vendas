<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Sistema de vendas</title>

		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	</head>

	<body>
		<nav class="navbar navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="#">
					<img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
					Cadastro de clientes
				</a>
			</div>
		</nav>

<!-- 		<div class="bg-success pt-2 text-white d-flex justify-content-center">
			<h5>Cliente cadastrado com sucesso!</h5>
		</div> -->

		<div class="container app">
			<div class="row">
				<div class="col-md-3 menu">
					<ul class="list-group">
						<li class="list-group-item"><a href="index.php">Gerenciador</a></li>
						<li class="list-group-item active"><a href="cadastro_clientes.php">Cadastrar</a></li>
						<li class="list-group-item"><a href="clientes.php">Clientes</a></li>
					</ul>
				</div>

				<div class="col-md-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4>Novo Cadastro</h4>
								<hr />

								<form method="POST" action="cadastro_controller.php?acao=inserir">
									<div class="form-group">
										<label>Nome:</label>
										<input type="text" class="form-control" name="nome" placeholder="Nome completo">
									</div>
									<div class="form-group">
										<label>CPF:</label>
										<input type="text" class="form-control" name="cpf" placeholder="CPF">
									</div>
									<div class="form-group">
										<label>E-mail:</label>
										<input type="email" class="form-control" name="email" placeholder="E-mail">
									</div>
									<div class="form-group">
										<label>Telefone:</label>
										<input type="text" class="form-control" name="tel" placeholder="Telefone">
									</div>
									<div class="form-group">
										<label>Cel:</label>
										<input type="text" class="form-control" name="cel" placeholder="Celular">
									</div>
									<div class="form-group">
										<label>Empresa:</label>
										<input type="text" class="form-control" name="empresa" placeholder="Empresa">
									</div>
									<div class="form-group">
										<label>CNPJ:</label>
										<input type="text" class="form-control" name="cnpj" placeholder="CNPJ">
									</div>
									<div class="form-group">
										<label>Cidade:</label>
										<input type="text" class="form-control" name="cidade" placeholder="Cidade">
									</div>
									<div class="form-group">
										<label>Estado:</label>
										<input type="text" class="form-control" name="estado" placeholder="Estado">
									</div>
									<div class="form-group">
										<label>Endereço:</label>
										<input type="text" class="form-control" name="end" placeholder="Endereço">
									</div>
									<div class="form-group">
										<label>CEP:</label>
										<input type="text" class="form-control" name="cep" placeholder="CEP">
									</div>
									<div class="form-group">
										<label>Complemento:</label>
										<input type="text" class="form-control" name="complemento" placeholder="Complemento">
									</div>

									<button class="btn btn-success">Cadastrar</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>