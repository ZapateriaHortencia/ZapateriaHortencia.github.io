<!DOCTYPE html>
<html>
<head>
    <title>Productos Registrados</title>
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
        <a href="mostrar_clientes.php">Mostrar cliente</a>
      </nav>
      <label for="btn-menu">✖️</label>
    </div>
  </div>
  
  <div class="container">
        <h2 class="text-center">Mostrar producto</h2>
        <div class="lightbox-gallery">
        <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Descripción</th>
            <th>Precio</th>
        </tr>
        <?php
        require 'conexion.php';
        $con = connectToDatabase();

        // Obtener los datos de los productos desde la base de datos
        $query = "SELECT * FROM productos";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['idproducto'] . "</td>";
                echo "<td>" . $row['nombre'] . "</td>";
                echo "<td>" . $row['tipo'] . "</td>";
                echo "<td>" . $row['descripcion'] . "</td>";
                echo "<td>" . $row['precio'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No se encontraron datos de productos.</td></tr>";
        }

        mysqli_close($con);
        ?>
    </table>
        </div>
      </div>  

   



        </div>
    </div>

    <footer class="pie-pagina">
    <div class="grupo-1">
        <div class="box">
            <figure>
                <a href="#">
                    <img src="" alt="">
                </a>
            </figure>
        </div>
        <div class="box">
            <h2>Contactanos</h2>
            <p>Whats app</p>
            <p>449 973 5131</p>
        </div>
        
    </div>

    <div class="grupo-2">
        <small>&#169; 2023 <b>Zapateria Hortensia</b> - Todos los derechos reservados</small>

    </div>
  </footer>

</body>
</html>l