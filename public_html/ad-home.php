<?php

$server = "";
$username = "jlu54";
$password = "nyUJBkkP";
$database = "jlu54_1";

$conn = mysqli_connect($server, $username, $password, $database);

if($conn == false) {
    //die("Cannot connect" . mysqli_connect_error());
    echo "Cannot connect";
}

session_start();
$ad_id = $_SESSION['ad_id'];
$query = "SELECT * FROM jlu54_1.CASE WHERE Administrator_id = $ad_id";

$task = mysqli_query($conn, $query);
$users = mysqli_fetch_all($task, MYSQLI_ASSOC);
echo json_encode($users);

?>
