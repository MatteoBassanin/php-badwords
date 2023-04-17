<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>

    <form method="GET" action="censor.php">
        <div class="container">
            <label for="censor">Parola da censurare</label>
            <input type="text" placeholder="parola da censurare" id="censor" name="myCensor"/>
        </div>
        <div class="container" >
            <label for="my_text">Testo da</label>
            <input type="text" placeholder="inserisci il tuo testo" id="my_text" name="mySentence"/>
        </div>
        <button type="submit">Invia</button>
    </form>

</body>
</html>