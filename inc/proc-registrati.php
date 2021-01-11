<?php include 'Database.php' ?>

<?php
    $server = "localhost";
    $utente = "root";
    $password = "";
    $database="Profilo";
    
    $databaseConnected = mysqli_connect($server, $utente, $password, $database);
    $sql = "CREATE DATABASE IF NOT EXISTS Profilo";
    $res = mysqli_query($databaseConnected, $sql);
    
    if (!$res) die("Errore nella creazione...".mysqli_errno($res));
    echo "Database creata con sucesso, ";

    $sql="CREATE TABLE IF NOT EXISTS TabRegistrati
                    (
                        Utente int AUTO_INCREMENT PRIMARY KEY,
                        nome varchar(15),
                        cognome varchar(15),
                        email varchar(20),
                        ntelefono varchar(20),
                        passwordUtente varchar(20),
                        domandaRec varchar(30),
                        rispostaRec varchar(30),
                        manoUsata varchar(20),
                        Orario varchar(20)
                    )";
    echo "Creazione Tabella con sucesso";

    $ok=mysqli_query($databaseConnected,$sql);
    if (!$ok) die("Errore query: ".mysqli_errno($databaseConnected));
    if(isset($_POST['Registrati']))
    {
        $nome=$_POST['nome'];
        $cognome=$_POST['cognome'];
        $email=$_POST['email'];
        $numeroDiTelefono=$_POST['numeroDiTelefono'];
        $password=$_POST['password'];
        $domandaRecuperoPassword=$_POST['domandaRecuperoPassword'];
        $rispostaRecuperoPassword=$_POST['rispostaRecuperoPassword'];
        $manoUsata=$_POST['manoUsata'];
        $fasciaOraria=$_POST['fasciaOraria'];

        $sql='INSERT INTO TabRegistrati(nome,cognome,email,ntelefono,passwordUtente,domandaRec,rispostaRec,manoUsata,Orario) Values ('$nome','$cognome','$email','$numeroDiTelefono','$password','$domandaRecuperoPassword','$rispostaRecuperoPassword','$manoUsata','$fasciaOraria')';
        $res=mysqli_query($databaseConnected,$sql);
        if(!$res)
        die('errore inserimento $sql'.mysqli_errno($databaseConnected));
    }
?>