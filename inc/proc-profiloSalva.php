<?php
    $redirectlink = $home;
    $messaggio = "";

    $id = "";
    $nome = "";
    $cognome = "";
    $email = "";
    $numeroDiTelefono = "";
    $password = "";
    $domandaRecuperoPassword = "";
    $rispostaRecuperoPassword = "";
    $manoUsata = "";
    $fasciaOrario = "";

    // controllo che la pagina è proviene da un submit
    if (isset($_POST["id"])) $id = $_POST['id'];  
    if (isset($_POST["nome"])) $nome = $_POST['nome'];  
    if (isset($_POST["cognome"])) $cognome = $_POST['cognome'];  
    if (isset($_POST["email"])) $email = $_POST['email'];  
    if (isset($_POST["numeroDiTelefono"])) $numeroDiTelefono = $_POST['numeroDiTelefono'];  
    if (isset($_POST["password"])) $password = $_POST['password'];  
    if (isset($_POST["domandaRecuperoPassword"])) $domandaRecuperoPassword = $_POST['domandaRecuperoPassword'];  
    if (isset($_POST["rispostaRecuperoPassword"])) $rispostaRecuperoPassword = $_POST['rispostaRecuperoPassword'];  
    if (isset($_POST["manoUsata"])) $manoUsata = $_POST['manoUsata'];  
    if (isset($_POST["fasciaOrario"])) $fasciaOrario = $_POST['fasciaOrario'];  

    // una volta recuperati tutti i dati dalla form andiamo a memorizzare nel db

    // ==================================================================================
    $con = mysqli_connect($server, $utente, $password, $database);

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    $sql="UPDATE tabregistrati SET nome = '$nome', cognome = '$cognome', email = '$email', ntelefono' = '$numeroDiTelefono', 'passwordUtente' = '$password', 'domandaRec' = '$domandaRecuperoPassword', 'rispostaRec' = '$rispostaRecuperoPassword', 'manoUsata' = '$manoUsata', 'Orario' = '$fasciaOrario' WHERE 'tabregistrati'.'id' = $id";

    mysqli_query($con, $sql);

    mysqli_close($con);
    // ==================================================================================



?>