
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.css">
</head>
<body>
	<header>
		<h1>SIMULADOR</h1>		
		<nav>
			<a href="../index.cm" class="active">Home</a>			
		</nav>			
	</header>

	

	<main>
		<form method="post" action="procesar.php" id="form1">
			<div style="margin-top: 10px; margin-bottom: 10px" class="form-group">
				<label id="idavuelta" onclick="idavuelta()">Ida y Vuelta</label>
				<label id="soloida" onclick="ida()">Ida</label>				
			</div>
			<div style="display: block;" class="form-group">
				<label for="ruta">Ruta</label>
				<select name="rutaselect" class="margenSelect">
					<option value="0">Loja-Quito</option>
					<option value="1">Loja-Guayaquil</option>
					<option value="2">Quito-Guayaquil</option>
					<option value="3">Quito-Santa Rosa</option>
					<option value="4">Quito-Cuenca</option>
					<option value="5">Quito-Esmeraldas</option>
					<option value="6">Guayaquil-San Cristobal</option>
					
				</select>
			</div>
			
			<div style="display: block;" id="fechaida" class="form-group">
				
				<label for="fida">Fecha Ida</label>
				<input name="fechaida" type="date" value="<?php echo date('Y-m-d',strtotime($data["congestart"])) ?>" required=""/>
			</div>


			<div style="display: block;" id="fechavuelta" class="form-group">
				<label for="fvuelta">Fecha Vuelta</label>
				<input name="fechavuelta" type="date" value="<?php echo date('Y-m-d',strtotime($data["congestart"])) ?>"/>
			</div>
			<div style="display: block;" class="form-group">
				<label for="nombres">Tercera Edad</label>
				<select name="edadselect" class="margenSelect">

					<option value="1">Si</option>
					<option value="2">No</option>
					
				</select>
			</div>
			<div style="display: block;" class="form-group">
				<label for="niños">Niños</label>
				<select name="ninosselect" class="margenSelect">
					<option value="1">Si</option>
					<option value="2">No</option>
					
					
				</select>
			</div>
			<div style="display: block;" class="form-group">
				<label for="nacionalidad">Nacionalidad</label>
				<select name="nacionalidadselect" class="margenSelect">
					<option value="1">Ecuatoriano</option>
					<option value="2">Extranjero</option>
					
				</select>
			</div>
			<button >Guardar</button>
		</form>
		
	</main>


	<footer>
		<h6>Derechos Reservados UTPL 2018</h6>
	</footer>
	<script type="text/javascript">
		function ida(){
			var producto1 = document.getElementById('fechavuelta');
			producto1.style.display = 'none';

		}
		function idavuelta(){
			var producto1 = document.getElementById('fechavuelta');
			producto1.style.display = 'block';
		}
		
	</script>
</body>
</html>