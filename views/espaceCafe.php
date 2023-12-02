<?php
include_once "inc/header.php";
require_once "inc/nav.php";
?>
<!--------------------------- format PC ----------------------->
<div class="container2 column-gap-md-2">
  <h1 class="espaceCafe fw-semibold mt-5 text-center">Notre espace Café</h1>
  <div class="section1 d-flex">

    <div class="card mt-5 border border-2 m-1" style="width: 90rem;">
      <img src="asset/photos/espaceCafe/espaceCafe.jpg" class="card-img-top" alt="...">
      <div class="card-body bg-secondary">
        <p class="card-text text-center">Notre machine à café multi-boisson</p>
      </div>
    </div>
    <div class="card mt-5 border border-2 m-1" style="width: 90rem;">
      <img src="asset/photos/espaceCafe/espaceCafe2.jpg" class="card-img-top" alt="...">
      <div class="card-body bg-secondary">
        <p class="card-text text-center">la pause café</p>
      </div>
    </div>
   
    <div class="card mt-5 border border-2 m-1" style="width: 90rem;">
      <img src="asset/photos/espaceCafe/espaceCafe3.jpg" class="card-img-top" alt="...">
      <div class="card-body bg-secondary">
        <p class="card-text text-center">la pause café</p>
      </div>
    </div>
    <!-- <div class="card mt-5 border border-2 m-1" style="width: 90rem;">
      <img src="asset/photos/pains/baguette.jpg" class="card-img-top" alt="...">
      <div class="card-body bg-secondary">
        <p class="card-text text-center">Baguette</p>
      </div>
    </div> -->
  </div>
</div>

 


<!------------------------ format tablette ----------------------->
<!-- conserver ce format une image par section  -->

<div class="container3 column-gap-md-2">
  <h1 class="espaceCafe fw-semibold mt-5 text-center">Notre espace Café</h1>
  <div class="section1 d-flex">
    <div class="card mt-5 border border-2 m-1" style="width: 90rem;">
      <img src="asset/photos/espaceCafe/espaceCafe.jpg" class="card-img-top" alt="...">
      <div class="card-body bg-secondary">
        <p class="card-text text-center">Notre machine à café multi-boisson</p>
      </div>
    </div>
  </div>
  <div class="section2 d-flex">
    <div class="card mt-5 border border-2 m-1" style="width: 90rem;">
      <img src="asset/photos/espaceCafe/espaceCafe2.jpg" class="card-img-top" alt="...">
      <div class="card-body bg-secondary">
          <p class="card-text text-center">la pause café</p>
      </div>
    </div>
  </div> 
  <div class="section3 d-flex">
    <div class="card mt-5 border border-2 m-1" style="width: 90rem;">
      <img src="asset/photos/espaceCafe/espaceCafe3.jpg" class="card-img-top" alt="...">
      <div class="card-body bg-secondary">
          <p class="card-text text-center">la pause café</p>
      </div>
    </div>
  </div> 
</div>

<!-------------------------- format smartphone --------------->

<div class="container4">
    <h1 class="espaceCafe fw-semibold mt-5 text-center">Notre espace Café</h1>
    <div id="carouselExampleCaptions" class="carousel slide mt-5">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner active"> 
      <div class="carousel-item">
        <img src="asset/photos/espaceCafe/espaceCafe.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-md-block form-select-lg sticky-top col-3 container">
          <h5>Notre machine à café</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="asset/photos/espaceCafe/espaceCafe2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-md-block form-select-lg sticky-top col-3 container">
          <h5>la pause café</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="asset/photos/espaceCafe/espaceCafe3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-md-block form-select-lg sticky-top col-3 container">
          <h5>la pause café</h5>
        </div>
      </div>
      <!-- <div class="carousel-item">
        <img src="asset/photos/pains/baguette.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-md-block form-select-lg sticky-top col-3 container">
          <h5>Baguette</h5>
        </div>
      </div> -->
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bg-primary" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon bg-primary" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
<?php
include_once "inc/footer.php";
?>