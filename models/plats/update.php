<?php 
// Inclusion du fichier de connexion à la base de données
require_once('../dbConnect.php');

// Vérification que la connexion à la base de données est établie
if($pdoConn){

    // Récupération des valeurs des champs de formulaire
    $name = $_POST["name"];
    $desc = $_POST["description"];
    $price = $_POST["price"];
    $image = $_POST["img"];
    $id = $_POST["id"];

    // Requête SQL pour mettre à jour un plat dans la table "plats"
    $req = "UPDATE plats SET description = :desc, name = :name, img = :img, price = :price WHERE id = :id";
    // Préparation de la requête
    $req = $pdoConn->prepare($req);

    // Liaison des paramètres avec les valeurs
    $req->bindParam(':desc', $desc);
    $req->bindParam(':name', $name);
    $req->bindParam(':price', $price);
    $req->bindParam(':img', $image);
    $req->bindParam(':id', $id);

    // Exécution de la requête préparée
    $exec = $req->execute();

    // Vérification du succès de l'exécution de la requête
    if($exec != false){
        // Redirection vers la page d'accueil après une mise à jour réussie
        header('Location: ../../index.php');
    }
} else {
    // Affichage d'une erreur si la connexion à la base de données a échoué
    echo "Erreur";
}
?>


 
?>