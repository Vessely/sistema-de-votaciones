<?php 
include("core/show.php");

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Encuestas</title>
	<!---Styles-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">

	<!--Script-->
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/notify.min.js"></script>

	<!--Meta-->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
	<div class="container">
		<h1 class="text-center">Encuestas</h1>
		<hr>
		<div class="row">
			<div class="col-md-12 my-color">
				<div class="right">
					<div class="col-md-6">
						<p class="text-center p-10">Conteo</p>
					</div>
					<div class="col-md-6">
						<p class="text-center p-10">Mostrar</p>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<?php 
			show();
		 ?>
	</div>
</body>
</html>