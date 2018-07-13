@extends('visual.visualPaginas')

@include('conteudo.navegacao')

@section('content')
<!DOCTYPE html>
<html lang="en">


	<body>
		<div class="container">

			<div class="bg-faded p-4 my-3">
				<div class="row">
					<div class="col-lg-2"></div>
					<!--Fale Conosco-->
					<div class="col-lg-8">
						<hr class="divider"/>
						<h2 class="text-center text-lg text-uppercase my-0">
							<strong>Fale Conosco</strong>
						</h2>
						<hr class="divider"/>
						<form action="submeterContato.php" method="post">
							<div class="form-group col-lg-12">
								<label class="text-heading">Nome</label>
								<input name="nome" type="text" class="form-control"/>
							</div>
							<div class="form-group col-lg-12">
								<label class="text-heading">Email</label>
								<input name="email" type="email" class="form-control"/>
							</div>
							<div class="form-group col-lg-12">
								<label class="text-heading">Telefone</label>
								<input name="telefone" type="text" class="form-control" maxlength="15"/>
							</div>
							<div class="clearfix"></div>
							<div class="form-group col-lg-12">
								<label class="text-heading">Mensagem</label>
								<textarea name="mensagem" class="form-control" rows="6"></textarea>
							</div>
							<div class="form-group col-lg-6">
								<button type="submit" class="btn btn-secondary">ENVIAR</button>
							</div>
							<?php
							/*
							session_start();
							if(isset($_SESSION["msg"])){
								echo '<div class="alert alert-info">'.$_SESSION["msg"].'</div>';
								unset($_SESSION["msg"]);
							}*/
							?>
						</form>
					</div>
					<div class="col-lg-2"></div>
				</div>
		  
			</div>
		</div>
		<div class="bg-faded p-4 my-3">
			<hr class="divider"/>
			<h2 class="text-center text-lg text-uppercase my-0">
				<strong>Equipe</strong>
			</h2>
			<hr class="divider"/>
			<div class="row">
				<div class="col-md-2 mb-2 mb-md-0">
					<div class="card h-60 equipe">
						<div class="card-img"><img class="card-img-top" src="carlos.png" alt=""/></div>
						<div class="card-body text-center">
							<h4 class="card-title m-0">Carlos Cesar 
								</br>
								<small class="text-muted">Admistrador</small>
							</h4>
						</div>
					</div>
				</div>
				<div class="col-md-2 mb-2 mb-md-0">
					<div class="card h-60 equipe">
						<div class="card-img"><img class="card-img-top" src="gabriel.png" alt=""/></div>
						<div class="card-body text-center">
							<h4 class="card-title m-0">Gabriel Bezerra 
								</br>
								<small class="text-muted"> Admistrador </small>
							</h4>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="card h-60 equipe">
						<div class="card-img"><img class="card-img-top" src="nalkson.png" alt=""/></div>
						<div class="card-body text-center">
							<h4 class="card-title m-0"> Nalckson Vinicius 
								</br>
								<small class="text-muted"> Admistrador </small>
							</h4>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="card h-60 equipe">
						<div class="card-img"><img class="card-img-top" src="rodrigo.png" alt=""/></div>
						<div class="card-body text-center">
							<h4 class="card-title m-0">Rodrigo Silva
								</br>
								<small class="text-muted">Admistrador</small>
							</h4>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="card h-60 equipe">
						<div class="card-img"><img class="card-img-top" src="mirelly.png" alt=""/></div>
						<div class="card-body text-center">
							<h4 class="card-title m-0">Mirelly Karolinny
								</br>
								<small class="text-muted">Orientadora</small>
							</h4>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="card h-60 equipe">
						<div class="card-img"><img class="card-img-top" src="daniel.png" alt=""/></div>
						<div class="card-body text-center">
							<h4 class="card-title m-0">Daniel Macedo 
								</br>
								<small class="text-muted">Coorientador</small>
							</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.container -->

		<!-- Bootstrap core JavaScript -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

		<!-- Zoom when clicked function for Google Map -->
		<script>
			$('.map-container').click(function () {
				$(this).find('iframe').addClass('clicked')
			}).mouseleave(function () {
				$(this).find('iframe').removeClass('clicked')
			});
		</script>
	</body>
</html>