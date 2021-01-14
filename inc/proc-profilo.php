<?php
    $redirectlink = $home;
    $messaggio = "";

    $nome = "";
    $cognome = "";
    $email = "";
    $numeroDiTelefono = "";
    $password = "";
    $domandaRecuperoPassword = "";
    $rispostaRecuperoPassword = "";
    $manoUsata = "";
    $fasciaOrario = "";

    // prendo i dati del profilo dal db e gli assegno alle variabili
    // esempio
    /*$nome = "Pippo";
    $cognome = "Pluto";
    $email = "a.a@a";
    $domandaRecuperoPassword = "2";*/

    $server = "localhost";
    $utente = "root";
    $password = "";
    $db="Profilo";
    
    $databaseConnected = mysqli_connect($server, $utente, $password, $db);

    $nome=$_POST['nome'];
    $cognome=$_POST['cognome'];
    $email=$_POST['email'];
    $numeroDiTelefono=$_POST['numeroDiTelefono'];
    $password=$_POST['password'];
    $domandaRecuperoPassword=$_POST['domandaRecuperoPassword'];
    $rispostaRecuperoPassword=$_POST['rispostaRecuperoPassword'];
    $manoUsata=$_POST['manoUsata'];
    $fasciaOrario=$_POST['fasciaOrario'];

    // una volta recuperati tutti i dati dalla form andiamo a memorizzare nel db
?>