<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device=width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Registro</title>
	<link rel="stylesheet" href="css/index.css">
</head>

<body>
	<h1>Formulario de registro</h1>
	<form action="db_insertion.php" method="post" class="form-register">
		<h2 class="form_titulo">Product</h2>
		<div class="contenedor-inputs">
			<input reset type="text" name="producto" placeholder="Producto" class="input-100" required>
			<input type="number" name="almacen" placeholder="Almacen" class="input-100" required>
			<input type="number" name="unidades" placeholder="Unidades" class="input-100" required>
			<input type="date" name="fecha" placeholder="YYYY/MM/DD" class="input-48" required>
			<input type="number" name="importe" placeholder="Importe" class="input-48" required>
			<input type="submit" value="Registrar" class="btn-enviar">
		</div>
	</form>
</body>

</html>