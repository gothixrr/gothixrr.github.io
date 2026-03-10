<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Maquette simple</title>
    <link rel="stylesheet" href="./../bootstrap/css/bootstrap.min.css">
</head>

<body>

<?php
include "connexionbdd.php";
?>

<table width="100%" border="1">
    <tr>
        <td width="20%" align="center">
            <img src="./../../AP3-SLAM/hq720.jpg" alt="Logo" width="220">
        </td>
        <td width="80%" align="center">
            <h1>Ninho</h1>
        </td>
    </tr>
</table>


<?php
$req = $sql->prepare("SELECT * FROM album");
$req->execute();
$tabs = $req->fetchAll();
?>

<table width="100%" border="1">
    <tr align="center">
        <th>Chanteur</th>
        <th><a href="album.html">Album</a></th>
        <th>Son</th>
    </tr>
</table>

<table border="1">
    <tr>
        <th>Supprimer</th>
        <th>Modifier</th>
        <th>Ajouter</th>
    </tr>
</table>

<p>Lien vers chanteur : 
    <a href="https://open.spotify.com/intl-fr/artist/6Te49r3A6f5BiIgBRxH7FH?si=81cd94f1c27b44a2">
        Ninho
    </a> 

<table border="1">
    <tr>
        <th>Nom album</th>
        <th>Nombre son</th>
        <th>Duree</th>
        <th>id Chanteur</th>
    </tr>
<?php
foreach($tabs as $tab){
?>
 <td><?php echo $tab["NomAlbum"]; ?></td>
    <td><?php echo $tab["NombreSon"]; ?></td>
    <td><?php echo $tab["Duree"]; ?></td>
    <td><?php echo $tab["idChanteur"]; ?></td>
    <td><a href="supp.php?id=<?php echo $tab["NomAlbum"]; ?>">Supprimer</a></td>
    <td><a href="modif.php?id=<?php echo $tab["NomAlbum"]; ?>">Modifier</a></td>
</p>
</tr>
<?php }?>
</table>
</body>
</html>





