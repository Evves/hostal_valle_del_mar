<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Home - Hostal Valles Del Mar</title>
	<?php include 'includes/css.php'; ?><!-- todos los estilos del sitio -->

</head>
<body>
<?php include 'includes/header.php'; ?> <!-- menu de navegacion del sitio -->

<div class="container-fluid">
	<div class="row portada_home">
		<h1>hello world</h1>
		<h3>mensaje mas chico</h3>
	</div>
	<div class="row login">
		<div class="col-md-8">
			<h2>Eres miembro de Valles Del Mar?</h2>
			<h3>
				Si aun no eres miembro subscribete <spam>Ya!</spam>
			</h3>
			<button class="btn btn-danger btn-lg" type="button">Quiero Subscribirme!</button>
		</div>
		<div class="col-md-4 fomr_login">
			<form class="form-signin" role="form">
        <h2 class="form-signin-heading">Please Log in</h2>
        <input type="email" class="form-control" placeholder="Email address" required autofocus>
        <input type="password" class="form-control" placeholder="Password" required>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
		</div>
	</div>
	<div class="row pasos">
		<div class="col-md-3"></div>
		<div class="col-md-3"></div>
		<div class="col-md-3"></div>
		<div class="col-md-3"></div>
	</div>
	<div class="row servicios"></div>
	<div class="row estadisticas"></div>
	<div class="row nuestros_clientes"></div>
	<div class="row acerca_de_nosotros"></div>
	<div class="row contactanos"></div>
	<div class="row mapa"></div>
	<div class="row informacion"></div>
</div>

<?php include 'includes/footer.php'; ?><!-- footer del sitio -->
<!-- ############################################################# -->
<?php include 'includes/script.php'; ?><!-- todos los script del sitio -->
</body>
</html>