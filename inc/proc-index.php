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

    $sql="CREATE TABLE IF NOT EXISTS TabConfigurazione
                    (
                        Id int AUTO_INCREMENT PRIMARY KEY,
                        NumeroCampi int(),
                        OrarioInizio varchar(32),
                        OrarioFine varchar(32),
                        PrezzoOrarioSocio int(),
                        PrezzoOrarioNonSocio int()
                    )";

    mysqli_query($con, $sql);

    $sql="CREATE TABLE IF NOT EXISTS TabConfigurazioneLuce
                    (
                        Id int AUTO_INCREMENT PRIMARY KEY,
                        dataInizioPeriodo varchar(32),
                        dataFinePeriodo varchar(32),
                        costoSoci int(),
                        PrezzoOrarioSocio int(),
                        PrezzoOrarioNonSocio int()
                    )";

    mysqli_query($con, $sql);

    $sql="CREATE TABLE IF NOT EXISTS TabConfigurazioneRiscaldamento
                    (
                        Id int AUTO_INCREMENT PRIMARY KEY,
                        NumeroCampi int(),
                        OrarioInizio varchar(32),
                        OrarioFine varchar(32),
                        PrezzoOrarioSocio int(),
                        PrezzoOrarioNonSocio int()
                    )";

    mysqli_query($con, $sql);

    mysqli_close($con);
    // ==================================================================================
?>