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
    <?php include 'inc/proc-storico.php' ?>
    <?php include 'menu.php' ?>

    <main role="main" class="container container-form-signin">
        <h2>Storico prenotazioni dei campi</h2>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>Data prenotazione</th>
                        <th>Numero del campo</th>
                        <th>Orario</th>
                        <th>Numero dei giocatori</th>
                        <th>Luci</th>
                        <th>Riscaldamento</th>
                        <th>Costo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
					foreach($storicoPrenotazioni as $item)
						{
							echo $item->rigaStorico($item);
						}
					?>
                </tbody>
            </table>
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