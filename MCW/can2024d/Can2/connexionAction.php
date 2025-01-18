<?php
    require("dataBase.php");
    
    if (isset($_POST['validate'])){
        
        // Vérifier si tous les champs sont remplis
        if (!empty($_POST['mail']) && !empty($_POST['mdp'])){
            
            // Stockage des données sur des variables
            $mail = htmlspecialchars($_POST["mail"]);
            $pass = htmlspecialchars($_POST["mdp"]); // Récupération du mot de passe depuis le formulaire
            
            // Vérifier si l'utilisateur existe déjà
            $checkIfUserAlreadyExist = $bdd->prepare("SELECT * FROM register WHERE mail = ?");
            $checkIfUserAlreadyExist->execute(array($mail));
            
            // Vérifier si l'utilisateur existe
            if ($checkIfUserAlreadyExist->rowCount() > 0){
                
                // Authentification de l'utilisateur et récupération de ses données dans des variables globales    
                $userInfo = $checkIfUserAlreadyExist->fetch();
                
                // Utilisation de password_verify avec le mot de passe saisi par l'utilisateur
                if (password_verify($pass, $userInfo["Passe"])){
                    $_SESSION["user"] = true;
                    $_SESSION["id"] = $userInfo["id"];
                    $_SESSION["mail"] = $userInfo["mail"];
                    // Redirection de l'utilisateur
                    header("location: ../CAN/index.html");
                    exit(); 
                } else {
                    $msg = "MOT DE PASSE INVALIDE";
                }
                
            } else {
                $msg = "EMAIL INVALIDE";
            }
            
        } else {
            $msg = "VEUILLEZ REMPLIR TOUS LES CHAMPS";
        }
    }
?>
