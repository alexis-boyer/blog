<!DOCTYPE html>
<html>
    <head>
        <title>Bienvenu sur la page d'inscription </title>
        <link rel="stylesheet" type="text/css" href="inscription.css">
        <meta charset="utf-8" />
    </head>
    <body>
<?php
        include ("C:\wamp64\www\diane\menu.php");
?>
<h1>INSCRIPTION</h1>
<div class="reg">
<form action="req_prep.php" method="post">
    
    <input type="text" name="nom" id="nom" placeholder="Nom"><br/>
    <input type="text" name="prenom" id="prenom" placeholder="Prenom"><br/>
    <input type="text" name="mail" id="mail" placeholder="Email"><br/>
    <input type="password" name="mdp" id="mdp" placeholder="Mot de passe"><br/>
    <input type="password" name="cmdp" id="cmdp" placeholder="Confirmation mot de passe"><br/>
    

    
    <input type="submit" name="inscrire" value="s'inscrire" class="valider" />


</form>
</div>


    </body>

</html>