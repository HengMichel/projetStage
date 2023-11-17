// **************** function for recaptcha/api
// function onSignIn(googleUser) {
//     var profile = googleUser.getBasicProfile();
//     var userName = profile.getName();
//     var userEmail = profile.getEmail();
// }

// $("#toggleButton").click(function () {
//   console.log("clic ok");
//     $(".myDiv").slideToggle();
//   });

const myCarouselElement = document.querySelector("#michelCarousel")

const carousel = new bootstrap.Carousel(myCarouselElement, {
  interval: 3000,
  touch: false
})
