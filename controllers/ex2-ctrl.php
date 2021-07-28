<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'cedric', '//');
    // connexion à la bdd
} catch(PDOException $ex) {
    die('pb de connexion');
}
// ========================REQUETE SQL============================

$sql = "SELECT * FROM `showTypes`";

// ===================demander à PDO d'exécuter la requête passée en paramètre===========================
$req = $pdo->query($sql);


// récupérer les données dans un tableau PHP
$users = $req->fetchAll();
// var_dump($users);
?>

<?php
include(dirname(__FILE__).'/../views/ex2.php');
?>