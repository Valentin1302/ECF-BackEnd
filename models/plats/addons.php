<?php 
   // Inclusion du fichier de connexion à la base de données
   require_once("../dbConnect.php");

   // Vérification que la connexion à la base de données est établie
   if(!empty($pdoConn)){

       // Récupération des valeurs des champs de formulaire
       $nom = $_POST["name_food"];
       $desc = $_POST["desc_food"];
       $prix = $_POST["price_food"];
       $image = $_POST["img_food"];

       // Requête SQL pour insérer un nouveau plat dans la table "plats"
       $req = "INSERT INTO plats (name, description, price, img) VALUES (:name, :description, :price, :img)";
       // Préparation de la requête
       $req = $pdoConn->prepare($req);

       // Liaison des paramètres avec les valeurs
       $req->bindParam(':description', $desc);
       $req->bindParam(':name', $nom);  
       $req->bindParam(':price', $prix); 
       $req->bindParam(':img', $image);

       // Exécution de la requête préparée
       $exec = $req->execute();

       // Vérification du succès de l'exécution de la requête
       if($exec != false){
           echo "L'ajout a fonctionné";
           // Redirection vers la page d'accueil après un ajout réussi
           header("Location: ../../index.php");
       }
       else{
           echo "La requête n'a pas fonctionné";
       }
   }
   else{
       echo "La connexion à la base de données n'a pas fonctionné";
   }
?>
