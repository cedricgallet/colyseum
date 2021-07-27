<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'cedric', '//');
    // connexion à la bdd
} catch(PDOException $ex) {
    die('pb de connexion');
}
// requête sql
$sql = "SELECT * FROM `clients`";
// demander à PDO d'exécuter la requête passée en paramètre
$req = $pdo->query($sql);


// récupérer les données dans un tableau PHP
$users = $req->fetchAll();
// var_dump($users);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO</title>
</head>
<body>
    <table>
        <thead>
            <th>id</th>
            <th>Nom</th>
        </thead>
        <tbody>
            <?php foreach($users as $user): ?>
                <tr>
                    <td><?= $user["id"] ?></td>
                    <td><?= $user["name"] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>