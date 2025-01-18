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
                <hr>
                <?php require("connexionAction.php")?>
                <?php if(isset($msg)){echo '<p>' .$msg.'</p>';} ?>
                
                    <p><h2>Se Connecter</h2></p>
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
                    <div class="button">
                        <button type="submit" name="validate" class="butt"> Valider</button>
                    </div>
                    <div class="oubli">
                        <span>
                            <a href="">Password forgot ? </a>
                            <a href="inscription.php">Sign Up</a>
                        </span>
                    </div>
                </form> 
            </div>
            
        </div>
    </body>
</html>