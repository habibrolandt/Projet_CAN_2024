<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form-paiement.css">
    <script src="form-paiement.js"></script>

</head>
<body>

<div class="container">
<?php require("paiementAction.php")?>
    <form action="" method="post">
        <div class="row">

            <div class="col">

                <h3 class="title">Sportpass.ci</h3>

                <div class="inputBox">
                    <span>Nom:</span>
                    <input type="text" required placeholder="nom" name="nom">
                </div>
                <div class="inputBox">
                    <span>Prenom:</span>
                    <input type="text" required placeholder="prenom" name="prenom">
                </div>
                
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" required placeholder="example@example.com" name="email">
                </div>
                <div class="inputBox">
                    <span>Ville :</span>
                    <input type="text" required placeholder="Abidjan-cote d'ivoire" name="ville">
                </div>
                <div class="inputBox">
                    <span>Nombre de tickets :</span>
                    <input type="number" required id="positiveNumber" min="1" max="3" placeholder="max(3)" name="nombreTickets">
                </div>
               

           

            </div>

            <div class="col">

                <h3 class="title" style="color: #333;">Paiement</h3>

                <div class="inputBox">
                    <span>Carte bancaire :</span>
                    <div class="image-container">
                        <img class="clickable-image" src="VISA.jpg" alt="Image 1" onclick="changeBorderColor(this)">
                        <img class="clickable-image" src="wave.png" alt="Image 2" onclick="changeBorderColor(this)">
                        <img class="clickable-image" src="Paypal_2014_logo.png" alt="Image 3" onclick="changeBorderColor(this)">
                        <img class="clickable-image" src="Logo-NSIA-BANK.png" alt="Image 3" onclick="changeBorderColor(this)">
                        
                    </div>
                </div>
                <div class="inputBox">
                    <span>Nom sur la carte :</span>
                    <input type="text"  required placeholder="M. habib bernoulli" name="nomCarte">
                </div>
                <div class="inputBox">
                    <span>Numero de carte :</span>
                    <input type="number" required placeholder="1111-2222-3333-4444" name="numeroCarte">
                </div>
                <div class="inputBox">
                    <span>Mois d'exp :</span>
                    <input type="text" required placeholder="janvier" name="moisExp">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>année d'exp :</span>
                        <input type="number" required placeholder="2022" name="anneeExp">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" required placeholder="1234" name="cvv">
                    </div>
                </div>

            </div>
    
        </div>
        

        <input type="submit" value="Procéder au paiement" class="submit-btn" name="envoyer">

    </form>

</div>    
    
</body>
</html>