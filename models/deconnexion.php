<?php        
// Démarrage de la session
session_start(); // Initialise le mécanisme de session PHP

// Suppression des données de session
session_unset(); // Supprime toutes les variables de session

//session_destroy sert à detruire la session  
session_destroy();   
header('Location: ../index.php');
exit(); 
?>    