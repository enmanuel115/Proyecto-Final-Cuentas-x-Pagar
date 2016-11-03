<?php 
	
	require('conexion.php');
	
	$descripcion=$_POST['descripcion'];
	$estado=$_POST['estado'];
	
	$query="INSERT INTO cuentas (descripcion, estado) VALUES ('$descripcion','$estado')";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Guardar concepto</title>
	</head>
	<body>
		<center>	
			
			<?php if($resultado>0){ ?>
				<h1>Concepto Guardado</h1>
				<?php }else{ ?>
				<h1>Error al guardar concepto</h1>		
			<?php	} ?>		
			
			<p></p>	
			
			<a href="index.php">Regresar</a>
			
		</center>
	</body>
	</html>	