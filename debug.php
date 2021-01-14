<hr class="mb-4">
<?php
	// print_r($_REQUEST);
	print_r($_GET);
	print_r($_POST);
	print_r($_SESSION);
	echo("<br>");

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