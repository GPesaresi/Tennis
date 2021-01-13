<hr class="mb-4">
<?php
	// print_r($_REQUEST);
	print_r($_GET);
	print_r($_POST);
	print_r($_SESSION);
	print_r($_SESSION);


	echo("<br>");
	echo date('Ymd',strtotime("now"))."<br>";
	// echo date('Y-m-d:w',strtotime("+1 day"))."<br>";
	// echo date('Y-m-d:w',strtotime("+2 day"))."<br>";
	// echo strtotime("+1 week")."<br>";
	// echo strtotime("+1 week 2 days 4 hours 2 seconds")."<br>";
	// echo strtotime("next Thursday")."<br>";
	// echo strtotime("last Monday")."<br>";




	// determinare da data di inizio del tabellone delle prenotazioni
	// $giornoiniziale indica il giorno della settimana in cui inizia il tabellone
	// $dataattuale = date("Ymd"); 
	// $giornoattuale = date("w");

	for ($delta = 0; $delta < 7; $delta++)
	{
		$offset = date('w',strtotime("-".$delta." day"));
		if($offset == $giornoiniziale){
			$rangeStart = strtotime("-".$delta." day");
			$rangeEnd = strtotime("+6 day", $rangeStart);

			echo date("Ymd",$rangeStart);
			echo("<br>");
			echo date("Ymd",$rangeEnd);
			echo("<br>");
			echo($delta);
			echo("<br>");
			break;
		}
	}


	echo "nomeutente:".$nomeutente."<br>";
	if($socio)
	{
		echo "socio:true<br>";
	}
	else
	{
		echo "socio:false<br>";
	}

	// determinare la data della vista attuale delle prenotazioni
?>