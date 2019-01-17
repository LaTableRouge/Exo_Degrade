<!DOCTYPE html>
<html>
    <head>
        <title>MIW - Exo 3</title>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles/<?= isset($_GET['bg']) ? $_GET['bg'] : "main" ?>.css">
        <!-- <link rel="stylesheet" href="css/stylesheets/BienVu.scss.txt"> -->
    </head>
    <body>
        
        <div class="container">
            
            <p>Changer l'arrière plan, en chargeant un fichier CSS de la couleur (utilisé la variable $_GET pour définir le bon fichier)</p>
            
            <ul>
                <li><a href="?bg=red">rouge</a></li>
                <li><a href="?bg=green">vert</a></li>
                <li><a href="?bg=blue">bleu</a></li>
                <li><a href="?bg=yellow">jaune</a></li>
            </ul>
            
        </div>
        
    </body>
</html>