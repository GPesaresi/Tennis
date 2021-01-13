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
    <?php include 'inc/proc-abbonamento.php' ?>
    <?php include 'menu.php' ?>

    <main role="main" class="container container-form-signin">
        <div class="row">
            <div class="offset-md-3 col-md-6 text-center">
                <form class="form-signin" action="abbonamentoconferma.php" method="post">
                    <h1 class="h3 mb-3 font-weight-normal">Conferma abbonamento per l'anno corrente</h1>

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
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Conferma abbonamento</button>
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