<?php
    $redirectlink = $home;
    $messaggio = "";
    $ok = false;

    // controllo che la pagina è proviene da un submit
    if (isset($_POST['inputEmail']))
    {
        if (isset($_POST['inputPassword']))
        {
            $inputEmail = $_POST['inputEmail'];    
            $inputPassword = $_POST['inputPassword'];    

            // si effettua la verifica che le credenziali passate siano corrette
            // ..........................................
            // inserire qui il codice per la verifica e definire $ok true o false a seconda del risultato della verifica
            $con = mysqli_connect($server, $utente, $password, $database);

            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                exit();
            }
    
            $sql = "SELECT passwordUtente FROM TabRegistrati WHERE email = '$inputEmail'";
    
            if ($result = mysqli_query($con, $sql)) {
                // Fetch one and one row
                while ($row = mysqli_fetch_row($result)) {
                    //printf ("%s (%s)\n", $row[0], $row[1]);
    
                    if($row[0] == $inputPassword){
                        $ok = true;
                    }
                }
                mysqli_free_result($result);
            }
    
            mysqli_close($con);
            // ..........................................

            if($ok){
                $redirectlink = $home;
                $messaggio = "Accesso effettuato";

                // si salva il nome dell'utente che si è loggato
                $_SESSION['nomeutente'] = $inputEmail;

                // bisogna verificare se nel db c'è un abbonamento legato al nome utente per l'anno corrente
                // se si: bisogna impostare sesion = 1, oppure = 0
                // i seguenti valori devono essere impostati in base alla proprieta dell'utente
                $_SESSION['socio'] = 1;
            }
            else{
                $redirectlink = $home."/login.php";
                $messaggio = "Accesso non riuscito. Errore di autenticazione";

                if (isset($_SESSION['nomeutente'])) {
                    unset($_SESSION['nomeutente']);
                }
                if (isset($_SESSION['socio'])) {
                    unset($_SESSION['socio']);
                }
            }
        }
    }
?>