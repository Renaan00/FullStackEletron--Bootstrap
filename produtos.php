<?php  
	$userhost = "localhost";
	$username = "root";
	$password = "";
	$database = "fseletron";

	$conn = mysqli_connect($userhost, $username, $password, $database);

	if (!$conn) {
		die("Ocorreu uma falha ao conectar com o banco Error: ". mysqli_connect_error());
	}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Produtos - Full Stack Eletro</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<script src="js/funcoes.js" type="text/javascript"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<div class="cantainer-fluid">
		<!-- Menu -->
		<div class="row">
			<div class="col">
				<?php include("menu.html") ?>
			</div>
		</div>

		<header>
			<h2>Produtos</h2>
		</header>

		<hr>

		<section class="categorias">
			<h3>Categorias</h3>
			<ul>
				<li onclick="todosProdutos()" onmouseover="sobreCategoria(this)" onmouseout="foraCategoria(this)">Todos (12)</li>
				<li onclick="exibir_categoria('geladeira')" onmouseover="sobreCategoria(this)" onmouseout="foraCategoria(this)" id="geladeira">Geladeiras (3)</li>
				<li onclick="exibir_categoria('fogao')" onmouseover="sobreCategoria(this)" onmouseout="foraCategoria(this)" id="fogao">Fogões (2)</li>
				<li onclick="exibir_categoria('micro-ondas')" onmouseover="sobreCategoria(this)" onmouseout="foraCategoria(this)" id="micro-ondas">Microondas (3)</li>
				<li onclick="exibir_categoria('lavadora de roupas')" onmouseover="sobreCategoria(this)" onmouseout="foraCategoria(this)" id="lavadora de roupas">Lavadoura de roupas (2)</li>
				<li onclick="exibir_categoria('lava-louça')" onmouseover="sobreCategoria(this)" onmouseout="foraCategoria(this)" id="lava-louça">Lava-louças (2)</li>
			</ul>

		</section>

		<section class="produtos">

		<?php
			$sql = "select * from produtos";
			$result = $conn->query($sql);

			if ($result && $result->num_rows > 0) {
				while ($row = $result->fetch_assoc()){
		?>  
			<div class="box_produto" id="<?php echo $row['nome_produto'] ?>" style="display:inline-block">
				<img width="120px" src="<?php echo $row['imagem'] ?>" onclick="zoomProduto(this)">
				<br>
				<p class="descricao"><?php echo $row['descricao'] ?></p>
				<hr>
				<p class="descricao"><strike> R$ 6.389,00</strike></p>
				<p class="preco">R$ <?php echo $row['preco'] ?></p>
				<a href="./pedido.php">Fazer meu pedido</a>
			</div>
		<?php
				}	
			}else{
				echo "Nunhum produto encontrado";
			}
		?>	
			
		<br><br><br>
		
		<!-- Rodapé -->
	    <?php include("rodape.html") ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>






