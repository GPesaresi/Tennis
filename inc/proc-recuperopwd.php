<?php

    $server = "localhost";
    $utente = "root";
    $password = "";
    $db="Profilo";

    $databaseConnected = mysqli_connect($server, $utente, $password, $db);
    if(isset($_POST['Avanti']))

    {
        $sql="SELECT email FROM TabRegistrati WHERE email = $email";
    }
?>