<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>AgroDiaz</title>
</head>
<style>
   

    form {
        width: 300px;
        margin: 0 auto;
        padding: 50px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        background-color: #f7f7f7;
    }

    label {
        display: block;
        margin-top: 10px;
    }

    input[type="text"],
    input[type="number"],
    input[type="email"] {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type="submit"],
    input[type="reset"] {
        background-color: #007BFF;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-top: 10px;
    }

    input[type="submit"]:hover,
    input[type="reset"]:hover {
        background-color: #0056b3;
    }
</style>
<body>
    
    <form action="validar.php" method="POST">
		<label for="nombre">Nombre:</label><br>
		<input type="text" id="nombre" name="nombre"><br>

		<label for="apellido">Apellido:</label><br>
		<input type="text" id="apellido" name="apellido"><br>

	
		<label for="correo">Correo electrónico:</label><br>
		<input type="email" id="correo" name="correo"><br><br>


  		<input type="submit" value="Enviar">
  		<input type="reset" value="Borrar">
		<input type="submit" value="mostrar Registros"">

  		
  	</form> 

</body>
</html>