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

    $sql="CREATE TABLE IF NOT EXISTS TabRegistrati
                    (
                        id int AUTO_INCREMENT PRIMARY KEY,
                        nome varchar(15),
                        cognome varchar(15),
                        email varchar(64) NOT NULL,
                        ntelefono bigint,
                        passwordUtente varchar(20),
                        domandaRec varchar(64),
                        rispostaRec varchar(30),
                        manoUsata varchar(20),
                        Orario varchar(20)
                    )";

    mysqli_query($con, $sql);

    mysqli_close($con);
    // ==================================================================================
   
?>