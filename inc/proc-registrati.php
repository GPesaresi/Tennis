<?php include 'Database.php' ?>

<?php
    // ==================================================================================
    $con = mysqli_connect($server, $utente, $password);

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    $sql = "CREATE DATABASE IF NOT EXISTS $database";

    mysqli_query($con, $sql);

    mysqli_close($con);
    // ==================================================================================
    // ==================================================================================
    $con = mysqli_connect($server, $utente, $password, $database);

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    

    mysqli_close($con);
    // ==================================================================================
   
?>