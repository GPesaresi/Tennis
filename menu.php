<div class="container">
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
        <h5 class="my-0 mr-md-auto font-weight-normal">Tennis</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="index.php">Home</a>
            <?php if ($nomeutente != "") { ?>
            <a class="p-2 text-dark" href="prenotazioni.php">Prenotazioni</a>
            <a class="p-2 text-dark" href="storico.php">Storico prenotazioni</a>
            <a class="p-2 text-dark" href="profilo.php">Profilo (<?php print_r ($nomeutente) ?>)</a>
            <?php }	?>
        </nav>
        <?php if ($nomeutente == "") { ?>
        <a class="btn btn-outline-primary" href="login.php">Accesso</a>
        <?php } else { ?>
        <a class="btn btn-outline-primary" href="logout.php">Esci</a>
        <?php } ?>
    </div>
</div>