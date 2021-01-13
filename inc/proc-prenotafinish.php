<?php

$numeroGiocatori = 0;
$inputLuci = 0;
$inputRiscaldamento = 0;
$oraprenotazioni = $_POST['oraprenotazione'];
$costoPrenotazione = 0;

if (isset($_POST["numeroGiocatori"])) $numeroGiocatori = $_POST['numeroGiocatori'];  
if (isset($_POST["inputLuci"])) $inputLuci = true;  
if (isset($_POST["inputRiscaldamento"])) $inputRiscaldamento = true; 
if (isset($_POST["costoPrenotazione"])) $costoPrenotazione = $_POST['costoPrenotazione'];  

// registro la prenotazione nel db

?>