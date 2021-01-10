<?php
    $Database="CREATE DATABASE IF NOT EXISTS Profilo";
    echo "Database creata con sucesso";

    $TabRegistrati="CREATE TABLE IF NOT EXISTS TabRegistrati
                    (
                        Utente int AUTO_INCREMENT PRIMARY KEY,
                        nome varchar(15),
                        cognome varchar(15),
                        email varchar(20),
                        ntelefono varchar(20),
                        passwordUtente varchar(20),
                        domandaRec varchar(30),
                        rispostaRec varchar(30)
                    )";
    echo "Creazione Tabella con sucesso";
?>