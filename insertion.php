<?php 
include "connexionbdd.php";

$req = $sql->prepare("
    INSERT INTO bdd_ninho (NomAlbum, NombreSon, Duree, idChanteur)
    VALUES (?, ?, ?, ?)
");

$req->execute([
    $_POST["album"],
    $_POST["son"],
    $_POST["duree"],
    $_POST["idchanteur"]
]);

exit;
?>
