<!DOCTYPE HTML>
<html>
	<head>
		<title>My Plantilla</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	</head>
	<body class="homepage">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
				<h1 style="padding:5px;">Ejercicios PHP de Óscar Rodríguez Gimeno</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
				<div class="container">
					<h2>Ejercicio 4.1</h2>
					<?php
						echo "<p>".
							"Esto es una cadena".
							" concatenada".
							"</p>";
					?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
				<div class="container">
					<h2>Ejercicio 4.2</h2>
					<?php
						$uno=1;
						$dos=2;
						
						echo "<p>Suma dos variables: ".$uno." + ".$dos." = ".($uno+$dos)."</p>";
					?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
				<div class="container">
					<h2>Ejercicio 4.3</h2>
					<?php
						echo "<p style='text-align:center;'>".phpinfo()."</p>";
					?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
				<div class="container">
					<h2>Ejercicio 4.4</h2>
					<table class="table table-bordered">
						<thead>
							<tr><th colspan="10" style="text-align:center">Tabla con numeros de 1 al 100</th></tr>
						</thead>
						<tbody>
							<?php
							$numero=1;
								for ($i=1; $i <=10 ; $i++) { 
									echo "<tr>";
									for ($j=1; $j <= 10; $j++) { 
										echo "<td style='text-align:center;'>".$numero."</td>";
										$numero++;
									}
									echo "</tr>";
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>