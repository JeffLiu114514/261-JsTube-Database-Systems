<?php

$server = "127.0.0.1";
$username = "root";
$password = "rootPassword";
$database = "jstube";

$conn = mysqli_connect($server, $username, $password, $database);

if($_SERVER['REQUEST_METHOD'] == 'GET') { 

    session_start();
    $name = $_SESSION['Name'];

    if(isset($_GET['get']) && $_GET['get'] == 'name') {
        echo $name;
    } else if(isset($_GET['get']) && $_GET['get'] == 'membership') {
        $query = "SELECT * FROM jstube.membership JOIN (SELECT User_id FROM jstube.user WHERE User_name = '$name') as id ON membership.User_id = id.User_id;";
        $videos = mysqli_query($conn, $query);
        $json = mysqli_fetch_all($videos, MYSQLI_ASSOC);
        echo json_encode($json);
    } else if(isset($_GET['get']) && $_GET['get'] == 'video') {
        $query = "SELECT * FROM jstube.video JOIN (SELECT User_id FROM jstube.user WHERE User_name = '$name') as id ON video.User_id = id.User_id;";
        $videos = mysqli_query($conn, $query);
        $json = mysqli_fetch_all($videos, MYSQLI_ASSOC);
        echo json_encode($json);
    } else if(isset($_GET['get']) && $_GET['get'] == 'history') {
        $query = "SELECT * FROM jstube.view JOIN (SELECT User_id FROM jstube.user WHERE User_name = '$name') as id ON view.User_id = id.User_id;";
        $videos = mysqli_query($conn, $query);
        $json = mysqli_fetch_all($videos, MYSQLI_ASSOC);
        echo json_encode($json);
    } else if(isset($_GET['get']) && $_GET['get'] == 'info') {
        $query = "SELECT * FROM jstube.user WHERE User_name = '$name';";
        $videos = mysqli_query($conn, $query);
        $json = mysqli_fetch_all($videos, MYSQLI_ASSOC);
        echo json_encode($json);
    }
}

mysqli_close($conn);

?>