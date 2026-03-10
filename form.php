<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="insertion.php" method="post">
        <table>
            <tr>
                <td>Nom de l'album</td>
                <td><input type ="text" name = "album"></td>
            </tr>
            <tr>
                <td>Nombre de son</td>
                <td><input type ="text" name = "son"></td>
            </tr>
            <tr>
                <td>Duree d'écoute de l'album</td>
                <td><input type ="text" name = "duree"></td>
            </tr>
            <tr>
                <td>id du Chanteur</td>
                <td><input type ="text" name = "idchanteur"></td>
            </tr>
            <tr>
                <td><input type ="submit" value ="Envoyer"></td>
                <td><input type ="reset" value ="Annuler"></td>
            </tr>
        </table>
    </form>
</body>
</html>