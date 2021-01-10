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
    <?php include 'inc/proc-recuperopwddomanda.php' ?>
    <?php include 'menu.php' ?>

    <main role="main" class="container container-form-signin">
        <div class="row">
            <div class="offset-md-3 col-md-6 text-center">
                <form class="form-signin" action="recuperopwdverify.php" methond="post">
                    <img class="mb-4" src="assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
                    <h1 class="h3 mb-3 font-weight-normal">Immetti la risposta alla domanda compilata in fase di
                        registrazione</h1>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="domandaRecuperoPassword">Domanda per il recupero della password</label>
                            <select class="custom-select d-block w-100" name="domandaRecuperoPassword "
                                id="domandaRecuperoPassword" required>
                                <option value="">Scegli</option>
                                <option <?php if ($domandaRecuperoPassword == "1") echo "selected"; ?>>In che scuola sei diplomato?</option>
                                <option <?php if ($domandaRecuperoPassword == "2") echo "selected"; ?>>Il nome del tuo animale preferito?</option>
                                <option <?php if ($domandaRecuperoPassword == "3") echo "selected"; ?>>Il nome del/lla tuo/a primo/a amante?</option>
                            </select>
                            <div class="invalid-feedback">
                                Seleziona una fascia d'orario di preferenza gioco valida.
                            </div>
                        </div>
                    </div>

                    <label for="inputRisposta">Risposta alla domanda</label>
                    <input type="text" name="inputRisposta" id="inputRisposta" class="form-control"
                        placeholder="Risposta alla domanda" required autofocus>

                    <div class="mb-3">
                        <label>
                        </label>

                    </div>
                    <div class="mb-3">
                        <label>
                            Inserisci la nuova password
                        </label>
                    </div>

                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Password" required>

                    <label for="inputVPassword" class="sr-only">Password</label>
                    <input type="password" name="inputVPassword" id="inputVPassword" class="form-control" placeholder="Ripeti Password"
                        required>

                    <div class="mb-3">
                        <label>
                        </label>
                    </div>
                    <input type="hidden" name="inputEmail" value="<?php echo $inputEmail; ?>" />
                    <hr class="mb-4">
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Recupera password</button>
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