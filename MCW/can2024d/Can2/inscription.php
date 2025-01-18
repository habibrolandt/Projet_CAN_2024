<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="inscription.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <div class="container">
            <div class="box">
                <form action="" method="post">
                <?php require("inscriptionAction.php")?>
                    <p><h2>S'inscrire</h2></p>
                    <?php if(isset($msg)){echo '<p>' .$msg.'</p>' ;} ?>
                    <hr>
                    <div class="input">
                        <label for="nom">
                            <input type="text" placeholder="Username" name="nom" id="nom">
                        </label>
                    </div>
                    <div class="input">
                        <label for="mail">
                            <input type="email" placeholder="E-mail" name="mail" id="mail">
                        </label>
                    </div>
                    <div class="input">
                        <label for="mdp">
                            <input type="password" placeholder="mot de passe" name="mdp" id="mdp">
                        </label>
                    </div>
                    <div class="input">
                        <label for="cmdp">
                            <input type="password" placeholder="Confirmer mot de passe" name="mot" id="cmdp">
                        </label>
                    </div>
                    <div class="button">
                        <button type="submit" name="validate" class="butt"> Valider</button>
                    </div>
                    <div class="oubli">
                        <span>
                            <a href="">Contact us</a>
                            <a href="connexion.php">Login</a>
                        </span>
                    </div>
                </form> 
            </div>
            
        </div>
    </body>
</html>