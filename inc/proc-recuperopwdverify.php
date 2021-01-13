<?php
    $redirectlink = $home;
    $messaggio = "";


    $domandaRecuperoPassword = "";
    $inputRisposta = "";
    $inputPassword = "";
    $inputVPassword = "";
    $inputEmail = "";


    // controllo che la pagina è proviene da un submit
    if (isset($_POST["domandaRecuperoPassword"])) $domandaRecuperoPassword = $_POST['domandaRecuperoPassword'];  
    if (isset($_POST["inputRisposta"])) $inputRisposta = $_POST['inputRisposta'];  
    if (isset($_POST["inputPassword"])) $inputPassword = $_POST['inputPassword'];  
    if (isset($_POST["inputVPassword"])) $inputVPassword = $_POST['inputVPassword'];  
    if (isset($_POST["inputEmail"])) $inputEmail = $_POST['inputEmail']; 

    // una volta recuperati tutti i dati dalla form andiamo a memorizzare nel db
?>