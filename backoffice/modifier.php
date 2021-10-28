<?php 
require_once('../inc/function.php');

bddconnect();


?>





<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier les éléments</title>
    <?php include('../inc/meta_bo.php'); ?>
</head>
<body>
    <?php include('../inc/nav_bo.php'); ?>

        <div>    
            <h1 class="text-center mt-5">Vous êtes entrain de modifier le courriers N°<?php echo $_GET["id"];?><h1>
        </div>




            <form class="mt-5" method="post" action="modifier.php">

            <label class="mb-2" for="nom">Nom</label>
            <input class="mb-3" type="text" name="nom" id="nom" value="<?php echo $_GET["nom"];?>">
            <label class="mb-2" for="mail">E-Mail</label>
            <input class="mb-3" type="email" name="mail" id="mail" value="<?php echo $_GET["mail"];?>">
            <label class="mb-2" for="objet">Objet</label>
            <input class="mb-3" type="text" name="objet"id="objet" value="<?php echo $_GET["objet"];?>">
            <label class="mb-2" for="msg">Messages</label>
            <textarea cols="23" rows="5" id="msg" name="msg"><?php echo $_GET["msg"];?></textarea>

            <input class="mt-4" type="submit" name="valider" >
            <input class="mt-4" type= "reset" name="delete" >
            <input type="hidden" name="id" >


            </form>





    <?php include('../inc/footer_bo.php'); ?>


    
</body>
</html>