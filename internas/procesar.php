<?php
	extract($_POST);
	

	$dias = array('Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado');
	$diaida=$dias[date('N', strtotime($fechaida))];
	$diavuelta=$dias[date('N', strtotime($fechavuelta))];
	if ($fechavuelta) {
		$diaida=$dias[date('N', strtotime($fechaida))];
		$diavuelta=$dias[date('N', strtotime($fechavuelta))];
		$desc_idavuelta=0.05;
		if ((($diaida=="Sabado")||($diaida=="Domingo"))||(($diavuelta=="Sabado")||($diavuelta=="Domingo"))) {
			$recargo_fds=0.1;			
		}else{
			$recargo_fds=0;
		}
	}else{
		$diaida=$dias[date('N', strtotime($fechaida))];
		$desc_idavuelta=0;
		if (($diaida=="Sabado")||($diaida=="Domingo")) {
			$recargo_fds=0.1;	
		}else{
			$recargo_fds=0;			
		}		
	}

	switch ($rutaselect) {
		case '0':
			$rutaselecte="Loja-Quito";
			$precio_pasaje=180;
			echo "<br>";
			break;
		case '1':
			$rutaselecte="Loja-Guayaquil";
			$precio_pasaje=120;
			echo "<br>";
			break;
		case '2':
			$rutaselecte="Quito-Guayaquil";
			$precio_pasaje=100;
			echo "<br>";
			break;
		case '3':
			$rutaselecte="Quito-Santa Rosa";
			$precio_pasaje=140;
			echo "<br>";
			break;
		case '4':
			$rutaselecte="Quito-Cuenca";
			$precio_pasaje=100;
			echo "<br>";
			break;
		case '5':
			$rutaselecte="Quito-Esmeraldas";
			$precio_pasaje=110;
			echo "<br>";
			break;
		case '6':
			$rutaselecte="Guayaquil-San Cristobal";
			$precio_pasaje=360;
			echo "<br>";
			break;
		default:
			# code...
			break;
	}
	if ($edadselect==1) {
		//echo "Tercera";
		 $desc_terceraedad=0.3;
		echo "<br>";
	}else{
		//echo "adulto";
		 $desc_terceraedad=0;
		echo "<br>";
	}
	if ($ninosselect==1) {
		// "Con niño";
		 $recargo_nino=0.03;
		echo "<br>";
	}else{
		//echo "sin niño";
		 $recargo_nino=0;
		echo "<br>";
	}
	if ($nacionalidadselect==1) {
		//"ecua";
		$recargo_extranjero=0;
		echo "<br>";
	}else{
		//echo "extran";
		$recargo_extranjero=0.2;
		echo "<br>";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Prefactura</title>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.css">
</head>
<body>
	<header>
		<h1>PREFACTURA</h1>		
		<nav>
			<a href="../index.cm" class="active">Salir</a>			
		</nav>		
							
	</header>

	

	<main>
		<section>
			<div style="display: block;" id="fechaida" class="form-group">
				
				<label for="fida">SUBTOTAL:</label>
				<input style="text-align: center;" value="<?php echo $subtotal=$precio_pasaje; ?>" disabled/>
				<label id="idavuelta" onclick="det1()">Detalle</label>
			</div>
			<div style="display: block;" id="fechaida" class="form-group">
				
				<label for="fida">Total de Descuento::</label>
				<input style="text-align: center;" value="<?php echo "-".$total_desc=$precio_pasaje*($desc_terceraedad+$desc_idavuelta); ?>" disabled/>
				<label id="idavuelta" onclick="det2()">Detalle</label>
			</div>
			<div style="display: block;" id="fechaida" class="form-group">
				
				<label for="fida">Total de Recargos:</label>
				<input style="text-align: center;" value="<?php echo "+".$total_recargo=$precio_pasaje*($recargo_extranjero+$recargo_nino+$recargo_fds);?>" disabled/>
				<label id="idavuelta" onclick="det3()">Detalle</label>
			</div>
			<div style="display: block;" id="fechaida" class="form-group">
				
				<label for="fida">Total Sin Iva:</label>
				<input style="text-align: center;" value="<?php echo $precio_total=$subtotal-$total_desc+$total_recargo; ?>" disabled/>
				<label id="idavuelta" onclick="det4()">Detalle</label>
			</div>
			<div style="display: block;" id="fechaida" class="form-group">
				
				<label for="fida">Total:</label>
				<input style="text-align: center;" value="<?php echo $precio_total_p=$precio_total+($precio_total*0.12); ?>" disabled/>
				<label id="idavuelta" onclick="det5()">Detalle</label>
			</div>
			
		</section>
		
	</main>


	<footer>
		<h6>Derechos Reservados UTPL 2018</h6>
	</footer>
	<script type="text/javascript">
		function det1(){
			alert("<?php echo $rutaselecte." ".$precio_pasaje ?>")

		}
		function det2(){
			alert("<?php echo "Descuento IdaVuelta= ".$desc_idavuelta;
						 echo '\n';
						 echo "Descuento Tercera edad= ".$desc_terceraedad; ?>")

		}
		function det3(){
			alert("<?php echo "Recargo Fin de semana= ".$recargo_fds;
						 echo '\n';
						 echo "Recoargo Niños= ".$recargo_nino;
						 echo '\n';
						 echo "Recoargo Extranjero= ".$recargo_extranjero; ?>")

		}
		function det4(){
			var producto1 = document.getElementById('fechavuelta');
			producto1.style.display = 'none';

		}
		function det5(){		
			alert("<?php echo "Iva= ".$precio_total*0.12;
						 echo '\n';
						 echo "Total= ".$precio_total_p; ?>")
		}		
	</script>
</body>
</html>