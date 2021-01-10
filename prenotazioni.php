<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Tennis</title>
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/fontawesome/css/all.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="site.css" rel="stylesheet">
</head>

<body>
    <?php include 'globale.php' ?>
    <?php include 'inc/proc-prenotazioni.php' ?>
    <?php include 'menu.php' ?>

    <main role="main" class="container container-form-signin">
        <nav class="float-right" aria-label="Page navigation example">
            <ul class="pagination">
                <?php 
		for ($idx = 0; $idx < 7; $idx++){
			$descrizione = $descrizioneGiorniSettimana[$idx + $giornoattuale];
			$active = $idx == $giorno ? "active" : "";
			$tag = $descrizione == $descrizioneGiorniSettimana[$giornoiniziale] ? "text-warning" : "";

			echo "<li class=\"page-item ".$active."\"><a class=\"page-link ".$tag."\" href=\"prenotazioni.php?giorno=".$idx."\">".$descrizione."</a></li>";
		}
	  ?>
            </ul>
        </nav>
        <h2>Disponibilità di prenotazioni dei campi di gioco</h2>
        <form class="form-signin" action="prenota.php" method="post">
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>Numero del campo</th>
                            <?php 
							for ($idx = $orarioInizio; $idx <= $orarioFine; $idx++)
							{							
								print_r("<th>$idx</th>");
							}
							?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
							foreach($dettaglioPrenotazioni as $item)
							{
								echo $item->rigaPrenotazioni($item, $disabilitaprenotazione);
							}
						?>
                    </tbody>
                </table>
            </div>
			
            <input type="hidden" name="inputGiorno" value="<?php echo $giorno ?>" />

            <button <?php if($disabilitaprenotazione) echo "disabled"; ?> class="btn btn-lg btn-primary btn-block"
                type="submit">Prenota</button>
        </form>

    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script>
    window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/vendor/holder.min.js"></script>
    <script>
    Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
    });
    </script>
    <?php include 'debug.php' ?>
</body>

</html>