<?php  
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>En proceso...</title>
</head>
<body>
	<h2><?php echo $data["titulo"]; ?></h2>	
	<a href="?c=user&a=create">Crear nuevo</a>
	<table border="1px solid red">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Apellido Paterno</th>
				<th>Apellido Materno</th>
				<th>Fecha nacimiento</th>
				<th>Sexo</th>
				<th>Domicilio</th>
				<th>Correo</th>
				<th>Num. Telefono</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tbody>
			<?php  
			foreach($data["usuarios"] as $dato){
				echo "<tr>";
				echo "<td>".$dato["id"]."</td>";
				echo "<td>".$dato["name"]."</td>";
				echo "<td>".$dato["ap_father"]."</td>";
				echo "<td>".$dato["ap_mother"]."</td>";
				echo "<td>".$dato["birthday"]."</td>";
				echo "<td>".$dato["gender"]."</td>";
				echo "<td>".$dato["domicile"]."</td>";
				echo "<td>".$dato["email"]."</td>";
				echo "<td>".$dato["phone"]."</td>";
				echo "<td><a href='?c=user&a=edit&id=".$dato["id"]."'>Editar</a></td>";
				echo "<td><a href='?c=user&a=destroy&id=".$dato["id"]."'>Eliminar</a></td>";
				echo "</tr>";
			}
			?>
		</tbody>
	</table>
</body>
</html>