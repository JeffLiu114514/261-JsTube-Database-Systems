<?php
    $server = "localhost";
    $user = "root";
    $password = "529119Ljh";
    $db = "jstube";

    $conn = mysqli_connect($server,$user,$password,$db);

    if($conn == false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        if(isset($_POST['User_name']) && isset($_POST['Password'])){
            $name = $_POST['User_name'];
            $Password = $_POST['Password'];
            //echo $name;
            $check_password = mysqli_query($conn,"SELECT Password FROM USER WHERE User_name = '$name' ");
            //echo $check_password;
            //if($check_password ==  $Password){
            $flag=false;
            while($rowData["Password"] = mysqli_fetch_array($check_password)){
                //echo implode(" ",$rowData["Password"]);
                if(str_contains(implode(" ",$rowData["Password"]),strtoupper($Password))){
                    $flag=true;
                    session_start();
                    $_SESSION['Name']= $name;
                    //header('Location: '."view_history.php");
                    header('Location: '."user-home.html");
                }
            }
            if(!$flag){
                
                echo "Wrong password or user name doex not exit. Try again.";
            }

        }
    }
    mysqli_close($conn);
?>