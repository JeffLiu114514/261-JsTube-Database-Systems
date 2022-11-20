<?php
    //include 'login.php';
    $server = "";
    $username = "jlu54";
    $password = "nyUJBkkP";
    $database = "jlu54_1";
    
    $conn = mysqli_connect($server, $username, $password, $database);


    if($conn == false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    //if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['view'])){
        session_start();
        $User_name = $_SESSION['Name'];
        $User_id = mysqli_query($conn,"SELECT User_id FROM USER WHERE User_name = '$User_name' ");
        while ($row = $User_id->fetch_assoc()) {
            //echo $row['User_id']."<br>";
            $id = $row['User_id'];
            $info = mysqli_query($conn,"SELECT Video_id,Times FROM VIEW WHERE User_id = '$id' ");
            echo "User $User_name has following view history:"."<br>";
            while ($rows = $info->fetch_assoc()) {
                echo "Video: " . $rows['Video_id'] . " Times: " . $rows['Times'] . "<br>";
            }
        }
        
    //}
    mysqli_close($conn);
?>
