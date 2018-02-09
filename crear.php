<!DOCTYPE html>
<html>
<head>
	<title>Crear una encuesta</title>
	<!---Styles-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">

	<!--Script-->
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/create.js"></script>
	<script type="text/javascript" src="js/notify.min.js"></script>

	<!--Meta-->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
	<div class="container">
		<h1 class="text-center">Crea una encuesta</h1>
		<hr>
		<div class="custom-container">
			<div class="spacer"></div>
			<div class="center-container">
				<input type="text" class="form-control" id="title"  placeholder="Dale un nombre a tu encuesta">
				<div class="spacer"></div>
				<div class="row">
					<div class="col-md-6">
						<input type="text" class="form-control" id="oa" placeholder="Opción A">
					</div>
					<div class="col-md-6"">
						<input type="text" class="form-control" id="ob" placeholder="Opción B">
					</div>
				</div>
				<div class="spacer"></div>
				<div class="row">
					<div class="col-md-12">
						<textarea class="form-control" id="description" placeholder="Cuentanos más acerca de tu encuesta..."></textarea>
					</div>
				</div>
				<div class="spacer"></div>
				<div class="row">
					<div class="col-md-12">
						<h4 class="display-4 text-center" id="display-range">1 día</h4>
						<input type="range" class="form-control" id="day-range" max="7" min="1" value="1" >
						<div class="spacer"></div>
						<button type="button" class="btn btn-primary my-color" id="btnSend" style="float: right;">Enviar tu encuesta</button>
					</div>
				</div>
			</div>
		</div>
		<div class="spacer"></div>
		<hr>
	</div>
</body>
</html>