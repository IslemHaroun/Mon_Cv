<?php 

/*if(isset($_REQUEST["nomadmin"])){

    $nom_admin=$_REQUEST["nomadmin"];

}else{
    $nom_admin=Null;
}

if(isset($_REQUEST["mdp"])){

    $mdp=$_REQUEST["mdp"];

}else{
    $mdp=Null;
}

if(isset($_REQUEST["connexion"])){

    $connexion = $_REQUEST["connexion"];

    $connexion = null;

    
}*/
session_start();
$alert= null; //ici je déclare ma varialbe pour pouvoir placer mes chaînes de caractères ou je veux dans ma page 

if(isset($_REQUEST["connexion"])){
    if(!empty($_REQUEST["nomadmin"]) && !empty($_REQUEST["mdp"])){  //si les varialbes nomadmin et mdp son pas vide tu fais rien du tout (l'inverse ne fonctionne pas à travailler)

        $identifiant = "admin";
        $mdp_admin= "123";


        $id_saisi = htmlspecialchars($_REQUEST['nomadmin']);
        $mdp_saisi= htmlspecialchars($_REQUEST["mdp"]);

        if($identifiant == $id_saisi && $mdp_admin == $mdp_saisi){
            $_SESSION["mdp"] = $mdp_saisi;
            header("location:raffichage.php");
        }else{

            $alert= "mauvaise combinaison";
        }
          
    }else{
        $alert="<p>Veuillez remplir l'ensemble des champs</p> !";

    }

}

    
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Administration</title>
    <?php include("../inc/meta_bo.php"); ?>
</head>
<body>

    <?php include("../inc/nav_bo.php"); ?>
    
    <h1 class="text-center mt-5">Espace Administrateur</h1>


    

        <form class="mt-5" method="post" action="index.php">

        <label>Identifiant</label>
        <input class="mt-2" type="text" name="nomadmin" placeholder="Votre nom">
        <label class="mt-2" >Mot de passe</label>
        <input class="mt-2" type="password" name="mdp">
        <button type="submit" class="coadmin" name="connexion" value="valider">Connexion</button>
        <p><?php echo $alert; ?></p>
        </form>



    <?php include('../inc/footer_bo.php');?>
</body>
</html>