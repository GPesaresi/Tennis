<?php

    $server = "localhost";
    $utente = "root";
    $password = "";
    $db="Profilo";

    $databaseConnected = mysqli_connect($server, $utente, $password, $db);

    $sql="CREATE TABLE IF NOT EXISTS TabConfigurazione
                    (
                        Id int AUTO_INCREMENT PRIMARY KEY,
                        NumeroCampi varchar(15),
                        OrarioInizio varchar(15),
                        OrarioFine varchar(20),
                        PrezzoOrarioSocio int(20),
                        PrezzoOrarioNonSocio int(20)
                    )";
    echo "Creazione Tabella con sucesso";

    $ok=mysqli_query($databaseConnected,$sql);
    if (!$ok) die("Errore query: ".mysqli_errno($databaseConnected));

    $sql="CREATE TABLE IF NOT EXISTS TabConfigurazioneLuce
                    (
                        Id int AUTO_INCREMENT PRIMARY KEY,
                        dataInizioPeriodo varchar(15),
                        dataFinePeriodo varchar(15),
                        costoSoci int(20),
                        PrezzoOrarioSocio int(20),
                        PrezzoOrarioNonSocio int(20)
                    )";
    echo "Creazione Tabella con sucesso";

    $ok=mysqli_query($databaseConnected,$sql);
    if (!$ok) die("Errore query: ".mysqli_errno($databaseConnected));
                    
    $sql="CREATE TABLE IF NOT EXISTS TabConfigurazioneRiscaldamento
                    (
                        Id int AUTO_INCREMENT PRIMARY KEY,
                        NumeroCampi varchar(15),
                        OrarioInizio varchar(15),
                        OrarioFine varchar(20),
                        PrezzoOrarioSocio int(20),
                        PrezzoOrarioNonSocio int(20)
                    )";
    echo "Creazione Tabella con sucesso";

    $ok=mysqli_query($databaseConnected,$sql);
    if (!$ok) die("Errore query: ".mysqli_errno($databaseConnected));                    
?>