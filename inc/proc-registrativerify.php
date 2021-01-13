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

    // controllo che la pagina è proviene da un submit
    /*if (isset($_POST["nome"])) $nome = $_POST['nome'];  
    if (isset($_POST["cognome"])) $cognome = $_POST['cognome'];  
    if (isset($_POST["email"])) $email = $_POST['email'];  
    if (isset($_POST["numeroDiTelefono"])) $numeroDiTelefono = $_POST['numeroDiTelefono'];  
    if (isset($_POST["password"])) $password = $_POST['password'];  
    if (isset($_POST["domandaRecuperoPassword"])) $domandaRecuperoPassword = $_POST['domandaRecuperoPassword'];  
    if (isset($_POST["rispostaRecuperoPassword"])) $rispostaRecuperoPassword = $_POST['rispostaRecuperoPassword'];  
    if (isset($_POST["manoUsata"])) $manoUsata = $_POST['manoUsata'];  
    if (isset($_POST["fasciaOrario"])) $fasciaOrario = $_POST['fasciaOrario'];*/  

    // una volta recuperati tutti i dati dalla form andiamo a memorizzare nel db

    if(isset($_POST['Registrati']))
    {
        $server = "localhost";
        $utente = "root";
        $password = "";

        $databaseConnected = mysqli_connect($server, $utente, $password);

        $commando="USE Profilo";
        $res=mysqli_query($databaseConnected,$commando);

        $nome=$_POST['nome'];
        $cognome=$_POST['cognome'];
        $email=$_POST['email'];
        $numeroDiTelefono= (int) $_POST['numeroDiTelefono'];
        $password=$_POST['password'];
        $domandaRecuperoPassword= (int) $_POST['domandaRecuperoPassword'];
        $rispostaRecuperoPassword=$_POST['rispostaRecuperoPassword'];
        $manoUsata=$_POST['manoUsata'];
        $fasciaOraria=$_POST['fasciaOrario'];

        $sql="INSERT INTO TabRegistrati(nome,cognome,email,ntelefono,passwordUtente,domandaRec,rispostaRec,manoUsata,Orario) Values ('$nome','$cognome','$email','$numeroDiTelefono','$password','$domandaRecuperoPassword','$rispostaRecuperoPassword','$manoUsata','$fasciaOraria')";
        $res=mysqli_query($databaseConnected,$sql);
        if(!$res)
        die('errore inserimento $sql'.mysqli_errno($databaseConnected));
    }
   
?>