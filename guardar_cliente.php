<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Realizar la conexión a la base de datos (asegúrate de tener el archivo conexion.php)
    require 'conexion.php';
    $con = connectToDatabase();

    // Obtener los datos del formulario y limpiarlos
    $nombre = mysqli_real_escape_string($con, $_POST["nombre"]);
    $apellido = mysqli_real_escape_string($con, $_POST["apellido"]);
    $telefono = mysqli_real_escape_string($con, $_POST["telefono"]);
    $calle = mysqli_real_escape_string($con, $_POST["calle"]);
    $numero_exterior = mysqli_real_escape_string($con, $_POST["numero_exterior"]);
    $estado = mysqli_real_escape_string($con, $_POST["estado"]);
    $codigo_postal = mysqli_real_escape_string($con, $_POST["codigo_postal"]);
    $correo_electronico = mysqli_real_escape_string($con, $_POST["correo_electronico"]);

    // Preparar la consulta SQL para insertar el cliente en la base de datos
    $query = "INSERT INTO cliente (nombre, apellido, telefono, calle, numero_exterior, estado, codigo_postal, correo_electronico) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    // Preparar la sentencia
    $stmt = mysqli_prepare($con, $query);

    // Vincular parámetros
    mysqli_stmt_bind_param($stmt, "ssisssss", $nombre, $apellido, $telefono, $calle, $numero_exterior, $estado, $codigo_postal, $correo_electronico);

    // Ejecutar la consulta
    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
        mysqli_close($con);

        // Redireccionar a la página que muestra los datos del cliente
        header("Location: mostrar_clientes.php");
        exit;
    } else {
        echo "Error al guardar el cliente: " . mysqli_error($con);
    }

    mysqli_close($con);
}
?>

