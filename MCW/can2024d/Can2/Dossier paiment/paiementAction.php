<?php
require("../dataBase.php");
if (isset($_POST['envoyer'])){
    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['ville']) && !empty($_POST['nombreTickets']) && !empty($_POST['numeroCarte']) && !empty($_POST['moisExp'])&& !empty($_POST['anneeExp']) && !empty($_POST['cvv'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $ville = $_POST['ville'];
        $nombreTickets = $_POST['nombreTickets'];
        $nomCarte = $_POST['nomCarte'];
        $numeroCarte = $_POST['numeroCarte'];
        $moisExp = $_POST['moisExp'];
        $anneeExp = $_POST['anneeExp'];
        $cvv = $_POST['cvv'];
        $sql = $bdd->prepare("INSERT INTO users (nom, prenom, email, ville, nombreTickets, nomCarte, numeroCarte, moisExp, anneeExp, cvv)VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $sql ->execute([$nom, $prenom, $email, $ville, $nombreTickets, $nomCarte, $numeroCarte, $moisExp, $anneeExp, $cvv]);
        header('location:dossi.php');

    }    
}
    
?>
