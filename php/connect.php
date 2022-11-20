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
        if(isset($_POST['User_name']) && isset($_POST['Email']) && isset($_POST['Password'])){
            $name = $_POST['User_name'];
            $Email = $_POST['Email'];
            $Password = $_POST['Password'];
            $Password2 = $_POST['Password2'];

            $check_email = mysqli_query($conn,"SELECT Email FROM USER;");

            $flag=false;
            if (mysqli_num_rows($check_email) > 0) {
                while($rowData["Email"] = mysqli_fetch_array($check_email)){
                    //echo implode(" ",$rowData['Email']).'<br>';
                    if(str_contains(implode(" ",$rowData["Email"]),strtoupper($Email))){
                        //echo "Email has already been registered. Please try again.";
                        //echo "Redirect to signup in 5 seconds";
                        //sleep(5);
                        $flag=true;
                        header('Location: '."signup.html");  
                    }
                }
            }

            if(!$flag){
                if($Password != $Password2){
                    //echo "Password do not match. Please try again".'<br>';
                    //echo "Redirect to signup in 5 seconds";
                    //sleep(5);
                    header('Location: '."signup.html");
                }
                else{
                    $User_id = rand(100000,999999);

                    $sql = "INSERT INTO USER (User_id, User_name, Email, Password) VALUES ($User_id,'$name','$Email','$Password');";
                    if(mysqli_query($conn,$sql)){
                        //echo "Successfully registered!";
                        //echo "Redirect to login in 5 seconds";
                        //sleep(5);
                        header('Location: '."login.html");
                    }
                    else{
                        echo "Error: cannot execute $sql." . mysqli_error($conn);
                    }
                }
            }
        }
    }
mysqli_close($conn);
?>