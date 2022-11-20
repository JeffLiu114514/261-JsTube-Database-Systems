<?php
    $server = "localhost";
    $user = "root";
    $password = "rootPassword";
    $db = "jstube";

    $conn = mysqli_connect($server,$user,$password,$db);

    if($conn == false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        
        if(isset($_POST['administrator_id']) && isset($_POST['password'])){
            $ad_id = $_POST['administrator_id'];
            $Password = $_POST['password'];
            $check_password = mysqli_query($conn," SELECT Password FROM administrator WHERE administrator_id = $ad_id;");
            
            $flag=false;
            while($rowData["Password"] = mysqli_fetch_array($check_password)){
                //if using php 8.0+, change strpos to str_contains
                if(strpos(implode("", $rowData["Password"]),$Password) == 0){
                    $flag=true;
                    session_start();
                    $_SESSION['ad_id']= $ad_id;
                    echo "login success";
                    header('Location: '."ad-homepage.html");
                } 
            }
            if(!$flag){
                echo "Wrong password or user name does not exit. Try again.";
            }

        }

    }
    mysqli_close($conn);
?>