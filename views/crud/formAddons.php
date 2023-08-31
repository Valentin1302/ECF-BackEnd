<?php
   require_once('../header.php');
   ?>

    <h1>Formulaire d'ajout de produits</h1>
    <form action="../../models/plats/addons.php" method="POST">
        <input type="text" name="name_food" placeholder="Le nom du produit">
        <input type="text" name="desc_food" placeholder="Saisissez une description">
        <input type="url" name="img_food" placeholder="saisir une image">
        <input type="number" name="price_food" placeholder="10">
        <button type="submit">Ajouter le produit</button>
    </form>
</body>
</html>
<?php
   require_once('../footer.php');
   ?>