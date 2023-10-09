<?php
function controlloValori($array, $key)
{
    //Controlla se la chiave $key esiste nell'array $array
    if (isset($array[$key])) {
        return $array[$key];
    } else {
        return "Informazione non fornita";
    }
}

$nome = $_POST["nome"];
$cognome = $_POST["cognome"];
$sesso = controlloValori($_POST, "scelta");
$eta = controlloValori($_POST, "eta");

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risposte</title>
</head>
<body>
    <h1>Form compilato</h1>
    <?php
         if ($sesso=="Donna") {
            print("<h3>benvenuta $nome $cognome</h3><br>");
         }else if ($sesso=="Uomo") {
            print("<h3>benvenuto $nome $cognome</h3>");
         }
         else{
            print ("<h3>bevenut* $nome $cognome</h3>");
         }
        print("<h2>Informazioni utente:</h2>");
        print("Età:$eta <br>Sesso:$sesso");
    ?>
</body>
</html>
