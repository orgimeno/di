<!DOCTYPE HTML>
<html>
	<head>
		<title>Óscar Rodríguez PHP</title>
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
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
				<div class="container">
					<h2>Ejercicio 4.5</h2>
					<table class="table table-bordered">
						<thead>
							<tr><th colspan="10" style="text-align:center">Tabla con numeros de 1 al 100</th></tr>
						</thead>
						<tbody>
							<?php
							define("TAM", 10);
							$numero=1;
								for ($i=1; $i <=TAM ; $i++) { 
									echo "<tr>";
									for ($j=1; $j <= TAM; $j++) { 
										if ($i%2==0) {
											echo "<td style='text-align:center;background-color:grey;'>".$numero."</td>";
										}else
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
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
				<div class="container">
					<h2>Ejercicio 4.6</h2>
					<table class="table table-bordered">
						<thead>
							<tr><th colspan="10" style="text-align:center">Tabla con las petencias de los numeros del 1 al 4</th></tr>
						</thead>
						<tbody>
						<tr><th>n<sup>1</sup></th><th>n<sup>2</sup></th><th>n<sup>3</sup></th><th>n<sup>4</sup></th></tr>
							<?php
								function potencia($base, $exponente){
									return pow($base, $exponente);
								}
								for ($i=1; $i <=4 ; $i++) { 
									echo "<tr>";
									for ($j=1; $j <=4 ; $j++) 
										echo "<td style='text-align:center;'>".potencia($i,$j)."</td>";
								echo "</tr>";
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
				<div class="container">
					<h2>Ejercicio 4.7</h2>
					<table class="table table-bordered">
						<thead>
							<tr><th colspan="10" style="text-align:center">Tabla con las fotos del directorio "fotos"</th></tr>
						</thead>
						<tbody>
							<?php
									$columna=0;
								    $directory="fotos";
								    $dirint = dir($directory);
								    echo "<tr>";
								    while (($archivo = $dirint->read()) !== false)
								    {
								    	if(eregi(".jpg",$archivo)  ||eregi(".gif",$archivo)  || eregi(".png",$archivo) || ereg(".jpeg", $archivo) ){
									        echo "<td><img src='http://localhost:8080/fotos/".$archivo."' style='width:150px;'/></td>";
									        $columna++;
									        if ($columna==6) {
									        	echo "</tr><tr>";
									        	$columna=0;
									        }
									    }
								    }
								    $dirint->close();
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>