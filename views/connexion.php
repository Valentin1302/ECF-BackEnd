<?php
require_once('./header.php');
?>

<form action="../models/connexionScript.php" method="POST">
    <label for="mailConn">Votre Email:</label>
    <input type="email" name="mail" id="mailConn">
    <label for="pswConn">Votre Mot de Passe</label>
    <input type="password" name="psw" id="pswConn">
    <button type="submit">Envoyer</button>
</form>