<?php
	// avvio della sessione utente
	session_start();

	// home page
	$home = "/Tennis";

	$server = "localhost";
	$utente = "root";
	$password = "";
	$database = "Profilo";

	// nome utente, se vuoto si presume utente anonimo
	if (isset($_SESSION['nomeutente'])) {
		$nomeutente	= $_SESSION['nomeutente'];
	} else {
		$nomeutente = "";
	}
	
	// se l'utente è loggato indica se è socio oppure no
	if (isset($_SESSION['socio'])) {
		if (intval($_SESSION['socio']) == 1)
		{
			$socio = true;
		}
		else
		{
			$socio = false;
		}
	} else {
		$socio = false;
	}

	// classe usata per la visualizzazione della griglia delle prenotazioni storiche utente
	class StoricoUtente
	{
		// attributi
		public $dataPrenotazione;
		public $numeroCampo;
		public $orario;
		public $nGiocatori;
		public $luci;
		public $riscaldamento;
		public $costo;

		//costruttore
		public function __construct($dataPrenotazione,$numeroCampo,$orario,$nGiocatori,$luci,$riscaldamento,$costo)
		{
			$this->dataPrenotazione    = $dataPrenotazione;
			$this->numeroCampo = $numeroCampo;
			$this->orario     = $orario;
			$this->nGiocatori     = $nGiocatori;
			$this->luci     = $luci;
			$this->riscaldamento     = $riscaldamento;
			$this->costo     = $costo;
		}

		public function rigaStorico($u)
		{
			return
				"<tr><td>".$u->dataPrenotazione."</td>"
				   ."<td>".$u->numeroCampo."</td>"
				   ."<td>".$u->orario."</td>"
				   ."<td>".$u->nGiocatori."</td>"
				   ."<td>".$u->luci."</td>"
				   ."<td>".$u->riscaldamento."</td>"
				   ."<td>".$u->costo."</td></tr>";
		}
	}
	
	// classe usata per la visualizzazione della griglia delle prenotazioni
	class DettaglioPrenotazioni
	{
		// attributi
		public $numeroCampo;
		public $orarioInizio;
		public $orarioFine;
		public $orario = array();

		//costruttore
		public function __construct($numeroCampo, $inizio, $fine)
		{
			$this->numeroCampo = $numeroCampo;
			$this->orarioInizio = $inizio;
			$this->orarioFine = $fine;
			for ($idx = $inizio; $idx <= $fine; $idx++)
			{
				$this->orario[] = 0; 
			}
		}

		public function rigaPrenotazioni($u, $hide)
		{
			$buffer = "<tr><td>".$u->numeroCampo."</td>";
			for ($idx = $u->orarioInizio; $idx <= $u->orarioFine; $idx++)
			{
				$disable = "";
				if($hide) {
					$disable = "disabled=\"disabled\"";
				}
				$tag = "<label><input ".$disable." name=\"oraprenotazione[]\" type=\"checkbox\" value=\"".$u->numeroCampo."-".$idx."\"></label>";
				if ($u->orario[$idx - $u->orarioInizio] == 1)
				{
					$tag = "<span class=\"fas fa-user-check\"></span>";
				}
				$buffer = $buffer."<td>";
				$buffer = $buffer.$tag;
				$buffer = $buffer."</td>";
			}
			return $buffer."</tr>";
		}

		public function Prenota($ora)
		{
			$this->Set($ora, 1);
		}

		public function Set($ora, $flag)
		{
			for ($idx = $this->orarioInizio; $idx <= $this->orarioFine; $idx++)
			{
				if ($idx == $ora)
				{
					$this->orario[$idx - $this->orarioInizio] = $flag;
					return;
				}
			}
		}
	}

	// --------------------------------------------------------------------------------
	// array con i dati da visualizzare nella pagina delle prenotazioni storiche utente
	$storicoPrenotazioni = array();

	// ----------------------------------------------------------------
	// array con i dati da visualizzare nella pagina delle prenotazioni
	$dettaglioPrenotazioni = array();

	// --------------------------------------------
	// variabili di configurazione dell'applicativo

	// orario di inizio delle prenotazioni
	$orarioInizio = 9;
	// orario di fine delle prenotazioni
	$orarioFine = 21; 
	// costo orario delle prenotazioni
	$costoPrenotazione = 1205;
	// giorno iniziale delle prenotazioni da 0 a 6 : DOM ...
	$giornoiniziale = 6;
	// numero dei campi disponibili
	$numerocampi = 10;

	// ----------------------------------------------------------------
	// array con le descrizioni dei giorni della settimana
	$descrizioneGiorniSettimana = array();

	// inserimento dati
	$descrizioneGiorniSettimana[]= "DOM";
	$descrizioneGiorniSettimana[]= "LUN";
	$descrizioneGiorniSettimana[]= "MAR";
	$descrizioneGiorniSettimana[]= "MER";
	$descrizioneGiorniSettimana[]= "GIO";
	$descrizioneGiorniSettimana[]= "VEN";
	$descrizioneGiorniSettimana[]= "SAB";
	$descrizioneGiorniSettimana[]= "DOM";
	$descrizioneGiorniSettimana[]= "LUN";
	$descrizioneGiorniSettimana[]= "MAR";
	$descrizioneGiorniSettimana[]= "MER";
	$descrizioneGiorniSettimana[]= "GIO";
	$descrizioneGiorniSettimana[]= "VEN";
	$descrizioneGiorniSettimana[]= "SAB";

	$dataattuale = date("Ymd"); 
	$giornoattuale = date("w");

	// determina la data di inizio e di fine della settimana di prenotazioni del tabellone
	$rangePrenotazioniInizio = $rangePrenotazioniFine = 0;
	for ($delta = 0; $delta < 7; $delta++)
	{
		$offset = date('w',strtotime("-".$delta." day"));
		if($offset == $giornoiniziale){
			$rangePrenotazioniInizio = strtotime("-".$delta." day");
			$rangePrenotazioniFine = strtotime("+6 day", $rangePrenotazioniInizio);
			break;
		}
	}

?>