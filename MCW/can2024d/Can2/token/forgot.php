<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Site web</title>
  </head>
  <body>
    <h2>Forgot password</h2>
    <form method="post">
      <div class="container">
        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Enter Email" name="mail" required>
        <button type="submit">Submit</button>
      </div>
    </form>
  </body>
</html>
<?php
if(isset($_POST['mail'])){
  $token=uniqid();
  $url = "http://localhost/Can2?$token";
  $message="Bonjour ! voici votre lien de réinitialisation : $url";
  $headers='content-type: text/plain; charset="utf8"'." ";

  if(mail($_POST['mail'],'mot de passe oublié',$message, $headers)){
    $sql="UPDATE register SET token = ?, token=NULL  WHERE Mail = ? ";
    $stmt=$bdb->prepare($sql);
    $stmt->execute([$token,$_POST['$mail']]);
    echo "Mail envoyé";
  }
  else{
    echo "Une erreur s'est produite...";
  }
}
?>
