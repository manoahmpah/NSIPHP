<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>PHP</title>
</head>

<body>

    <h1>Bonjour,</h1>
    <h3>Nous sommes le 20-10-2021 et il est 11h30<h3>

            <?php
            $date = date("d-m-Y");
            $heure = date("H:i");
            echo "Nous sommes le " . $date . " et il est " . $heure;
            ?>

            </br>
            <h3>Pile ou face </h3>
            <p> Dans ce jeu, il suffit de prévoir la face sur laquelle va retomber la pièce une fois qu’elle sera lancée.</p>
            <p> J'ai obtenu cette face :
            <p>

                <img src="face1.png" alt="pile">

</body>

</html>