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
                        NumeroCampi varchar(15),
                        OrarioInizio varchar(15),
                        OrarioFine varchar(20),
                        PrezzoOrarioSocio int(20),
                        PrezzoOrarioNonSocio int(20)
                    )";

    mysqli_query($con, $sql);

    $sql="CREATE TABLE IF NOT EXISTS TabConfigurazioneLuce
                    (
                        Id int AUTO_INCREMENT PRIMARY KEY,
                        dataInizioPeriodo varchar(15),
                        dataFinePeriodo varchar(15),
                        costoSoci int(20),
                        PrezzoOrarioSocio int(20),
                        PrezzoOrarioNonSocio int(20)
                    )";

    mysqli_query($con, $sql);

    $sql="CREATE TABLE IF NOT EXISTS TabConfigurazioneRiscaldamento
                    (
                        Id int AUTO_INCREMENT PRIMARY KEY,
                        NumeroCampi varchar(15),
                        OrarioInizio varchar(15),
                        OrarioFine varchar(20),
                        PrezzoOrarioSocio int(20),
                        PrezzoOrarioNonSocio int(20)
                    )";

    mysqli_query($con, $sql);

    mysqli_close($con);
    // ==================================================================================
?>