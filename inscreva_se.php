<!DOCTYPE HTML>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">

	<title>Cadastro Médico - PADRÃO</title>

	<!-- jquery - link cdn -->
	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

	<script>
		$(document).on('submit', 'formCadastrarse', function() {
			$("input").val("");
			$("formCadastrarse").val("");
		});
	</script>

	<!-- bootstrap - link cdn -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

</head>

<body>

	<!-- Static navbar -->
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<img src="imagens/icone_padrao.png" />
			</div>

			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="login.php">Logout</a></li>
				</ul>
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
					<label>
						Nome<span style="color: red;">*</span>:
					</label>
					<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required="requiored">
				</div>

				<div class="form-group">
					<label>
						Especialidade<span style="color: red;">*</span>:
					</label>
					<input type="text" class="form-control" id="especialidade" name="especialidade" placeholder="Especialidade" required="requiored">
				</div>

				<div class="form-group">
					<label>
						Endereço:
					</label>
					<input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço">
				</div>

				<div class="form-group">
					<label>
						Telefone:
					</label>
					<input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone">
				</div>

				<div class="form-group">
					<label>
						Secretária:
					</label>
					<input type="text" class="form-control" id="secretaria" name="secretaria" placeholder="Secretária">
				</div>

				<div class="form-group">
					<label>
						CRM<span style="color: red;">*</span>:
					</label>
					<input type="text" class="form-control" id="crm" name="crm" placeholder="CRM" required="requiored">
				</div>

				<div class="form-group">
					<label>
						DN:
					</label>
					<input type="date" class="form-control" id="dn" name="dn" placeholder="DN">
				</div>
				<div style="display: inline-block;">
					<div style="display: inline-block; margin: 5px;">
						<button type="reset" class="btn btn-default form-control" style="width: 160px;">Limpar</button>
					</div>
					<div style="display: inline-block;">
						<button type="submit" class="btn btn-danger form-control" style="width: 160px;">Cadastrar</button>
					</div>
				</div>
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