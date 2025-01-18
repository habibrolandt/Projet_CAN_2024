<?php
    try{
        session_start();
        $bdd=new PDO("mysql:host=localhost;dbname=pratique;charset=utf8","root","");
    }catch(Exception $e){
        echo " Erreur de connexion :".$e->getMessage();
    };
?>