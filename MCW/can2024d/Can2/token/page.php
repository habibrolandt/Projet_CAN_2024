<?php

if(isset($_Get['token']) && $GET['token']!=' '){
    $stmt=$bdb->prepare('SELECT mail FROM register WHERE token=?');
    $stmt->execute([$_Get['token']]);
    $email=$stmt->fetchColumn();


    if($email){
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Récupération de mot de passse </title>
        </head>
        <body>
            <form method="post">
                <label for="nmdp">
                    <input type="password" placeholder="Entrer nouveau mot se passe" name="nmdp" required>
                </label>
                <button type="submit">confirmerr</button>
            </form>
        </body>
        </html>
        <?php
    }
}

if (isset($_POST['nmdp'])){
    $hashedPassword = password_hash('nmdp',PASSWORD_DEFAULT);
    $sql="UPDATE register SET token = ?  WHERE Mail = ? ";
    $stmt=$bdb->prepare($sql);
    $stmt->execute([$hashedPassword,$email]);
    echo 'Mot de passe modifié avec succès ';

}
?>