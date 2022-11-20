<?php
    $server = "localhost";
    $user = "root";
    $password = "password";
    $db = "jstube";

    $conn = mysqli_connect($server,$user,$password,$db);

    if($conn == false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $sql = "show tables;";
    $tables = mysqli_query($conn,$sql);
    while ($row = $tables->fetch_assoc()) {
        echo strtoupper($row ['Tables_in_jstube']). "<br>";
        $ro = $row ['Tables_in_jstube'];
        $description = mysqli_query($conn,"describe jstube.$ro ");

        while ($rows = $description->fetch_assoc()) {
            echo print_r($rows) . "<br>";
            //echo "Field: " . $rows['Field'] . "; Type: " . $rows['Type'] . "; Null: " . $rows['Null'] . 
            //"; Key: " . $rows['Key'] . "; Default: " . $rows['Default'] . "; Extra: " . $rows['Extra'] . "<br>";
        }
    }


    mysqli_close($conn);
?>