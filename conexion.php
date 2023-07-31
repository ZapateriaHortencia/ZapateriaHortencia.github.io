<?php
function connectToDatabase() {
    $host = "localhost";
    $port = 3306;
    $socket = "";
    $user = "root";
    $password = "brandy4221";
    $dbname = "zapateria";

    $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
        or die ('Could not connect to the database server' . mysqli_connect_error());

    return $con;
}