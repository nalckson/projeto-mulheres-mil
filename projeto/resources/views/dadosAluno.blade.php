
<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Sewing Mil</title>
		<link rel="icon" href="Icone.png" type="image/x-icon" />

		<!-- Bootstrap core CSS -->
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom fonts for this template -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

		<!-- Custom styles for this template -->
		<link href="css/business-casual.css" rel="stylesheet">

	</head>

	<body>
	    
		<div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block">Sewing Mil</div>
		<div class="tagline-lower text-center text-expanded text-shadow text-uppercase text-white mb-5 d-none d-lg-block">Jogos Online com Ingles Tecnico do curso de Corte e Costura | IFRN - Campus Caico</div>
		<nav class="navbar navbar-expand-lg navbar-light bg-faded py-lg-4">
			<div class="container">
				<a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav mx-auto">
						<li class="nav-item px-lg-4">
							<a class="nav-link text-uppercase text-expanded" href="usuarioela.php">Início
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item active px-lg-4">
							<a class="nav-link text-uppercase text-expanded" href="dadosMulher.php">Meus dados</a>
						</li>
						<li class="nav-item px-lg-4">
							<a class="nav-link text-uppercase text-expanded" href="logout.php">Sair</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<div class="container">

			<div class="bg-faded p-4 my-3">
				<hr class="divider"/>
				<h2 class="text-center text-lg text-uppercase my-0">
					<strong>Mulher Mil</strong>
				</h2>
				<hr class="divider">
				<div class="row">
					<div class="col-lg-4">
						<h5 class="mb-0">Nome</h5>
						<div class="mb-4" name="nome">
							<?php
								/*$nome = $_SESSION['nome'];
								$con = mysqli_connect("localhost", "root", "", "sismulheresmil");
								$query = mysqli_query($con, "select nome from usuario where nome = '$nome'");
								echo mysqli_fetch_object($query)->nome;
								*/
							?>
						</div>
						<h5 class="mb-0">Email</h5>
						<div class="mb-4">
							<?php
								/*$email = $_SESSION['email'];
								$query = mysqli_query($con, "select email from usuario where email = '$email'");
								echo mysqli_fetch_object($query)->email;
								*/
							?>
						</div>
						<h5 class="mb-0">Matrícula</h5>
						<div class="mb-4">
							<?php
								/*$matricula = $_SESSION['matricula'];
								$query = mysqli_query($con, "select matricula from usuario where matricula = $matricula");
								echo mysqli_fetch_object($query)->matricula;
								*/
							?>
						</div>
						<h5 class="mb-0">Telefone</h5>
						<div class="mb-4">
							<?php
								/*$telefone = $_SESSION['telefone'];
								$query = mysqli_query($con, "select telefone from usuario where telefone = '$telefone'");
								echo mysqli_fetch_object($query)->telefone;
								*/
							?>
						</div>
						<h5 class="mb-0">Acertos do Jogo: Complete a Frase</h5>
						<div class="mb-4">
							<?php
								/*$acertos = $_SESSION['acertos'];
								$query = mysqli_query($con, "SELECT nome,acertos FROM usuario,respostas where usuario.matricula=respostas.matricula");
								echo mysqli_fetch_object($query)->telefone;
								*/
							?>
						</div>
					</div>
				</div>
			</div>

		<footer class="bg-faded text-center py-3">
			<div class="container">
				<p class="m-0" style="text-align:center">© 2017 Sewing Mil | Desenvolvimento: 3º ano / Informática 1M</p>
			</div>
		</footer>

		<!-- Bootstrap core JavaScript -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	</body>

</html>