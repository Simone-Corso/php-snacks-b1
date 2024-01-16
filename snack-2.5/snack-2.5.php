<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snakc-2.5</title>
</head>
<body>
    <h1>Calcola la media</h1>

    <?php
if (isset($_GET['a']) && isset($_GET['b'])) {
    // Ottiengo i valori da GET
    $a = $_GET['a'];
    $b = $_GET['b'];

    // qui calcolo la media
    $media = ($a + $b) / 2;

    //Creo un modo per stampare i dati

    echo ""
}

?>
</body>
</html>

<!-- espongo la media di due valori inseriti dall'utente con chiamata GET 1-->

