<!--Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare 
"Accesso riuscito", altrimenti "Accesso negato"!-->$_COOKIE
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-2</title>
</head>
<body>

<!-- inseriamo il form get!-->
    <form action="verifica_accesso.php" method="GET">
        <label for="name" class="for">Nome:</label>
        <input type="text" name="name" id="name" required>

        <!-- di conseguenza facciamo lo stesso per email e età !-->
        <label for="mail" class="for">Email:</label>
        <input type="text" name="mail" id="mail" required>

        <label for="age" class="for">Età:</label>
        <input type="text" name="age" id="age" required>

        <!-- qua verrà inserito input per verificare l'accesso!-->

    <input type="submit" value="Verifica Accesso">


    </form>
</body>
</html>