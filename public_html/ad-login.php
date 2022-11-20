<?php
    
    //don't forget to change server and password
    $server = "";
    $username = "jlu54";
    $password = "nyUJBkkP";
    $database = "jlu54_1";
    
    $conn = mysqli_connect($server, $username, $password, $database);

    if($conn == false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
 if($_SERVER['REQUEST_METHOD'] == 'POST'&& isset($_POST['submit'])){   
    if(isset($_POST['administrator_id']) && isset($_POST['password'])) {
        //echo "isset";
        $ad_id = $_POST['administrator_id'];
        $Password = $_POST['password'];
        $check_password = mysqli_query($conn,"SELECT Password FROM jlu54_1.ADMINISTRATOR WHERE Administrator_id = $ad_id; ");

        $flag=false;
    
        while($rowData["Password"] = mysqli_fetch_array($check_password)){
            //echo "in while";

            //if(strpos(implode("",$rowData["Password"]),$Password) == 0){  //for php 8.0 below
            if(!strcmp(implode("",$rowData["Password"]),$Password.$Password)){
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

    // if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        
    //     if(isset($_POST['administrator_id']) && isset($_POST['password'])){
            
    //         $ad_id = $_POST['administrator_id'];
    //         $Password = $_POST['password'];
    //         $check_password = mysqli_query($conn,"SELECT Password FROM jstube.ADMINISTRATOR WHERE Administrator_id = $ad_id; ");

    //         $flag=false;

    //         while($rowData["Password"] = mysqli_fetch_array($check_password)){

    //             if(strpos(implode("",$rowData["Password"]),$Password) == 0){  //for php 8.0 below
    //             //if(str_contains(implode(" ",$rowData["Password"]),$Password)){  //for php 8.0 above
    //                 $flag=true;
    //                 session_start();
    //                 $_SESSION['ad_id']= $ad_id;
    //                 echo "login success";
    //                 header('Location: '."ad-homepage.html");
    //             } 
    //         }
    //         if(!$flag){
    //             echo "Wrong password or user name does not exit. Try again.";
    //         }

    //     }

    // }
    // mysqli_close($conn);
?>
