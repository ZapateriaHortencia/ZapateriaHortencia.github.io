<!DOCTYPE html>
<html>
<head>
    <title>Alta de Producto</title>
    <link rel="stylesheet" href="Altascss.css">
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
        
      </nav>
      <label for="btn-menu">✖️</label>
    </div>
  </div>


  <div class="container">
        <h2 class="text-center">Altas producto</h2>
        <div class="lightbox-gallery">
        <form action="guardar_producto.php" method="post">
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label>Tipo:</label>
        <input type="text" name="tipo"><br>

        <label>Descripción:</label>
        <textarea name="descripcion"></textarea><br>

        <label>Precio:</label>
        <input type="number" name="precio" step="0.01" required><br>
    <br>
        <input type="submit" value="Guardar">
    </form>


        </div>
      </div>  


   

    <br>
    <br>
    <br>

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
</html>