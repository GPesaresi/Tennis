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
    <?php include 'inc/proc-recuperopwd.php' ?>
    <?php include 'menu.php' ?>


    <main role="main" class="container container-form-signin">
        <div class="row">
            <div class="offset-md-3 col-md-6 text-center">
                <form class="form-signin" action="recuperopwddomanda.php" method="post">
                    <img class="mb-4" src="assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
                    <h1 class="h3 mb-3 font-weight-normal">Nome utente di cui vuoi recuperare la password</h1>
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" name="inputEmail" id="inputEmail" class="form-control"
                        placeholder="Email address" required autofocus>
                    <div class="mb-3">
                        <label>
                        </label>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="Avanti">Avanti</button>
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