// initialisation des effets des la pages aos
AOS.init();

// Configuation des titre bootstrap
var tooltipTriggerList = [].slice.call(
  document.querySelectorAll('[data-bs-toggle="tooltip"]')
);
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl);
});

// Défilement de la barre de navigations
// checkposition de du scroll
window.addEventListener("scroll", function (e) {
  this.console.log(document.documentElement.scrollTop);
});

window.onscroll = function () {
  if (document.documentElement.scrollTop > 80) {
    document.getElementsByClassName("media").style.background = "green";
  }
};

// Bouton pour remonter en haut de la page

jQuery(function () {
  $(function () {
    $(window).scroll(function () {
      //Fonction appelée quand on descend la page
      if ($(this).scrollTop() > 600) {
        // Quand on est à 200pixels du haut de page,
        $("#scrollUp").css("right", "30px"); // Replace à 10pixels de la droite l'image
      } else {
        $("#scrollUp").removeAttr("style"); // Enlève les attributs CSS affectés par javascript
      }
    });
  });
});
