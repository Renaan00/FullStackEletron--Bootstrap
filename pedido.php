<?php 
	$userhost = "localhost";
	$username = "root";
	$password = "";
	$database = "fseletron";

	$conn = mysqli_connect($userhost, $username, $password, $database);

	if (!$conn) {
		die("Ocorreu uma falha ao conectar com o banco Error: ". mysqli_connect_error());
	}

	if (isset($_POST['nome']) && isset($_POST['nome_produto']) && isset($_POST['quantidade']) && isset($_POST['endereco']) && isset($_POST['telefone'])) {
		$nome_cliente = $_POST['nome'];
		$nome_produto = $_POST['nome_produto'];
		$quantidade = $_POST['quantidade'];
		$endereco = $_POST['endereco'];
		$telefone = $_POST['telefone'];

		$sql = "insert into pedido_cliente (nome, nome_produto, quantidade, endereco, telefone) 
				values ('$nome_cliente', '$nome_produto', '$quantidade', '$endereco', '$telefone')";

		$result = $conn->query($sql);

		if ($result) {
			echo "Falha ao enviar os dados Error ". mysqli_connect_error();
		}
	}
?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Fazer pedido</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		.box-pedido {
			display: flex;
			align-items: center;
			flex-direction: column;
			margin-top: 50px;
			padding: 100px;
		}
		form {
			padding: 30px;
		}
		form input {
			width: 260px;
			height: 33px;
			border: 1px solid #ccc;
			border-radius: 5px;
		}
		form #quant {
			width: 44px;
		}
		form input[type=submit]{
			width: 300px;
			height: 35px;
			border: none;
			background-color: red;
			color: white;
			border-radius: 20px;
			box-shadow: 5px 5px 5px #363636;
		}
	</style>
	<div class="container-fluid">
		<!-- Menu -->
		<header>
			<?php include_once("menu.html") ?>
		</header>

		<main>
			<div class="box-pedido">
				<h1>Fazer minha compra</h1>
				<form action="#" method="POST">
					<div class="form-group">
						<label for="nome">Nome Completo:</label>
						<input type="text" name="nome" value="" placeholder="Digite seu nome"><br><br>
					</div>
					<div class="form-group">
						<label for="nome_produto">Nome do produto:</label>
						<input type="text" name="nome_produto" value="" placeholder="Escreva o nome do produto">
						<label for="quantidade">Quantidade:</label>
						<input type="number" id="quant" name="quantidade"><br><br>
					</div>
					<div class="form-group">
						<label for="endereco">Endereço:</label>
						<input type="text" name="endereco" value="" placeholder="Digite seu ndereço"><br><br>
					</div>
					<div class="form-group">
						<label for="tel">Telefone:</label>
						<input type="number" name="telefone" placeholder="(xx) xxxxx-xxxx"><br><br>
					</div>
					<center>
						<input type="submit" class="btn" value="Fazer pedido">
					</center>
				</form>
			</div>
		</main>

		<!-- Rodapé -->
		<?php include_once("rodape.html") ?>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</html>















