<?php include 'Database.php' ?>

<?php
    $server = "localhost";
    $utente = "root";
    $password = "";
    $database="Profilo";
    
    $databaseConnected = mysqli_connect($server, $utente, $password, $database);
    $sql = "CREATE DATABASE IF NOT EXISTS Profilo";
    $res = mysqli_query($databaseConnected, $sql);
    
    if (!$res) die("Errore nella creazione...".mysqli_errno($res));
    echo "Database creata con sucesso, ";

    $sql="CREATE TABLE IF NOT EXISTS TabRegistrati
                    (
                        Utente int AUTO_INCREMENT PRIMARY KEY,
                        nome varchar(15),
                        cognome varchar(15),
                        email varchar(20),
                        ntelefono varchar(20),
                        passwordUtente varchar(20),
                        domandaRec varchar(30),
                        rispostaRec varchar(30),
                        manoUsata varchar(20),
                        Orario varchar(20)
                    )";
    echo "Creazione Tabella con sucesso";

    
?>