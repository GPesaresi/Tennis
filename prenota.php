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
    <!-- Custom styles for this template -->
    <link href="site.css" rel="stylesheet">
</head>

<body>
    <?php include 'globale.php' ?>
    <?php include 'inc/proc-prenota.php' ?>
    <?php include 'menu.php' ?>

    <main role="main" class="container container-form-signin">
        <div class="row">
            <div class="offset-md-3 col-md-6 text-center">
                <form class="form-signin" action="prenotaconferma.php" method="post">
                    <h1 class="h3 mb-3 font-weight-normal">Orari prenotati, completa la tua prenotazione</h1>
                    <div class="table-responsive" style="padding-bottom:20px;">
                        <table class="table table-bordered table-sm">
                            <thead>
                                <tr>
                                    <th>Numero del campo</th>
                                    <th>Orario prenotato</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
							$prenotazioni = $_POST['oraprenotazione'];
							
							foreach($prenotazioni as $item)
								{
									$valori = explode('-', $item);
									echo "<tr><td>$valori[0]</td><td>$valori[1]</td></tr>";
								}
							?>
                            </tbody>
                        </table>
                    </div>

                    <label for="inputNumeroGiocatori" class="sr-only">Email address</label>
                    <input name="numeroGiocatori" type="text" id="inputNumeroGiocatori" class="form-control"
                        placeholder="Immetti il numero dei giocatori" required autofocus>
                    <div class="row" style="padding-top: 15px;">
                        <div class="col-md-3" style="text-align: left;">
                            <label>
                                <input name="inputLuci" type="checkbox"> Luci
                            </label>
                        </div>
                        <div class="offset-md-6 col-md-3" style="text-align: right;">
                            <label>
                                <input name="inputRiscaldamento" type="checkbox"> Riscaldamento
                            </label>
                        </div>
                    </div>
                    <?php 
					$prenotazioni = $_POST['oraprenotazione'];
				
					foreach($prenotazioni as $item)
					{
						echo '<input type="hidden" name="oraprenotazione[]" value="'. $item. '">';
					}
					?>

                    <input type="hidden" name="inputGiorno" value="<?php echo $_POST['inputGiorno'] ?>" />
                    <hr class="mb-4">
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Conferma prenotazione</button>
                </form>
            </div>
        </div><!-- /.row -->
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