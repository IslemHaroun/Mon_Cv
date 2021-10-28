<?php

require_once("inc/function.php");

$connect = bddconnect();

$nom = rsql("nom");
$email= rsql("mail");
$subject = rsql("objet");
$message = rsql("msg");
$send = recup("envoyer");

if($send && $email && $subject && $message && $send){ 

    $requete = mysqli_query(bddconnect(),"INSERT INTO employeur VALUES (NULL,'$nom','$email','$subject','$message');"); 
    
    header("location:envoiok.php");
}





?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Cv Islem-Haroun &copy; 2021</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="images/favi1.png">
    <!--Police roboto-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="cv.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">



</head>
<body>


<!-- Barre de navigation -->

<nav class="media navbar navbar-expand-lg navbar-light bg-light " id="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="images/logo_islem_haroun.png" alt="logo IH" data-bs-toggle="tooltip" data-bs-placement="left" title="Islem Haroun" class="w-25"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
                     <li class="nav-item">
                     <a class=" nav-link active" aria-current="page" href="index.html" data-bs-toggle="tooltip" data-bs-placement="left"  title="Home"><i class="fas fa-home"></i></a>
                     </li>
                     <li class="bord nav-item">
                     <a class="nav-link" href="#prop">À PROPOS&nbsp;</a>
                     </li>
                     <li class="bord1 nav-item">
                     <a class="nav-link" href="#comp">COMPÉTENCES&nbsp;</a>
                     </li>
                     <li class="bord2 nav-item">
                     <a class="nav-link" href="#contact">CONTACT&nbsp;</a>
                    </li>
                    <li class="btnadmin nav-item">
                     <a class="nav-link" href="backoffice/index.php"><i class="fas fa-user-cog"></i>&nbsp;</a>
                    </li>
      </ul>
      </ul>
    </div>
  </div>
</nav>


<div class="linear-gradient "> 
    

    <div class="row container-fluid ">
        
        <h3 class="ih h3  text-center" data-aos="fade-down" data-aos-duration="2000">Islem HAROUN</h3>
    
    
        <h2 class="candidature h2 text-center">Candidature pour un stage de développeur web</h2>
    
        
    </div>
    <a href="#prop" class="bouton" >En savoir plus</a>
    

</div>

<!-- à propos -->
<div class="container-fluid bg-light  " id="prop">


            <div class="row" >
                <h3 class="titre h3 text-center mt-5" >À PROPOS</h3>
                <legend class="titre1 text-center">En quelques mots...</legend>
             </div>
<div class="container" ><hr></div>
             <div class="container mt-5">
                <div class="row">
                  <div class="modifcarte col-6" data-aos="zoom-out-up">
                    <div class="carte card" style="width: 18rem;"  >
                        <img src="images/snap_emote.png" class="carte1 card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">
                            <span class="gras">Nom&nbsp;:&nbsp;</span>Islem HAROUN<br>
                            <span class="gras">Âge&nbsp;:&nbsp;</span>27 ans<br>
                            <span class="gras">Ville actuelle&nbsp;:&nbsp;</span>Rosny-sur-Seine, île-de-France<br>
                            <span class="gras">E-mail&nbsp;:&nbsp;</span>islemharoun@gmail.com<br>
                            <a href="#contact" class="bouton2" >Me Contacter</a>
                        </p>
                        </div>
                      </div>
                  </div>

                  <div class="resp col-md-6" data-aos="fade-left" data-aos-duration="1000">
                      <p>J’ai toujours été attiré par l'informatique. En effet, ce domaine m’intéresse depuis très longtemps, ce qui m’a d’ailleurs permis d’y toucher un peu, partout où je suis passé, même si il n’a pas toujours été l’objet central de mon projet professionnel.
                        Aujourd’hui les choses ont changé et tout est clair pour moi, c’est pourquoi je suis la formation de développeur web & web mobile chez ALT-RH consulting qui correspond à un niveau de BAC+2. Mon principal objectif aujourd’hui est ainsi d’apprendre autant dans le front-end que dans le back-end. </p>
                
                         <p>Dynamique et autonome, je sais également m’adapter en travaillant en groupe, et/ou dans un environnement qui m’est inconnu.</p>
                         <p>J’apprends actuellement diverses technologies. Je sais en outre manier plusieurs outils tels que HTML5 & CSS3, les langages de programmation Javascript et PHP, MySQL ou encore les CMS comme Wordpress.</p>
                         <p>Veuillez, trouver ci-dessous un lien permettant de télécharger mon cv.</p>
                         <a href="cv_pdf/cv_islem_haroun.pdf" target="_blank" class="bouton3"><i class="fas fa-file-download"></i>&nbsp;&nbsp;Télécharger</a>
                        </div>

    
</div>
             





</div>



<!-- fin -->

<!-- Mes compétences -->
<div class="container-fluid " id="comp">
    <div class="row">
        <h3 class="titre h3 text-center mt-5">Compétences</h3>
        <legend class="titre1 text-center">Ce que j'apprends pendant mon parcours</legend>
    </div>
    <div class="container "><hr></div>

        <div class="respcomp container d-flex justify-content-lg-between mt-5  global" data-aos="zoom-in" data-aos-duration="2000" >

            <div class="carre">
                <div class="front text-center"><i class="fas fa-pencil-ruler"></i>&nbsp;&nbsp;Front-end</div>
                <div>
                    <ul class="competences text-center mt-4 m-auto">
                        <li class="centreli">HTML/CSS</li>
                        <li class="centreli">JQuery</li>
                        <li class="centreli">JavaScript</li>
                        <li class="centreli">Bootstrap</li>
                    </ul>
                </div>
            
            </div>


            

                <div class="carre1">
                    <div class="back text-center "><i class="fas fa-hdd"></i>&nbsp;&nbsp;Back-end</div>
                    <div>
                        <ul class="competences mt-4 m-auto text-center ">
                            <li class="centreli">PHP/MYSQL</li>
                            <li class="centreli">Ajax</li>
                            <li class="centreli">Symfony</li>
                            
                        </ul>
                    </div>
                </div>
                
               


                

                    <div class="carre" >
                        <div class="front text-center "><i class="fas fa-plus"></i>&nbsp;&nbsp;Extra</div>
                        <div>
                            <ul class="competences m-auto mt-4 text-center">
                                <li class="centreli">GIT</li>
                                <li class="centreli">Linux</li>
                                <li class="centreli">Ubuntu</li>
                                
                                
                            </ul>
                        </div>
                    </div>


                </div>


</div>




<!-- fin -->

<!-- Mes réalisations -->

<div class="container-fluid bg-light mt-5">
    <div class="row">
        <h3 class="titre h3 text-center">Mes réalisations</h3>
        <legend class="titre1 text-center">Les derniers sites que j'ai développés.</legend>
    </div>
    <div class="container"><hr></div>
    <p class="realisation container text-center mt-5">Le site Web sur lequel vous êtes entrain de naviguer est l'une de mes réalisations, aussi j'ai un projet personnel e-commerce en cours de développement.</p>
</div>



<!-- Contact -->

<div class="container-fluid bg-light">
    <div class="row">
        <h3 class="titre h3 text-center" id="contact">Contact</h3>
        <legend class="titre1 text-center">Me contacter...</legend>
        

    </div>

</div>



<div class="container "><hr></div>
    <div class="container mt-5"> 
    <div class="row">
    <!-- LOGOS --> 
    <div class=" col-md-4 " data-aos="fade-up" data-aos-duration="2000">
        <div>
                <h4 class="coorform h4">Mes coordonnées</h4>
        </div>

       <div class="pourmail mt-5">
           <a href="https://www.linkedin.com/in/islem-haroun-b3b408159/" target="_blank" class="mailandlink"><i class="mt-3 fab fa-linkedin-in fa-4x"></i></a>
           <a href="mailto:islemharoun@gmail.com?subject=Proposition de stage" class="mailandlink "><i class="mt-3 fas fa-envelope fa-4x"></i></a>
        </div>
       

    </div>
    <!-- formulaire -->

 <div class="col-md-8 mt-3" data-aos="fade-left" data-aos-duration="2000">

        <form  method="POST" class="formulaire w-50  justify-content-start" action="index.php">
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" placeholder="Votre nom" name="nom">
          </div>
        <div class="mb-3">
            <label for="mail" class="form-label">Adresse e-mail</label>
            <input type="email" class="form-control" id="mail" placeholder="adresse@exemple.com" name="mail">
          </div>
          <div class="mb-3">
            <label for="objet" class="form-label">Objet</label>
            <input type="text" class="form-control" id="objet" placeholder="Ex: Proposition de stage" name="objet">
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" rows="3" name="msg"></textarea>
          </div>
          <div class="m-b3">
            <button  type="submit" name="envoyer" value="envoyer" class="btn btn-xl btn-primary">Envoyer</button>
          </div>
        </form>



    </div>

    
    
    
    </div>
    
    </div>
    


<!--Pied de page-->

<footer class="media2 container-fluid bg-light mt-5  pt-3 ">

    <div class="linkex container"> 
        <div class="mb-3">
             <a class="linkex1" href="https://www.linkedin.com/in/islem-haroun-b3b408159/" target="_blank" data-bs-toggle="tooltip" data-bs-placement="left" title="Acceder à mon Linkdin"><i class="fab fa-linkedin fa-2x "></i></a>
             <a class="linkex2" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Acceder à mon Github"><i class="fab fa-git-square fa-2x"></i></a>
             <a class="linkex3" href="cv_pdf/cv_islem_haroun.pdf" target="_blank" data-bs-toggle="tooltip" data-bs-placement="right" title="Télécharger mon cv"><i class="far fa-file-pdf fa-2x"></i></i></a>
        </div>
            <div class="linesep">
                <p>Islem HAROUN &copy; <?php echo $date= date("Y"); ?></p>
                <P>Tous droits réservés</P>
         </div>
    </div>


</footer>


<div id="scrollUp">
    <a href="#top"><i class="pullup fas fa-chevron-up fa-3x"></i></i></a>
    </div>




    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script> <!-- utilisation Jquery-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="cv.js"></script>
</body>
</html>