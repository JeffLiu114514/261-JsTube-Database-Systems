<?php

$server = "127.0.0.1";
$username = "root";
$password = "rootPassword";
$database = "jstube";

$conn = mysqli_connect($server, $username, $password, $database);

if($conn == false) {
    die("Cannot connect" . mysqli_connect_error());
}

if(isset($_GET['table'])) {
    $table = $_GET['table'];
    $query = "SELECT * FROM jstube." . $table;
    //echo $query;
    $table = mysqli_query($conn, $query);
    $json = mysqli_fetch_all($table, MYSQLI_ASSOC);
    echo json_encode($json);
}

mysqli_close($conn);
?>