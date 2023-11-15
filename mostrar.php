<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .cabecera {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #e5e5e5;
        }

        .contenedor {
            text-align: center;
            margin-top: 20px;
        }

        .crear a {
            text-decoration: none;
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .crear a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <?php
    require 'conexion.php';

    $sql= "SELECT * FROM agrodiaz;";
    $resultado= $conn->query($sql);
    ?>
    <div>
    <h1 class="cabecera">Mostar Registros</h1>
    </div>
    <div class="contenedor" >

        <table>
            <thead>
                <tr>
                <th>Id Usuario </th>
                <th>Nombre </th>
                <th>Apellido </th>
                <th>Correo Electrónico</th>
                </tr>
            </thead>
            <tbody>
                <?php      
      while ($fila = $resultado->fetch_assoc()) {
        ?>
                <tr>
                    <td><?php  echo $fila['id_usuario']?></td>
                    <td><?php  echo $fila['Nombre']?></td>
                    <td><?php  echo $fila['Apellido']?></td>
                    <td><?php  echo $fila['Correo']?></td>
                    </tr>

                <?php } 
                ?>
             </tbody>
      </table>
      <br>
      <button class="crear"><a href="AgroDiaz.php">Agregar Nuevo Registro</a></button>
    </div>
</body>
</html>