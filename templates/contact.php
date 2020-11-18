<!DOCTYPE html>
<html>
    <head>
        <title>Bienvenu sur la page d'inscription </title>
        <link rel="stylesheet" type="text/css" href="contacter.css">
        <meta charset="utf-8" />
    </head>
    <body>
<?php
        include ("C:\wamp64\www\diane\menu.php");
?>
        <div class="container">

            <div class="item1">
    

    <h3> Veuillez remplir ce formulaire pour nous faire par de votre projet</h3>
<form action="/" method="post">
    
    <input type="text" placeholder="Nom" name="nom" id="nom">
    <input type="text" name="prenom" id="prenom" placeholder="Prénom"><br/>
    <input type="text" name="mail" id="mail" placeholder="Email" >
     <input type="text" name="tel" id="tel" placeholder="Télephone" >
    <select>
        <option>Devis</option> 
        <option>Information</option>
        <option>Prendre un rendez-vous</option>
        <option>Autres</option>
        <select/>

    <textarea name="mes" id="msg" placeholder="Message"></textarea><br/>
    
    <input class="send" type="submit" name="envoyer" value="envoyer"  />
    <input class="effacer" type="submit" name="envoyer" value="Effacer"  />

</form>
</div>
<div class="item">


    <h3>Venez nous rendre visite ou appelez.</h3>
    <h4>Adresse:</h4>
    <ul>
    <li>12 Allée François Bonamy</li>
    <li>37700 Saint pierre des corps</li>
    </ul>
    <h4>Téléphone:</h4>
    <p><img src="phone_icon">  02 47 00 00 00 / 02 47 47 47 47</p>
    <h4>Email:</h4>
    <p><img src="mail_icon">  lemeilleurartisan@gmail.com</p>
    

</div>




</div>

<iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d24479.052770857917!2d0.7213492277536205!3d47.362861764523664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1601577870632!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </body>
</html>