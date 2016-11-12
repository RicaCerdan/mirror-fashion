<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/checkout.css">
	<title>Mirrror Fashion</title>
</head>

<body>

	<nav class="navbar navbar-default navbar-static-top">

		<div class="navbar-header">

			<a class="navbar-brand" href="index.php">Mirror Fashion</a>

			<button class="navbar-toggle" type="button" data-target=".navbar-collapse" data-toggle="collapse"><span class="glyphicon glyphicon-align-justify"></span></button>

		</div>


		<ul class="nav navbar-nav collapse navbar-collapse">

			<li><a href="sobre.php">Sobre</a></li>
			<li><a href="#">Ajuda</a></li>
			<li><a href="#">Perguntas frequentes</a></li>
			<li><a href="#">Entre em contato</a></li>

		</ul>
	</nav>



	<div class="jumbotron">
		<div class="container">
			<h1>Otima escolha!</h1>
			<p>Obrigado por comprar na Mirror Fashion!
				Preencha seus dados para efetivar a compra</p>
			</div>
		</div>

		<div class="container">

			<div class="row">

				<div class="col-sm-4">

					<div class="panel panel-default"><!--painel todo aqui-->

						<div class="panel-heading">

							<h2>Sua compra</h2>

						</div>

						<div class="panel-body">
							<img src="img/produtos/foto1-verde.png" alt="Fuzzy Cardigan" class="img-thumbail img-responsive">

							<dl>
								<dt>Cor</dt>
								<dd><?= $_POST['cor']?></dd>

								<dt>Tamanho</dt>
								<dd><?= $_POST['tamanho']?></dd>

								<dt>Produto</dt>
								<dd><?= $_POST['nome']?></dd>

								<dt>Preco</dt>
								<dd id="preco"><?= $_POST['preco']?></dd>
							</dl>


							<div class="form-group">
								<label for="qt">Quantidade</label>
								<input id="qt" class="form-control" type="number" min="0" max="99" value="1"></div>


								<div class="form-group">
									<label for="total">Total</label>
									<output id="total" class="form-control"><?= $_POST["preco"]?></output>
								</div>

								</div>
							</div>
						</div>




						<form class="col-sm-8"><!--todos os campos aqui-->

							<div class="row">

								<fieldset class="col-sm-6">
									<legend>Dados Pessoais</legend>

									<div class="form-group">
										<label for="nome">Nome Completo</label>
										<input type="text" class="form-control" id="nome" name="nome" autofocus required>
									</div>

									<div class="form-group">
										<label for="email">E-mail</label>
										<input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
									</div>

									<div class="form-group">
										<label for="cpf">CPF</label>
										<input type="text" class="form-control" id="cpf" name="cpf" data-mask="999.999.999-99" placeholder="000.000.000-00" required>
									</div>

									<div class="checkbox">
										<label>
											<input type="checkbox"  value="sim" name="spam" checked>
											Quero receber spam da Mirror Fashion
										</label>
									</div>
								</fieldset>

								<fieldset class="col-sm-6">
									<legend>Cartao de Credito</legend>

									<div class="form-group">
										<label for="numero-cartao">Numero - CVV</label>
										<input type="text" class="form-control" id="numero-cartao" data-mask="9999.9999.9999.9999-999" name="numero-cartao">
									</div>


									<div class="form-group">
										<label for="bandeira-cartao">Bandeira</label>
										<select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
											<option value="master">MasterCard</option>
											<option value="visa">Visa</option>
											<option value="amex">America Express</option>
										</select>
									</div>

									<div class="form-group">
										<label for="validade-cartao">Validade Cartao</label>
										<input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
									</div>
								</fieldset>
							</div>

							<button type="submit" class="btn btn-primary pull-right">
								<span class="glyphicon glyphicon-thumbs-up"></span>
								Confirmar Pedido</button>
							</form>
						</div>
					</div>
				</body>
				<script src="js/jquery.js"></script>
				<script src="js/total.js"></script>
				<script src="js/bootstrap.js"></script>
				<script src="js/inputmask-plugin.js"></script>
				</html>