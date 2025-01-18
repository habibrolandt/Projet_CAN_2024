<?php
    require("dataBase.php");
    if (isset($_POST['validate'])){

        if (!empty($_POST['nom']) && !empty($_POST['mail']) && !empty($_POST['mdp']) && !empty($_POST['mot'])){
            if($_POST['mdp']===$_POST['mot']){

                $nom=htmlspecialchars($_POST['nom']);
                $mail=htmlspecialchars($_POST['mail']);
                $pass=password_hash($_POST['mdp'],PASSWORD_DEFAULT);
                $Cpass=password_hash($_POST['mot'],PASSWORD_DEFAULT);
    
                $check=$bdd->prepare("SELECT mail FROM register WHERE Mail=?");
                $check->execute(array($mail));
    
                if ($check->rowCount()>0){
                    $msg=("Cet utilisateur existe déjà");
                }else{
                    $insert=$bdd->prepare("INSERT INTO register(Pseudo,Mail,Passe)VALUES(?,?,?)");
                    $insert->execute(array($nom,$mail,$pass));
                    
                    $getUserInfo=$bdd->prepare("SELECT id,Pseudo,mail,Passe FROM register WHERE Pseudo=? && Mail=? && Passe=? ");
                    $getUserInfo->execute(array($nom,$mail,$pass));
    
                    $UserInfo=$getUserInfo->fetch();
                    $_SESSION["users"]=true;
    
                    $_SESSION["id"]=$UserInfo["id"];
                    $_SESSION["nom"]=$UserInfo["Pseudo"];
                    $_SESSION["mail"]=$UserInfo["Mail"];
                                
                #redirection de l'user
                    header("location: ../CAN/index.html");
                }
            }else{
                $msg="MOT DE PASSE INVALIDE";
            }

        }else{
            $msg="VEUILLEZ REMPLIR TOUS LES CHAMPS...";
        }
    
    }
?>