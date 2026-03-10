<?php
include "connexionbdd.php";

$id = $_GET["id"];

$req = $sql->prepare("DELETE FROM album WHERE NomAlbum=?");
$req->execute([$id]);

header("Location:index2.php");
?>  