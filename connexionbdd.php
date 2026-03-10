<?php

try{
    $sql = new PDO(
        "mysql:host=localhost;dbname=bdd_ninho;charset=utf8",
        "gothixrr",
        "PepaPig"
    );
}catch(Exception $e){
    die("Erreur : ".$e->getMessage());
}
?>