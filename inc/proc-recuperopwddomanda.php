<?php
   $inputEmail = "";

   // controllo che la pagina è proviene da un submit
   if (isset($_POST["inputEmail"]))
   {
       $inputEmail = $_POST['inputEmail'];  
   }

   // una volta recuperati tutti i dati dalla form, bisogna andare in db e recuperare la domanda per il recupero password
   $domandaRecuperoPassword = "2";
?>