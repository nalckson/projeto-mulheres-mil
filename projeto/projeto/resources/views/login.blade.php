@extends('visual.visualPaginas')

@include('conteudo.navegacao')

@section('content')
<html>

	
	<body>
		
		<div class="row">
			<div class="col s4"></div>
			<div class="col s4">
				<div class="bg-faded p-4 my-4">
					<div class="row" align="center">
						<form class="col s12" method="post" action="">
							<br/>
							<h2 class="text-center text-lg text-uppercase my-0">
								<strong>Matricula</strong>
							</h2>
							<br/>
							<input name="matricula" type="text" class="form-control" style="width:95%" required="required"/>
							<br/>
							<h2 class="text-center text-lg text-uppercase my-0">
								<strong>Senha</strong>
							</h2>
							<br/>
							<input name="senha" type="password" class="form-control" style="width:95%" required="required"/>
							<br/>
							<input style="width:95%" class="form-control text-lg text-uppercase my-0" type="submit" name="action" value="Acessar"></input>
							
							<?php
							
							/*
							if(isset($_SESSION["aviso"]) && $_SESSION['aviso'] != 'OK'){
								echo '<div class="alert alert-info">'.$_SESSION['aviso'].'</div>';
								unset($_SESSION["aviso"]);
							}
							*/
							?>
							
						</form>
					</div>
				</div>
			</div>
			<div class="col s4"></div>
		</div>

	</body>
</html>