<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// array valore
$docente = array (
    "Bedetti" => "TPSIT",
    "Bianchi" => "GPO");


// array chiave
$docente2 = array (
    "Scarpone" => "Italiano",
    "Carfora" => "Ginnastica");


// inverto l'ordine dell'array per valore
$result = array_reverse($docente);
// inverto l'ordine dell'array per chiave
$result2 = array_reverse($docente2);

// stampo array originale
print_r($docente);
echo '<br> </br>';
// stampo array originale
print_r($docente2);
echo '<br> </br>';
// stampo array in ordine inverso per valore
print_r($result);
echo '<br> </br>';
// stampo array in ordine inverso per chiave
print_r($result2);
echo '<br> </br>';

ksort($docente);
print_r($docente);
echo '<br> </br>';

asort($docente);
print_r($docente);
echo '<br> </br>';

ksort($docente2);
print_r($docente2);
echo '<br> </br>';

asort($docente2);
print_r($docente2);
echo '<br> </br>';

$n=0;
$parola= "sashimi"; 
$salva_parola= strlen($parola);
$vocali= array("a","e","i","o","u","A","E","I","O","U");
foreach ($vocali as $v){
$n += substr_count($parola, "$v");
}
$consonanti = $salva_parola - $n;
echo 'consonanti: ';
echo $consonanti;
echo '<br> </br>';
echo 'vocali: ';
echo $n;
echo '<br> </br>';

$n = substr_count($parola, "a");
echo 'numero di "a": ';
echo $n;

?>
</body>
</html>