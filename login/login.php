<!doctype html>
<html lang="pt-br">

<head>
	<title>Login 01</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/style.css">

	<style>
		img {
			width: 100%;
			height: auto;
			max-width: 300px;
			max-height: 49px;
			display: block;
			margin-left: auto;
			margin-right: auto;
		}
	</style>
</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">

						<img src="./images/lgpd-web.png" alt="Logo LGPD WEB" class="img">

						<h3 class="text-center mb-4 h4">Entrar</h3>
						<form action="entrar.php" method="post" class="login-form">
							<div class="form-group">
								<input type="text" id="usuario" name="usuario" class="form-control rounded-left" placeholder="Usuario" required>
							</div>
							<div class="form-group d-flex">
								<input type="password" id="senha" name="senha" class="form-control rounded-left" placeholder="Senha" required>
							</div>
							<div class="form-group">
								<button type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
							</div>
							<div class="form-group d-md-flex">
								<div class="w-50">
									<label class="checkbox-wrap checkbox-primary">Lembrar
										<input id=""  type="checkbox" checked>
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#">Recuperar a senha</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>