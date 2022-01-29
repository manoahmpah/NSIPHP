<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="./style.css">
    <title>Table de multiplication</title>
</head>
<body>
    <section>
        <div>
            <div class="container">
                <img id="img_first_page" src="./img/pexels-jeshootscom-442574.jpg" alt="">
            </div>
            <div id="texte_first_page">
                <h2>Vous voulez apprendre <br> vos tables de multiplication</h2>
                <a href="#formulaire">Cliquer ici</a>
            </div>
        </div>
    </section>

    <section id="formulaire" class="size">
        <div id="place_formulaire">
            <h2>POUR SAVOIR VOS BESOINS VEUILLIEZ REPONDRE A CES QUESTIONS :</h2>
            <form action="./exercice.php" method="GET">
                <label for="boutton">
                    <legend>Quelles tables de multiplication veux tu apprendre :</legend>
                    <br>
                    1
                    
                    <input id="boutton" type="checkbox" name="1" value="nombre1">
                    2
                    <input id="boutton" type="checkbox" name="2">   
                    3
                    <input id="boutton" type="checkbox" name="3">            
                    4
                    <input id="boutton" type="checkbox" name="4">            
                    5
                    <input id="boutton" type="checkbox" name="5">            
                    6
                    <input id="boutton" type="checkbox" name="6">            
                    7
                    <input id="boutton" type="checkbox" name="7">            
                    8
                    <input id="boutton" type="checkbox" name="8">            
                    9
                    <input id="boutton" type="checkbox" name="9">            
                    10
                    <input id="boutton" type="checkbox" name="10">
                </label>
                <br>
                <br>
                <label for="booleen">
                    Avez vous besoins de cours de maths 
                    <input id="booleen" type="radio" value="OUI" name="booleen" required>
                    OUI
                    <input id="booleen" type="radio" value="OUI" name="booleen" required>
                    NON
                </label>
                <br>
                <br>
                <label for="email">
                    veulliez sasir votre email * :
                    <input id="email" name="email" type="email" placeholder="mutiplication37@example.fr" required>
                </label>
                <br>
                <br>
                <input type="submit" name="" id="bouton">
            </form>
        </div>
        <div>
            <img id="img_section2" src="./img/pexels-koshevayak-4170628.jpg" alt="">
        </div>
    </section>

    <footer>
        <div>
            <h2>Contacter-nous</h2>

        </div>
    </footer>
</body>
</html>