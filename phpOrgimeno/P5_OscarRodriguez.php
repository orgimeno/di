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

			<!--Óscar Rodríguez Gimeno-->

			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
					<h1 style="padding:5px;">Ejercicios PHP de Óscar Rodríguez Gimeno</h1>
				</div>
			</div>

			<!--Ejercicio 5.1-->

			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
				<a href="#" onclick="desplegar('ejercicio51')" id="link1">Ejercicio 5.1</a>
					<div style="display: none;" id="ejercicio51">
						<div class="span4">
							<h2>Ejercicio 5.1</h2>
							<?php
								if (!isset($total)) {
									if (isset($_GET['euros'])) {
										$euros=$_GET['euros'];
										$total=$_GET['euros']*1.08537;
									}else{
										$euros=0;
										$total=0;
									}
								}
								if (isset($_GET['ej1'])) {
									echo "<script>desplegar('ejercicio51');</script>";
								}
							?>
							<form method="GET">
								<section>
									<label for="euro">Euros</label><br>
									<input type="number" id="euro" name="euros" value="<?php echo $euros ?>" step="any">
								</section>
								<section>
									<label>Dolares</label><br>
									<input type="number" disabled="true" value="<?php echo $total ?>" name="dolar" step="any">
								</section>
								<input type="submit" value="Convertir" name="ej1">
							</form>
						</div>
					</div>
				</div>
			</div>

			<!--Ejercicio 5.2-->

			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
				<a href="#" onclick="desplegar('ejercicio52')" id="link1">Ejercicio 5.2</a>
					<div style="display: none;" id="ejercicio52">
						<div class="span4">
							<h2>Ejercicio 5.2</h2>
							<?php
							$dolar=false;
							$libra=false;
								if (isset($_GET['money'])) {
									$money=$_GET['money'];
									if (isset($_GET['euros2'])) {
										$euros2=$_GET['euros2'];
										if ($money=="Libras") {
											$libra=true;
											$total2= $euros2*0.735522;
										}elseif ($money=="Dolares") {
											$dolar=true;
											$total2= $euros2*1.08537;
										}
									}else{
										$euros2=0;
									}
								}else{
									$euros2=0;
									$total2=0;
								}
								if (isset($_GET['ej2'])) {
									echo "<script>desplegar('ejercicio52');</script>";
								}
							?>
							<form method="GET">
								<section>
									<label for="euros2">Euros</label><br>
									<input type="number" id="euros2" name="euros2" value="<?php echo $euros2 ?>" step="any">
								</section>
								<section>
								<label for="moneys">Moneda:</label><br>
									<select name="money" id="moneys">
										<option name="dolar" <?php if ($dolar) {
											echo "Selected";
										} ?>>Dolares</option>
										<option name="libra" <?php if ($libra) {
											echo "Selected";
										} ?>> Libras</option>
									</select><br>
								</section>
								<section>
									<label for="total2">Total</label>
									<input type="number" disabled="true" id="total2" value="<?php echo $total2 ?>" step="any">
									<?php
									if ($dolar) {
										echo " $";
									}elseif ($libra) {
										echo " £";
									}
									?>
								</section>
								<input type="submit" value="Convertir" name="ej2">
							</form>							
						</div>
					</div>
				</div>
			</div>

			<!--Ejercicio 5.3-->

			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
				<a href="#" onclick="desplegar('ejercicio53')">Ejercicio 5.3</a>
					<div style="display: none;" id="ejercicio53">
						<div class="span4">
							<h2>Ejercicio 5.3</h2>
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
							<form method="post" enctype="multipart/form-data">
							    Seleccione una imagen para subir:
							    <input type="file" name="fileToUpload" id="fileToUpload">
							    <input type="submit" value="Subir Imagen" name="ej3">
							</form>
							<?php
							$target_dir = "fotos/";
							$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
							$uploadOk = 1;
							$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
							// Check if image file is a actual image or fake image
							if(isset($_POST["ej3"])) {
							    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
							    if($check !== false) {
							        echo "El Archivo es una imagen - " . $check["mime"] . ".";
							        $uploadOk = 1;
							    } else {
							        echo "El archivo no es una imagen.";
							        $uploadOk = 0;
							    }
							}
							// Check if file already exists
							if (file_exists($target_file)) {
							    echo "Disculpe ese archivo ya existe ";
							    $uploadOk = 0;
							}
							// Check file size
							if ($_FILES["fileToUpload"]["size"] > 500000) {
							    echo "Disculpe el archivo es demasiado grande";
							    $uploadOk = 0;
							}
							// Allow certain file formats
							if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
							&& $imageFileType != "gif" ) {
							    echo "Disculpe, solo JPG, JPEG, PNG & GIF imagenes.";
							    $uploadOk = 0;
							}
							// Check if $uploadOk is set to 0 by an error
							if ($uploadOk == 0) {
							    echo "Lo sentimos su archivo no se ha subido con éxito";
							// if everything is ok, try to upload file
							} else {
							    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
							        echo "El archivo ". basename( $_FILES["fileToUpload"]["name"]). " se ha subido con éxito.";
							    } else {
							        echo "Lo sentimos, se ha producido un error.";
							    }
							}
							if (isset($_POST['ej3'])) {
								echo "<script>desplegar('ejercicio53');</script>";
							}
							?> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>