<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre Titre</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh; /* Utiliser 100% de la hauteur de la vue */
            background-color: #f0f0f0; /* Couleur de fond, facultatif */
        }

        .container {
            text-align: center;
            padding: 20px;
            border: 2px solid #ff0000; /* Bordure rouge */
            border-radius: 10px; /* Coins arrondis */
            background-color: #ffffff; /* Couleur de fond du conteneur */
        }

        p {
            font-size: 24px;
            color: #ff0000; /* Couleur du texte rouge */
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        require("../dataBase.php");
        echo "<p>MERCI D'AVOIR EFFECTUÉ VOTRE PAIEMENT</p>"; 
        ?>
    </div>
</body>
</html>
