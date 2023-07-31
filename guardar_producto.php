<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Realizar la conexión a la base de datos (asegúrate de tener el archivo conexion.php)
    require 'conexion.php';
    $con = connectToDatabase();

    // Obtener los datos del formulario y limpiarlos
    $nombre = mysqli_real_escape_string($con, $_POST["nombre"]);
    $tipo = mysqli_real_escape_string($con, $_POST["tipo"]);
    $descripcion = mysqli_real_escape_string($con, $_POST["descripcion"]);
    $precio = floatval($_POST["precio"]);

    // Preparar la consulta SQL para insertar el producto en la base de datos
    $query = "INSERT INTO productos (nombre, tipo, descripcion, precio) VALUES (?, ?, ?, ?)";

    // Preparar la sentencia
    $stmt = mysqli_prepare($con, $query);

    // Vincular parámetros
    mysqli_stmt_bind_param($stmt, "sssd", $nombre, $tipo, $descripcion, $precio);

    // Ejecutar la consulta
    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
        mysqli_close($con);

        // Redireccionar a la página que muestra los datos de los productos
        header("Location: mostrar_productos.php");
        exit;
    } else {
        echo "Error al guardar el producto: " . mysqli_error($con);
    }

    mysqli_close($con);
}
?>
