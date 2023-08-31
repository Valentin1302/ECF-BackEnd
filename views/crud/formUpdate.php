<?php
require_once("../../models/dbConnect.php");
if ($pdoConn) {
    
    $id = $_GET["id"];

    

    $req = "SELECT * FROM plats WHERE id= $id";
    $exec = $pdoConn->query($req);

    if ($exec != false) {

        $res = $exec->fetchAll(PDO::FETCH_ASSOC);

        foreach ($res as $single) { ?>
            <form method="POST" action="../../models/plats/update.php">
                <input type="text" name="description" value="<?php echo $res[0]["description"]; ?>">
                <input type="text" name="name" value="<?php echo $res[0]["name"]; ?>">
                <input type="url" name="img" value="<?php echo $res[0]["img"]; ?>">
                <input type="number" name="price" value="<?php echo $res[0]["price"]; ?>">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <button type="submit">Modifier</button>
            </form>
        <?php }  ?>
<?php } else {
        header('Location: ../../index.php');
    }
}

?>