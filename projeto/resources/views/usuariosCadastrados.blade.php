
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
						<li class="nav-item active px-lg-3">
							<a class="nav-link text-uppercase text-expanded" href="mCadast.php">Usuários cadastrados</a>
						</li>
						<li class="nav-item px-lg-3">
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
			<div class="bg-faded p-4 my-3">
				<hr class="divider"/>
				<h2 class="text-center text-lg text-uppercase my-0">
					<strong>Busca de usuário pelo nome ou matrícula</strong>
				</h2>
				<hr class="divider"/>
				<br/>
				<form action="" method="post">
					<div class="row" id="divBusca">
						<input type="text" id="txtBusca" class="form-control" name="busca" placeholder="Buscar..."/>
						<input style="border:2px solid gray; border-radius:10px" type="submit" class="form-control text-lg text-uppercase my-0" id="btnBusca" value="Buscar"></input>
					</div>
				</form>
				<br/>
				<div id="escrever_busca" style="padding-left:4%">
				<table border='.5' width='100%'>
					<?php
/*
						if(isset($_POST["busca"])){ // Verifica se foram setados os valores post do formulário

							$busca = trim($_POST["busca"]);

							$con = mysqli_connect("localhost","root","","sismulheresmil");

							$query = mysqli_query($con, "select * from usuario where nome like '%$busca%' or matricula like '$busca' order by nome");
							
							$numRegistros = mysqli_num_rows($query);
							
							if ($numRegistros != 0){
								while ($linha = mysqli_fetch_object($query)) {
								$deletar = "location.href='deletar.php?matricula=";
								$alterar = "location.href='editarMulher.php?matricula=";
								echo "<div class='row'>
								<div class='col-sm-8'>
									<tr>
									<td>
									<a class='nav-item px-lg-4 nav-link text-uppercase text-expanded lista' href='maisDetalhes.php?matricula=".$linha->matricula."'>".$linha->nome."</a>
									</td>
								</div>
								<div class='col-sm-2'>
									<td> <center> <button style='width:65%; height:10%; border:2px solid gray; border-radius:10px' class='form-control  my-0'  onclick='".$deletar.$linha->matricula."'> <a class='nav-item nav-link lista' style='padding:0' href='deletar.php?matricula=".$linha->matricula."' > EXCLUIR </a> </button> </center> </td>
								</div>
								<div class='col-sm-2'>";
								echo "<td> 
								<center> 
									<button style='width:65%; height:10%; border:2px solid gray; border-radius:10px' onclick='".$alterar.$linha->matricula."' class='form-control  my-0'><a class='nav-item nav-link lista' style='padding:0' href='editarMulher.php?matricula=".$linha->matricula."'> EDITAR</a> </button> </center> </td>
									</tr>
										</div>
									</div>";
								}
							} else {
								echo "Nenhum usuário foi encontrado com a busca: '".$busca."'!";
							}
							mysqli_close($con);
						}
*/					
					?>
					
				</table>
				</div>				
			</div>

			<footer class="bg-faded text-center py-3">
				<div class="container">
					<p class="m-0" style="text-align:center">© 2017 Sewing Mil | Desenvolvimento: 3º ano / Informática 1M</p>
				</div>
			</footer>
		</div>

		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	</body>

</html>