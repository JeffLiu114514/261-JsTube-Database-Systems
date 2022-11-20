<?php
    $server = "localhost";
    $user = "root";
    $password = "password";
    $db = "jstube";

    $conn = mysqli_connect($server,$user,$password,$db);

    if($conn == false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    //if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['view'])){
        session_start();
        $Video_id = $_SESSION['Video_id'];
        $Type = $_SESSION['Type'];
        $Case_id = rand(1000,9999);
        
            //echo $row['User_id']."<br>";
            $sql = "INSERT INTO VIEW (Case_id, Administrator_id, Video_id, Type ) VALUES ($Case_id,10001,'$Video_id',$Type);";

            if(mysqli_query($conn,$sql)){
                echo "Successfully report a case";
            }
            else{
                echo "Error: cannot execute $sql." . mysqli_error($conn);
            }

    //}

    
    mysqli_close($conn);
?>