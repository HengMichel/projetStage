// **************** function for recaptcha/api
// function onSignIn(googleUser) {
//     var profile = googleUser.getBasicProfile();
//     var userName = profile.getName();
//     var userEmail = profile.getEmail();
// }

const myCarouselElement = document.querySelector("#michelCarousel")

const carousel = new bootstrap.Carousel(myCarouselElement, {
  interval: 3000,
  touch: false
})

// Fonction pour incrémenter le nombre de vues
function incrementViews() {
  if (typeof(Storage) !== "undefined") {
      var views = localStorage.getItem("views") || 0;
      views++;
      localStorage.setItem("views", views);

      // Ajoute des logs pour vérification
      console.log("Nombre de vues incrémenté : " + views);

      // Met à jour le contenu de l'élément HTML avec le nombre de vues actuel
      updateViewCount(views);
  }
}

// Appele la fonction chaque fois que la page est chargée
incrementViews();

// Fonction pour mettre à jour le contenu de l'élément HTML avec le nombre de vues actuel
function updateViewCount(views) {
  // Affiche le nombre de vues actuel
  if (typeof(Storage) !== "undefined") {
    document.getElementById("viewCount").innerHTML = views;
  }
}

// Récupère le nombre de vues actuel et met à jour le contenu de l'élément HTML
var currentViews = localStorage.getItem("views") || 0;
updateViewCount(currentViews);