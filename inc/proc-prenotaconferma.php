<?php

$numeroGiocatori = 0;
$inputLuci = 0;
$inputRiscaldamento = 0;
$oraprenotazioni = $_POST['oraprenotazione'];

if (isset($_POST["numeroGiocatori"])) $numeroGiocatori = $_POST['numeroGiocatori'];  
if (isset($_POST["inputLuci"])) $inputLuci = true;  
if (isset($_POST["inputRiscaldamento"])) $inputRiscaldamento = true; 

// dopo aver recuperato le informazioni e tramite i dati registrati nel db faccio il calcolo del costo della prenotazione

// qui si mette il costo della prenotazione *esempio*
$costoPrenotazione = 57;
?>