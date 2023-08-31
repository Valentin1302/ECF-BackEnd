<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mes Bons Petits Plats - Admin Dashboard - Gestion de la carte du restaurant</title>
        <meta name="description" content="Administration des plats du restaurant">
        <script src="../js/script.js" defer></script>
        <link rel="stylesheet" href="../sass/style.css">
    </head>
    <body>
        <header>
            <nav>
                <p>Bons<span id="plat">plats</span></p>
                <ul>
                <?php if(isset($_SESSION["connected"]) && $_SESSION["connected"] === TRUE){ ?>
                    <li><a href="../models/deconnexion.php">Deconnexion</a></li>
                    <?php }
                    else{ ?>
                        <li><a href="./views/connexion.php">Connexion</a></li>
                        <li><a href="./views/inscription.php">S'inscrire</a></li>

                   <?php } ?>
                </ul>
            
            </nav>

        </header>
   
