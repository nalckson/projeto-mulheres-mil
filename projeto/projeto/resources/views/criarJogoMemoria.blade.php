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

		<!-- Navigation -->
		<nav class="navbar navbar-expand-lg navbar-light bg-faded py-lg-4">
			<div class="container">
				<a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav mx-auto">
						<li class="nav-item px-lg-3">
							<a class="nav-link text-uppercase text-expanded" href="inicioAdm.php">Início
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item px-lg-3">
							<a class="nav-link text-uppercase text-expanded" href="dadosAdm.php">Meus dados</a>
						</li>
						<li class="nav-item px-lg-3">
							<a class="nav-link text-uppercase text-expanded" href="cadastro.php">Cadastrar</a>
						</li>
						<li class="nav-item px-lg-3">
							<a class="nav-link text-uppercase text-expanded" href="mCadast.php">Usuários cadastrados</a>
						</li>
						<li class="nav-item active px-lg-3">
							<a class="nav-link text-uppercase text-expanded" href="JogosAdm.php">Manipular jogos</a>
						</li>
						<li class="nav-item px-lg-3">
							<a class="nav-link text-uppercase text-expanded" href="logout.php">Sair</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<div class="container">
			<center>
				<div style="width:100%">
					<div class="bg-faded p-4 my-3" width="100%">
						<hr class="divider"/>
						<h3 class="mb-0">Jogo da Memória</h3>
						<hr class="divider"/>
						<div class="row p-3" style="justify-content:center" align="center" width="100%">
							<form action="" method="post" style="position:relative; width:90%" enctype="multipart/form-data">
								<h2 class="text-cad text-uppercase my-0">
									<strong>Quantidade de pares</strong>
								</h2>
								<select class="form-control" name="quantidadeC" id="quantidadeC" required="required">
									<option>Selecione</option>
									<option value='1'>1</option>
									<option value='2'>2</option>
									<option value='3'>3</option>
									<option value='4'>4</option>
									<option value='5'>5</option>
									<option value='6'>6</option>
									<option value='7'>7</option>
									<option value='8'>8</option>
									<option value='9'>9</option>
									<option value='10'>10</option>
									<option value='11'>11</option>
									<option value='12'>12</option>
								</select>
								<br/>
								<table id="tabela">
								</table>
								<br/>
								<button type="submit" class="form-control" id="criar">CRIAR</button>
							</form>
						</div>
					</div>
				</div>
			</center>
		</div>
		
		<footer class="bg-faded text-center py-3">
			<div class="container">
				<p class="m-0" style="text-align:center">© 2017 Sewing Mil | Desenvolvimento: 3º ano / Informática 1M</p>
			</div>
		</footer>

		<!-- Bootstrap core JavaScript -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script>
			$(document).ready(function(){
				var valor;
				$("select")
					.change(function(){
						valor = $('#quantidadeC').val();
						$("select option:selected").each(function(){
							$("#tabela").html('<tr><td><h2 class="text-cad text-uppercase my-0"><strong>Primeira imagem do par</strong></h2></td><td><h2 class="text-cad text-uppercase my-0"><strong>Segunda imagem do par</strong></h2></td><tr><td><input type="file" class="form-control" name="imagem10"/></td><td><input type="file" class="form-control" name="imagem20"/></td></tr>');
							for(i = 1; i < valor; i++){ 
								$("#tabela").append('<tr><td><input type="file" class="form-control" name="imagem1'+i+'"/></td><td><input type="file" class="form-control" name="imagem2'+i+'"/></td></tr>');
							}
						});
					})
					.trigger("change");
			});
		</script>
		
	</body>

</html>
