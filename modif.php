<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    include "connexionbdd.php";

    $req = $sql->prepare("SELECT * FROM livre WHERE NomAlbum=?");
    $req->execute([$_GET["id"]]);
    $livre = $req->fetch();

    ?>
    <form action="update.php" method="post">
        <table>
            <tr>
                <td>Nom de l'album</td>
                <td><input type ="text" name = "isbn" value="<?php echo $livre["NomAlbum"]; ?>" readonly></td>
            </tr>
            <tr>
                <td>Nombre de son </td>
                <td><input type ="text" name = "titreLivre" value="<?php echo $livre["NombreSon"]; ?>"></td>
            </tr>
            <tr>
                <td>Duree de l'album</td>
                <td><input type ="text" name = "prixLivre" value="<?php echo $livre["Duree"]; ?>"></td>
            </tr>

            <tr>
                <td>id du chanteur</td>
                <td><input type ="text" name = "prixLivre" value="<?php echo $livre["idChanteur"]; ?>"></td>
            </tr>

            <tr>
                <td><input type ="submit" value ="Envoyer"></td>
                <td><input type ="reset" value ="Annuler"></td>
            </tr>
        </table>
    </form>
</body>
</html>