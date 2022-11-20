<?php
    $server = "";
    $username = "jlu54";
    $password = "nyUJBkkP";
    $database = "jlu54_1";
    
    $conn = mysqli_connect($server, $username, $password, $database);
    

    if($conn == false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $sql = "SHOW TABLES;";
    $tables = mysqli_query($conn,$sql);
    
while ($row = $tables->fetch_assoc()) {
        echo strtoupper($row ['Tables_in_jlu54_1']). "<br>";
        $ro = strtoupper($row ['Tables_in_jlu54_1']);
        $description = mysqli_query($conn,"describe jlu54_1.$ro ");

        while ($rows = $description->fetch_assoc()) {
            echo print_r($rows) . "<br>";
            //echo "Field: " . $rows['Field'] . "; Type: " . $rows['Type'] . "; Null: " . $rows['Null'] . 
            //"; Key: " . $rows['Key'] . "; Default: " . $rows['Default'] . "; Extra: " . $rows['Extra'] . "<br>";
        }
    }


    mysqli_close($conn);
?>
