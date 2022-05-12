<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h2><?php echo $data["titulo"];?></h2>
	<form id="store" name="store" method="POST" action="?c=user&a=store" autocomplete="off">
		Nombre: <input type="text" id="name" name="name"><br>
		Apellido Paterno: <input type="text" id="ap_father" name="ap_father"><br>
		Apellido Materno: <input type="text" id="ap_mother" name="ap_mother"><br>
		Fecha nacimiento: <input type="text" id="birthday" name="birthday" placeholder="aaaammdd"><br>
		Genero: <input type="text" id="gender" name="gender"><br>
		Domicilio: <input type="text" id="domicile" name="domicile"><br>
		Correo electronico: <input type="text" id="email" name="email"><br>
		Numero de telefono: <input type="text" id="phone" name="phone"><br>

		<button id="save" name="save" type="submit">Save</button>
	</form>
</body>
</html>

