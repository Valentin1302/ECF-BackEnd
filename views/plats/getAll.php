<?php
// Récupère les informations issues du model getPlats.
require_once('./models/plats/getAll.php');
?>



<h1>Gestion des plats du restaurant&nbsp;:</h1>
<main>


    <!-- Début de la boucle : pour chaque élément dans le tableau $results -->
    <section class="blocSite">
        <?php foreach ($results as $single) { ?>
            <div class="infoProduct">

                <!-- Affichage des données à partir du tableau $single -->
                <p>Nom du plat :<?php echo $single["name"] ?></p>
                <p>Description :<?php echo $single["description"] ?></p>
                <p>Prix :<?php echo $single["price"] ?></p>
                <img src="<?= $single["img"]; ?>" alt="illustration de <?= $single["description"]; ?>">
            </div>
                <?php if (isset($_SESSION["connected"]) && $_SESSION["connected"] === TRUE) { ?>

            <div>
                <p><a href="../../views/crud/formUpdate.php?id=<?php echo $single["id"] ?>" title="Editer ce plat">📝</a></p>
            </div>
            <div>
                <p><a href="./models/plats/delete.php?id=<?php echo $single["id"]  ?>" title="Supprimer ce plat">🗑️</a></p>

            </div>
    </section>


    <div class="blocAdd">
        <p class="add"><a href="../../views/crud/formAddons.php" title="Ajouter un plat à la carte du restaurant">Ajouter un plat</a></p>
    </div>
<?php } ?>
         <?php   } ?>
</main>