<?php
session_start(); // sécuriser la page d'acceuil 
if(!$_SESSION["mdp"]){

    header("location:index.php");
}
require_once("../inc/function.php");
$requete = mysqli_query(bddconnect(),"SELECT * FROM employeur ;");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Courriers</title>
    <?php include('../inc/meta_bo.php'); ?>
</head>
<body>
    <?php include("../inc/nav_bo.php"); ?>
    

            <h1 class="h1 text-center mt-5">Courriers Reçu</h1>

            <table class="table container mt-5 border-border-1">
  <thead>
    <tr>
      <th scope="col" class="text-center">N°</th>
      <th scope="col" class="text-center">Modifier</th>
      <th scope="col" class="text-center">Nom</th>
      <th scope="col"class="text-center">Mail</th>
      <th scope="col"class="text-center">objet</th>
      <th scope="col"class="text-center">Message</th>
    </tr>
  </thead>
  <?php while($row=mysqli_fetch_array($requete)) { ?>
  <tbody>
    <tr>
                <th class="text-center" scope="row"><?php echo $row["id_employeur"]?></th>
                <td class="text-center"><a title="Editer" data-bs-toggle="tooltip" data-bs-placement="left" href="modifier.php?id=<?php echo $row['id_employeur'].'&nom='.$row['nom'].'&mail='.$row['mail'].'&objet='.$row['objet'].'&msg='.$row['msg'];?>"><i class="fas fa-user-edit"></i>&nbsp;</a><a href="modifier.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Supprimer">&nbsp;<i class="far fa-trash-alt"></i></a></td>
                <td class="text-center"><?php echo $row["nom"]?></td>
                <td class="text-center"><?php echo $row["mail"]?></td>  
                <td class="text-center"><?php echo $row["objet"]?></td>
                <td class="text-center"><?php echo $row["msg"]?></td>
         
    </tr>

    <?php } mysqli_close(bddconnect()); ?>













<?php include("../inc/footer_bo.php"); ?>
</body>
</html>