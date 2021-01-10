<?php
    $redirectlink = $home;
    $messaggio = "Abbonamento registrato";

    $paymentMethod = "";
    $ccname = "";
    $ccnumber = "";
    $ccexpiration = "";
    $cccvv = "";

    // controllo che la pagina è proviene da un submit
    if (isset($_POST["paymentMethod"]))
    {
        $paymentMethod = $_POST['paymentMethod'];  
    }

    if (isset($_POST["cc-name"]))
    {
        $ccname = $_POST['cc-name'];  
    }

    if (isset($_POST["cc-number"]))
    {
        $ccnumber = $_POST['cc-number'];  
    }

    if (isset($_POST["cc-expiration"]))
    {
        $ccexpiration = $_POST['cc-expiration'];  
    }

    if (isset($_POST["cc-cvv"]))
    {
        $cccvv = $_POST['cc-cvv'];  
    }
    
    // una volta recuperati tutti i dati dalla form andiamo a memorizzare nel db
?>