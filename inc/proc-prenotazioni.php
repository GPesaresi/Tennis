<?php
	// numero del giorno che viene visualizzato nella tabella dell prenotazioni
	$giorno = 0; // default
	// flag per disabilitare le prenotazioni
	$disabilitaprenotazione = false;

	// si recupera la selezione del giorno da visualizzare
	if (isset($_GET['giorno']))
	{
		$giorno = intval($_GET['giorno']);
	}

	// data del giorno che viene visualizzato nel tabellone delle prenotazioni
	$giornodavisualizzare = strtotime("+".$giorno." day");

	// si riempe l'arry utilizzato per visualizzare il tabellone delle prenotazioni
	/*for( $idx=0; $idx<$numerocampi; $idx++)
	{
		// instanzio una prenotazione, gli orari sono tutti liberi
		$item = new DettaglioPrenotazioni(sprintf("%03d", $idx + 1), $orarioInizio, $orarioFine);
		// aggiongo aal'array delle prenotazioni
		$dettaglioPrenotazioni[] = $item;


		// per ogni campo (numerocampo) e per il giorno di prenotazione ($giornodellaprenotazione) 
		// bisogna andare nel database e prendere le  prenotazioni attive e impostare che è stata 
		// effettuata la prenotazione
		// $dataattuale es: 20210108  +  $giorno = 20210109 (domani)

		// il database potrebbe rispondere che vi sono 2 prenotazioni 
		// una alle 10:00 e una alle 13:00

		//$item->Prenota(10);
		//$item->Prenota(13);
	}*/

	// se non si è soci si disabilita il tabellone se è il giorno riservato ai soci
	/*if ($socio == false)
	{
		if(strtotime("now") == $rangePrenotazioniInizio){
			$disabilitaprenotazione = true;
		}
	}

	// verifica se il giorno da visualizzare nel tabellone è compreso nella settima corrente delle prenotazioni
	if($giornodavisualizzare < $rangePrenotazioniInizio || $giornodavisualizzare > $rangePrenotazioniFine)
	{
		$disabilitaprenotazione = true;
	}*/

	$server = "localhost";
    $utente = "root";
    $password = "";
    $db="Profilo";
    
    $databaseConnected = mysqli_connect($server, $utente, $password, $db);

	$sql="CREATE TABLE IF NOT EXISTS TabPrenotazioni
                    (
                        Id int AUTO_INCREMENT PRIMARY KEY,
                        Utente varchar(15),
                        NumeroCampo int(15),
                        Orario varchar(20),
                        DataPrenota int(20),
                        NGiocatori int(20),
                        Luci boolean(30),
                        Riscaldamento boolean(30),
                        CostoTot int(20),
						MetodoPagamento varchar(10),
                    )";
    echo "Creazione Tabella con sucesso";

    $ok=mysqli_query($databaseConnected,$sql);
    if (!$ok) die("Errore query: ".mysqli_errno($databaseConnected));
?>