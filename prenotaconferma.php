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
    <?php include 'inc/proc-prenotaconferma.php' ?>
    <?php include 'menu.php' ?>

    <main role="main" class="container container-form-signin">
        <div class="row">
            <div class="offset-md-3 col-md-6 text-center">
                <form class="form-signin" action="prenotafinish.php" method="post">
                    <h1 class="h3 mb-3 font-weight-normal">Dettaglio prenotazione, conferma la prenotazione</h1>
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
                    <input value="<?php echo $_POST['numeroGiocatori'] ?>" readonly name="numeroGiocatori" type="text"
                        id="inputNumeroGiocatori" class="form-control" placeholder="Immetti il numero dei giocatori"
                        required autofocus>
                    <div class="row" style="padding-top: 15px;">
                        <div class="col-md-3" style="text-align: left;">
                            <label>
                                <input disabled="disabled" type="checkbox"
                                    <?php if (isset($_POST['inputLuci'])){echo "checked";} ?>> Luci
                            </label>
                        </div>
                        <div class="offset-md-6 col-md-3" style="text-align: right;">
                            <label>
                                <input disabled="disabled" type="checkbox"
                                    <?php if (isset($_POST['inputRiscaldamento'])){echo "checked";} ?>> Riscaldamento
                            </label>
                        </div>
                        <input type="hidden" name="inputLuci"
                            value="<?php if (isset($_POST['inputLuci'])){echo "on";} ?>" />
                        <input type="hidden" name="inputRiscaldamento"
                            value="<?php if (isset($_POST['inputRiscaldamento'])){echo "on";} ?>" />
                    </div>
                    <label for="inputCostoPrenotazione">Costo prenotazione</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">€</span>
                        </div>
                        <input value="<?php echo $costoPrenotazione ?>" readonly name="costoPrenotazione" type="text"
                            id="inputCostoPrenotazione" class="form-control" readonly>
                    </div>

                    <h4 class="mb-3" style="padding-top:15px;">Pagamento</h4>

                    <div class="d-block my-3" style="text-align: left;">
                        <div class="custom-control custom-radio">
                            <input value="credit" id="credit" name="paymentMethod" type="radio"
                                class="custom-control-input" checked required>
                            <label class="custom-control-label" for="credit">Carta di credito</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input value="debit" id="debit" name="paymentMethod" type="radio"
                                class="custom-control-input" required>
                            <label class="custom-control-label" for="debit">Carta di debito</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input value="paypal" id="paypal" name="paymentMethod" type="radio"
                                class="custom-control-input" required>
                            <label class="custom-control-label" for="paypal">Paypal</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="cc-name">Nome sulla carta</label>
                            <input name="cc-name" type="text" class="form-control" id="cc-name" placeholder="" required>
                            <small class="text-muted">Nome completo come visualizzato sulla carta.</small>
                            <div class="invalid-feedback">
                                Il nome sulla carta è richiesto.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cc-number">Numero della carta</label>
                            <input name="cc-number" type="text" class="form-control" id="cc-number" placeholder=""
                                required>
                            <small class="text-muted">Numero della carta come visualizzato sulla carta.</small>
                            <div class="invalid-feedback">
                                Il numero della carta è richiesto.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-8">
                            <label for="cc-expiration">Scadenza</label>
                            <input name="cc-expiration" type="text" class="form-control" id="cc-expiration"
                                placeholder="" required>
                            <small class="text-muted">Scadenza della carta come visualizzato sulla carta.</small>
                            <div class="invalid-feedback">
                                La data di scadenza è richiesta.
                            </div>
                        </div>
                        <div class="col-md-6 mb-8">
                            <label for="cc-expiration">CVV</label>
                            <input name="cc-cvv" type="text" class="form-control" id="cc-cvv" placeholder="" required>
                            <small class="text-muted">Securite code (CVV) della carta come visualizzato sulla
                                carta.</small>
                            <div class="invalid-feedback">
                                Security code è richiesto.
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4">

                    <?php 
				$prenotazioni = $_POST['oraprenotazione'];
				
				foreach($prenotazioni as $item)
					{
						echo '<input type="hidden" name="oraprenotazione[]" value="'. $item. '">';
					}
				?>
                
                    <input type="hidden" name="inputGiorno" value="<?php echo $_POST['inputGiorno'] ?>" />
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Conferma prenotazione</button>
                </form>
            </div>
        </div>
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