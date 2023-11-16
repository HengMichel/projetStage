<?php
include_once "../public/header.php";
include_once "../public/nav.php";
?>

<div class="container">
    <div class="presentation d-flex justify-content-evenly">
        <h1 class="titre fw-semibold text-center mt-5">Laurent<span class="espace"></span>&nbsp;&nbsp;Dheilly</h1>
        <img class="logo" src="../public/asset/photos/boulanger_de_france.png" alt="">
    </div>
    <!-- Caroussel mode auto avec inteval de 3 secondes -->
    <div id="michelCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/" class="d-block w-100" alt="..." />
          </div>
          <div class="carousel-item">
            <img src="img" class="d-block w-100" alt="..." />
          </div>
          <div class="carousel-item">
            <img src="img" class="d-block w-100" alt="..." />
          </div>
        </div>
    </div>
    <!-- Fin Caroussel mode auto -->
    <section> 
    
        <!-- formulaire PHP si j'utilise recaptcha/api -->
        <!-- <form action="commentaire.php" method="post">
            <label for="comment">Commentaire :</label>
            <textarea id="comment" name="comment" rows="4" cols="50"></textarea> -->
            
            <!-- Utilisez des champs cachés pour envoyer les informations de l'utilisateur -->
            <!-- <input type="hidden" name="userName" value="nom_utilisateur">
            <input type="hidden" name="userEmail" value="email_utilisateur">
            <input type="submit" value="Soumettre le commentaire">
        </form> -->
    </section>
    
</div>

    <!-- <div class="g-recaptcha" data-sitekey="VOTRE_CLE_RECAPTCHA"></div> -->
<?php
include_once "../public/footer.php";
?>
