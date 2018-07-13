
<html>
	<head>
	    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
    
		<title>Sewing Mil</title>
		<link rel="icon" href="Icone.png" type="image/x-icon" />
		
		<link rel="icon" href="Icone.png" type="image/x-icon" />
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
		<link href="css/business-casual.css" rel="stylesheet">

	<head>
	
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
						<li class="nav-item active px-lg-4">
							<a class="nav-link text-uppercase text-expanded" href="usuarioela.html">Início
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item px-lg-4">
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
			<div class="bg-faded p-3 my-3">
				<div class="row" style="margin-left:28%">
					<div>
						<h5 class="mb-0" style="text-align:center">
							<br/>
							<?php
								/*$nome = $_SESSION['nome'];
								$con = mysqli_connect("localhost", "root", "", "sismulheresmil");
								$query = mysqli_query($con, "select nome from usuario where nome = '$nome'");
								echo 'Seja bem vindo, '.mysqli_fetch_object($query)->nome.'!';
								*/
							?>
							<br/>
							<br/>
							O botão abaixo te direcionará às instruções dos jogos.
							<button id="v" onClick="Ir()" class="resposta botao form-control">JOGAR</button>
							<br/>
							Porém, se não deseja lê-las, pode ir diretamente aos jogos.
							<button id="x" onClick="Ir2()" href="#"  class="resposta botao form-control">INSTRUÇÕES</button>
							<br/>
						</h5>
					</div>	
				</div>
			</div>
			<footer class="bg-faded text-center py-3">
				<div class="container">
					<p class="m-0" style="text-align:center">© 2017 Sewing Mil | Desenvolvimento: 3º ano / Informática 1M</p>
				</div>
			</footer>
		</div>
		
		<script>
			function Ir2(){    

					window.location.href = 'regras.html';
			}	
			function Ir(){    

					window.location.href = 'frase.html';
			}
		</script>
	</body>
</html>