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
    <?php include 'inc/proc-profilo.php' ?>
    <?php include 'menu.php' ?>

    <div class="container">

        <div class="row">
            <div class="offset-md-2 col-md-8 order-md-1">
                <h4 class="mb-3">Dati personali</h4>
                <form action="profiloSalva.php" method="post">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" name="nome" id="nome" placeholder=""
                                value="<?php echo $nome; ?>" required>
                            <div class="invalid-feedback">
                                È richiesto un nome valido.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cognome">Cognome</label>
                            <input type="text" class="form-control" name="cognome" id="cognome" placeholder=""
                                value="<?php echo $cognome; ?>" required>
                            <div class="invalid-feedback">
                                È richiesto un cognome valido.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email">Email<span class="text-muted"></span></label>
                        <input type="email" class="form-control" name="email" id="email" value="<?php echo $email; ?>"
                            required>
                        <div class=" invalid-feedback">
                            Inserisci un indirizzo email valido.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="numeroDiTelefono">Numero di telefono</label>
                        <input type="text" class="form-control" name="numeroDiTelefono"
                            value="<?php echo $numeroDiTelefono; ?>" id="numeroDiTelefono" required>
                        <div class="invalid-feedback">
                            Inserisci un numero di telefono valido.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="password">Password<span class="text-muted"></span></label>
                        <input type="password" class="form-control" name="password" value="<?php echo $password; ?>"
                            id="password" required>
                    </div>

                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="domandaRecuperoPassword">Domanda per il recupero della password</label>
                            <select class="custom-select d-block w-100" name="domandaRecuperoPassword"
                                id="domandaRecuperoPassword" required>
                                <option value="">Scegli</option>
                                <option <?php if ($domandaRecuperoPassword == "1") echo "selected"; ?>>In che scuola sei
                                    diplomato?</option>
                                <option <?php if ($domandaRecuperoPassword == "2") echo "selected"; ?>>Il nome del tuo
                                    animale preferito?</option>
                                <option <?php if ($domandaRecuperoPassword == "3") echo "selected"; ?>>Il nome del/lla
                                    tuo/a primo/a amante?</option>
                            </select>
                            <div class="invalid-feedback">
                                Seleziona una fascia d'orario di preferenza gioco valida.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="rispostaRecuperoPassword">Risposta alla domanda del recupero della password<span
                                class="text-muted"></span></label>
                        <input type="text" class="form-control" value="<?php echo $rispostaRecuperoPassword; ?>"
                            name="rispostaRecuperoPassword" id="rispostaRecuperoPassword" required>
                    </div>

                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="manoUsata">Mano usata per giocare</label>
                            <select class="custom-select d-block w-100" name="manoUsata" id="manoUsata" required>
                                <option value="">Scegli</option>
                                <option <?php if ($manoUsata == "Destro") echo "selected"; ?>>Destro</option>
                                <option <?php if ($manoUsata == "Mancino") echo "selected"; ?>>Mancino</option>
                                <option <?php if ($manoUsata == "Ambidestro") echo "selected"; ?>>Ambidestro</option>
                            </select>
                            <div class="invalid-feedback">
                                Seleziona una mano valida.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="fasciaOrario">Fascia d'orario di preferenza gioco</label>
                            <select class="custom-select d-block w-100" name="fasciaOrario" id="fasciaOrario" required>
                                <option value="">Scegli</option>
                                <option <?php if ($fasciaOrario == "Mattino") echo "selected"; ?>>Mattina</option>
                                <option <?php if ($fasciaOrario == "Pomeriggio") echo "selected"; ?>>Pomeriggio</option>
                                <option <?php if ($fasciaOrario == "Sera") echo "selected"; ?>>Sera</option>
                            </select>
                            <div class="invalid-feedback">
                                Seleziona una fascia d'orario di preferenza gioco valida.
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $id ?>" />

                    <?php if ($socio == false) { ?>
                    <hr class="mb-4">
                    <a class="btn btn-primary btn-lg btn-block" href="abbonamento.php">Abbonati</a>
                    <?php } ?>
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Salva le modifiche</button>
                </form>
            </div>
        </div>
    </div> <!-- /.container -->

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