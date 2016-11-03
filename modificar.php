<?php
	
	require('conexion.php');
	
	$id=$_GET['id'];
	
	$query="SELECT descripcion, estado FROM cuentas WHERE id='$id'";
	
	$resultado=$mysqli->query($query);
	
	$row=$resultado->fetch_assoc();
	
?>

<html>
	<head>
		<title>Modificar concepto</title>
	</head>
	<body>
		
		<center><h1>Modificar concepto</h1></center>
		
		<form name="modificar_cuenta" method="POST" action="mod_cuenta.php">
			
			<table width="50%">
				<tr>
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<td width="20"><b>Descripcion</b></td>
					<td width="30"><input type="text" name="descripcion" size="25" value="<?php echo $row['descripcion']; ?>" /></td>
				</tr>	
				<tr>
					<td><b>Estado</b></td>
					<td><input type="text" name="estado" size="25" value="<?php echo $row['estado']; ?>" /></td>
				</tr>
				<tr>
					<td colspan="2"><center><input type="submit" name="Guardar" value="Guardar" /></center></td>
				</tr>
			</table>
		</form>
	</body>
</html>	
