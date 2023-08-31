<?php
// Inclusion du fichier de connexion à la base de données
require_once('./dbConnect.php');

// Vérification que la connexion à la base de données est établie
if (!empty($pdoConn)){

    // Récupération des valeurs des champs de formulaire
    $mail = $_POST["mail"];
    $password = $_POST["psw"];

    // Requête SQL pour vérifier les informations de connexion dans la table "users"
    $req = "SELECT * FROM users WHERE email = '$mail' AND psw = '$password'";
    
    // Exécution de la requête
    $exec = $pdoConn->query($req);

    // Vérification du succès de l'exécution de la requête
    if($exec != FALSE){
        // Récupération des résultats de la requête
        $res = $exec->fetchAll(PDO::FETCH_ASSOC);
        
        // Vérification si des résultats ont été trouvés
        if(!empty($res)){
            // Redirection vers la page d'accueil si l'authentification est réussie
            header('Location: ../index.php');

            // Démarrage de la session et marquage de l'utilisateur comme connecté
            session_start();
            $_SESSION["connected"]= TRUE;
        }
        else{
            echo "Erreur de la requete";
            ?>
            <!-- Bouton ou élément HTML que vous souhaitiez peut-être afficher ici -->
            <button> <!-- Notez que le bouton est ici pour fermer la balise ouverte -->
        <?php }
    }
}
?>

