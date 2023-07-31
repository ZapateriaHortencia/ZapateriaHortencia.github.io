<!DOCTYPE html>
<html>
<head>
    <title>Clientes Registrados</title>
    <link rel="stylesheet" href="Cliente.css">
</head>
<body>
    
<header class="header">
    <div class="logo">
      <h1></h1>
    </div>
		<div class="container2">
		<div class="btn-menu">
			<label for="btn-menu">☰</label>
		
	</header>

  <div class="capa"></div>
  <!--	--------------->
  <input type="checkbox" id="btn-menu">
  <div class="container-menu">
    <div class="cont-menu">
      <nav>
        <a href="index.html">Inicio</a>
        <a href="sobre_nosotros.html">Sobre nosotros</a>
        <a href="MisioVision.html">Misio y vision</a>
        <a href="Ropa dama.html">Ropa dama</a>
        <a href="CalzadoDama.html">Calzado dama</a>
        <a href="CalzadoCaballero.html">Calzado caballero</a>
        <a href="AltasCliente.php">Altas Cliente</a>
        <a href="Altas producto.php">Altas producto</a>
      </nav>
      <label for="btn-menu">✖️</label>
    </div>
  </div>

  <div class="container">
        <h2 class="text-center">Mostrar Cliente</h2>
        <div class="lightbox-gallery">
        <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Teléfono</th>
            <th>Calle</th>
            <th>Número Exterior</th>
            <th>Estado</th>
            <th>Código Postal</th>
            <th>Correo Electrónico</th>
        </tr>
        <?php
        require 'conexion.php';
        $con = connectToDatabase();

        // Obtener los datos de los clientes desde la base de datos
        $query = "SELECT * FROM cliente";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['idcliente'] . "</td>";
                echo "<td>" . $row['nombre'] . "</td>";
                echo "<td>" . $row['apellido'] . "</td>";
                echo "<td>" . $row['telefono'] . "</td>";
                echo "<td>" . $row['calle'] . "</td>";
                echo "<td>" . $row['numero_exterior'] . "</td>";
                echo "<td>" . $row['estado'] . "</td>";
                echo "<td>" . $row['codigo_postal'] . "</td>";
                echo "<td>" . $row['correo_electronico'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='10'>No se encontraron datos de clientes.</td></tr>";
        }

        mysqli_close($con);
        ?>
    </table>
        </div>
      </div>  

   



        </div>
    </div>

   
</body>
</html>

</html>
