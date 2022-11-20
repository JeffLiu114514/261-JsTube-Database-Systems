<?php

$server = "";
    $username = "jlu54";
    $password = "nyUJBkkP";
    $database = "jlu54_1";
    
    $conn = mysqli_connect($server, $username, $password, $database);
if($_SERVER['REQUEST_METHOD'] == 'GET') { 

    session_start();
    $name = $_SESSION['Name'];

    if(isset($_GET['get']) && $_GET['get'] == 'name') {
        echo $name;
    } else if(isset($_GET['get']) && $_GET['get'] == 'membership') {
        $query = "SELECT * FROM jlu54_1.MEMBERSHIP JOIN (SELECT User_id FROM jlu54_1.USER WHERE User_name = '$name') as id ON MEMBERSHIP.User_id = id.User_id;";
        $videos = mysqli_query($conn, $query);
        $json = mysqli_fetch_all($videos, MYSQLI_ASSOC);
        echo json_encode($json);
    } else if(isset($_GET['get']) && $_GET['get'] == 'video') {
        $query = "SELECT * FROM jlu54_1.VIDEO JOIN (SELECT User_id FROM jlu54_1.USER WHERE User_name = '$name') as id ON VIDEO.User_id = id.User_id;";
        $videos = mysqli_query($conn, $query);
        $json = mysqli_fetch_all($videos, MYSQLI_ASSOC);
        echo json_encode($json);
    } else if(isset($_GET['get']) && $_GET['get'] == 'history') {
        $query = "SELECT * FROM jlu54_1.VIEW JOIN (SELECT User_id FROM jlu54_1.USER WHERE User_name = '$name') as id ON VIEW.User_id = id.User_id;";
        $videos = mysqli_query($conn, $query);
        $json = mysqli_fetch_all($videos, MYSQLI_ASSOC);
        echo json_encode($json);
    } else if(isset($_GET['get']) && $_GET['get'] == 'info') {
        $query = "SELECT * FROM jlu54_1.USER WHERE User_name = '$name';";
        $videos = mysqli_query($conn, $query);
        $json = mysqli_fetch_all($videos, MYSQLI_ASSOC);
        echo json_encode($json);
    }
}

mysqli_close($conn);

?>
