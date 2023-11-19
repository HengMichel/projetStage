<?php
include_once "inc/header.php";
include_once "inc/nav.php";
?>
<div class="presentation">
  <h1 class="titre fw-semibold mt-5">Laurent &nbsp;&nbsp;Dheilly</h1>
  <img class="logo" src="asset/photos/boulanger_de_france.png" alt="">
</div>
<!-- Début Caroussel mode auto -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="asset/photos/jour.jpg" class="d-block w-100" alt="..." />
  </div>
  <div class="carousel-item">
    <img src="asset/photos/nuit.jpg" class="d-block w-100" alt="..." />
  </div>
  <div class="carousel-item">
    <img src="asset/photos/cuisine/1699990610348.jpg" class="d-block w-100" alt="..." />
  </div>
</div>
<!-- Fin Caroussel mode auto -->

<div class="container"> 

  <div class="blocM">

    <div class="card border-dark border-3 mb-3 mt-3 container" style="max-width: 25rem;">


      <div class="card-header">
        <h4 class="card-title">Horaire</h4>
      </div>
      <div class="card-body">
        <p class="card-text">Toute l'équipe de Boulangerie-Pâtisserie Laurent Dheilly sera ravie de vous accueillir et vous faire profiter de son expertise.</p>
        
        <p class="card-text mt-3"><span class="lundi"><strong>lundi de 7h à 19h45</strong></span></p>
        <p class="card-text mt-3"><span class="mardi"><strong>mardi de 7h à 19h45</strong></span></p>
        <p class="card-text mt-3"><span class="mercredi"><strong>mercredi de 7h à 19h45</strong></span></p>
        <p class="card-text mt-3"><span class="jeudi"><strong>jeudi de 7h à 19h45</strong></span></p>
        <p class="card-text mt-3"><span class="vendredi"><strong>vendredi de 7h à 19h30</strong></span></p>
        <p class="card-text mt-3"><span class="samedi"><strong>samedi de 9h à 19h00</strong></span></p>
        <p class="card-text mt-3"><strong>dimanche</strong> <strong>FERME</strong></p>
      </div>
    </div>
    <!-- <div class="card border-dark border-3 mb-3" style="max-width: 20rem;">
      <div class="card-header">
        <h4 class="card-title">Services disponibles</h4>
      </div>
      <div class="card-body">
        <p class="card-text"></p>
        <p class="card-text"></p>
        <p class="card-text">Petit déjeuner</p>
        <p class="card-text"></p>
      </div>
    </div> -->
  
    <div class="accordion container mt-3" style="max-width: 26rem;" id="accordionExample">
      <div class="accordion-item border border-3 bg-light">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          Services disponibles
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse bg-light" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <p><strong>Achats en magasin</strong></p>
            <p><strong>Vente à emporter</strong></p> 
            <p><strong>Commande pour vos évenements & entreprise</strong> (Devis à faire sur place)</p> 
          </div>
      </div>
    </div>
    <div class="accordion-item border border border-3 bg-light">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Services de restauration
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse bg-light" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <p><strong>espace café</strong>&nbsp;&nbsp;<i class="fa-solid fa-mug-hot" style="color: #f3f4f7;"></i>&nbsp;&nbsp;</p>
        </div>
      </div>
    </div>
    <div class="accordion-item border border-3 bg-light">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Paiements
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <p class="titlePaiement"><strong>Cartes de paiement</strong></p>
          <div class="logoPaiement">
            <p><strong><i class="fa-brands fa-cc-visa" style="color: #eeeff1;"></i>&nbsp;&nbsp;<i class="fa-brands fa-cc-mastercard" style="color: #eff1f5;"></i>&nbsp;&nbsp;<i class="fa-brands fa-cc-amex" style="color: #edeff2;"></i></strong> &nbsp;&nbsp;</p>
            <img class="ticketResto" src="asset/photos/TitresRestaurants.png" alt=""> 
          </div>
        </div>
      </div>
    </div>
  
    <div class="card border-dark border-3 mb-3 mt-3 container" style="max-width: 25rem;">
        <div class="card-header">
          <h4 class="card-title">Nous contacter</h4>
        </div>
        <div class="card-body">
          <p class="card-text">Adresse: 6, rue des Halles 75001 Paris,FRANCE </p>
          <p class="card-text">Téléphone: 01 42 33 45 14</p>      
        </div>
    </div>
    <button type="button" class="btn btn-light border-3 border-secondary-subtle"><a class="avis fw-semibold" href="https://www.google.com/search?gs_ssp=eJzj4tZP1zcsyTYzi88pMmC0UjWoMDFPNTNLNUwzMDY3NrMwNLYyqEhJS7ZMtTQwM0hLtTQ1TE7xEk7KL81JzEtPLcpMVUjJSM3MyakEAPowFkU&q=boulangerie+dheilly&oq=boulan&gs_lcrp=EgZjaHJvbWUqFQgBEC4YJxivARjHARiABBiKBRiOBTIGCAAQRRg5MhUIARAuGCcYrwEYxwEYgAQYigUYjgUyEwgCEC4YgwEYxwEYsQMY0QMYgAQyEAgDEAAYgwEYsQMYgAQYigUyDQgEEAAYgwEYsQMYgAQyFggFEC4YgwEYrwEYxwEYsQMYgAQYjgUyFggGEC4YgwEYrwEYxwEYsQMYgAQYigUyBggHEAUYQNIBCDQ0MTdqMGo3qAIAsAIA&sourceid=chrome&ie=UTF-8#lrd=0x47e66e1f03736813:0xdfc9e9060fe951cd,1"><i class="fa-solid fa-arrow-right fa-beat-fade" style="color: #fafcff;"></i> Votre avis nous intéresse </a><div class="star"><i class="fa-solid fa-star fa-beat-fade" style="color: #f4ce10;"></i><i class="fa-solid fa-star fa-beat-fade" style="color: #f4ce10;"></i><i class="fa-solid fa-star fa-beat-fade" style="color: #f4ce10;"></i><i class="fa-solid fa-star fa-beat-fade" style="color: #f4ce10;"></i><i class="fa-solid fa-star fa-beat-fade" style="color: #f4ce10;"></i></div></button>
  </div>  
</div>

  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5249.831354254729!2d2.342779315466992!3d48.85981831741987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f03736813%3A0xdfc9e9060fe951cd!2sBoulangerie-P%C3%A2tisserie%20Laurent%20Dheilly!5e0!3m2!1sfr!2sfr!4v1700219544751!5m2!1sfr!2sfr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  <div class="card border-dark border-3 mb-3 mt-2" style="max-width: 90rem;">
    <div class="card-header">Actualité</div>
    <div class="card-body">
      <h4 class="card-title">L'avis du Petit Futé sur LAURENT DHEILLY</h4>
      <p class="card-text"> 

Une belle boulangerie datant de 1900 où Laurent Dheilly exerce en maître de la baguette de tradition, croustillante juste ce qu’il faut avec une belle mie, bien serrée. Dans ce quartier qui bouge toute la journée et à la demande de ses clients, il a mis l’accent sur la pâtisserie et la petite restauration (belle variété de quiches, pizzas, friands, croque-monsieur, saucisse briochée et toute une gamme de sandwiches). D’excellents macarons et un superbe éclair à la pistache réjouissent les gourmands et les gourmandes.</p>
    </div>
  </div>
  


</div>
    <!-- <div class="g-recaptcha" data-sitekey="VOTRE_CLE_RECAPTCHA"></div> -->
<?php
include_once "inc/footer.php";
?>
