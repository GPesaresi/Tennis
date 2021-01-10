<?php
    $redirectlink = $home;
    $messaggio = "Accesso revocato";

    if (isset($_SESSION['nomeutente'])) {
        unset($_SESSION['nomeutente']);
    }
    if (isset($_SESSION['socio'])) {
        unset($_SESSION['socio']);
    }
?>