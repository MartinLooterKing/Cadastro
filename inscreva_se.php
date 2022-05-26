<!DOCTYPE HTML>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">

	<title>Cadastro Médico - PADRÃO</title>

	<!-- jquery - link cdn -->
	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

	<!-- bootstrap - link cdn -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

</head>

<body>

	<!-- Static navbar -->
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container" style="display: flex; justify-content:center;">
			<div class="navbar-header">
				<img src="imagens/icone_padrao.png" />
			</div>
		</div>
	</nav>


	<div class="container">

		<br /><br />

		<div class="col-md-4"></div>
		<div class="col-md-4">
			<h3>Inscrever</h3>
			<br />
			<form method="post" action="cadastrar.php" id="formCadastrarse">
				<div class="form-group">
					<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required="requiored">
				</div>

				<div class="form-group">
					<input type="text" class="form-control" id="especialidade" name="especialidade" placeholder="Especialidade" required="requiored">
				</div>

				<div class="form-group">
					<input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço">
				</div>

				<div class="form-group">
					<input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Telefone">
				</div>

				<div class="form-group">
					<input type="text" class="form-control" id="secretaria" name="secretaria" placeholder="Secretária">
				</div>

				<div class="form-group">
					<input type="text" class="form-control" id="crm" name="crm" placeholder="CRM" required="requiored">
				</div>

				<div class="form-group">
					<input type="date" class="form-control" id="dn" name="dn" placeholder="DN">
				</div>

				<button type="submit" class="btn btn-danger form-control">Inscrever</button>
			</form>
		</div>
		<div class="col-md-4"></div>

		<div class="clearfix"></div>
		<br />
		<div class="col-md-4"></div>
		<div class="col-md-4"></div>
		<div class="col-md-4"></div>

	</div>


	</div>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</body>

</html>