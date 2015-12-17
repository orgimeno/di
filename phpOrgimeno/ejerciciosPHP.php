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
		<script>
			function desplegar(id){
				$("#"+id).toggle();
			}
		</script>
		<style type="text/css">
		div .row{
			padding: 5px;
		}
		a{
			margin-left:15%;
		}
		</style>
		<div id="main" class="container" role="main">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
					<h1 style="padding:5px;">Ejercicios PHP de Óscar Rodríguez Gimeno</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
				<a href="#" onclick="desplegar('ejercicio41')" id="link1">Ejercicio 4.1</a>
					<div style="display: none;" id="ejercicio41">
						<div class="span4">
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
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
				<a href="#" onclick="desplegar('ejercicio42')">Ejercicio 4.2</a>
					<div style="display: none;" id="ejercicio42">
						<div class="span4">
							<h2>Ejercicio 4.2</h2>
							<?php
								$uno=1;
								$dos=2;
								
								echo "<p>Suma dos variables: ".$uno." + ".$dos." = ".($uno+$dos)."</p>";
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
				<a href="#" onclick="desplegar('ejercicio43')">Ejercicio 4.3</a>
					<div style="display: none;" id="ejercicio43">
						<div class="span4">
							<h2>Ejercicio 4.3</h2>
							<?php
								echo "<p style='text-align:center;'>".phpinfo()."</p>";
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
				<a href="#" onclick="desplegar('ejercicio44')">Ejercicio 4.4</a>
					<div style="display: none;" id="ejercicio44">
						<div class="span4">
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
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
				<a href="#" onclick="desplegar('ejercicio45')">Ejercicio 4.5</a>
					<div style="display: none;" id="ejercicio45">
						<div class="span4">
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
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
				<a href="#" onclick="desplegar('ejercicio46')">Ejercicio 4.6</a>
					<div style="display: none;" id="ejercicio46">
						<div class="span4">
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
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
				<a href="#" onclick="desplegar('ejercicio47')">Ejercicio 4.7</a>
					<div style="display: none;" id="ejercicio47">
						<div class="span4">
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
									        echo "<td><img src='fotos/".$archivo."' style='width:150px; height:150px;'/></td>";
									        $columna++;
									        if ($columna==4) {
									        	echo "</tr><tr>";
									        	$columna=0;
									        }
										 
									    }
									    $dirint->close();
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
				<a href="#" onclick="desplegar('ejercicio48')">Ejercicio 4.8</a>
					<div style="display: none;" id="ejercicio48">
						<div class="span4">
							<h2>Ejercicio 4.8</h2>
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
											        echo "<td><a href='fotos/".$archivo."'><img src='fotos/".$archivo."' style='width:100px; height:100px;'/></a></td>";
											        $columna++;
											        if ($columna==4) {
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
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
				<a href="#" onclick="desplegar('ejercicio49')">Ejercicio 4.9</a>
					<div style="display: none;" id="ejercicio49">
						<div class="span4">
							<h2>Ejercicio 4.9</h2>
							<table class="table table-bordered">
								<thead>
									<tr><th colspan="10" style="text-align:center">Tabla con las fotos del directorio "fotos"</th></tr>
								</thead>
								<tbody>
									<?php
										$columna=0;
									    $directory="fotos";
									    $dirint = dir($directory);
									    $fotos=array();
									    $minis=array();
									    $fotosConMini=array();
									    echo "<tr>";
									    while (($archivo = $dirint->read()) !== false)
									    {
									    	if(eregi(".jpg",$archivo)  ||eregi(".gif",$archivo)  || eregi(".png",$archivo) || ereg(".jpeg", $archivo) ){
											    if(strpos($archivo,'mini-')=== false)
											    	array_push($fotos, $archivo);
											    else
											    	array_push($minis, $archivo);
										    }
									    }
									    foreach ($fotos as $foto) {
									    	foreach ($minis as $mini) {
									    		if(strpos($mini, $foto))
									    			array_push($fotosConMini,$foto);
									    	}
									    }
									    foreach (array_diff($fotos,$fotosConMini) as $mini){
										    echo "<td><a href='fotos/".$mini."'><img src='fotos/".$mini."' style='width:100px; height:100px;'/></a></td>";
										    $columna++;
										    if ($columna==4) {
										      	echo "</tr><tr>";
										       	$columna=0;
										    } 	
									    }
									    foreach ($fotosConMini as $mini){
										    echo "<td><a href='fotos/".$mini."'><img src='fotos/mini-".$mini."' style='width:100px; height:100px;'/></a></td>";
										    $columna++;
										    if ($columna==4) {
										      	echo "</tr><tr>";
										       	$columna=0;
										    } 	
									    }
									    $dirint->close();
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
				<a href="#" onclick="desplegar('ejercicio410')">Ejercicio 4.10</a>
					<div style="display: none;" id="ejercicio410">
						<div class="span4">
							<h2>Ejercicio 4.10</h2>
							<table class="table table-bordered">
								<thead>
									<tr><th colspan="10" style="text-align:center">Tabla con las fotos del directorio "fotos"</th></tr>
								</thead>
								<tbody>
									<?php
									    foreach (array_diff($fotos,$fotosConMini) as $mini){
									    	if(strpos($mini, '.png')== false){
									    		echo "adios";
									    		$original = imagecreatefromjpeg("fotos/".$mini);
									    	}
									    	else{
									    		echo "hola";
									    		$original = imagecreatefrompng("fotos/".$mini);
									    	}
									    	echo "stri21312ng";
											$thumb = imagecreatetruecolor(50,50); // Lo haremos de un tamaño 50x50

											$ancho = imagesx($original);
											$alto = imagesy($original);
											imagecopyresampled($thumb,$original,0,0,0,0,150,150,$ancho,$alto);
											echo "string";
											if(strpos($mini, '.png')== false)
									    		imagejpeg($thumb,'fotos/mini-'.$mini,90); // 90 es la calidad de compresión;
									    	else
									    		imagepng($thumb,'fotos/mini-'.$mini,90); // 90 es la calidad de compresión
										        echo "<td><a href='fotos/".$mini."'><img src='fotos/".$mini."' style='width:100px; height:100px;'/></a></td>";
										        $columna++;
										        if ($columna==4) {
										        	echo "</tr><tr>";
										        	$columna=0;
										        } 
									    }
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
				<a href="#" onclick="desplegar('ejercicio411')">Ejercicio 4.11</a>
					<div style="display: none;" id="ejercicio411">
						<div class="span4">
							<h2>Ejercicio 4.11</h2>
							<p>Almacene en un vector los 10 primeros números pares</p>
								<?php
									$pares=array();
									for ($i=0; $i < 20; $i+=2) { 
										array_push($pares, $i);
									}
									foreach ($pares as $par) {
										echo "</br>".$par;
									}
								?>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
				<a href="#" onclick="desplegar('ejercicio412')">Ejercicio 4.12</a>
					<div style="display: none;" id="ejercicio412">
						<div class="span4">
							<h2>Ejercicio 4.12</h2>
								<?php
									$v=array("1"=>90,"30"=>7,"e"=>99,"hola"=>43);
									foreach ($v as $key => $value) 
										echo "clave: ".$key." => ".$value." valor</br>";
								?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>