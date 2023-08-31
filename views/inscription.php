<?php 
 require_once('./header.php');

?>

<form action="../models/inscriptionScript.php" method="POST">
    <label for="mailInscription"></label>
    <input type="email" name="amail" id="mailInscription">
    <label for="passInscription"></label>
    <input type="password" name="pass" id="passInscription">
    <button type="submit">S'inscrire</button>
</form>