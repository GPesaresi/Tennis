<?php
    $redirectlink = $home;
    $messaggio = "";

    $id = 0;
    $nome = "";
    $cognome = "";
    $email = "";
    $numeroDiTelefono = "";
    $password = "";
    $domandaRecuperoPassword = "";
    $rispostaRecuperoPassword = "";
    $manoUsata = "";
    $fasciaOrario = "";

    // ==================================================================================
    $con = mysqli_connect($server, $utente, $password, $database);

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    $sql = "SELECT id, nome, cognome, email, ntelefono, passwordUtente, domandaRec, rispostaRec, manoUsata, Orario FROM TabRegistrati WHERE email = '$nomeutente'";

    if ($result = mysqli_query($con, $sql)) {
        // Fetch one and one row
        while ($row = mysqli_fetch_row($result)) {
            $id = $row[0];
            $nome = $row[1];
            $cognome = $row[2];
            $email = $row[3];
            $numeroDiTelefono = $row[4];
            $password = $row[5];
            $domandaRecuperoPassword = $row[6];
            $rispostaRecuperoPassword = $row[7];
            $manoUsata = $row[8];
            $fasciaOrario = $row[9];
        }
        mysqli_free_result($result);
    }

    mysqli_close($con);
    // ==================================================================================
?>