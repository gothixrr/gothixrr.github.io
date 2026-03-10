<?php 
include "connexionbdd.php";

$req = $sql->prepare("UPDATE album SET NomAlbum= ?, NombreSon = ?, Duree = ? WHERE idChanteur =?");
$req->execute([$_POST["NomAlbum"], $_POST["NombreSon"], $_POST["Duree"], $_POST["idChanteur"]]);

header("Location:index2.php");
?>